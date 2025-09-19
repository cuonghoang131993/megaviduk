  <?php
    // session_start();
    // if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    //     // // User is not logged in, redirect to login page
    //     // header("Location: login.php");
    //     exit();
    // }
    // // User is logged in, display protected content
    // echo "Welcome, " . $_SESSION["username"] . "!";

    $userLoggedIn = true;
    ?>

<!-- <?php
    session_start();
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
  ?> -->

<nav class="navbar navbar-light fixed-top d-none d-llg-block" style="background-color:black;"  id="mainNav">
    <div class="container-fluid">
    <table style="width:100%"> 
    <tr>
      <td style="width:41%">
        <div class="row" style="margin-left:0; margin-right:0;">
        <a class="navbar-brand js-scroll-trigger d-none d-md-block" href="./index.php" style="margin:auto auto auto 0"><img src="img/Licet Studios - Viral Video Licensing.svg" alt="Licet Studios" height="55"></a>
        
        <div class="dropdown show nav-link" id="videolibdiv" style="margin:auto auto auto 0">
        <a href="./videos.php" role="button" id="dropdownVideos"  aria-haspopup="true" aria-expanded="false" align="center">
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
          <a href="./index#signup">
          <center class="d-none d-submit-big-block" style="color:white;">SUBMIT VIDEO</center> 
          <center class="d-none d-submit-small-block" style="color:white;">SUBMIT</center> 
          </a>
        </div>
        </div>

        
        </td>
        <td style="width:18%">
          <div class="d-none d-xxxl-block">
            <form class="input-group" method="get" action="./videos" >
              <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos by Keyword or URL" value="">
              <span class="input-group-btn">
                <button class="btn btn-secondary orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
              </span>
            </form>
          </div>
          <div class="d-xxxl-none">
            <form class="input-group" method="get" action="./videos" >
              <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos" value="">
              <span class="input-group-btn">
                <button class="btn btn-secondary orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
              </span>
            </form>
          </div>
        </td>
        <td style="width:41%">
        <div class="row" style="margin-left:0;">
          <?php
 // Example condition

if ($userLoggedIn) {
    echo '<div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-user"></i><br><span class="d-none d-llg-block">MY ACCOUNT</span></center>
      </a>
      <div class="dropdown-menu" id="accountDropdown" aria-labelledby="dropdownMenuAccount" style="display: none;">
          <a class="dropdown-item" href="./comingsoon.php">Order History</a>
          <a class="dropdown-item" href="./comingsoon.php">My Folders</a>
          <a class="dropdown-item" href="./comingsoon.php">Notification Settings </a>
          <a class="dropdown-item" href="./comingsoon.php">Advanced Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="customerLogout.php">Sign out</a>
      </div>';
} else {
    echo '<div class="dropdown show nav-link" id="accountdiv" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="accountDropdown" aria-labelledby="dropdownMenuAccount" style="top: 77px;">
        <span class="dropdown-item" ><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
        <span class="dropdown-item" >Don’t have an account?<br><a  data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
        <!--<div class="dropdown-divider"></div>
        <div class="card">
          <div class="card-header">
            Buyers
          </div>
          <div class="card-body">
          <a class="dropdown-item" href="./dahsboard" >Order History</a>
          <a class="dropdown-item" href="./dahsboard" >My Folders</a>
          <a class="dropdown-item" href="./dahsboard" >Notification Settings </a>
          <a class="dropdown-item" href="./dahsboard" >Advanced Settings</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            Video Owners
          </div>
          <div class="card-body">
          <a class="dropdown-item" href="./dash/dashboard" >Dashboard</a>
          <a class="dropdown-item" href="./dash/myvideos" >My Videos</a>
          <a class="dropdown-item" href="./dash/earnings" >Earnings Reports</a>
          <a class="dropdown-item" href="./dash/copies" >Report Illegal Copies</a>
          </div>
        </div>-->
      </div>';
}
?>
            
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
      <center><i class="fa fa-2x fa-shopping-cart"></i><br>CART (0)</center> 
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
          <a href="./index#signup">
          <center class="d-none d-submit-smbig-block" style="color:white;">SUBMIT VIDEO</center> 
          <center class="d-none d-submit-smsmall-block" style="color:white;">SUBMIT</center> 
          </a>
        </div>
        </div>
        </td>
        <td style="width:18%">
          <a class="navbar-brand js-scroll-trigger" href="./index"><img src="img/Licet Studios - Viral Video Licensing.svg" style="margin-right:0;" alt="Licet Studios" height="45"></a>
      
        </td>
        <td style="width:41%">
        <div class="row" style="margin-left:0;">
            <div class="dropdown show nav-link" id="accountdivSmall" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="accountDropdownSmall" aria-labelledby="dropdownMenuAccount">
        <span class="dropdown-item" ><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
        <span class="dropdown-item" >Don’t have an account?<br><a  data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
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
      <a href="cart" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPill" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
      </a>
    </div>
    </div>
      </td>
    </tr>

<tr>
<td colspan="3">
  <form class="input-group" method="get" action="./videos.php" >
    <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control"  placeholder="Search videos by Keyword or URL" value="">
    <span class="input-group-btn">
      <button class="btn btn-secondary orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
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
          <a class="navbar-brand js-scroll-trigger" href="./index.php" style="margin-right:0;"><img src="img/Licet Studios - Viral Video Licensing.svg" alt="Licet Studios" height="35"></a>
        </td>
        <td >
        <div class="row" style="margin-left:0;">
            <div class="dropdown show nav-link" id="accountdivXtraSmall" style="margin:auto 0 auto auto">
      <a href="#" role="button" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <center ><i class="fa fa-2x fa-user" ></i><br><span class="d-none d-llg-block">SIGN IN / UP</span></center>
      </a>
      <div class="dropdown-menu blackdropdown" id="accountDropdownXtraSmall" aria-labelledby="dropdownMenuAccount" style="top:50px;left:-90px;">
        <span class="dropdown-item" ><a class="btn btn-primary" style="width:100%;cursor:pointer;" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;">SIGN IN</a></span>
        <span class="dropdown-item" >Don’t have an account?<br><a  data-toggle="modal" data-target=".signupmodal" style="cursor: pointer;color:#F05F40;">Sign up here.</a></span>
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
      <a href="cart" role="button" id="dropdownCart" aria-haspopup="true" aria-expanded="false">
      <center><i class="fa fa-2x fa-shopping-cart"></i><span id="cartNumPillSmall" class="badge badge-pill" style="background-color:#F05F40;position: absolute;top: 0px;left: 36px;font-size: 10px;color:white">0</span></center>
      </a>
    </div>
    </div>
      </td>
    </tr>

  <tr>
    <td colspan="3">
      <form class="input-group" method="get" action="./videos.php" >
        <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xs"  placeholder="Search videos by Keyword or URL" value="">
        <input style="border-radius: 300px;border-bottom-right-radius: 0;border-top-right-radius: 0;" type="text" name="searchstr" class="form-control mobile-log-xss"  placeholder="Search videos" value="">
        <span class="input-group-btn">
          <button class="btn btn-secondary orange" type="submit" > <i class="fa fa-1x fa-search "></i></button>
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
          <center  style="color:white;">SUBMIT VIDEO</center> 
          </a>
        </div>
      </td>
  </tr>
</table>
  </div>  
  </nav>


  <script src="./angular/angularapp.js"></script>

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
        <p class="card-text" style="padding:35px;" >Please sign up by<br><a href="./index.php#signup">submitting your video here.</a></p>
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


</script>