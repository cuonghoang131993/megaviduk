<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Megavid offers viral video licensing under fair and transparent conditions to assist owners of funny, amazing and popular internet videos increasing distribution, exposure, sales and protection!">
    <meta name="keywords" content="megavid, viral video licensing, make more money off your videos, viral videos, video licensing, viral video licensing company, internet video licensing, youtube video licensing, viral video protection, viral video distribution, video promotion, sell viral video, sell youtube video, license video for TV, megavid sign in">
    <title>Megavid - Viral Video Licensing: Easy, Fair &amp; Transparent</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/own.css?v=1668365800" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">

    

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/yt.min.js"></script>
    <!--<script src="js/own.js?v=1559481193"</script>-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>document.addEventListener("touchstart", function(){}, true);</script>

    <style>

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
 
  border-radius: 10px;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.form-signup {
  width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: 0 auto;
 
  border-radius: 10px;
}
.form-signup .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}

.form-signup input{
  margin-bottom: 10px;
}

    </style>
    
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
<!-- End Google Analytics --></head>
<body id="page-top" style="background-color:#EAE9E9;">
<div style="min-height:100%;">
<div class="clear-top" style="overflow:auto;padding-bottom:250px;">






    <nav class="navbar navbar-light fixed-top d-none d-llg-block" style="background-color:black;"  id="mainNav">
    <div class="container-fluid">
    <table style="width:100%"> 
    <tr>
      <td style="width:41%">
        <div class="row" style="margin-left:0; margin-right:0;">
        <a class="navbar-brand js-scroll-trigger d-none d-md-block" href="./index" style="margin:auto auto auto 0"><img src="img/blue-black-minimalist-play-media-logo-design.png" alt="Megavid" height="55"></a>
        
        <div class="dropdown show nav-link" id="videolibdiv" style="margin:auto auto auto 0">
        <a href="videos" role="button" id="dropdownVideos"  aria-haspopup="true" aria-expanded="false" align="center">
        <center class="dropdown-toggle" style="color:white;">VIDEOS</center>
        </a>
        <div class="dropdown-menu blackdropdown" id="videosDropdown" aria-labelledby="dropdownVideos" style="top: 61px;left:-8px;">
            <a class="dropdown-item" href="./videos?sort=0">Trending</a>
            <a class="dropdown-item" href="./videos?sort=9">Most Views</a>
            <a class="dropdown-item" href="./videos?sort=6">Most Likes</a>
            <a class="dropdown-item" href="./videos?sort=2">Newest</a>
            <div class="card">
              <div class="card-header">
                Categories
              </div>
              <div class="card-body">
                <a class="dropdown-item" href="./videos?cat=3">Animals</a>
                <a class="dropdown-item" href="./videos?cat=4">Cute</a>
                <a class="dropdown-item" href="./videos?cat=5">Crazy</a>
                <a class="dropdown-item" href="./videos?cat=6">Funny</a>
                <a class="dropdown-item" href="./videos?cat=1">Fails</a>
                <a class="dropdown-item" href="./videos?cat=7">Sports</a>
                <a class="dropdown-item" href="./videos?cat=8">Weather</a>
                <a class="dropdown-item" href="./videos?cat=9">Wins</a>
                <a class="dropdown-item" href="./videos?cat=10">Other</a>
              </div>
            </div>
        </div>
        </div>
        <div class="dropdown show nav-link" id="submitdiv" style="margin:auto auto auto 0;">
          <a href="./index#signup">
          <center class="d-none d-submit-big-block" style="color:white;">SUBMIT VIDEO</center> 
          <center class="d-none d-submit-small-block" style="color:white;">SUBMIT</center> 
          </a>
        </div>
        </div>

        </div>
        </td>
        <td style="width:18%">
          <div class="d-none d-xxxl-block">
            <form class="input-group" method="get" action="./videos" >
              <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos by Keyword or URL" value="">
              <span class="input-group-btn">
                <button class="btn btn-default orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
              </span>
            </form>
          </div>
          <div class="d-xxxl-none">
            <form class="input-group" method="get" action="./videos" >
              <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos" value="">
              <span class="input-group-btn">
                <button class="btn btn-default orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
              </span>
            </form>
          </div>
        </td>
        <td style="width:41%">
        <div class="row" style="margin-left:0;">
            <div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">MY ACCOUNT</span></center>
      </a>
      <div class="dropdown-menu" id="accountDropdown" aria-labelledby="dropdownMenuAccount" >
          <a class="dropdown-item" href="./comingsoon" >Order History</a>
          <a class="dropdown-item" href="./comingsoon" >My Folders</a>
          <a class="dropdown-item" href="./comingsoon" >Notification Settings </a>
          <a class="dropdown-item" href="./comingsoon" >Advanced Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="customerLogout" >Sign out</a>
      </div>
    </div>
    <div class="dropdown show nav-link" id="bookmarkdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
      <center ><i class="fa fa-2x fa-bookmark"></i><br><span class="d-none d-llg-block">BOOKMARKS (0)</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="bookmarksDropdown" aria-labelledby="dropdownMenuLink" style="overflow: auto;max-height: 80vh;width: 20vw;top:77px;">
      </div>
    </div>


    <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
      <a href="cart" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-shopping-cart"></i><br>CART (2)</center> 
      </a>
    </div>
    </div>
        </td>
    </tr>


</table>
  </div>  
  </nav>

<!-- navigation for small devices-->
  <nav class="navbar navbar-light d-smmobile-none d-llg-none d-xxl-block" style="background-color:black;"  id="mainNav">
    <div class="container-fluid">
    <table style="width:100%"> 
    <tr>
      <td style="width:41%">
        <div class="row" style="margin-left:0; margin-right:0;">
        <div class="dropdown show nav-link d-xxl-none" id="videolibdivSmall" style="margin:auto auto auto 0">
        <a href="#" role="button" id="dropdownVideosSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
        <center class="dropdown-toggle" style="color:white;">VIDEOS</center>
        </a>
        <div class="dropdown-menu blackdropdown" id="videosDropdownSmall" aria-labelledby="dropdownVideos" style="left:-8px;">
            <a class="dropdown-item" href="./videos?sort=0">Trending</a>
            <a class="dropdown-item" href="./videos?sort=9">Most Views</a>
            <a class="dropdown-item" href="./videos?sort=6">Most Likes</a>
            <a class="dropdown-item" href="./videos?sort=2">Newest</a>
            <div class="card">
              <div class="card-header">
                Categories
              </div>
              <div class="card-body">
              <a class="dropdown-item" href="./videos?cat=3">Animals</a>
                <a class="dropdown-item" href="./videos?cat=4">Cute</a>
                <a class="dropdown-item" href="./videos?cat=5">Crazy</a>
                <a class="dropdown-item" href="./videos?cat=6">Funny</a>
                <a class="dropdown-item" href="./videos?cat=1">Fails</a>
                <a class="dropdown-item" href="./videos?cat=7">Sports</a>
                <a class="dropdown-item" href="./videos?cat=8">Weather</a>
                <a class="dropdown-item" href="./videos?cat=9">Wins</a>
                <a class="dropdown-item" href="./videos?cat=10">Other</a>
              </div>
            </div>
        </div>
        </div>


        <div class="dropdown show nav-link" id="submitdiv" style="margin:auto auto auto 0;">
          <a href="./index#signup">
          <center class="d-none d-submit-smbig-block" style="color:white;">SUBMIT VIDEO</center> 
          <center class="d-none d-submit-smsmall-block" style="color:white;">SUBMIT</center> 
          </a>
        </div>
        </div>
        </td>
        <td style="width:18%">
          <a class="navbar-brand js-scroll-trigger" href="./index"><img src="img/blue-black-minimalist-play-media-logo-design.png" style="margin-right:0;" alt="Megavid" height="45"></a>
      
        </td>
        <td style="width:41%">
        <div class="row" style="margin-left:0;">
            <div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">MY ACCOUNT</span></center>
      </a>
      <div class="dropdown-menu" id="accountDropdown" aria-labelledby="dropdownMenuAccount" >
          <a class="dropdown-item" href="./comingsoon" >Order History</a>
          <a class="dropdown-item" href="./comingsoon" >My Folders</a>
          <a class="dropdown-item" href="./comingsoon" >Notification Settings </a>
          <a class="dropdown-item" href="./comingsoon" >Advanced Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="customerLogout" >Sign out</a>
      </div>
    </div>
    <div class="dropdown show nav-link" id="bookmarkdivSmall" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuLinkSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
      <center><i class="fa fa-2x fa-bookmark"></i><span id="bookmarkNumPill" class="badge badge-pill" style="background-color:rgb(0, 87, 255);position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="bookmarksDropdownSmall" aria-labelledby="dropdownMenuLinkSmall" style="overflow: auto;max-height: 80vh; left: -80px;">
      </div>
    </div>


    <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
      <a href="cart" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPill" class="badge badge-pill" style="background-color:rgb(0, 87, 255);position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">2</span></center>
      </a>
    </div>
    </div>
      </td>
    </tr>

<tr>
<td colspan="3">
  <form class="input-group" method="get" action="./videos" >
    <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos by Keyword or URL" value="">
    <span class="input-group-btn">
      <button class="btn btn-default orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
    </span>
  </form>
</td>
</tr>
</table>
  </div>  
  </nav>

<!-- navigation for smartphones-->
<nav class="navbar navbar-light d-xls-none" style="background-color:black;"  id="mainNav">
    <div class="container-fluid" style="padding:0;">
    <table style="width:100%"> 
    <tr>
        <td>
          <a class="navbar-brand js-scroll-trigger" href="./index" style="margin-right:0;"><img src="img/blue-black-minimalist-play-media-logo-design.png" alt="Megavid" height="35"></a>
        </td>
        <td >
        <div class="row" style="margin-left:0;">
            <div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">MY ACCOUNT</span></center>
      </a>
      <div class="dropdown-menu" id="accountDropdown" aria-labelledby="dropdownMenuAccount" >
          <a class="dropdown-item" href="./comingsoon" >Order History</a>
          <a class="dropdown-item" href="./comingsoon" >My Folders</a>
          <a class="dropdown-item" href="./comingsoon" >Notification Settings </a>
          <a class="dropdown-item" href="./comingsoon" >Advanced Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="customerLogout" >Sign out</a>
      </div>
    </div>
    <div class="dropdown show nav-link" id="bookmarkdivXtraSmall" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuLinkXtraSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
      <center><i class="fa fa-2x fa-bookmark"></i><span id="bookmarkNumPillSmall" class="badge badge-pill" style="background-color:rgb(0, 87, 255);position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="bookmarksDropdownXtraSmall" aria-labelledby="dropdownMenuLinkXtraSmall" style="overflow: auto;max-height: 80vh;top:50px;left:-120px;">
      </div>
    </div>


    <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
      <a href="cart" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPillSmall" class="badge badge-pill" style="background-color:rgb(0, 87, 255);position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">2</span></center>
      </a>
    </div>
    </div>
      </td>
    </tr>

  <tr>
    <td colspan="3">
      <form class="input-group" method="get" action="./videos" >
        <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xs"  placeholder="Search videos by Keyword or URL" value="">
        <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xss"  placeholder="Search videos" value="">
        <span class="input-group-btn">
          <button class="btn btn-default orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
        </span>
      </form>
    </td>
    </tr>
    <tr>
      <td>
      <div class="dropdown show nav-link d-xxl-none" id="videolibdivXtraSmall">
            <a href="#" role="button" id="dropdownVideosXtraSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
              <center class="dropdown-toggle" style="color:white;">VIDEOS</center>
            </a>
            <div class="dropdown-menu blackdropdown" id="videosDropdownXtraSmall" aria-labelledby="dropdownVideos" style="top: 45px;left:20px;">
                <a class="dropdown-item" href="./videos?sort=0">Trending</a>
                <a class="dropdown-item" href="./videos?sort=9">Most Views</a>
                <a class="dropdown-item" href="./videos?sort=6">Most Likes</a>
                <a class="dropdown-item" href="./videos?sort=2">Newest</a>
                <div class="card">
                  <div class="card-header">
                    Categories
                  </div>
                  <div class="card-body">
                    <a class="dropdown-item" href="./videos?cat=3">Animals</a>
                    <a class="dropdown-item" href="./videos?cat=4">Cute</a>
                    <a class="dropdown-item" href="./videos?cat=5">Crazy</a>
                    <a class="dropdown-item" href="./videos?cat=6">Funny</a>
                    <a class="dropdown-item" href="./videos?cat=1">Fails</a>
                    <a class="dropdown-item" href="./videos?cat=7">Sports</a>
                    <a class="dropdown-item" href="./videos?cat=8">Weather</a>
                    <a class="dropdown-item" href="./videos?cat=9">Wins</a>
                    <a class="dropdown-item" href="./videos?cat=10">Other</a>
                  </div>
                </div>
            </div>
            </div>
      </td>
      <td>
      <div class="dropdown show nav-link" id="submitdiv">
          <a href="./index#signup">
          <center  style="color:white;">SUBMIT VIDEO</center> 
          </a>
        </div>
      </td>
  </tr>
</table>
  </div>  
  </nav>


  <script src="./angular/angularapp.js?v=1666470803"></script>

<div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header card-header" style="margin-bottom:1rem;">
                <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>SIGN IN</span></h3>
                <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="container" style="padding:2rem;padding-top:0;">
				<app-login checkout="false"></app-login>
            </div>
        </div>
    </div>
</div>
<app-customer-sign-up-email-modal></app-customer-sign-up-email-modal><script src="./angular/angularapp.js?v=1666470803"></script>
<div class="modal fade signupmodal" id="signupmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" style="max-width:1000px;">
    <div class="modal-content ">
      <div class="container">
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">x</span>
			</button>

<div style="padding:1em;">
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <app-customer-sign-up></app-customer-sign-up>
      </div>
    </div>
  </div>
  <div class="col-md-6 mt-3 mt-md-0">
    <div class="card text-center" >
      <div class="card-body">
        <h2 class="card-title">Video Owner’s Sign Up</h2>
        <p class="card-text" style="padding:35px;" >Please sign up by<br><a href="./index#signup">submitting your video here.</a></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<app-customer-sign-up-email-modal></app-customer-sign-up-email-modal>

<script>

  var leftAccount = true;
  $("#accountdiv").mouseenter(function () {
          $("#accountDropdown").fadeIn();
          $("#bookmarksDropdown").hide();
          $("#videosDropdown").hide();
          leftAccount = false;
      });
  $("#accountdiv").mouseleave(function(){
    leftAccount = true;
  setTimeout(function(){
      if (leftAccount){
          $("#accountDropdown").fadeOut();
      }  
      }, 500);
  });

  var leftBookmarks = true;
  $("#bookmarkdiv").mouseenter(function () {
          $("#bookmarksDropdown").fadeIn();
          $("#accountDropdown").hide();
          $("#videosDropdown").hide();
          leftBookmarks = false;
      });
  $("#bookmarkdiv").mouseleave(function(){
  leftBookmarks = true;
  setTimeout(function(){
      if (leftBookmarks){
          $("#bookmarksDropdown").fadeOut();
      }  
      }, 500);
  });

  var leftVideos = true;
  $("#videolibdiv").mouseenter(function () {
          $("#videosDropdown").fadeIn();
          $("#accountDropdown").hide();
          $("#bookmarksDropdown").hide();
          leftVideos = false;
      });
      
  $("#videolibdiv").mouseleave(function(){
    leftVideos = true;
  setTimeout(function(){
      if (leftVideos){
          $("#videosDropdown").fadeOut();
      }  
      }, 500);
  });
 // $("#accountdivSmall").mouseenter(function () {
 //         $("#accountDropdownSmall").fadeIn();
 //         $("#bookmarksDropdownSmall").hide();
 //         $("#videosDropdownSmall").hide();
 //         leftAccount = false;
 //     });
 // $("#accountdivSmall").mouseleave(function(){
 //   leftAccount = true;
 // setTimeout(function(){
 //     if (leftAccount){
 //         $("#accountDropdownSmall").fadeOut();
 //     }  
 //     }, 500);
 // });

 // $("#bookmarkdivSmall").mouseenter(function () {
 //         $("#bookmarksDropdownSmall").fadeIn();
 //         $("#accountDropdownSmall").hide();
 //         $("#videosDropdownSmall").hide();
 //         leftBookmarks = false;
 //     });
 // $("#bookmarkdivSmall").mouseleave(function(){
 // leftBookmarks = true;
 // setTimeout(function(){
 //     if (leftBookmarks){
 //         $("#bookmarksDropdownSmall").fadeOut();
 //     }  
 //     }, 500);
 // });

 // $("#videolibdivSmall").mouseenter(function () {
 //         $("#videosDropdownSmall").fadeIn();
 //         $("#accountDropdownSmall").hide();
 //         $("#bookmarksDropdownSmall").hide();
 //         leftVideos = false;
 //     });
      
 // $("#videolibdivSmall").mouseleave(function(){
 //   leftVideos = true;
 // setTimeout(function(){
 //     if (leftVideos){
 //         $("#videosDropdownSmall").fadeOut();
 //     }  
 //     }, 500);
 // });
 // $("#accountdivXtraSmall").mouseenter(function () {
 //         $("#accountDropdownXtraSmall").fadeIn();
 //         $("#bookmarksDropdownXtraSmall").hide();
 //         $("#videosDropdownXtraSmall").hide();
 //         leftAccount = false;
 //     });
 // $("#accountdivXtraSmall").mouseleave(function(){
 //   leftAccount = true;
 //     if (leftAccount){
 //         $("#accountDropdownXtraSmall").hide();
 //     }  
 // });

 // $("#bookmarkdivXtraSmall").mouseenter(function () {
 //         $("#bookmarksDropdownXtraSmall").fadeIn();
 //         $("#accountDropdownXtraSmall").hide();
 //         $("#videosDropdownXtraSmall").hide();
 //         leftBookmarks = false;
 //     });
 // $("#bookmarkdivXtraSmall").mouseleave(function(){
 // leftBookmarks = true;
 //     if (leftBookmarks){
 //         $("#bookmarksDropdownXtraSmall").hide();
 //     }  
 // });

 // $("#videolibdivXtraSmall").mouseenter(function () {
 //         $("#videosDropdownXtraSmall").fadeIn();
 //         $("#accountDropdownXtraSmall").hide();
 //         $("#bookmarksDropdownXtraSmall").hide();
 //         leftVideos = false;
 //     });
      
 // $("#videolibdivXtraSmall").mouseleave(function(){
 //   leftVideos = true;
 //     if (leftVideos){
 //         $("#videosDropdownXtraSmall").hide();
 //     }  
 // });


</script><div class="container-fluid cartContainer" style="padding-left:15px;">

<div class="row" style="margin-bottom:2em;">
<div class="col-12" style="padding-bottom: 5em;">
<div class="card-success text-center container" >
    <div class="row text-center">
    <div class="col">
        <h1>Coming Soon</h1>
        We are currently working on this new feature.<br>
        If you have any questions, write an email to <a href="mailto:info@megavid.uk">info@megavid.uk</a> or use our <a href="javascript:void();" data-toggle="modal" data-target=".contact-modal">contact form</a>.<br>
    </div>
</div>
    <div class="row btnrow">
            <div class="col-md-6 col-12">
              <a href="index" style="margin-bottom:1em;" class="btn btn-primary btn-default">Home</a>
            </div>
            <div class="col-md-6 col-12">
                <a href="videos" style="margin-bottom:1em;" class="btn btn-primary btn-default">Video Library</a>
            </div>
</div>
</div>
  </div>
</div>

</div>
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


<div class="modal fade FAQ-modal"  tabindex="-1" role="dialog" aria-labelledby="HowToBuyModal" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content ">
    <div class="modal-header card-header" style="margin-bottom:1rem;">
              <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>Video Owners' FAQ</span></h3>
              <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              </div>

              <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading0">
            <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse0" aria-expanded="true" aria-controls="collapse0" >
                What kind of videos can I submit?
                </a>
            </h5>
            </div>

            <div id="collapse0" class="collapse show" role="tabpanel" aria-labelledby="heading0" data-parent="#accordion">
            <div class="card-body" align="justify">
            <ul>
            <li>categories: viral, newsworthy, funny, cute, heartwarming, spectacular, unique, fails / wins, accidents, tricks, stunts, or stock footage </li>
            <li>duration: between 6 sec. and 2 min. (optimal: ~ 30 sec.)</li>
            <li>high quality / good shooting technique</li>
            <li>more than 10.000 views</li>
            <li>predominantly positive ratings</li>
            <li><b>In any case you have to own any and all rights (i.e. copyrights) to the video which you submit.</b></li>
            </ul>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                Can I still submit my video if I have already allowed someone else to use it?
                </a>
            </h5>
            </div>

            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" align="justify">
            Unless you have transferred the copyrights / exclusive rights to your video to someone else in the past you can submit your video. If you want to enter into Premium Partnership you need to inform us about everybody who is currently allowed to use your video once we’ve reviewed your submission.
            <br><br>
            If you are unsure about which rights you have already granted in the past, please contact us <u><a data-toggle="modal" data-dismiss="modal" data-target=".contact-modal" style="cursor: pointer;">here</a></u> or at <a href="mailto:info@megavid.uk">info@megavid.uk</a> and ask for assistance before submitting your video.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                Why should I enter into Basic Partnership?
                </a>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body"align="justify">
            By entering into Basic Partnership you comfortably establish additional promotion and earning opportunities for your video while you remain independent by retaining the right to use and sell licenses for your video by yourself.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
                When should I enter into Premium Partnership?
                </a>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body" align="justify">
            Only enter into Premium Partnership if your video is frequently used by third parties without authorization (especially on YouTube).
            </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" role="tab" id="headingSix">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" >
                How to improve my video’s chances to get licensed more often?
                </a>
            </h5>
            </div>
            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body" align="justify">
            Have a look into our Video Optimization and Viral Video guides accessible in your <u><a data-toggle="modal" data-target=".bd-example-modal-lg" data-dismiss="modal" style="cursor: pointer;">account</a></u>. Besides, we recommend to provide the following passage clearly visible whenever using your video (i.e. in your video’s description and/or in a highlighted comment):
            <br><br>
            <em>© Your Name / Megavid </em>|<em> To license this video, visit <a href="https://megavid.uk/videos">www.megavid.uk/videos</a> or email <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a></em></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingFive">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" >
                What to do if someone asks me for permission to use my video?
                </a>
            </h5>
            </div>
            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body" align="justify">
            We recommend to forward such message to <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a> and to send the following passage as reply additionally: 
            <br><br>
            <em>Thank you for your message. Please visit <a href="https://megavid.uk/videos">www.megavid.uk/videos</a> or email <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a> to license / use this video. Thank you!</em>
            </div>
            </div>
        </div>
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
</div> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

<style>


  
</style>
<!-- Footer -->
<div style="clear:both;position:relative;margin-top:-300px;min-height:300px;">
<div class="myFooter">
<hr style="max-width:100%;margin: 0;border-color: black;border-width:1px;margin-bottom:5rem;">
		<div class="container-fluid d-none d-footer-xxl-block">
			<div class="row text-left" style="padding-bottom:3rem;width:80%;margin:auto;color:#EAE9E9;">
				<div style="margin:auto auto auto 0px">
					<h5 style="color:white;">Megavid</h5>
					<ul class="list-unstyled quick-links">
						<li><a class="footerLink" data-toggle="modal" data-target=".contact-modal" >Contact us</a></li>
                <!--<li><a class="footerLink" href="#">About Us</a></li>-->
            <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
					</ul>
				</div>
				<div style="margin:auto">
					<h5 style="color:white;">BUYERS</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="./videos">Browse Video Library</a></li>
						<li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
						<li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
					</ul>
				</div>
				<div style="margin:auto">
					<h5 style="color:white;">VIDEO OWNERS</h5>
					<ul class="list-unstyled quick-links">
            <li><a class="footerLink" href="./index#programs">Partnership Options</a></li>
						<li><a class="footerLink" href="./index?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
            <li class="btn-group dropup footerLink">
                  <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                  <div class="dropdown-menu" style="background-color:black;">
                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Basic Partnership License Agreement</a>
                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Premium Partnership License Agreement</a>
                  </div>
            </li>
					</ul>
				</div>
        <div style="margin:auto 0px auto auto">
					<h5 style="color:white;">LEGAL</h5>
					<ul class="list-unstyled quick-links">
						<li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
						<li><a class="footerLink" href="./privacy"  target="_blank">Privacy Policy</a></li>
						<li><a class="footerLink" href="./tos.pdf"  target="_blank">Terms of Service</a></li>
					</ul>
				</div>
			</div>
			</div>
			<div class="container d-none d-footer-l-block text-center" style="padding-bottom:80px;">
			  	<div class="row" style="width:100%;">
            <div class="col-6" style="width:100%;">
              <h5 style="color:white;">Megavid</h5>
              <ul class="list-unstyled quick-links">
                <li><a class="footerLink" data-toggle="modal" data-target=".contact-modal" >Contact us</a></li>
                <!--<li><a class="footerLink" href="#">About Us</a></li>-->
                <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
              </ul>
              <h5 style="color:white;">VIDEO OWNERS</h5>
              <ul class="list-unstyled quick-links" style="margin-bottom:0;">
                <li><a class="footerLink" href="./index#programs">Partnership Options</a></li>
                <li><a class="footerLink" href="./index?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
                <li class="btn-group dropup footerLink">
                  <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                  <div class="dropdown-menu" style="background-color:black;">
                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Basic Partnership License Agreement</a>
                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Premium Partnership License Agreement</a>
                  </div>
            </li>
              </ul>
            </div>
            <div class="col-6" style="width:100%">
              <div style="display: inline-block;float: right;">
                <h5 style="color:white;">BUYERS</h5>
                <ul class="list-unstyled quick-links">
                  <li><a href="./videos">Browse Video Library</a></li>
                  <li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
                  <li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
                </ul>
                <h5 style="color:white;">LEGAL</h5>
                <ul class="list-unstyled quick-links" style="margin-bottom:0;">
                  <li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
                  <li><a class="footerLink" href="./privacy"  target="_blank">Privacy Policy</a></li>
                  <li><a class="footerLink" href="./tos.pdf"  target="_blank">Terms of Service</a></li>
                </ul>
              </div>
            </div>
          </div>
			</div>
      <div class="container d-none d-footer-xs-block text-center" style="padding-bottom:80px;">
			  	<div class="row" style="width:100vw;">
            <div class="col">
              <h5 style="color:white;">Megavid</h5>
              <ul class="list-unstyled quick-links">
                <li><a class="footerLink" data-toggle="modal" data-target=".contact-modal" >Contact us</a></li>
                <!--<li><a class="footerLink" href="#">About Us</a></li>-->
                <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
              </ul>
              <h5 style="color:white;">BUYERS</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="./videos">Browse Video Library</a></li>
                <li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
                <li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
              </ul>
              <h5 style="color:white;">VIDEO OWNERS</h5>
              <ul class="list-unstyled quick-links">
                <li><a class="footerLink" href="./index#programs">Partnership Options</a></li>
                <li><a class="footerLink" href="./index?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
                <li class="btn-group dropup footerLink">
                  <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                  <div class="dropdown-menu" style="background-color:black;">
                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Basic Partnership License Agreement</a>
                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank" >Premium Partnership License Agreement</a>
                  </div>
            </li>
              </ul>
              <h5 style="color:white;">LEGAL</h5>
              <ul class="list-unstyled quick-links" style="margin-bottom:0px;">
                <li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
                <li><a class="footerLink" href="./privacy"  target="_blank">Privacy Policy</a></li>
                <li><a class="footerLink" href="./tos.pdf"  target="_blank">Terms of Service</a></li>
              </ul>
          </div>
        </div>
			</div>
		</div>

        <div class="container-fluid" style="background-color:black;padding-top:1rem;padding-bottom:1rem;">
            <div >
            <div class="row" style="width:80%; margin:auto;">
                <div class="col-xs-12 col-sm-12 col-md-8 d-none d-md-block" style="padding:0px;color:#A1A1A1;">
                © Megavid GmbH 2025  |  Purchase offers for video items exclusively refer to business / commercial customers.  |  Prices and order totals are in EUR and are exclusive of value-added taxes unless expressively indicated otherwise. Information is based on your current location which we approximate from your IP address by matching it to a geographic region or from the location entered during your previous visit to Megavid.                 </div>
                <div class="col-xs-12 col-sm-12 col-md-8 d-block d-md-none text-center" style="padding:0px;color:#A1A1A1;">
                © Megavid GmbH 2025  |  Purchase offers for video items exclusively refer to business / commercial customers.  |  Prices and order totals are in EUR and are exclusive of value-added taxes unless expressively indicated otherwise. Information is based on your current location which we approximate from your IP address by matching it to a geographic region or from the location entered during your previous visit to Megavid.                </div>
                <div class="col-xs-12 col-sm-12 col-md-4" style="padding:0px;margin-top: auto;margin-bottom: auto;">
                    <div style="float:right;" class="d-none d-md-block">
                        <a href="https://facebook.com/megaviduk" target="_blank" title="Megavid on Facebook" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-facebook" ></i>
                        </a>
                        <a href="https://instagram.com/megaviduk" target="_blank" title="Megavid on Instagram" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-instagram" ></i>
                        </a>
                        <a href="https://twitter.com/megaviduk" target="_blank" title="Megavid on Twitter" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-twitter" ></i>
                        </a>
                        </a>
                        <a href="https://www.youtube.com/channel/UCoc16w6cfFa8UKMwaMx1GWQ" target="_blank" title="Megavid on Youtube" style="color:#EAE9E9;margin:1rem;margin-right:0;">
                                <i style="font-size:24px;" class="fa fa-youtube-play" ></i>
                        </a>
                    </div>

                    <div class="text-center d-block d-md-none">
                        <a href="https://facebook.com/megaviduk" target="_blank" title="Megavid on Facebook" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-facebook" ></i>
                        </a>
                        <a href="https://instagram.com/megaviduk" target="_blank" title="Megavid on Instagram" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-instagram" ></i>
                        </a>
                        <a href="https://twitter.com/megaviduk" target="_blank" title="Megavid on Twitter" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-twitter" ></i>
                        </a>
                        </a>
                        <a href="https://www.youtube.com/channel/UCoc16w6cfFa8UKMwaMx1GWQ" target="_blank" title="Megavid on Youtube" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-youtube-play" ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
  </div>
	</div>
	<!-- ./Footer -->    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
</body>
</html>
