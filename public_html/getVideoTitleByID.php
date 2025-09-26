<?php

require_once('api/DI/Container.php');
require_once('api/controllers/VideoController.php');
require_once('api/services/VideoService.php');
require_once('api/repositories/VideoRepository.php');
require_once('api/infrastructures/db/Database.php');
require_once('api/entities/VideoDAO.php');
require_once('models/video.php');

$container = new Container();
// Register a simple service (class name)
$container->register('DatabaseConnection', function () {
  $c = include 'api/infrastructures/config/database.php';
  return new DatabaseConnection("mysql:host=" . $c['host'] . ";dbname=" . $c['database'] . ";charset=" . $c['charset']);
});
// Register a service with a dependency
$container->register('VideoRepository', VideoRepository::class);
$container->register('VideoService', VideoService::class);
$container->register('VideoController', VideoController::class);

// Resolve and use the service
$videoController = $container->get('VideoController');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access the data
    $ytid = $_POST['ytid'] ?? '';
    
    try {
        $res = $videoController->findById($ytid);

        $video = new Video(
          $res->id,
          $res->title,
          $res->description
        ); 
        
        $template = '<a href="./footage.php?v='. $video->id .'" ><table id="tab-'. $video->id .'" class="tab-'. $video->id .' text-center"><tr><td style="padding-left: 5px;"><img src="https://img.youtube.com/vi/'. $video->id .'/mqdefault.jpg" width=120 alt="click here to see more"></td></tr><tr><td style="vertical-align: middle;"><p>'. $video->title .'</p></td></tr></table></a>';

        echo $template;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
