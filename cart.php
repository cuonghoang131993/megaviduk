
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Megavid offers viral video licensing under fair and transparent conditions to assist owners of funny, amazing and popular internet videos increasing distribution, exposure, sales and protection!">
    <meta name="keywords" content="megavid, megavid gmbh, viral video licensing, make more money off your videos, viral videos, video licensing, viral video licensing company, internet video licensing, youtube video licensing, viral video protection, viral video distribution, video promotion, sell viral video, sell youtube video, license video for TV, megavid sign in">
    <meta name="author" content="">
    <title>Your Cart - Secure Checkout | Megavid</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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
<!-- End Google Analytics -->    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/own.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css">

    <style>
        .qtip-youtube .qtip-content{
        padding: 0;
    }
        .row.equal {
        display: flex;
        flex-wrap: wrap;
        }

    .slider {
        width: 95%;
        margin: 30px auto;
    }

    .slick-slide {
      margin: 0px 20px;
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
      opacity: 1;
    }

    .slick-active {
      opacity: 1;
    }

    .slick-current {
      opacity: 1;
    }


.tooltip-inner {
  max-width: 400px;
}
.breadcrumbCartCol{
  padding:0;
}
@media(min-width:1200px){
  .breadcrumbCartCol{
    padding-right:31px;
  }
}
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

      <script src="angular/angularapp.js"></script>


</head>
<body id="page-top"  style="background-color:#EAE9E9;">
    <?php
      include_once('components/header.php');
    ?>


<div class="container-fluid cartContainer">
<div class="row" align="center" style="padding-top: 30px;">
    <div class="col-12 breadcrumbCartCol" >
      <div class="btn-group btn-breadcrumb" style="margin:auto">
          <div class="btn btn-orange">1. <span class="d-inline d-md-block d-xl-inline">Your Cart</span></div>
          <div class="btn btn-def">2. <span class="d-none d-md-block d-xl-inline">SIGN IN / UP</span></div>
          <div class="btn btn-def">3. <span class="d-none d-md-block d-xl-inline">Licensee Info</span></div>
          <div class="btn btn-def">4. <span class="d-none d-md-block d-xl-inline">Payment Method</span></div>
          <div class="btn btn-def">5. <span class="d-none d-md-block d-xl-inline"><span class="noneDisp-860">Review &amp;</span> Place Order</span></div>
      </div>
    </div>
</div>

<app-buy-button-top checkout="true"></app-buy-button-top>

<div class="row">
<div class="col-xl-8" >

<div class="row" style="margin-top:2rem;">
  <app-cart-list ></app-cart-list>
</div>



<script>

</script>

        <div class="row d-none d-xl-flex" style="padding-top:8rem;">
        <div class="card" style="width:100%; margin:0;margin-bottom:2em;">
        <h5 class="card-header text-center" style="background-color:white;border-bottom: 0;">
        Recommended Videos
        </h5>
            <div class="card-body">

            <?php
        include_once('models/video.php');

          $recommendedVideos = [];
          $recommendedVideos[] = new Video("vFTD0rqL5Z0", "Crazy Landslide Crashes into Power Line Causing an Explosion", "");
          $recommendedVideos[] = new Video("dlvm-FNgnUU", "HORROR FLOOD: River Devastates City After Massive Rainfalls In Turkey", "");

        ?>

 <div class="slider regular"> 
  <?php
  foreach($recommendedVideos as $item) {
    echo '<div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark(\''. $item->id .'\');" id="bookmarkSetter-'. $item->id .'" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v='. $item->id .'">
                <div class="youtube" data-embed="'. $item->id .'"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:09</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v='. $item->id .'">'. $item->title .'</a>
                  </h4>
                  <input type="hidden" value="141.45" name="'. $item->id .'">
                  <a class="btn btn-default  orange" id="btn-'. $item->id .'" href="./footage?v='. $item->id .'" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div>';
  }
  ?>

</div>
        </div>
        </div>
        </div>

</div>

<table class="table d-table d-xl-none">
              <thead class="card-header" style="background-color:white;">
                <tr>
                  <th scope="col" style="vertical-align: middle;"><b>ORDER SUMMARY</b></th>
                </tr>
              </thead>
          </table>
<div class="col-xl-4" align = "center">
<div class="row" style="margin:auto;">
  <div class="col" style="padding-left:0;padding-right:16px;">
              <app-order-summary></app-order-summary>
  </div>
</div>

<div class="row" style="margin:auto;">
<div class="col" style="padding-left:0;padding-right:16px;">
<div class="card orderSummaryCardBtm">
        <h5 class="card-header" style="background-color:white;border-bottom: 0">
        Accepted Payment Methods
        </h5>
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr class="d-table-row paymentRowCartLarge"><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" border="0" class="paypalLogoCart" alt="PayPal Acceptance Mark"></a></td><td align="center"><img class="bankTransLogoCart" src="./icon/if_bank_transfer_213750.png" ></td></tr>
<tr class="d-none paymentRowCartSmall">
  <td align="center">
    <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
      <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" border="0" class="paypalLogoCart" alt="PayPal Acceptance Mark">
    </a>
  </td>
</tr>
<tr class="d-none paymentRowCartSmall">
  <td align="center">
    <img class="bankTransLogoCart" src="./icon/if_bank_transfer_213750.png" >
  </td>
</tr>
</table><!-- PayPal Logo -->

</div>
</div>
</div>


<div class="row" style="margin:auto;">
<div class="col" style="padding-left:0;padding-right:16px;">
<div class="card orderSummaryCardBtm">
        <h5 class="card-header" style="background-color:white;border-bottom: 0">
        Secure Checkout
        </h5>
        <img src="./icon/comodo_secure_seal.png" style="padding:10px;width:200px;margin:auto;">
</div>
</div>

</div>
</div>
</div>
<div class="row d-flex d-xl-none" style="padding-top:2rem;">
  <div class="col">
        <div class="card text-center" style="width:100%; margin:0;margin-bottom:2em;">
        <h5 class="card-header" style="background-color:white;border-bottom: 0">
        Recommended Videos
        </h5>
            <div class="card-body text-left">
            <div class="slider regular">
                          <div class="carousel-item active">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('vFTD0rqL5Z0');" id="bookmarkSetter-vFTD0rqL5Z0" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=vFTD0rqL5Z0">
                <div class="youtube" data-embed="vFTD0rqL5Z0"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:09</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=vFTD0rqL5Z0">Uncut and Unseen: Greenland Tsunami (First Wave to Largest Wave in 6 mins.)</a>
                  </h4>
                  <input type="hidden" value="141.45" name="vFTD0rqL5Z0">
                  <a class="btn btn-default  orange" id="btn-vFTD0rqL5Z0" href="./footage?v=vFTD0rqL5Z0" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('16bAhJSL2-o');" id="bookmarkSetter-16bAhJSL2-o" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=16bAhJSL2-o">
                <div class="youtube" data-embed="16bAhJSL2-o"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:50</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=16bAhJSL2-o">MEGA-TSUNAMI caused by LANDSLIDE devastates village - Camera 1 | Greenland, Nuugaatsiaq</a>
                  </h4>
                  <input type="hidden" value="169.74" name="16bAhJSL2-o">
                  <a class="btn btn-default  orange" id="btn-16bAhJSL2-o" href="./footage?v=16bAhJSL2-o" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('FlUsnc2KxiM');" id="bookmarkSetter-FlUsnc2KxiM" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=FlUsnc2KxiM">
                <div class="youtube" data-embed="FlUsnc2KxiM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:14</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=FlUsnc2KxiM">GREENLAND TSUNAMI Hits Village Caught On Camera - Camera 2 (Multiple Clips)</a>
                  </h4>
                  <input type="hidden" value="162.36" name="FlUsnc2KxiM">
                  <a class="btn btn-default  orange" id="btn-FlUsnc2KxiM" href="./footage?v=FlUsnc2KxiM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('dlvm-FNgnUU');" id="bookmarkSetter-dlvm-FNgnUU" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=dlvm-FNgnUU">
                <div class="youtube" data-embed="dlvm-FNgnUU"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">03:08</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=dlvm-FNgnUU">HORROR FLOOD: River Devastates City After Massive Rainfalls In Turkey</a>
                  </h4>
                  <input type="hidden" value="141.45" name="dlvm-FNgnUU">
                  <a class="btn btn-default  orange" id="btn-dlvm-FNgnUU" href="./footage?v=dlvm-FNgnUU" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('5Eq0MjUU1pM');" id="bookmarkSetter-5Eq0MjUU1pM" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=5Eq0MjUU1pM">
                <div class="youtube" data-embed="5Eq0MjUU1pM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:32</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=5Eq0MjUU1pM">Crazy Floods Destroying Homes and Businesses in Bozkurt, Turkey</a>
                  </h4>
                  <input type="hidden" value="126.50" name="5Eq0MjUU1pM">
                  <a class="btn btn-default  orange" id="btn-5Eq0MjUU1pM" href="./footage?v=5Eq0MjUU1pM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('hVJg5ev1viA');" id="bookmarkSetter-hVJg5ev1viA" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=hVJg5ev1viA">
                <div class="youtube" data-embed="hVJg5ev1viA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:36</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=hVJg5ev1viA">Massive Landslide Destroys Homes in Istanbul</a>
                  </h4>
                  <input type="hidden" value="126.50" name="hVJg5ev1viA">
                  <a class="btn btn-default  orange" id="btn-hVJg5ev1viA" href="./footage?v=hVJg5ev1viA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('wmi-tcrqP3o');" id="bookmarkSetter-wmi-tcrqP3o" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=wmi-tcrqP3o">
                <div class="youtube" data-embed="wmi-tcrqP3o"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">05:35</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=wmi-tcrqP3o">Ganges River Erosion: Locals See As Their Whole Village Is Being Swallowed Up</a>
                  </h4>
                  <input type="hidden" value="126.50" name="wmi-tcrqP3o">
                  <a class="btn btn-default  orange" id="btn-wmi-tcrqP3o" href="./footage?v=wmi-tcrqP3o" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('-onwighzPDo');" id="bookmarkSetter--onwighzPDo" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=-onwighzPDo">
                <div class="youtube" data-embed="-onwighzPDo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:08</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=-onwighzPDo">Ganges River Erosion: Locals Attempting to Protect Their Village From Flood</a>
                  </h4>
                  <input type="hidden" value="126.50" name="-onwighzPDo">
                  <a class="btn btn-default  orange" id="btn--onwighzPDo" href="./footage?v=-onwighzPDo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('0gQ1z6Oztsw');" id="bookmarkSetter-0gQ1z6Oztsw" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=0gQ1z6Oztsw">
                <div class="youtube" data-embed="0gQ1z6Oztsw"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:01</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=0gQ1z6Oztsw">AFTERMATH: The Result of the Massive Floods that Hit Bozkurt, Turkey</a>
                  </h4>
                  <input type="hidden" value="126.50" name="0gQ1z6Oztsw">
                  <a class="btn btn-default  orange" id="btn-0gQ1z6Oztsw" href="./footage?v=0gQ1z6Oztsw" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('DRG8kCFhLHk');" id="bookmarkSetter-DRG8kCFhLHk" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=DRG8kCFhLHk">
                <div class="youtube" data-embed="DRG8kCFhLHk"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:57</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=DRG8kCFhLHk">Microburst Comes Out Of Nowhere And Blows Off A Rooftop In Germany</a>
                  </h4>
                  <input type="hidden" value="126.50" name="DRG8kCFhLHk">
                  <a class="btn btn-default  orange" id="btn-DRG8kCFhLHk" href="./footage?v=DRG8kCFhLHk" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('LxfwXDUDbbo');" id="bookmarkSetter-LxfwXDUDbbo" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=LxfwXDUDbbo">
                <div class="youtube" data-embed="LxfwXDUDbbo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:29</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=LxfwXDUDbbo">Destructive Tornado Demolishes Locals’ Homes in Moravská Nová Ves</a>
                  </h4>
                  <input type="hidden" value="126.50" name="LxfwXDUDbbo">
                  <a class="btn btn-default  orange" id="btn-LxfwXDUDbbo" href="./footage?v=LxfwXDUDbbo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('aftWRoCb1d0');" id="bookmarkSetter-aftWRoCb1d0" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=aftWRoCb1d0">
                <div class="youtube" data-embed="aftWRoCb1d0"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:22</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=aftWRoCb1d0">Ganges River Erosion: Local's Home Collapses And Lands In the River</a>
                  </h4>
                  <input type="hidden" value="126.50" name="aftWRoCb1d0">
                  <a class="btn btn-default  orange" id="btn-aftWRoCb1d0" href="./footage?v=aftWRoCb1d0" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('o4aqo_llcMc');" id="bookmarkSetter-o4aqo_llcMc" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=o4aqo_llcMc">
                <div class="youtube" data-embed="o4aqo_llcMc"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">07:07</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=o4aqo_llcMc">3 Days of Continuous Landslides at Pentreath Beach</a>
                  </h4>
                  <input type="hidden" value="126.50" name="o4aqo_llcMc">
                  <a class="btn btn-default  orange" id="btn-o4aqo_llcMc" href="./footage?v=o4aqo_llcMc" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('oejE217H_PM');" id="bookmarkSetter-oejE217H_PM" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=oejE217H_PM">
                <div class="youtube" data-embed="oejE217H_PM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:56</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=oejE217H_PM">Ganges River Erosion: Abandoned Home Crashes Into The River After Relentless Flood</a>
                  </h4>
                  <input type="hidden" value="126.50" name="oejE217H_PM">
                  <a class="btn btn-default  orange" id="btn-oejE217H_PM" href="./footage?v=oejE217H_PM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('HxIMs7DlDEY');" id="bookmarkSetter-HxIMs7DlDEY" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=HxIMs7DlDEY">
                <div class="youtube" data-embed="HxIMs7DlDEY"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:34</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=HxIMs7DlDEY">Ganges River Erosion: Local Mosque Is Eaten Up By The River As The Ground Around It Crumbles</a>
                  </h4>
                  <input type="hidden" value="126.50" name="HxIMs7DlDEY">
                  <a class="btn btn-default  orange" id="btn-HxIMs7DlDEY" href="./footage?v=HxIMs7DlDEY" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('DisUyaUketk');" id="bookmarkSetter-DisUyaUketk" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=DisUyaUketk">
                <div class="youtube" data-embed="DisUyaUketk"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">03:17</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=DisUyaUketk">Giant Rolling Iceberg Creates a Tsunami-like Wave</a>
                  </h4>
                  <input type="hidden" value="108.24" name="DisUyaUketk">
                  <a class="btn btn-default  orange" id="btn-DisUyaUketk" href="./footage?v=DisUyaUketk" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('gygbEtu5u6w');" id="bookmarkSetter-gygbEtu5u6w" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=gygbEtu5u6w">
                <div class="youtube" data-embed="gygbEtu5u6w"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">09:58</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=gygbEtu5u6w">MASSIVE Debris Flow Builds Up Within Minutes Near Home (CCTV)</a>
                  </h4>
                  <input type="hidden" value="126.50" name="gygbEtu5u6w">
                  <a class="btn btn-default  orange" id="btn-gygbEtu5u6w" href="./footage?v=gygbEtu5u6w" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('i6QeZtMyjso');" id="bookmarkSetter-i6QeZtMyjso" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=i6QeZtMyjso">
                <div class="youtube" data-embed="i6QeZtMyjso"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:53</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=i6QeZtMyjso">Unexpected 'Rogue Wave' Nearly Smashes Boat Near The Coast of Mexico</a>
                  </h4>
                  <input type="hidden" value="126.50" name="i6QeZtMyjso">
                  <a class="btn btn-default  orange" id="btn-i6QeZtMyjso" href="./footage?v=i6QeZtMyjso" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('QgjQUPDAx_g');" id="bookmarkSetter-QgjQUPDAx_g" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=QgjQUPDAx_g">
                <div class="youtube" data-embed="QgjQUPDAx_g"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">05:18</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=QgjQUPDAx_g">Rapid Flash Flood Cause Parked Vehicles To Flee!</a>
                  </h4>
                  <input type="hidden" value="126.50" name="QgjQUPDAx_g">
                  <a class="btn btn-default  orange" id="btn-QgjQUPDAx_g" href="./footage?v=QgjQUPDAx_g" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('GNsdpbBei2A');" id="bookmarkSetter-GNsdpbBei2A" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=GNsdpbBei2A">
                <div class="youtube" data-embed="GNsdpbBei2A"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:37</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=GNsdpbBei2A">Mini-Tsunami Waves Caused By A Large Glacier Calving Hit A Small Harbor In Greenland</a>
                  </h4>
                  <input type="hidden" value="120.75" name="GNsdpbBei2A">
                  <a class="btn btn-default  orange" id="btn-GNsdpbBei2A" href="./footage?v=GNsdpbBei2A" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('sCa9payNpSo');" id="bookmarkSetter-sCa9payNpSo" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=sCa9payNpSo">
                <div class="youtube" data-embed="sCa9payNpSo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:37</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=sCa9payNpSo">Locals Gather As Flash Flooding Happens In Wadi Masah </a>
                  </h4>
                  <input type="hidden" value="105.00" name="sCa9payNpSo">
                  <a class="btn btn-default  orange" id="btn-sCa9payNpSo" href="./footage?v=sCa9payNpSo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('0STxbYuXNI4');" id="bookmarkSetter-0STxbYuXNI4" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=0STxbYuXNI4">
                <div class="youtube" data-embed="0STxbYuXNI4"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:01</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=0STxbYuXNI4">Massive High Tide Wave Almost Hits Bystanders Near a Pier in Kolkata</a>
                  </h4>
                  <input type="hidden" value="89.25" name="0STxbYuXNI4">
                  <a class="btn btn-default  orange" id="btn-0STxbYuXNI4" href="./footage?v=0STxbYuXNI4" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('RVwLHX6lgzQ');" id="bookmarkSetter-RVwLHX6lgzQ" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=RVwLHX6lgzQ">
                <div class="youtube" data-embed="RVwLHX6lgzQ"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:38</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=RVwLHX6lgzQ">INCREDIBLE COLLAPSE TRIGGERED BY GLACIER CALVING | South America, Chile</a>
                  </h4>
                  <input type="hidden" value="169.74" name="RVwLHX6lgzQ">
                  <a class="btn btn-default  orange" id="btn-RVwLHX6lgzQ" href="./footage?v=RVwLHX6lgzQ" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('pKd0PCI6Sx4');" id="bookmarkSetter-pKd0PCI6Sx4" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=pKd0PCI6Sx4">
                <div class="youtube" data-embed="pKd0PCI6Sx4"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:36</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=pKd0PCI6Sx4">'TSUNAMI-LIKE WAVES' Hit Village in Indonesia (Tidal Bore) | Kampar River (Sumatra)</a>
                  </h4>
                  <input type="hidden" value="141.45" name="pKd0PCI6Sx4">
                  <a class="btn btn-default  orange" id="btn-pKd0PCI6Sx4" href="./footage?v=pKd0PCI6Sx4" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('QEWENb7eNBw');" id="bookmarkSetter-QEWENb7eNBw" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=QEWENb7eNBw">
                <div class="youtube" data-embed="QEWENb7eNBw"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:39</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=QEWENb7eNBw">FLASH FLOOD: Drivers TRAPPED In Traffic Fear For Their Lives!</a>
                  </h4>
                  <input type="hidden" value="141.45" name="QEWENb7eNBw">
                  <a class="btn btn-default  orange" id="btn-QEWENb7eNBw" href="./footage?v=QEWENb7eNBw" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('M3NxW4hL-tM');" id="bookmarkSetter-M3NxW4hL-tM" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=M3NxW4hL-tM">
                <div class="youtube" data-embed="M3NxW4hL-tM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:44</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=M3NxW4hL-tM">Ship in Storm | Multiple MONSTER WAVES Hit Rescue Vessel in the North Sea! [See Until End]</a>
                  </h4>
                  <input type="hidden" value="141.45" name="M3NxW4hL-tM">
                  <a class="btn btn-default  orange" id="btn-M3NxW4hL-tM" href="./footage?v=M3NxW4hL-tM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('T2MtSjsVHE8');" id="bookmarkSetter-T2MtSjsVHE8" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=T2MtSjsVHE8">
                <div class="youtube" data-embed="T2MtSjsVHE8"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:17</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=T2MtSjsVHE8">GIANT Iceberg 'Shooter' Triggered By Massive Glacier Calving [4K]</a>
                  </h4>
                  <input type="hidden" value="162.36" name="T2MtSjsVHE8">
                  <a class="btn btn-default  orange" id="btn-T2MtSjsVHE8" href="./footage?v=T2MtSjsVHE8" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('DUbDwek6rAQ');" id="bookmarkSetter-DUbDwek6rAQ" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=DUbDwek6rAQ">
                <div class="youtube" data-embed="DUbDwek6rAQ"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:44</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=DUbDwek6rAQ">Ship in Storm | MONSTER WAVE DESTROYS Oil Tanker's Bridge in Baltic Sea!</a>
                  </h4>
                  <input type="hidden" value="141.45" name="DUbDwek6rAQ">
                  <a class="btn btn-default  orange" id="btn-DUbDwek6rAQ" href="./footage?v=DUbDwek6rAQ" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('Jno2DawFSfg');" id="bookmarkSetter-Jno2DawFSfg" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=Jno2DawFSfg">
                <div class="youtube" data-embed="Jno2DawFSfg"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:59</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=Jno2DawFSfg">Fishing Trawler Tossed Around Like a Toy in Rough Seas and Massive Waves [4K]</a>
                  </h4>
                  <input type="hidden" value="169.74" name="Jno2DawFSfg">
                  <a class="btn btn-default  orange" id="btn-Jno2DawFSfg" href="./footage?v=Jno2DawFSfg" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div><div class="carousel-item">
              <div class="card d-block" >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('4u06QM8pX7E');" id="bookmarkSetter-4u06QM8pX7E" style="cursor:pointer;"><i style="font-size:24px;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a href="./footage?v=4u06QM8pX7E">
                <div class="youtube" data-embed="4u06QM8pX7E"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:50</font></div>
                </div>
                </a>
                  <h4 class="card-title carousselItemTitle">
                    <a class="videoInfoLink" <a href="./footage?v=4u06QM8pX7E">Ship in Storm: Oil Tanker Caught In Horrible Storm In the North Sea</a>
                  </h4>
                  <input type="hidden" value="141.45" name="4u06QM8pX7E">
                  <a class="btn btn-default  orange" id="btn-4u06QM8pX7E" href="./footage?v=4u06QM8pX7E" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
              </div>

<div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header card-header" style="margin-bottom:1rem;">
                <h3 class="modal-title" style="color:#DE0404;font-weight: bold;margin:auto;"><span>SIGN IN</span></h3>
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


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    
    <script src="js/creative.min.js"></script>
    <script src="js/yt.min.js"></script>
    <script src="vendor/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

    <script>
      $(function () {
          $(".regular").slick({
              autoplay: true,
              autoplaySpeed: 9000,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
          });
      });
    </script>

</body>
</html>