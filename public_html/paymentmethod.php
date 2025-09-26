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
    // Resolve and use the service
    $userController = $container->get('UserController');
    $cartController = $container->get('CartController');

    $userLoggedIn = $userController->isLoggedIn();
    $cart = $cartController->getCartSummary();

    if (empty($cart['itemCount']) || $cart['itemCount'] === 0) {
        header('Location: videos.php');
        exit();
    }

    if (!isset($userLoggedIn)) {
        header('Location: customersignin.php');
        exit();
    }

    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
      <meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="MegaVid offers viral video licensing under fair and transparent conditions to assist owners of funny, amazing and popular internet videos increasing distribution, exposure, sales and protection!">
      <meta name="keywords" content="MegaVid, viral video licensing, make more money off your videos, viral videos, video licensing, viral video licensing company, internet video licensing, youtube video licensing, viral video protection, viral video distribution, video promotion, sell viral video, sell youtube video, license video for TV, MegaVid sign in">
      <meta name="author" content="">
      <title>Payment Method - Secure Checkout | MegaVid</title>

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">


      <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
      <link href="css/creative.css" rel="stylesheet">
      <link href="css/own.css" rel="stylesheet">
      <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="./img/favicon.ico" type="image/x-icon">


      <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-EJB1NVL6W7&amp;cx=c&amp;_slc=1"></script>
      <script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/44LqIOwVrGhp2lJ3fODa493O/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-81KiK8GhWyH80MsZl1vdzmMYc0XQX9aDGqEfT0ckWF5GLPX10rwo5y8vjpybBo6f"></script>
      <script async="" src="https://www.google-analytics.com/analytics.js"></script>
      <script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/44LqIOwVrGhp2lJ3fODa493O/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-81KiK8GhWyH80MsZl1vdzmMYc0XQX9aDGqEfT0ckWF5GLPX10rwo5y8vjpybBo6f"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="js/yt.min.js"></script>
      <!--<script src="js/own.js?v=1559481193"</script>-->
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <script>
          document.addEventListener("touchstart", function() {}, true);
      </script>

      <style>
          .tooltip-inner {
              max-width: 100%;
          }

          .btn-breadcrumb .btn:not(:last-child):after {
              content: " ";
              display: block;
              width: 0;
              height: 0;
              border-top: 17px solid transparent;
              border-bottom: 17px solid transparent;
              border-left: 10px solid rgb(0, 87, 255);
              position: absolute;
              top: 50%;
              margin-top: -17px;
              left: 100%;
              z-index: 3;
          }

          .btn-breadcrumb .btn:not(:last-child):before {
              content: " ";
              display: block;
              width: 0;
              height: 0;
              border-top: 17px solid transparent;
              border-bottom: 17px solid transparent;
              border-left: 10px solid rgb(173, 173, 173);
              position: absolute;
              top: 50%;
              margin-top: -17px;
              margin-left: 1px;
              left: 100%;
              z-index: 3;
          }

          /** The Spacing **/
          .btn-breadcrumb .btn {
              padding: 6px 12px 6px 24px;
          }

          .btn-breadcrumb .btn:first-child {
              padding: 6px 6px 6px 10px;
          }

          .btn-breadcrumb .btn:last-child {
              padding: 6px 18px 6px 24px;
          }

          /** Default button **/
          .btn-breadcrumb .btn.btn-def {
              background-color: DarkGray;
              color: white;
          }

          .btn-breadcrumb .btn.btn-def:not(:last-child):after {
              border-left: 10px solid DarkGray;
          }

          .btn-breadcrumb .btn.btn-def:not(:last-child):before {
              border-left: 10px solid DarkGray;
          }


          /** Active button **/
          .btn-breadcrumb .btn.btn-orange {
              background-color: rgb(0, 87, 255);
              color: white;
          }

          .btn-breadcrumb .btn.btn-orange:not(:last-child):after {
              border-left: 10px solid rgb(0, 87, 255);
          }

          .btn-breadcrumb .btn.btn-orange:not(:last-child):before {
              border-left: 10px solid rgb(0, 87, 255);
          }

          .form-signin {
              width: 100%;
              padding: 15px;
              margin: 0 auto;
              background-color: white;
              border-radius: 10px;
              max-width: 950px;
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

          .form-signin input {
              margin-bottom: 16px;
          }
      </style>

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
          <div class="clear-top" style="overflow:auto;padding-bottom:56px;">
              <style>
                  .checkoutNavLogo {
                      padding-left: 15px;
                      height: 55px;
                  }

                  .checkoutNavSecText {
                      color: white !important;
                      padding-right: 15px;
                  }

                  @media(max-width:510px) {
                      .checkoutNavLogo {
                          height: 45px;
                      }
                  }

                  @media(max-width:440px) {
                      .checkoutNavLogo {
                          height: 45px;
                      }

                      .checkoutNavSecText {
                          font-size: small;
                      }
                  }

                  @media(max-width:440px) {
                      .checkoutNavLogo {
                          height: 30px;
                      }
                  }

                  @media(max-width:440px) {
                      .checkoutNavSecText {
                          font-size: x-small;
                      }
                  }
              </style>

              <!-- Navigation -->
              <nav class="navbar navbar-expand-lg navbar-light fixed-top d-none d-llg-flex" id="mainNav" style="background-color:black;height:93px;">
                  <a class="navbar-brand js-scroll-trigger"><img class="checkoutNavLogo" src="img/blue-black-minimalist-play-media-logo-design.png" alt="MegaVid"></a>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a style="color:white;padding-right:15px;"><b>SECURE CHECKOUT</b></a>
                      </li>
                  </ul>
              </nav>


              <!-- Navigation -->
              <nav class="navbar navbar-expand-lg navbar-light d-llg-none d-xxl-flex" id="mainNav" style="background-color:black;height:93px;">
                  <a class="navbar-brand js-scroll-trigger"><img class="checkoutNavLogo" src="img/blue-black-minimalist-play-media-logo-design.png" alt="MegaVid"></a>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="checkoutNavSecText"><b>SECURE CHECKOUT</b></a>
                      </li>
                  </ul>
              </nav>
              <div class="container-fluid cartContainer" style="padding-left:15px;">
                  <div class="row" align="center" style="padding-top: 30px;">
                      <div class="col-12" style="padding:0;">
                          <div class="btn-group btn-breadcrumb" style="margin:auto">
                              <a class="btn btn-orange" href="cart.php">1. <span class="d-none d-md-block d-xl-inline">Your Cart</span></a>
                              <div class="btn btn-orange">2. <span class="d-none d-md-block d-xl-inline">SIGN IN / UP</span></div>
                              <a class="btn btn-orange" href="licenseeinfo.php">3. <span class="d-none d-md-block d-xl-inline">Licensee<span class="noneDisp-370"> Info</span></span></a>
                              <div class="btn btn-orange">4. <span class="d-inline d-md-block d-xl-inline">Payment<span class="noneDisp-400"> Method</span></span></div>
                              <div class="btn btn-def">5. <span class="d-none d-md-block d-xl-inline"><span class="noneDisp-860">Review &amp;</span> Place Order</span></div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <form class="form-signin" style="margin-top:2rem;" method="post" action="placeorder.php">
                              <h1 class="h3 mb-3 font-weight-normal">Payment Method</h1>

                              <table style="width:100%;">
                                  <tbody>
                                      <tr>
                                          <td style="width:25px;border:none;">
                                              <input type="radio" name="payment" value="paypal" id="radioPayPal" required="">
                                          </td>
                                          <td style="border:none;">
                                              <label for="radioPayPal"><b> PayPal</b></label>
                                          </td>
                                          <td class="paymentMethodTblLogo">
                                              <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" class="paymentMethodIcon">
                                          </td>
                                          <td>
                                              <i class="fa fa-info-circle d-block d-sm-none" style="padding-left:1em;" data-toggle="tooltip" data-trigger="click" title="" aria-hidden="true" data-original-title="If you select PayPal as payment method you will be directed to the PayPal website after your order has been placed. At PayPal you can also choose to pay for your order via Credit Card (Visa, MasterCard, Discover, American Express)."></i>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="border:none;padding-bottom: 2rem;">
                                          </td>
                                          <td colspan="2" style="padding-bottom: 2rem;padding-right: 25px;text-align:justify;border:none;" class="d-none d-sm-table-cell">
                                              If you select PayPal as payment method you will be directed to the PayPal website after your order has been placed. At PayPal you can also choose to pay for your order via Credit Card (Visa, MasterCard, Discover, American Express). </td>

                                      </tr>
                                      <tr>
                                          <td style="height:19px;border-top: 1pt solid rgba(0, 0, 0, 0.125);width:100%;" colspan="3"></td>
                                      </tr>
                                      <tr>
                                          <td style="width:25px;border:none;">
                                              <input type="radio" name="payment" value="bank" id="radioBank" checked="checked" required="">
                                          </td>
                                          <td style="border:none;">
                                              <label for="radioBank"><b>Bank Transfer</b></label>
                                          </td>
                                          <td>
                                              <img src="./icon/if_bank_transfer_213750.png" class="paymentMethodIcon">
                                          </td>
                                          <td style="border:none;">
                                              <i class="fa fa-info-circle d-block d-sm-none" style="padding-left:1em;" aria-hidden="true" data-toggle="tooltip" data-trigger="click" title="" data-original-title="If you select Bank Transfer as payment method you agree to transfer the Order Total to our bank account within 14 days after your order has been placed. Our bank account information can be found in the order confirmation and the attached invoice."></i>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                          </td>
                                          <td colspan="2" style="padding-right: 25px;text-align:justify;" class="d-none d-sm-table-cell">
                                              If you select Bank Transfer as payment method you agree to transfer the Order Total to our bank account within 14 days after your order has been placed. Our bank account information can be found in the order confirmation and the attached invoice. </td>
                                      </tr>
                                  </tbody>
                              </table>

                              <button class="btn btn-lg btn-primary btn-block" style="margin-top:2rem; margin-bottom:17px;" name="setPaymentMethod" type="submit">Continue</button>
                          </form>
                      </div>

                  </div>
              </div>
          </div>
      </div>

      <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
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
                      <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>Contact us</span></h3>
                      <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>

                  <div class="container" style="padding:2rem;padding-top:0;">
                      <form id="contactForm" class="text-left" action="" method="post">
                          <div class="login-form-main-message"></div>
                          <div class="main-login-form">
                              <div style="padding-bottom:1em;">Get in touch via the contact form below or contact us via email at <a href="mailto:info@megavid.com">info@megavid.com</a> or via phone at <a href="tel:4927237195301">+49 (0) 272 371 953 01</a> (Monday-Friday from 9:00 a.m. to 12:00 a.m. and 2:30 p.m. to 5:30 p.m. CEST).</div>
                              <label>Name</label><br>
                              <input type="text" class="form-control" name="contactname" id="contactname" placeholder="Name"><br>
                              <label>Company / Organization (optional)</label><br>
                              <input type="text" class="form-control" name="contactcompany" id="comp" placeholder="Company"><br>
                              <label>Email</label><br>
                              <input type="email" class="form-control" name="contactemail" id="contactemail" placeholder="Email" oninvalid="this.setCustomValidity('Enter a valid email address')" required=""><br>
                              <label>Subject</label><br>
                              <select class="selectpicker form-control" name="selVal" id="selVal">
                                  <option selected="" disabled="">Select</option>
                                  <option>Licensing Inquiry</option>
                                  <option>Support for Video Owners</option>
                                  <option>Error Reporting</option>
                                  <option>Other (specify)</option>
                              </select><input type="text" class="form-control" name="subject" id="sub" placeholder="Subject"><br>
                              <label>Message</label><br>
                              <textarea rows="4" cols="100" name="contacttext" style="width:100%;"></textarea>
                              <div class="h-captcha" data-sitekey="97388910-8546-40f3-a850-2b7b6cf51ade"></div>
                              <div class="text-center">
                                  <button class="btn btn-default btn-xl orange" name="contactsub">
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

                      <p>MegaVid</p>
                      <p>Elisabeth-Anna-Straße 9</p>
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
                      <p>info@megavid.com</p>
                  </div>


              </div>
          </div>
      </div>
      <div class="modal fade" id="howToBuy-modal" tabindex="-1" role="dialog" aria-labelledby="HowToBuyModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content ">
                  <div class="modal-header card-header" style="margin-bottom:1rem;">
                      <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>How To buy videos at MegaVid</span></h3>
                      <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>

                  <div class="accordion" id="accordionHowToBuy">
                      <div class="card">
                          <div class="card-header" role="tab" id="headingHTbuy0">
                              <h5 class="mb-0">
                                  <a data-toggle="collapse" href="#htbuycollapse0" aria-expanded="true" aria-controls="collapse0">
                                      1. FIND VIDEOS &amp; OPEN DETAIL PAGES
                                  </a>
                              </h5>
                          </div>

                          <div id="htbuycollapse0" class="collapse show" role="tabpanel" data-parent="#accordionHowToBuy">
                              <div class="card-body">
                                  <p>Search our video library by keywords, video URLs, item IDs, or filter it by categories and dates. To find out more about a specific video, open its detail page by clicking on “→ LICENSE VIDEO FROM €50.00”.</p>
                                  <p>
                                  </p>
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
                                  <p>If you don’t find the right package or need help, please get in touch: <a href="mailto:licensing@megavid.com">licensing@megavid.com</a></p>
                                  <p>
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" role="tab" id="headingHTbuyTwo">
                              <h5 class="mb-0">
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseTwo">
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
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseThree">
                                      4. GO TO CHECKOUT &amp; SIGN IN / UP
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
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFour">
                                      5. ENTER LICENSEE INFO
                                  </a>
                              </h5>
                          </div>

                          <div id="htbuycollapseFour" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
                              <div class="card-body">
                                  <p>Fill in contact and billing address of the company / organization which shall be entitled to use the videos you have on your cart and enter into the <a href="/buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a>; private consumers are not admitted.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" role="tab" id="headingHTbuyFive">
                              <h5 class="mb-0">
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFive">
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
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseFive2">
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
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseSix">
                                      8. DOWNLOAD VIDEOS
                                  </a>
                              </h5>
                          </div>

                          <div id="htbuycollapseSix" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
                              <div class="card-body">
                                  <p>Currently you need to download videos you purchased at MegaVid from YouTube. You will find the respective videos’ YouTube-URL(s) in your order confirmation and in your order history.
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
                                  <a class="collapsed" data-toggle="collapse" href="#htbuycollapseSeven">
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
                      <a href="mailto:licensing@megavid.com ">licensing@megavid.com </a><br>
                      <a class="btn btn-default btn-primary" data-dismiss="modal" data-toggle="modal" data-target=".contact-modal">Contact us</a>
                  </div>
              </div>
          </div>
      </div>

      <style>
          .footerLinkRowCheckout {
              padding: 0px;
              margin-top: auto;
              margin-bottom: auto;
          }

          @media(max-width:1199px) {
              .footerLinkRowCheckout {
                  text-align: center;
              }
          }

          .footerLinkCheckoutFirst {
              margin-left: 0;
          }

          .footerLinkCheckoutLast {
              margin-right: 0;
          }

          @media(max-width:1199px) {
              .footerLinkCheckoutFirst {
                  margin-left: 0.5rem;
              }

              .footerLinkCheckoutLast {
                  margin-right: 0.5rem;
              }
          }
      </style>

      <!-- Footer -->
      <div class="footerCheckout">
          <div class="container-fluid" style="background-color:rgba(0, 0, 0, 0.03);padding-top:1rem;padding-bottom:1rem;padding-left:31px;padding-right:31px;">
              <div>
                  <div class="row" style="margin:auto;">
                      <div class="col-xs-12 col-lg-12 col-xl-9 footerLinkRowCheckout">
                          <a class="footerLinkCheckout footerLinkCheckoutFirst" data-toggle="modal" data-target=".contact-modal" target="_blank">Contact us</a>
                          <div class="d-block d-lg-none"></div>
                          <a class="footerLinkCheckout" href="javascript:void();" data-toggle="modal" data-target="#howToBuy-modal">How to Buy Videos?</a>
                          <div class="d-block d-lg-none"></div>
                          <a class="footerLinkCheckout" data-toggle="modal" data-target=".imprintModal" target="_blank">Imprint</a>
                          <div class="d-block d-lg-none"></div>
                          <a class="footerLinkCheckout" href="./privacy.php" target="_blank">Privacy Policy</a>
                          <div class="d-block d-lg-none"></div>
                          <a class="footerLinkCheckout" href="./tos.pdf" target="_blank">Terms of Service</a>
                          <div class="d-block d-lg-none"></div>
                          <a class="footerLinkCheckout footerLinkCheckoutLast" href="buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a>
                      </div>
                      <div class="col-xs-12 col-lg-12 col-xl-3" style="padding:0px;color:#A1A1A1;">
                          <div class="float-right d-none d-xl-block">
                              © MegaVid 2025 </div>
                          <div class="text-center d-block d-xl-none">
                              © MegaVid 2025 </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- ./Footer --> <!-- Bootstrap core JavaScript -->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
      <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="js/creative.min.js"></script>
      <script>
          $(function() {
              $('[data-toggle="tooltip"]').tooltip()
          })
          $('body').on('click', function(e) {
              $('[data-toggle="tooltip"]').each(function() {
                  //the 'is' for buttons that trigger popups
                  //the 'has' for icons within a button that triggers a popup
                  if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.tooltip').has(e.target).length === 0) {
                      $(this).tooltip('hide');
                  }
              });
          });
      </script>


  </body>

  </html>