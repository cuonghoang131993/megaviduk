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
  // Access the data
  $cat = $_POST['cat'] ?? '';
  $sort = $_POST['sort'] ?? '';
  $minIndex = $_POST['minIndex'];
  $maxIndex = $_POST['maxIndex'];

  try {
    $res = $videoController->findByParams($cat, $sort, $minIndex, $maxIndex);

    if ($res !== null) {
      foreach ($res as $item) {
        $response[] = new Video(
          $item->id,
          $item->title,
          $item->description
        );
      }
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
?>

<?php
foreach ($response as $item) {
  echo '<div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark(\'' . $item->id . '\');" id="bookmarkSetter-' . $item->id . '" style="cursor:pointer;"><i style="font-size:24px;color:rgb(0, 87, 255);" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-' . $item->id . '"  href="./footage.php?v=' . $item->id . '">
                <div class="youtube" data-embed="' . $item->id . '"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:38</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:rgb(0, 87, 255) !important;" id="titleLink-' . $item->id . '" class="videoInfoLink" href="./footage.php?v=' . $item->id . '">' . $item->title . '</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">' . $item->description . '<a class="videoInfoLink" id="videoMoreLink-' . $item->id . '" href="./footage.php?v=' . $item->id . '">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="169.74" name="' . $item->id . '">
                <a class="btn btn-default sr-button orange" id="btn-' . $item->id . '" href="./footage.php?v=' . $item->id . '" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>';
}
?>
