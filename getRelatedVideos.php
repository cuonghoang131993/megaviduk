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

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    
    $res = $videoController->findRelatedVideosById('');

    if ($res !== null) {
      foreach ($res as $item) {
        $response[] = new Video(
          $item->id,
          $item->title,
          $item->description
        );
      }

      foreach ($response as $item) {
        echo '<div class="carousel-item px-4">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark(\'' . $item->id . '\');" id="bookmarkSetter-' . $item->id . '" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage.php?v=' . $item->id . '">
                <div class="youtube" data-embed="' . $item->id . '"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:42</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage.php?v=' . $item->id . '">' . $item->title . '</a>
                  </h4>
                  <input type="hidden" value="101.20" name="' . $item->id . '">
                  <a class="btn btn-default  orange" id="btn-' . $item->id . '" href="./footage.php?v=' . $item->id . '" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>
              </div>
              </div>';
      }
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
