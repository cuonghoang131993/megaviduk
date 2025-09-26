<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Licet Studios - Forgotten Password</title>

    <!-- Bootstrap core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/own.css" rel="stylesheet">

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-111945145-1', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
</head>

<body id="page-top" style="background-color:#EAE9E9;">
    <div style="min-height:100%;">
        <div class="clear-top" style="overflow:auto;padding-bottom:300px;">
            <nav class="navbar navbar-light fixed-top d-none d-llg-block" style="background-color:black;" id="mainNav">
                <div class="container-fluid">
                    <table style="width:100%">
                        <tr>
                            <td style="width:41%">
                                <div class="row" style="margin-left:0; margin-right:0;">
                                    <a class="navbar-brand js-scroll-trigger d-none d-md-block" href="./index.php" style="margin:auto auto auto 0"><img src="img/Licet Studios - Viral Video Licensing.svg" alt="Licet Studios" height="55"></a>

                                    <div class="dropdown show nav-link" id="videolibdiv" style="margin:auto auto auto 0">
                                        <a href="videos" role="button" id="dropdownVideos" aria-haspopup="true" aria-expanded="false" align="center">
                                            <center class="dropdown-toggle" style="color:white;">VIDEOS</center>
                                        </a>
                                        <div class="dropdown-menu blackdropdown" id="videosDropdown" aria-labelledby="dropdownVideos" style="top: 61px;left:-8px;">
                                            <a class="dropdown-item" href="./videos.php?sort=0">Trending</a>
                                            <a class="dropdown-item" href="./videos.php?sort=9">Most Views</a>
                                            <a class="dropdown-item" href="./videos.php?sort=6">Most Likes</a>
                                            <a class="dropdown-item" href="./videos.php?sort=2">Newest</a>
                                            <div class="card">
                                                <div class="card-header">
                                                    Categories
                                                </div>
                                                <div class="card-body">
                                                    <a class="dropdown-item" href="./videos.php?cat=3">Animals</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=4">Cute</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=5">Crazy</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=6">Funny</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=1">Fails</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=7">Sports</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=8">Weather</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=9">Wins</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=10">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown show nav-link" id="submitdiv" style="margin:auto auto auto 0;">
                                        <a href="./index.php#signup">
                                            <center class="d-none d-submit-big-block" style="color:white;">SUBMIT VIDEO</center>
                                            <center class="d-none d-submit-small-block" style="color:white;">SUBMIT</center>
                                        </a>
                                    </div>
                                </div>

                </div>
                </td>
                <td style="width:18%">
                    <div class="d-none d-xxxl-block">
                        <form class="input-group" method="get" action="./videos.php">
                            <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control" placeholder="Search videos by Keyword or URL" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary orange" type="submit"> <i class="fa fa-1x fa-search "></i></button>
                            </span>
                        </form>
                    </div>
                    <div class="d-xxxl-none">
                        <form class="input-group" method="get" action="./videos.php">
                            <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control" placeholder="Search videos" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary orange" type="submit"> <i class="fa fa-1x fa-search "></i></button>
                            </span>
                        </form>
                    </div>
                </td>
                <td style="width:41%">
                    <div class="row" style="margin-left:0;">
                        <div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
                            <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <center><i class="fa fa-2x fa-user"></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
                            </a>
                            <div class="dropdown-menu blackdropdown" id="accountDropdown" aria-labelledby="dropdownMenuAccount" style="top: 77px;">
                                <span class="dropdown-item"><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
                                <span class="dropdown-item">Don’t have an account?<br><a data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
                                <!--<div class="dropdown-divider"></div>
        <div class="card">
          <div class="card-header">
            Buyers
          </div>
          <div class="card-body">
          <a class="dropdown-item" href="./dahsboard.php" >Order History</a>
          <a class="dropdown-item" href="./dahsboard.php" >My Folders</a>
          <a class="dropdown-item" href="./dahsboard.php" >Notification Settings </a>
          <a class="dropdown-item" href="./dahsboard.php" >Advanced Settings</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            Video Owners
          </div>
          <div class="card-body">
          <a class="dropdown-item" href="./dash/dashboard.php" >Dashboard</a>
          <a class="dropdown-item" href="./dash/myvideos.php" >My Videos</a>
          <a class="dropdown-item" href="./dash/earnings.php" >Earnings Reports</a>
          <a class="dropdown-item" href="./dash/copies.php" >Report Illegal Copies</a>
          </div>
        </div>-->
                            </div>
                        </div>
                        <div class="dropdown show nav-link" id="bookmarkdiv" style="margin:auto 0 auto auto">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
                                <center><i class="fa fa-2x fa-bookmark"></i><br><span class="d-none d-llg-block">BOOKMARKS (0)</span></center>
                            </a>
                            <div class="dropdown-menu blackdropdown" id="bookmarksDropdown" aria-labelledby="dropdownMenuLink" style="overflow: auto;max-height: 80vh;width: 20vw;top:77px;">
                            </div>
                        </div>


                        <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
                            <a href="cart.php" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
                                <center><i class="fa fa-2x fa-shopping-cart"></i><br>CART (1)</center>
                            </a>
                        </div>
                    </div>
                </td>
                </tr>


                </table>

            </nav>

            <!-- navigation for small devices-->
            <nav class="navbar navbar-light d-smmobile-none d-llg-none d-xxl-block" style="background-color:black;" id="mainNav">
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
                                            <a class="dropdown-item" href="./videos.php?sort=0">Trending</a>
                                            <a class="dropdown-item" href="./videos.php?sort=9">Most Views</a>
                                            <a class="dropdown-item" href="./videos.php?sort=6">Most Likes</a>
                                            <a class="dropdown-item" href="./videos.php?sort=2">Newest</a>
                                            <div class="card">
                                                <div class="card-header">
                                                    Categories
                                                </div>
                                                <div class="card-body">
                                                    <a class="dropdown-item" href="./videos.php?cat=3">Animals</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=4">Cute</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=5">Crazy</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=6">Funny</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=1">Fails</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=7">Sports</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=8">Weather</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=9">Wins</a>
                                                    <a class="dropdown-item" href="./videos.php?cat=10">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="dropdown show nav-link" id="submitdiv" style="margin:auto auto auto 0;">
                                        <a href="./index.php#signup">
                                            <center class="d-none d-submit-smbig-block" style="color:white;">SUBMIT VIDEO</center>
                                            <center class="d-none d-submit-smsmall-block" style="color:white;">SUBMIT</center>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td style="width:18%">
                                <a class="navbar-brand js-scroll-trigger" href="./index.php"><img src="img/Licet Studios - Viral Video Licensing.svg" style="margin-right:0;" alt="Licet Studios" height="45"></a>

                            </td>
                            <td style="width:41%">
                                <div class="row" style="margin-left:0;">
                                    <div class="dropdown show nav-link" id="accountdivSmall" style="margin:auto 0 auto auto">
                                        <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <center><i class="fa fa-2x fa-user"></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
                                        </a>
                                        <div class="dropdown-menu blackdropdown" id="accountDropdownSmall" aria-labelledby="dropdownMenuAccount">
                                            <span class="dropdown-item"><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
                                            <span class="dropdown-item">Don’t have an account?<br><a data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
                                        </div>
                                    </div>
                                    <div class="dropdown show nav-link" id="bookmarkdivSmall" style="margin:auto 0 auto auto">
                                        <a href="#" role="button" id="dropdownMenuLinkSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
                                            <center><i class="fa fa-2x fa-bookmark"></i><span id="bookmarkNumPill" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
                                        </a>
                                        <div class="dropdown-menu blackdropdown" id="bookmarksDropdownSmall" aria-labelledby="dropdownMenuLinkSmall" style="overflow: auto;max-height: 80vh; left: -80px;">
                                        </div>
                                    </div>


                                    <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
                                        <a href="cart.php" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
                                            <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPill" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">1</span></center>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <form class="input-group" method="get" action="./videos.php">
                                    <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control" placeholder="Search videos by Keyword or URL" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary orange" type="submit"> <i class="fa fa-1x fa-search "></i></button>
                                    </span>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </nav>

            <!-- navigation for smartphones-->
            <nav class="navbar navbar-light d-xls-none" style="background-color:black;" id="mainNav">
                <div class="container-fluid" style="padding:0;">
                    <table style="width:100%">
                        <tr>
                            <td>
                                <a class="navbar-brand js-scroll-trigger" href="./index.php" style="margin-right:0;"><img src="img/Licet Studios - Viral Video Licensing.svg" alt="Licet Studios" height="35"></a>
                            </td>
                            <td>
                                <div class="row" style="margin-left:0;">
                                    <div class="dropdown show nav-link" id="accountdivXtraSmall" style="margin:auto 0 auto auto">
                                        <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <center><i class="fa fa-2x fa-user"></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
                                        </a>
                                        <div class="dropdown-menu blackdropdown" id="accountDropdownXtraSmall" aria-labelledby="dropdownMenuAccount" style="top:50px;left:-90px;">
                                            <span class="dropdown-item"><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
                                            <span class="dropdown-item">Don’t have an account?<br><a data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
                                        </div>
                                    </div>
                                    <div class="dropdown show nav-link" id="bookmarkdivXtraSmall" style="margin:auto 0 auto auto">
                                        <a href="#" role="button" id="dropdownMenuLinkXtraSmall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="center">
                                            <center><i class="fa fa-2x fa-bookmark"></i><span id="bookmarkNumPillSmall" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
                                        </a>
                                        <div class="dropdown-menu blackdropdown" id="bookmarksDropdownXtraSmall" aria-labelledby="dropdownMenuLinkXtraSmall" style="overflow: auto;max-height: 80vh;top:50px;left:-120px;">
                                        </div>
                                    </div>


                                    <div class="dropdown show nav-link" id="cartdiv" style="margin:auto 0 auto auto ;">
                                        <a href="cart.php" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
                                            <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPillSmall" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">1</span></center>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <form class="input-group" method="get" action="./videos.php">
                                    <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xs" placeholder="Search videos by Keyword or URL" value="">
                                    <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xss" placeholder="Search videos" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary orange" type="submit"> <i class="fa fa-1x fa-search "></i></button>
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
                                        <a class="dropdown-item" href="./videos.php?sort=0">Trending</a>
                                        <a class="dropdown-item" href="./videos.php?sort=9">Most Views</a>
                                        <a class="dropdown-item" href="./videos.php?sort=6">Most Likes</a>
                                        <a class="dropdown-item" href="./videos.php?sort=2">Newest</a>
                                        <div class="card">
                                            <div class="card-header">
                                                Categories
                                            </div>
                                            <div class="card-body">
                                                <a class="dropdown-item" href="./videos.php?cat=3">Animals</a>
                                                <a class="dropdown-item" href="./videos.php?cat=4">Cute</a>
                                                <a class="dropdown-item" href="./videos.php?cat=5">Crazy</a>
                                                <a class="dropdown-item" href="./videos.php?cat=6">Funny</a>
                                                <a class="dropdown-item" href="./videos.php?cat=1">Fails</a>
                                                <a class="dropdown-item" href="./videos.php?cat=7">Sports</a>
                                                <a class="dropdown-item" href="./videos.php?cat=8">Weather</a>
                                                <a class="dropdown-item" href="./videos.php?cat=9">Wins</a>
                                                <a class="dropdown-item" href="./videos.php?cat=10">Other</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown show nav-link" id="submitdiv">
                                    <a href="./index.php#signup">
                                        <center style="color:white;">SUBMIT VIDEO</center>
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
                            <h3 class="modal-title" style="color:#F05F40;font-weight: bold;margin:auto;"><span>SIGN IN</span></h3>
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
            <app-customer-sign-up-email-modal></app-customer-sign-up-email-modal>
            <script src="./angular/angularapp.js?v=1666470803"></script>
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
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h2 class="card-title">Video Owner’s Sign Up</h2>
                                                <p class="card-text" style="padding:35px;">Please sign up by<br><a href="./index.php#signup">submitting your video here.</a></p>
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
                $("#accountdiv").mouseenter(function() {
                    $("#accountDropdown").fadeIn();
                    $("#bookmarksDropdown").hide();
                    $("#videosDropdown").hide();
                    leftAccount = false;
                });
                $("#accountdiv").mouseleave(function() {
                    leftAccount = true;
                    setTimeout(function() {
                        if (leftAccount) {
                            $("#accountDropdown").fadeOut();
                        }
                    }, 500);
                });

                var leftBookmarks = true;
                $("#bookmarkdiv").mouseenter(function() {
                    $("#bookmarksDropdown").fadeIn();
                    $("#accountDropdown").hide();
                    $("#videosDropdown").hide();
                    leftBookmarks = false;
                });
                $("#bookmarkdiv").mouseleave(function() {
                    leftBookmarks = true;
                    setTimeout(function() {
                        if (leftBookmarks) {
                            $("#bookmarksDropdown").fadeOut();
                        }
                    }, 500);
                });

                var leftVideos = true;
                $("#videolibdiv").mouseenter(function() {
                    $("#videosDropdown").fadeIn();
                    $("#accountDropdown").hide();
                    $("#bookmarksDropdown").hide();
                    leftVideos = false;
                });

                $("#videolibdiv").mouseleave(function() {
                    leftVideos = true;
                    setTimeout(function() {
                        if (leftVideos) {
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
            </script>
            <div class="container-fluid cartContainer" style="padding-left:15px;">
                <div class="card card-login mx-auto mt-5" style="margin-bottom:2em;">
                    <div class="card-header">Password Reset</div>
                    <div class="card-body">
                        <form id="login-form" class="text-left" method="post">
                            <div class="login-form-main-message" style="margin:1rem;">
                                <h3>Forgotten your password?</h3>
                                Please enter your email address below. If we find a match, we will send you a reset request message!
                            </div>
                            <div class="main-login-form" style="margin:1rem;">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="mail" class="sr-only">Email</label>
                                        <input type="email" class="form-control" name="pwdemail" id="pwdmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn orange d-none d-md-block" name="forgotpwd">request password reset</button>
                                    <button type="submit" class="btn orange d-block d-md-none" name="forgotpwd">request reset</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade newsletter-modal" tabindex="-1" role="dialog" aria-labelledby="NewsletterModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header card-header" style="margin-bottom:1rem;">
                    <h3 class="modal-title" style="color:#F05F40;font-weight: bold;margin:auto;"><span>Newsletter</span></h3>
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
    <div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="ContactModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="max-height:98vh;">
            <div class="modal-content ">
                <div class="modal-header card-header" style="margin-bottom:1rem;">
                    <h3 class="modal-title" style="color:#F05F40;font-weight: bold;margin:auto;"><span>Contact us</span></h3>
                    <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="container" style="padding:2rem;padding-top:0;">
                    <form id="contactForm" class="text-left" action="" method="post">
                        <div class="login-form-main-message"></div>
                        <div class="main-login-form">
                            <div style="padding-bottom:1em;">Get in touch via the contact form below or contact us via email at <a href="mailto:info@licetstudios.com">info@licetstudios.com</a> or via phone at <a href="tel:4927237195301">+49 (0) 272 371 953 01</a> (Monday-Friday from 9:00 a.m. to 12:00 a.m. and 2:30 p.m. to 5:30 p.m. CEST).</div>
                            <label>Name</label><br>
                            <input type="text" class="form-control" name="contactname" id="contactname" placeholder="Name"><br>
                            <label>Company / Organization (optional)</label><br>
                            <input type="text" class="form-control" name="contactcompany" id="comp" placeholder="Company"><br>
                            <label>Email</label><br>
                            <input type="email" class="form-control" name="contactemail" id="contactemail" placeholder="Email" oninvalid="this.setCustomValidity('Enter a valid email address')" required><br>
                            <label>Subject</label><br>
                            <select class="selectpicker form-control" name="selVal" id="selVal">
                                <option selected disabled>Select</option>
                                <option>Licensing Inquiry</option>
                                <option>Support for Video Owners</option>
                                <option>Error Reporting</option>
                                <option>Other (specify)</option>
                            </select><input type="text" class="form-control" name="subject" id="sub" placeholder="Subject"><br>
                            <label>Message</label><br>
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
                    <h3 class="modal-title" style="color:#F05F40;font-weight: bold;margin:auto;"><span>Imprint</span></h3>
                    <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="container" style="padding:2rem;padding-top:0;">

                    <p>Licet Studios GmbH</p>
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
                    <p>info@licetstudios.com</p>
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
                        <h5 style="color:white;">LICET STUDIOS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" data-toggle="modal" data-target=".contact-modal">Contact us</a></li>
                            <!--<li><a class="footerLink" href="#">About Us</a></li>-->
                            <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
                        </ul>
                    </div>
                    <div style="margin:auto">
                        <h5 style="color:white;">BUYERS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="./videos.php">Browse Video Library</a></li>
                            <li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
                            <li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
                        </ul>
                    </div>
                    <div style="margin:auto">
                        <h5 style="color:white;">VIDEO OWNERS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" href="./index.php#programs">Partnership Options</a></li>
                            <li><a class="footerLink" href="./index.php?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
                            <li class="btn-group dropup footerLink">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                                <div class="dropdown-menu" style="background-color:black;">
                                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Basic Partnership License Agreement</a>
                                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Premium Partnership License Agreement</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div style="margin:auto 0px auto auto">
                        <h5 style="color:white;">LEGAL</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
                            <li><a class="footerLink" href="./privacy.php" target="_blank">Privacy Policy</a></li>
                            <li><a class="footerLink" href="./tos.pdf" target="_blank">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container d-none d-footer-l-block text-center" style="padding-bottom:80px;">
                <div class="row" style="width:100%;">
                    <div class="col-6" style="width:100%;">
                        <h5 style="color:white;">LICET STUDIOS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" data-toggle="modal" data-target=".contact-modal">Contact us</a></li>
                            <!--<li><a class="footerLink" href="#">About Us</a></li>-->
                            <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
                        </ul>
                        <h5 style="color:white;">VIDEO OWNERS</h5>
                        <ul class="list-unstyled quick-links" style="margin-bottom:0;">
                            <li><a class="footerLink" href="./index.php#programs">Partnership Options</a></li>
                            <li><a class="footerLink" href="./index.php?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
                            <li class="btn-group dropup footerLink">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                                <div class="dropdown-menu" style="background-color:black;">
                                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Basic Partnership License Agreement</a>
                                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Premium Partnership License Agreement</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6" style="width:100%">
                        <div style="display: inline-block;float: right;">
                            <h5 style="color:white;">BUYERS</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="./videos.php">Browse Video Library</a></li>
                                <li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
                                <li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
                            </ul>
                            <h5 style="color:white;">LEGAL</h5>
                            <ul class="list-unstyled quick-links" style="margin-bottom:0;">
                                <li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
                                <li><a class="footerLink" href="./privacy.php" target="_blank">Privacy Policy</a></li>
                                <li><a class="footerLink" href="./tos.pdf" target="_blank">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-none d-footer-xs-block text-center" style="padding-bottom:80px;">
                <div class="row" style="width:100vw;">
                    <div class="col">
                        <h5 style="color:white;">LICET STUDIOS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" data-toggle="modal" data-target=".contact-modal">Contact us</a></li>
                            <!--<li><a class="footerLink" href="#">About Us</a></li>-->
                            <li><a class="footerLink" data-toggle="modal" data-target=".newsletter-modal">Newsletter</a></li>
                        </ul>
                        <h5 style="color:white;">BUYERS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="./videos.php">Browse Video Library</a></li>
                            <li><a class="footerLink" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a></li>
                            <li><a class="footerLink" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a></li>
                        </ul>
                        <h5 style="color:white;">VIDEO OWNERS</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a class="footerLink" href="./index.php#programs">Partnership Options</a></li>
                            <li><a class="footerLink" href="./index.php?video-owners-FAQ#ques">Video Owners' FAQ</a></li>
                            <li class="btn-group dropup footerLink">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;color:#EAE9E9;">Partnership Agreements</a>
                                <div class="dropdown-menu" style="background-color:black;">
                                    <a href="../Basic-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Basic Partnership License Agreement</a>
                                    <a href="../Premium-Partnership-License-Agreement.pdf" class="dropdown-item dropupLicense" target="_blank">Premium Partnership License Agreement</a>
                                </div>
                            </li>
                        </ul>
                        <h5 style="color:white;">LEGAL</h5>
                        <ul class="list-unstyled quick-links" style="margin-bottom:0px;">
                            <li><a class="footerLink" data-toggle="modal" data-target=".imprintModal">Imprint</a></li>
                            <li><a class="footerLink" href="./privacy.php" target="_blank">Privacy Policy</a></li>
                            <li><a class="footerLink" href="./tos.pdf" target="_blank">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color:black;padding-top:1rem;padding-bottom:1rem;">
            <div>
                <div class="row" style="width:80%; margin:auto;">
                    <div class="col-xs-12 col-sm-12 col-md-8 d-none d-md-block" style="padding:0px;color:#A1A1A1;">
                        © Licet Studios GmbH 2025 | Purchase offers for video items exclusively refer to business / commercial customers. | Prices and order totals are in EUR and are exclusive of value-added taxes unless expressively indicated otherwise. Information is based on your current location which we approximate from your IP address by matching it to a geographic region or from the location entered during your previous visit to Licet Studios. </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 d-block d-md-none text-center" style="padding:0px;color:#A1A1A1;">
                        © Licet Studios GmbH 2025 | Purchase offers for video items exclusively refer to business / commercial customers. | Prices and order totals are in EUR and are exclusive of value-added taxes unless expressively indicated otherwise. Information is based on your current location which we approximate from your IP address by matching it to a geographic region or from the location entered during your previous visit to Licet Studios. </div>
                    <div class="col-xs-12 col-sm-12 col-md-4" style="padding:0px;margin-top: auto;margin-bottom: auto;">
                        <div style="float:right;" class="d-none d-md-block">
                            <a href="https://facebook.com/LicetStudios" target="_blank" title="Licet Studios on Facebook" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-facebook"></i>
                            </a>
                            <a href="https://instagram.com/licetstudios" target="_blank" title="Licet Studios on Instagram" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/licetstudios" target="_blank" title="Licet Studios on Twitter" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-twitter"></i>
                            </a>
                            </a>
                            <a href="https://www.youtube.com/channel/UCoc16w6cfFa8UKMwaMx1GWQ" target="_blank" title="Licet Studios on Youtube" style="color:#EAE9E9;margin:1rem;margin-right:0;">
                                <i style="font-size:24px;" class="fa fa-youtube-play"></i>
                            </a>
                        </div>

                        <div class="text-center d-block d-md-none">
                            <a href="https://facebook.com/LicetStudios" target="_blank" title="Licet Studios on Facebook" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-facebook"></i>
                            </a>
                            <a href="https://instagram.com/licetstudios" target="_blank" title="Licet Studios on Instagram" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/licetstudios" target="_blank" title="Licet Studios on Twitter" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-twitter"></i>
                            </a>
                            </a>
                            <a href="https://www.youtube.com/channel/UCoc16w6cfFa8UKMwaMx1GWQ" target="_blank" title="Licet Studios on Youtube" style="margin:1rem;color:#EAE9E9;">
                                <i style="font-size:24px;" class="fa fa-youtube-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ./Footer -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>