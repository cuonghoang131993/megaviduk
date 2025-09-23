<?php
ini_set("session.cookie_httponly", True);
session_start();

require_once('api/DI/Container.php');
require_once('api/controllers/CartController.php');
require_once('api/controllers/UserController.php');
require_once('api/services/UserService.php');
require_once('api/repositories/UserRepository.php');
require_once('api/infrastructures/db/Database.php');
require_once('api/utils/PriceUtils.php');

$container = new Container();
// Register a simple service (class name)
$container->register('DatabaseConnection', function () {
    $c = include 'api/infrastructures/config/database.php';
    return new DatabaseConnection("mysql:host=" . $c['host'] . ";dbname=" . $c['database'] . ";charset=" . $c['charset']);
});
// Register a service with a dependency
$container->register('UserRepository', UserRepository::class);
$container->register('UserService', UserService::class);
$container->register('UserController', UserController::class);
$container->register('CartController', CartController::class);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="License this video from €50.00 at Megavid. Copyrights cleared by and licensable from Megavid for all media. Exact prices and value-added taxes depend on your location.">
    <meta name="keywords" content="toprange, TR, content ID, CID, Extreme Moments Caught On Camera, Close Calls, megavid, video licensing, license videos, viral video licensing, buy videos, sell videos, trending videos, viral videos, clear copyright">

    <title>CLOSE CALL: Huge Landslide Makes Spectators Run For Their Lives In Nepal | Megavid</title>


    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-111945145-1', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="./vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/creative.css">
    <link rel="stylesheet" href="css/own.css">

    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css">

    <style>
      .tooltip-inner {
        font-size: 16px;
        }
        .tooltip-inner li{
            padding-bottom:0.5em;
        }

        .tooltip-inner li ul{
          position: relative;
          list-style: none;
        }

        .tooltip-inner li ul li:before{
            content: '>';
            position: absolute;
            left: 0;
          }

        .tooltip-inner ul{
            padding-bottom:0.5em;
        }

    </style>

<style>
    .qtip-youtube .qtip-content{
        padding: 0;
    }
    .row.equal {
display: flex;
flex-wrap: wrap;
}
</style>
    <style type="text/css">
    .slider {
        width: 100%;
        margin: auto;
        margin-bottom: 1em;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-list {
      width: calc(80% + 67px);
      margin: auto;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: 1;
    }

    .slick-current {
      opacity: 1;
    }


.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(25%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-25%);
}
  
.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
  
}
 
 #share-buttons img {
 width: 35px;
 padding: 5px;
 border: 0;
 box-shadow: 0;
 display: inline;
 }

.tooltip-inner {
  max-width: 400px;
}
  
 .videoDetailContainer{
  margin-top:93px;
  padding-left:32px;
  padding-right:32px;
 }

  .videoDetailVideoRow{
    padding:15px;
    padding-top: 72px; 
    padding-bottom:40px;
  }
  .videoDetailLicenseRow{
    padding-top:72px;
    padding-right: 15px;
    padding-left:17px;
  }
    </style>

        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>

  </head>

  <body id="page-top" style="background-color:#EAE9E9;">
    <?php
      include_once('components/header.php');
    ?>

<div class="container-fluid videoDetailContainer" >
  <div class="row">
    <div class="col-lg-7" >
    <div class="row videoDetailVideoRow">
          <div class="card" style="width: 100%;border-top:0;">
            <div class="card-body" style="padding-top:6px;">
    <div class="row" style="margin:auto;">
    <div class="col-5 d-none d-lg-block" style="padding:0;padding-top: 5px;">
      <a href="./videos.php" style="font-size:large; color:black;"><b><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;To Video Library</b></a>
    </div>
    <div class="col-5 d-block d-lg-none" style="padding:0;">
      <a id="scrollLicenseDetailsBtn" style="cursor:pointer;"><b><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i></b></a>
    </div>


    <div class="col-2 text-center" style="padding:0;">
       <a onclick="setBookmark();" id="bookmarkSetter" style="cursor:pointer;"><i class="fa fa-2x fa-bookmark-o" ></i></a>
    </div>

    <div class="modal" id="shareModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Share this site</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="input-group">
                    <input class="form-control" type="text" value="megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>" id="shareLink" readonly>
                    <button class="btn btn-outline-secondary" type="button" onclick="copyShareLink();">Copy</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <div class="col-5 d-block d-md-none d-shareBetween-block" style="padding:0;">
      <div style="float: right;">

          <div class="dropleft">
            <a title="Share this site" style="cursor:pointer;" data-toggle="dropdown">
              <i style="color:rgb(0, 87, 255);" class="fa fa-2x fa-share-alt"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a title="Share this site on Facebook" href="https://www.facebook.com/sharer/sharer?u=https%3A%2F%2Fmegavid.uk%2Ffootage%3Fv%<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>" target="_blank"><i style="color:#3b5998;" class="fa fa-2x fa-facebook-official"></i></a>
              <a title="Share this site on Twitter" href="https://twitter.com/intent/tweet?text=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>&amp;hashtags=viral,videos&amp;rel=megaviduk" target="_blank"><i style="color:#1da1f2;" class="fa fa-2x fa-twitter"></i></a> 
              <a title="Share this site via Mail" href="mailto:?&amp;subject=Video Recommendation on megaviduk&amp;body=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>"><i style="color:grey;" class="fa fa-2x fa-envelope"></i></a>
              <a title="Share this site on WhatsApp" target="_blank" href="https://api.whatsapp.com/send?text=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>"><i style="color:#075e54;" class="fa fa-2x fa-whatsapp"></i></a>
              <a title="Share this site on VK" target="_blank" href="https://vk.com/share?url={https://megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>}&title={Video%20Recommendation%20on%20MegaVidUK}&description={I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK}"><i style="color:#45668e;" class="fa fa-2x fa-vk"></i></a>

              <a title="Share this site" data-toggle="modal" data-target="#shareModal" style="cursor:pointer;">
                <i style="color:rgb(0, 87, 255);" class="fa fa-2x fa-share-alt"></i>
              </a>
            </div>
          </div>
      </div>
    </div>

    <div class="col-5 d-none d-md-block d-shareBetween-none" style="padding:0;">
      <div style="float: right;">
        <a title="Share this site on Facebook" href="https://www.facebook.com/sharer/sharer?u=https%3A%2F%2Fmegavid.uk%2Ffootage%3Fv%<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>" target="_blank"><i style="color:#3b5998;" class="fa fa-2x fa-facebook-official"></i></a>
        <a title="Share this site on Twitter" href="https://twitter.com/intent/tweet?text=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>&amp;hashtags=viral,videos&amp;rel=megaviduk" target="_blank"><i style="color:#1da1f2;" class="fa fa-2x fa-twitter"></i></a> 
        <a title="Share this site via Mail" href="mailto:?&amp;subject=Video Recommendation on megaviduk&amp;body=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>"><i style="color:grey;" class="fa fa-2x fa-envelope"></i></a>
        <a title="Share this site on WhatsApp" target="_blank" href="https://api.whatsapp.com/send?text=I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK%20https%3A//megavid.uk/footage?v<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>"><i style="color:#075e54;" class="fa fa-2x fa-whatsapp"></i></a>
        <a title="Share this site on VK" target="_blank" href="https://vk.com/share?url={https://megavid.uk/footage?v=<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>}&title={Video%20Recommendation%20on%20MegaVidUK}&description={I%20want%20to%20recommend%20this%20video%20at%20MegaVidUK}"><i style="color:#45668e;" class="fa fa-2x fa-vk"></i></a>

          <a title="Share this site" data-toggle="modal" data-target="#shareModal" style="cursor:pointer;">
          <i style="color:rgb(0, 87, 255);" class="fa fa-2x fa-share-alt"></i>
          </a>
      </div>
    </div>

    </div>

        <!-- Videodetails -->
        <div class="row">
        <div class="col">

        <div id="videoContainer" style="position:relative;width:100%;padding-bottom:56%;">
        <div id="videoElement" style="  position:absolute;width:100%;height:100%;">
        <iframe  style="margin:auto;width:100%;height:100%"
          src="https://www.youtube.com/embed/<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>?rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;autoplay=1" allowfullscreen>
        </iframe>
        </div>
        </div>


        </div>
        </div>


            <h5 style="padding-top:1rem;padding-bottom:1rem;"><b>CLOSE CALL: Huge Landslide Makes Spectators Run For Their Lives In Nepal</b></h5>
              <div class="row text-center">
                <div class="col">
                  <a style="cursor:pointer;" id="showMoreDropdown" class="dropdown-toggle d-block d-md-none collapsed" data-toggle="collapse" data-target="#videoDetailsCollapse"></a>
                </div>
              </div>
              <div class="d-block d-md-none">
              <div id="videoDetailsCollapse" class="collapse">
                <p class="card-text">During this lake tour, the mountains started to collapse and numerous rocks came flying down the hill where the tourists were. They tried their best to evacuate in time, but it’s unclear how many people might’ve gotten injured. This unexpected event happened on July 29th, 2020 in Bharatpur, Nepal.</p>
                <div class="row">
                  <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Location</b>
                    <p class="card-text">Bharatpur, Nepal</p>
                  </div>
                  <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Resolution</b>
                    <p class="card-text">HD</p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Submitted</b>
                    <p class="card-text">09. December 2021</p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Published</b>
                    <p class="card-text">29. July 2020</p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Categories</b>
                    <p class="card-text">Extreme Moments Caught On Camera, Close Calls, Crazy, Natural Disasters</p>
                    </div>

                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Item ID</b>
                    <p class="card-text"><?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?></p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Views</b>
                    <p class="card-text">8.541.983 <i class="fa fa-info-circle" data-toggle="tooltip" data-trigger="click" title="Statistics based on all versions of the video connected to www.megavid.uk"></i></p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                    <b>Rating</b>
                    <p class="card-text">
                    <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>                    </p>
                    </p>
                    </div>
                    <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                  <b>Author</b>
                  <p class="card-text">Mukti K.</p>
                  </div>
                  <div class="col-sm-4 col-6" style="padding-top:0.5em;">
                  <b>Copyrights</b>
                  <p class="card-text">Cleared by Megavid <i class="fa fa-info-circle" data-toggle="tooltip" data-trigger="click" data-html ="true" title='Copyrights cleared by and licensable from Megavid for all media. Potentially depicted trademarks, protected symbols, privileged / confidential information, personally identifiable information and embodied music tracks are not covered by the <a href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a> and may require to get blurred / removed unless usage is permitted by law. – Questions? Get in touch: <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a>.'></i></p>
                  </div>
                </div>
              </div>
              </div>

              <div class="d-none d-md-block">
                <p class="card-text">During this lake tour, the mountains started to collapse and numerous rocks came flying down the hill where the tourists were. They tried their best to evacuate in time, but it’s unclear how many people might’ve gotten injured. This unexpected event happened on July 29th, 2020 in Bharatpur, Nepal.</p>
                <table style="width:100%">
                <tr>
                  <td style="width:20%"> 
                    <b>Location</b>
                    <p class="card-text">Bharatpur, Nepal</p>
                  </td>
                  <td style="width:20%">
                    <b>Resolution</b>
                    <p class="card-text">HD</p>
                  </td>
                  <td style="width:20%">
                    <b>Submitted</b>
                    <p class="card-text">09. December 2021</p>
                  </td>
                  <td style="width:20%">
                    <b>Published</b>
                    <p class="card-text">29. July 2020</p>
                  </td>
                  <td style="width:20%">
                    <b>Categories</b>
                    <p class="card-text">Extreme Moments Caught On Camera, Close Calls, Crazy, Natural Disasters</p>
                  </td>
                </tr>
                <tr>
                  <td style="padding-top:1rem;">
                    <b>Item ID</b>
                    <p class="card-text"><?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?></p>
                  </td>
                  <td style="padding-top:1rem;">
                    <b>Views</b>
                    <p class="card-text">8.541.983 <i class="fa fa-info-circle" data-toggle="tooltip" data-trigger="click" title="Statistics based on all versions of the video connected to www.megavid.uk"></i></p>
                  </td>
                  <td style="padding-top:1rem;">
                    <b>Rating</b>
                    <p class="card-text">
                    <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>                    </p>
                    </p>
                  </td>
                  <td style="padding-top:1rem;">
                  <b>Author</b>
                  <p class="card-text">Mukti K.</p>
                  </td>
                  <td style="padding-top:1rem;">
                  <b>Copyrights</b>
                  <p class="card-text">Cleared by Megavid <i class="fa fa-info-circle" data-toggle="tooltip" data-trigger="click" data-html ="true" title='Copyrights cleared by and licensable from Megavid for all media. Potentially depicted trademarks, protected symbols, privileged / confidential information, personally identifiable information and embodied music tracks are not covered by the <a href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a> and may require to get blurred / removed unless usage is permitted by law. – Questions? Get in touch: <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a>.'></i></p>
                  </td>
                </tr>
                </table>
              </div>

            </div>
          </div>
        </div>


    </div>

    <div class="col-lg-5">

    <div class="row videoDetailLicenseRow">
              <app-license-details class="w-100" german-user="false" buyable="1" user-logged-in="false" author-name="Mukti K." video-id="<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>" video-name="CLOSE CALL: Huge Landslide Makes Spectators Run For Their Lives In Nepal"></app-license-details>
        </div>

    </div>
    </div>
    


<div class="row" style="margin-left:-32px; margin-right:-32px;margin-top:2rem;padding-bottom:88px;background-color:rgb(0, 87, 255);">
<div class="col" style="padding-left:32px;padding-right:32px;">

        <h5 style="margin:2em auto 2em 21px; width:80%;"><b>Similar Videos</b></h5>

        <?php
        include_once('models/video.php');

          $similarVideos = [];
          $similarVideos[] = new Video("oH7gECQ0ZPc", "Crazy Landslide Crashes into Power Line Causing an Explosion", "");
        ?>

 <div class="slider regular"> 
  <?php
  foreach($similarVideos as $item) {
    echo '<div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark(\''. $item->id .'\');" id="bookmarkSetter-'. $item->id .'" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage.php?v='. $item->id .'">
                <div class="youtube" data-embed="'. $item->id .'"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:42</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage.php?v='. $item->id .'">'. $item->title .'</a>
                  </h4>
                  <input type="hidden" value="101.20" name="'. $item->id .'">
                  <a class="btn btn-default  orange" id="btn-'. $item->id .'" href="./footage.php?v='. $item->id .'" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>
              </div>
              </div>';
  }
  ?>
</div>
    </div>
    </div>

</div>

    
<div class="modal fade newsletter-modal" tabindex="-1" role="dialog" aria-labelledby="NewsletterModal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content ">
    <div class="modal-header card-header" style="margin-bottom:1rem;">
              <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>Newsletter</span></h3>
              <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              </div>

      <div class="container" style="padding:2rem;padding-top:0;">
 
    <form id="newsletter-form" class="text-left" action="" method="post">
            <div class="login-form-main-message"></div>
            Subscribe to our newsletter and receive the latest announcements and updates about us, our services, and more!

			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="mail" class="sr-only">Email</label>
						<input type="email" class="form-control" name="newsletteremail" id="newsletteremail" placeholder="Email" oninvalid="this.setCustomValidity('Enter a valid email address')" required>
					</div>
				</div>
				<div class="text-center">
				<button type="submit" class="btn orange" name="newslettersub">Subscribe</button>
			</div>
			</div>
		</form>
		

    </div>
  </div>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Modal -->
    <div class="modal fade" id="CModal" tabindex="-1" role="dialog" aria-labelledby="MessageNotSent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                Something went wrong. Please try again.
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- Modal -->
<div class="modal fade" id="SucModal" tabindex="-1" role="dialog" aria-labelledby="MessageSent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-success">

                Message sent
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="ContactModal" aria-hidden="true" >
<div class="modal-dialog modal-lg" style="max-height:98vh;">
    <div class="modal-content " >
    <div class="modal-header card-header" style="margin-bottom:1rem;">
              <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>Contact us</span></h3>
              <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              </div>

      <div class="container" style="padding:2rem;padding-top:0;">
    <form id="contactForm" class="text-left" action="" method="post">
            <div class="login-form-main-message"></div>
			<div class="main-login-form">
                        <div style="padding-bottom:1em;">Get in touch via the contact form below or contact us via email at <a href="mailto:info@megavid.uk">info@megavid.uk</a> or via phone at <a href="tel:490780392311">+49 (0) 780 392 311</a> (Monday-Friday from 9:00 a.m. to 12:00 a.m. and 2:30 p.m. to 5:30 p.m. CEST).</div>
						<label  >Name</label><br>
						<input type="text" class="form-control" name="contactname" id="contactname" placeholder="Name"  ><br>
                        <label  >Company / Organization (optional)</label><br>
						<input type="text" class="form-control" name="contactcompany" id="comp" placeholder="Company" ><br>
						<label  >Email</label><br>
						<input type="email" class="form-control" name="contactemail" id="contactemail" placeholder="Email" oninvalid="this.setCustomValidity('Enter a valid email address')" required><br>
                        <label  >Subject</label><br>
                        <select class="selectpicker form-control" name="selVal" id="selVal">
                            <option selected disabled>Select</option>
                            <option>Licensing Inquiry</option>
                            <option>Support for Video Owners</option>
                            <option>Error Reporting</option>
                            <option>Other (specify)</option>
                        </select><input type="text" class="form-control" name="subject" id="sub" placeholder="Subject" ><br>
                        <label  >Message</label><br>
                        <textarea rows="4" cols="100" name="contacttext" style="width:100%;"></textarea>
                        <div class="h-captcha" data-sitekey="97388910-8546-40f3-a850-2b7b6cf51ade"></div>
                        <div class="text-center">
                        <button class="btn btn-default btn-xl orange"
                            name="contactsub"> 
                            Send your message
                            </button>
                        </div>
			</div>
		</form>

  </div>
  </div>
</div>
</div> 

<div class="modal fade imprintModal" tabindex="-1" role="dialog" aria-labelledby="NewsletterModal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content ">
    <div class="modal-header card-header" style="margin-bottom:1rem;">
              <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>Imprint</span></h3>
              <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              </div>

      <div class="container" style="padding:2rem;padding-top:0;">
            
			<p>Megavid GmbH</p>
			<p>Elisabeth-Anna-Stra&szlig;e 9</p>
			<p>26486 Wangerooge</p>
			<p>&nbsp;</p>
			<p>Represented by the managing director:</p>
			<p>Dr. Wolfgang Habermann</p>
			<p>&nbsp;</p>
			<p>Registered at the Amtsgericht Oldenburg</p>
			<p>Commercial Register Number:</p>
			<p>HRB 211170</p>
			<p>&nbsp;</p>
			<p>Value-added tax identification number:</p>
			<p>DE307433469</p>
			<p>&nbsp;</p>
			<p>Email contact:</p>
			<p>info@megavid.uk</p>		
		</div>
		

  </div>
</div>
</div> 
<div class="modal fade" id="howToBuy-modal" tabindex="-1" role="dialog" aria-labelledby="HowToBuyModal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content ">
    <div class="modal-header card-header" style="margin-bottom:1rem;">
              <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>How To buy videos at Megavid</span></h3>
              <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              </div>

              <div class="accordion" id="accordionHowToBuy">
              <div class="card">
            <div class="card-header" role="tab" id="headingHTbuy0">
            <h5 class="mb-0">
                <a data-toggle="collapse" href="#htbuycollapse0" aria-expanded="true" aria-controls="collapse0" >
                1. FIND VIDEOS & OPEN DETAIL PAGES
                </a>
            </h5>
            </div>

            <div id="htbuycollapse0" class="collapse show" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Search our video library by keywords, video URLs, item IDs, or filter it by categories and dates. To find out more about a specific video, open its detail page by clicking on “→ LICENSE VIDEO FROM €50.00”.<p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyOne">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseOne">
                2. SELECT LICENSE DETAILS
                </a>
            </h5>
            </div>

            <div id="htbuycollapseOne" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>On the detail page of the video you’d like to purchase, go to the “Select License Details” section on the right side of the page. To buy a license to use a video, specify in which way you’d like to use the video – by selecting among the different license details criteria. Please first select a “Media Package” category (afterwards further options will appear below):</p>
                <p><b>Broadcast Media Packages</b> offer options to purchase rights for Broadcast Only, Broadcast + Digital Uses, and ALL MEDIA.</p>
                <p><b>Digital Media Packages</b> offer options to purchase rights for online use only (i.e. Facebook, Instagram, YouTube, and other websites).</p>
                <p>If you click on the 'question mark’ or ‘info’ icon next to each selection field, you will find further explanations if needed.</p>
                <p>If you don’t find the right package or need help, please get in touch: <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a><p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyTwo">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseTwo" >
                3. ADD VIDEO TO CART
                </a>
            </h5>
            </div>

            <div id="htbuycollapseTwo" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Having selected the license details on a video’s detail page, you can add the video to your cart by clicking on the “add to cart” button below the final item price.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyThree">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseThree" >
                4. GO TO CHECKOUT & SIGN IN / UP
                </a>
            </h5>
            </div>

            <div id="htbuycollapseThree" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Open your cart, i.e. by clicking on the cart icon in the top right corner of the header. After clicking on the “go to checkout” button, you’ll need to sign in your already existing Buyer Account or to sign up for a new Buyer Account.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyFour">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFour" >
                5. ENTER LICENSEE INFO
                </a>
            </h5>
            </div>

            <div id="htbuycollapseFour" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Fill in contact and billing address of the company / organization which shall be entitled to use the videos you have on your cart and enter into the <a href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a>; private consumers are not admitted.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyFive">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFive" >
                6. SELECT PAYMENT METHOD
                </a>
            </h5>
            </div>

            <div id="htbuycollapseFive" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Choose between PayPal and Bank Transfer: PayPal payments must be made directly at checkout. Bank Transfer payments must be made within 14 days after placing the order; payment instructions can be found in the invoice.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuyFive2">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFive2" >
                7. PLACE ORDER
                </a>
            </h5>
            </div>

            <div id="htbuycollapseFive2" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Once you have placed the order, you’ll receive an automatic order confirmation including your customized Buyer License Agreement, an invoice and URLs to download the videos you have purchased.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuySix">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseSix" >
                8. DOWNLOAD VIDEOS
                </a>
            </h5>
            </div>

            <div id="htbuycollapseSix" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
            <p>Currently you need to download videos you purchased at Megavid from YouTube. You will find the respective videos’ YouTube-URL(s) in your order confirmation and in your order history.
            If you need a download-program for YouTube videos, we recommend taking a look into (i.e.) the following reviews:</p>
            <a href="https://www.techradar.com/news/the-best-free-youtube-downloader" target="_blank">www.techradar.com/news/the-best-free-youtube-downloader</a><br>
            <a href="https://www.gihosoft.com/hot-topics/best-free-youtube-downloader.html" target="_blank">www.gihosoft.com/hot-topics/best-free-youtube-downloader.html</a><br>
            <a href="http://www.chip.de/Downloads-Download-Tag-Charts-Top-100-aller-Zeiten_76820739.html?xbl_category=tag_youtube-downloader" target="_blank">www.chip.de/Downloads-Download-Tag-Charts-Top-100-aller-Zeiten_76820739.html?xbl_category=tag_youtube-downloader</a>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingHTbuySeven">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#htbuycollapseSeven" >
                9. ACTIVATE LICENSE
                </a>
            </h5>
            </div>

            <div id="htbuycollapseSeven" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
            <div class="card-body">
                <p>Before the first usage of a purchased video you are required to click on the activation-URL in your order confirmation or in your order history.</p>
            </div>
            </div>
        </div>
</div>
            <div class="text-center" style="padding:1em;">
                Questions? Get in touch:<br>
                <a href="mailto:licensing@megavid.uk ">licensing@megavid.uk </a><br>
                <a class="btn btn-default btn-primary" data-dismiss="modal" data-toggle="modal" data-target=".contact-modal" >Contact us</a>
            </div>
  </div>
</div>
</div> 

<style>


  
</style>
<!-- Footer -->
 <?php
      include_once('components/footer.php');
    ?>
	<!-- ./Footer -->
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/jquery.qtip.min.js"></script>
  
  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="vendor/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="angular/angularapp.js"></script>

    <script src="js/video.js"></script>


<script>

function setBookmark(){
  // Create a cookie
  var videoID = '<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>';
  if (typeof(Cookies.get('videoBookmarks')) === 'undefined'){
    Cookies.set('videoBookmarks', JSON.stringify([videoID]),  {expires: 20 });
    $('#bookmarksDropdown').html('<a class="dropdown-item" href="#">'+videoID+'</a>');
    $('#bookmarksDropdownSmall').html('<a class="dropdown-item" href="#">'+videoID+'</a>');
    $('#bookmarksDropdownXtraSmall').html('<a class="dropdown-item" href="#">'+videoID+'</a>');
    $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (1)</span></center>');
    $('#bookmarkNumPill').html('1');
    $('#bookmarkNumPillSmall').html('1');
  }
  else{
    var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks')); 
    if(existingBookmarks.length == 0){
        $('#bookmarksDropdown').html('');
        $('#bookmarksDropdownSmall').html('');
        $('#bookmarksDropdownXtraSmall').html('');
    }
    if($.inArray(videoID, existingBookmarks) ==-1){
      existingBookmarks.push(videoID);
      Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks),  {expires: 20 });
        $.post("getVideoTitleByID",
        {
            ytid: videoID,
        },
        function(data, status){
          $('#bookmarksDropdown').append(data);
          $('#bookmarksDropdownSmall').append(data);
          $('#bookmarksDropdownXtraSmall').append(data);
        });
      $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS ('+existingBookmarks.length+')</span></center>');
      $('#bookmarkNumPill').html(existingBookmarks.length);
      $('#bookmarkNumPillSmall').html(existingBookmarks.length);
      $('#bookmarkSetter').html('<i class="fa fa-2x fa-bookmark" ></i> ');
      $('#bookmarkSetter').css('color', 'rgb(0, 87, 255)');
    }
    else{
      var index = existingBookmarks.indexOf(videoID);
      if (index !== -1) existingBookmarks.splice(index, 1);
      Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks),  {expires: 20 });
      $(".tab-"+videoID).remove();
      if(existingBookmarks.length == 0){
        $('#bookmarksDropdown').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
        $('#bookmarksDropdownSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
        $('#bookmarksDropdownXtraSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
      }
      $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS ('+existingBookmarks.length+')</span></center>');
      $('#bookmarkNumPill').html(existingBookmarks.length);
      $('#bookmarkNumPillSmall').html(existingBookmarks.length);
      $('#bookmarkSetter').html('<i class="fa fa-2x fa-bookmark-o" ></i>');
      $('#bookmarkSetter').css('color', 'rgb(0, 87, 255)');
    }

  }


  
}

        $.urlParam = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results==null) {
            return 'null';
            }
            return decodeURI(results[1]) || 0;
        }

$( document ).ready(function() {
    //load bookmarks
    $('#bookmarksDropdown').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
    $('#bookmarksDropdownSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
    $('#bookmarksDropdownXtraSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
    if (!!Cookies.get('videoBookmarks')){
    var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks')); 
    if (existingBookmarks.length > 0){
      $('#bookmarksDropdown').html('');
      $('#bookmarksDropdownSmall').html('');
      $('#bookmarksDropdownXtraSmall').html('');
    }
    for (var i=0; i<existingBookmarks.length; i++){
        //var id = existingBookmarks[i];
        $.post("getVideoTitleByID",
        {
            ytid: existingBookmarks[i],
        },
        function(data, status){
          $('#bookmarksDropdown').append(data);
          $('#bookmarksDropdownSmall').append(data);
          $('#bookmarksDropdownXtraSmall').append(data);
        });
      
    $('#bookmarkSetter-'+existingBookmarks[i]).html('<i style="font-size:24px;" class="fa fa-bookmark" ></i>');
    $('#bookmarkSetter-'+existingBookmarks[i]).css('color', 'rgb(0, 87, 255)');
      }
    $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS ('+existingBookmarks.length+')</span></center>');
    $('#bookmarkNumPill').html(existingBookmarks.length);
    $('#bookmarkNumPillSmall').html(existingBookmarks.length);
    var videoID = '<?php if (isset($_GET['v'])) {
                    echo $_GET['v'];
                } ?>';
    if($.inArray(videoID, existingBookmarks) !=-1){
      $('#bookmarkSetter').html('<i class="fa fa-2x fa-bookmark" ></i>');
      $('#bookmarkSetter').css('color', 'rgb(0, 87, 255)');
    }
    else{
      $('#bookmarkSetter').html('<i class="fa fa-2x fa-bookmark-o" ></i>');
      $('#bookmarkSetter').css('color', 'rgb(0, 87, 255)');
    }
  } 
});

function addBookmark(videoID){
      // Create a cookie

  if (typeof(Cookies.get('videoBookmarks')) ==='undefined'){
    Cookies.set('videoBookmarks', JSON.stringify([videoID]),  {expires: 20 });
    $('#bookmarksDropdown').html('');
    $('#bookmarksDropdownSmall').html('');
    $('#bookmarksDropdownXtraSmall').html('');
    $.post("getVideoTitleByID",
        {
            ytid: videoID,
        },
        function(data, status){
          $('#bookmarksDropdown').append(data);
          $('#bookmarksDropdownSmall').append(data);
          $('#bookmarksDropdownXtraSmall').append(data);
        });
    $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (1)</span></center>');
    $('#bookmarkNumPill').html('1');
    $('#bookmarkNumPillSmall').html('1');
  }
  else{
    var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks')); 
    if(existingBookmarks.length == 0){
        $('#bookmarksDropdown').html('');
        $('#bookmarksDropdownSmall').html('');
        $('#bookmarksDropdownXtraSmall').html('');
    }
    if($.inArray(videoID, existingBookmarks) ==-1){
      existingBookmarks.push(videoID);
      Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks),  {expires: 20 });
        $.post("getVideoTitleByID",
        {
            ytid: videoID,
        },
        function(data, status){
          $('#bookmarksDropdown').append(data);
          $('#bookmarksDropdownSmall').append(data);
          $('#bookmarksDropdownXtraSmall').append(data);
        });
      $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS ('+existingBookmarks.length+')</span></center>');
      $('#bookmarkNumPill').html(existingBookmarks.length);
      $('#bookmarkNumPillSmall').html(existingBookmarks.length);
      $('#bookmarkSetter-'+videoID).html('<i style="font-size:24px;" class="fa fa-bookmark" ></i>');
      $('#bookmarkSetter-'+videoID).css('color', 'rgb(0, 87, 255)');
    }
    else{
      var index = existingBookmarks.indexOf(videoID);
      if (index !== -1) existingBookmarks.splice(index, 1);
      Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks),  {expires: 20 });
      $( ".tab-"+videoID).remove();
      if(existingBookmarks.length == 0){
        $('#bookmarksDropdown').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
        $('#bookmarksDropdownSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
        $('#bookmarksDropdownXtraSmall').html('<div style="width:100%;" class="text-center">Bookmark videos to save them for later.</div>');
      }
      $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS ('+existingBookmarks.length+')</span></center>');
      $('#bookmarkNumPill').html(existingBookmarks.length);
      $('#bookmarkNumPillSmall').html(existingBookmarks.length);
      $('#bookmarkSetter-'+videoID).html('<i style="font-size:24px;" class="fa fa-bookmark-o" ></i>');
      $('#bookmarkSetter-'+videoID).css('color', 'rgb(0, 87, 255)');
    }

  }


}




</script>
      <script>
function copyShareLink() {
  var copyText = document.getElementById("shareLink");
  copyText.select();
  document.execCommand("copy");

}
    $('body').on('click', function (e) {
      
    $('[data-toggle="tooltip"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.tooltip').has(e.target).length === 0) {
            $(this).tooltip('hide');
        }
    });
});


$("#scrollLicenseDetailsBtn").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#selectLicenseDetailsCard").offset().top
    }, 2000);
});

</script>


  </body>

</html>
