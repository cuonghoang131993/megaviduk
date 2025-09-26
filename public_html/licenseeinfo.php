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
    header('Location: videos');
    exit();
  }

  if (!isset($userLoggedIn)) {
    header('Location: customersignin');
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
    <meta name="keywords" content="MegaVid, viral video licensing, make more money off your videos, viral videos, video licensing, viral video licensing company, internet video licensing, youtube video licensing, viral video protection, viral video distribution, video promotion, sell viral video, sell youtube video, license video for TV, licet studios sign in">
    <meta name="author" content="">
    <title>Licensee Info - Secure Checkout | MegaVid</title>

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

    <script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/44LqIOwVrGhp2lJ3fODa493O/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-81KiK8GhWyH80MsZl1vdzmMYc0XQX9aDGqEfT0ckWF5GLPX10rwo5y8vjpybBo6f"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-EJB1NVL6W7&amp;cx=c&amp;_slc=1"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/44LqIOwVrGhp2lJ3fODa493O/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-81KiK8GhWyH80MsZl1vdzmMYc0XQX9aDGqEfT0ckWF5GLPX10rwo5y8vjpybBo6f"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/yt.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      document.addEventListener("touchstart", function() {}, true);
    </script>

    <style>
      .tooltip-inner {
        max-width: 300px;
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
        border-radius: 10px;
        max-width: 650px;
        background-color: white;
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

      /* The checkCont */
      .checkCont {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 1rem;
        margin-top: 1rem;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default checkbox */
      .checkCont input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }

      /* Create a custom checkbox */
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
      }

      /* On mouse-over, add a grey background color */
      .checkCont:hover input~.checkmark {
        background-color: #ccc;
      }

      /* When the checkbox is checked, add a blue background */
      .checkCont input:checked~.checkmark {
        background-color: rgb(0, 87, 255);
      }

      /* Create the checkmark/indicator (hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the checkmark when checked */
      .checkCont input:checked~.checkmark:after {
        display: block;
      }

      /* Style the checkmark/indicator */
      .checkCont .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }

      /* Fix BS3 tooltip */
      @supports (-webkit-overflow-scrolling: touch) {

        /* CSS specific to iOS devices */
        body {
          cursor: pointer;
        }
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
          <a class="navbar-brand js-scroll-trigger"><img class="checkoutNavLogo" src="img/blue-black-minimalist-play-media-logo-design.png" alt="Licet Studios"></a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a style="color:white;padding-right:15px;"><b>SECURE CHECKOUT</b></a>
            </li>
          </ul>
        </nav>


        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light d-llg-none d-xxl-flex" id="mainNav" style="background-color:black;height:93px;">
          <a class="navbar-brand js-scroll-trigger"><img class="checkoutNavLogo" src="img/blue-black-minimalist-play-media-logo-design.png" alt="Licet Studios"></a>
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
                <div class="btn btn-orange">3. <span class="d-inline d-md-block d-xl-inline">Licensee<span class="noneDisp-370"> Info</span></span></div>
                <div class="btn btn-def">4. <span class="d-none d-md-block d-xl-inline">Payment Method</span></div>
                <div class="btn btn-def">5. <span class="d-none d-md-block d-xl-inline"><span class="noneDisp-860">Review &amp;</span> Place Order</span></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <form class="form-signin" id="licenseeInfoForm" action="paymentmethod.php" method="post" style="margin-top:2rem;margin-bottom:1rem;">
                <h1 class="h3 mb-3 font-weight-normal">Licensee Info <i style="color:rgb(0, 87, 255);" data-toggle="tooltip" data-placement="right" data-trigger="click" data-html="true" title="" class="fa fa-info-circle" aria-hidden="true" data-original-title="&lt;ul style='text-align: left;'&gt;&lt;li&gt;Only the company / organization entering as Licensee into the Buyer License Agreement with us will be entitled to use the video items you have on your cart.&lt;/li&gt;&lt;li&gt;Licensee must be a business / commercial customer; private consumers are not admitted.&lt;/li&gt;&lt;/ul&gt;"></i></h1>
                <label for="inputCompany">Company / Organization<font color="rgb(0, 87, 255)">*</font></label>
                <input type="text" id="inputCompany" name="inputCompany" class="form-control" value="cuong.hc" required="">
                <div class="row">
                  <div class="col-12 col-lg-4" style="height:94px;">
                    <label for="inputCountry">Country<font color="rgb(0, 87, 255)">*</font></label>
                    <select id="inputCountry" class="form-control" name="inputCountry" style="height:calc(100% - 48px);" value="AD" required="">
                      <option selected="" disabled="" value="">Select</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AX">Aland Islands</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Curacao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="CD">Democratic Republic of the Congo</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="TL">East Timor</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="XK">Kosovo</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestinian Territory</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="CG">Republic of the Congo</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthelemy</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SX">Sint Maarten</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="KR">South Korea</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="VI">U.S. Virgin Islands</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN" selected="selected">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label for="inputCity">City<font color="rgb(0, 87, 255)">*</font></label>
                    <input type="text" id="inputCity" name="inputCity" class="form-control" value="Ho Chi Minh" required="">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label for="inputZip">ZIP / Postal Code<font color="rgb(0, 87, 255)">*</font></label>
                    <input type="text" id="inputZip" name="inputZip" class="form-control" value="700000" required="">
                  </div>
                </div>
                <label for="inputStreet">Street Address<font color="rgb(0, 87, 255)">*</font></label>
                <input type="text" id="inputStreet" name="inputStreet" class="form-control" value="59 abc desto" required="">
                <label for="inputFloor">Apartment, Suite, Unit, Building, Floor (optional)</label>
                <input type="text" id="inputFloor" name="inputFloor" value="" class="form-control">
                <div id="licenseeEUVatID" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="" data-original-title="For billing addresses located in the European Union a VAT ID is required. (Reverse Charge)">
                  <label for="inputVAT">VAT Identification Number (optional)</label>
                  <input type="text" id="inputVAT" name="inputVAT" class="form-control" value="">
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <label for="inputEmail">Email<font color="rgb(0, 87, 255)">*</font></label> <i data-toggle="tooltip" data-trigger="click" data-html="true" title="" class="fa fa-info-circle" aria-hidden="true" data-original-title="The email address you enter here will appear in the Buyer License Agreement and allows us to contact the Licensee if necessary. The order confirmation will be sent to the email address associated with your account."></i>
                    <input type="email" id="inputEmail" name="inputEmail" value="cuonghoang131993@gmail.com" class="form-control" required="">
                  </div>
                  <div class="col-12 col-sm-6">
                    <label for="inputPhone" value="">Phone Number (optional)</label>
                    <input type="text" id="inputPhone" name="inputPhone" class="form-control">
                  </div>
                </div>
                <label class="checkCont">Billing address and licensee info are the same.
                  <input type="checkbox" id="sameBilling" name="billingLicenseSame" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <div id="billingAdd" style="display:none; margin-top:2rem;">
                  <h1 class="h3 mb-3 font-weight-normal">Billing Address</h1>
                  <div id="billingOneofTwo" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="" data-original-title="Please enter first name and last name and/or the company / organization which should appear in the invoice.">
                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <label for="inputFirstName">First Name</label>
                        <input type="text" id="inputFirstNameBilling" name="inputFirstNameBilling" class="form-control" value="">
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="inputLastName">Last Name</label>
                        <input type="text" id="inputLastNameBilling" name="inputLastNameBilling" class="form-control" value="">
                      </div>
                    </div>
                    <label for="inputCompany">Company / Organization</label>
                    <input type="text" id="inputCompanyBilling" name="inputCompanyBilling" class="form-control" value="">
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4" style="height:94px;">
                      <label for="inputCountry">Country<font color="rgb(0, 87, 255)">*</font></label>
                      <select id="inputCountryBilling" class="form-control" name="inputCountryBilling" style="height:calc(100% - 48px);">
                        <option selected="" disabled="" value="">Select</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Aland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="VG">British Virgin Islands</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="CD">Democratic Republic of the Congo</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TL">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="CI">Ivory Coast</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="XK">Kosovo</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="CG">Republic of the Congo</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthelemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="KR">South Korea</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="VI">U.S. Virgin Islands</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <label for="inputCity">City<font color="rgb(0, 87, 255)">*</font></label>
                      <input type="text" id="inputCityBilling" name="inputCityBilling" class="form-control" value="">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <label for="inputZip">ZIP / Postal Code<font color="rgb(0, 87, 255)">*</font></label>
                      <input type="text" id="inputZipBilling" name="inputZipBilling" class="form-control" value="">
                    </div>
                  </div>
                  <label for="inputStreet">Street Address<font color="rgb(0, 87, 255)">*</font></label>
                  <input type="text" id="inputStreetBilling" name="inputStreetBilling" class="form-control" value="">
                  <label for="inputFloor">Apartment, Suite, Unit, Building, Floor (optional)</label>
                  <input type="text" id="inputFloorBilling" name="inputFloorBilling" class="form-control" value="">
                  <div id="billingEUVatID" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="" data-original-title="For billing addresses located in the European Union a VAT ID is required. (Reverse Charge)">
                    <label for="inputVATBilling">VAT Identification Number (optional)</label>
                    <input type="text" id="inputVATBilling" name="inputVATBilling" class="form-control" value="">
                  </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" name="licenseeInfo" type="submit">Continue</button>
                <p style="margin-bottom: 0;margin-top: 1em;">
                  <font color="rgb(0, 87, 255)">*</font> REQUIRED
                </p>
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
                <div style="padding-bottom:1em;">Get in touch via the contact form below or contact us via email at <a href="mailto:info@licetstudios.com">info@licetstudios.com</a> or via phone at <a href="tel:4927237195301">+49 (0) 272 371 953 01</a> (Monday-Friday from 9:00 a.m. to 12:00 a.m. and 2:30 p.m. to 5:30 p.m. CEST).</div>
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
            <p>info@licetstudios.com</p>
          </div>


        </div>
      </div>
    </div>
    <div class="modal fade" id="howToBuy-modal" tabindex="-1" role="dialog" aria-labelledby="HowToBuyModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content ">
          <div class="modal-header card-header" style="margin-bottom:1rem;">
            <h3 class="modal-title" style="color:rgb(0, 87, 255);font-weight: bold;margin:auto;"><span>How To buy videos at Licet Studios</span></h3>
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
                  <p>If you don’t find the right package or need help, please get in touch: <a href="mailto:licensing@licetstudios.com">licensing@licetstudios.com</a></p>
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
                  <p>Currently you need to download videos you purchased at Licet Studios from YouTube. You will find the respective videos’ YouTube-URL(s) in your order confirmation and in your order history.
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
            <a href="mailto:licensing@licetstudios.com ">licensing@licetstudios.com </a><br>
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
        $('[data-toggle="tooltip"]').tooltip();
      })

      $('#sameBilling').click(function() {
        $("#billingAdd").toggle(!this.checked);
        if (this.checked) {
          //$("#inputFirstNameBilling").prop('required',false);
          //$("#inputLastNameBilling").prop('required',false);
          $("#inputCityBilling").prop('required', false);
          $("#inputZipBilling").prop('required', false);
          $("#inputStreetBilling").prop('required', false);
          $("#inputCountryBilling").prop('required', false);
        } else {
          //$("#inputFirstNameBilling").prop('required',true);
          //$("#inputLastNameBilling").prop('required',true);
          $("#inputCityBilling").prop('required', true);
          $("#inputZipBilling").prop('required', true);
          $("#inputStreetBilling").prop('required', true);
          $("#inputCountryBilling").prop('required', true);
        }

      });


      $("#licenseeInfoForm").submit(function(event) {
        var eu_countries = ['AT', 'BE', 'HR', 'BG', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'GR', 'HU', 'IE', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE', 'GB'];
        if (!$('#sameBilling').is(':checked')) {
          var field1 = $('#inputLastNameBilling').val();
          var field2 = $('#inputCompanyBilling').val();
          var fieldBillingCountry = $('#inputCountryBilling').val();
          var fieldBillingVATID = $('#inputVATBilling').val();

          if (!(field1.length || field2.length)) {
            $('#billingOneofTwo').tooltip('show');
            event.preventDefault();
          }
          if (eu_countries.includes(fieldBillingCountry) && !fieldBillingVATID) {
            $('#billingEUVatID').tooltip('show');
            event.preventDefault();
          }
        } else {
          var fieldBillingCountry = $('#inputCountry').val();
          var fieldBillingVATID = $('#inputVAT').val();
          if (eu_countries.includes(fieldBillingCountry) && !fieldBillingVATID) {
            $('#licenseeEUVatID').tooltip('show');
            event.preventDefault();
          }
        }
      });




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