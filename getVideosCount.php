<?php
require_once('api/DI/Container.php');
require_once('api/controllers/VideoController.php');
require_once('api/services/VideoService.php');
require_once('api/repositories/VideoRepository.php');
require_once('api/infrastructures/db/Database.php');
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

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Access the data
  $cat = $_POST['cat'] ?? '';
  $sort = $_POST['sort'] ?? '';

  echo $videoController->countByParams($cat, $sort);
}
?>