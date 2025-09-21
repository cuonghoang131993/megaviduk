<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Browse and filter our video library to find funny, amazing and trending internet videos your audience will love! Select license details, add videos to your cart and proceed to checkout. Copyrights cleared for all media.">
    <meta name="keywords" content="find viral videos, buy viral videos, license viral videos, videos your audience will love, viral videos, internet videos, popular videos, trending videos, funny videos, cute videos, cat videos, fails, viral, viral video licensing, viral video licensing company, megavid">
    <meta name="author" content="">

    <title>Video Library - License viral videos within minutes | Megavid</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    <!-- End Google Analytics --> <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./css/creative.css">
    <link rel="stylesheet" href="./css/own.css">
    <link type="text/css" rel="stylesheet" href="./css/jquery.qtip.min.css">



    <style>
        .qtip-youtube .qtip-content {
            padding: 0;
        }

        .row.equal {
            display: flex;
            flex-wrap: wrap;
        }


        #searchsec {
            padding-top: 125px;
            padding-bottom: 32px;
            background-color: #EAE9E9;
        }
    </style>
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- script to set cookies (bookmark)-->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

    <script>
        document.addEventListener("touchstart", function() {}, true);
    </script>

</head>

<body id="page-top">
    <?php include_once 'components/header.php'; // This will NOT include header.php again
    ?>

    <div>

        <section id="searchsec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="padding-left:32px;padding-right:32px;">
                        <div class="card">
                            <div class="card-body row" id="sortCard">
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100">Sort by:
                                        <select id="sortby" name="sortby" class="selectpicker form-control" onchange="location = replaceQueryParam('sort', value, window.location.search);">
                                            <option value="0">Trending</option>
                                            <option value="9">Most Views</option>
                                            <option value="6">Most Likes</option>
                                            <option value="2">Newest</option>
                                            <option value="3">Oldest</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100">Category:
                                        <select name="category" id="categorySel" class="selectpicker form-control" onchange="location = replaceQueryParam('cat', value, window.location.search);">
                                            <option value="0">Any</option>

                                            <option value="5">Crazy</option>
                                            <option value="27">Ships</option>
                                            <option value="1">Accidents &amp; Fails</option>
                                            <option value="6">Funny</option>
                                            <option value="24">Fails (Funny, Unexpected & Expensive)</option>
                                            <option value="32">Other Viral (Somehow!)</option>
                                            <option value="21">Extreme Moments Caught On Camera</option>
                                            <option value="8">Weather</option>
                                            <option value="25">Heavy Equipment</option>
                                            <option value="6">Funny</option>
                                            <option value="3">Animals</option>
                                            <option value="32">Other Viral (Somehow!)</option>
                                            <option value="4">Cute</option>
                                            <option value="30">Other Viral (Somehow!)</option>
                                            <option value="11">Aviation</option>
                                            <option value="13">Close Calls</option>
                                            <option value="14">Crashes</option>
                                            <option value="7">Sports</option>
                                            <option value="8">Weather</option>
                                            <option value="22">Extreme Weather</option>
                                            <option value="9">Wins, Tricks &amp; Stunts</option>
                                            <option value="2">Adventure</option>
                                            <option value="23">Natural Disasters</option>
                                            <option value="16">Climate</option>
                                            <option value="17">Dashcam</option>
                                            <option value="18">Demolition</option>
                                            <option value="12">CCTV</option>
                                            <option value="10">Other</option>

                                        </select>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100">Submitted:
                                        <select name="submitted" id="dateSel" class="selectpicker form-control" onchange="location = replaceQueryParam('date', value, window.location.search);">
                                            <option value="0">Any date</option>
                                            <option value="1">Last 24 hours</option>
                                            <option value="2">Last 72 hours</option>
                                            <option value="3">Last 7 days</option>
                                            <option value="4">Last 14 days</option>
                                            <option value="5">Last 30 days</option>
                                            <option value="6">Last 3 months</option>
                                            <option value="7">Last 6 months</option>
                                            <option value="8">Last year</option>
                                            <option value="9">Last 3 years</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100">Display Per Page:
                                        <select name="perpage" id="dispSel" class="selectpicker form-control" onchange="location = replaceQueryParam('disp', value, window.location.search);">
                                            <option value="0">40</option>
                                            <option value="2">60</option>
                                            <option value="4">80</option>
                                            <option value="5">All</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100"><br>
                                        <button data-toggle="modal" data-target="#howToBuy-modal" class="btn w-100 text-capitalize font-weight-normal">How To buy videos</button>
                                    </label>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="w-100"><br>
                                        <button class="btn w-100 text-capitalize font-weight-normal" data-toggle="modal" data-target=".contact-modal">Contact</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="videos" id="videos" style="padding-bottom:64px;padding-top:0;background-color:#EAE9E9;">
            <div class="container-fluid">
                <div class="videocontainer">
                    <div class="row equal" id="videorow" style="background-color:#EAE9E9;">

                    </div>

                    <div class="row" style="margin-top:40px;">
                        <div style="margin:auto;">
                            <a class="btn btn-default sr-button orange" id="btnPrevPage" style="margin-right:1em;visibility:hidden !important;" onclick="prevPage();">PREVIOUS PAGE</a><input type="number" id="pageNum" name="pageNum" value="1" min="1" max="999" onchange="changePage()"><span style="margin:1em;margin-top:auto;margin-bottom:auto;">of</span><a id="maxPageLink" style="margin-right:1em;margin-top:auto;margin-bottom:auto;color:orange;" href="./videos.php?cat=9#" onclick="showLastPage();">1</a> <a id="btnNextPage" class="btn btn-default sr-button orange" onclick="nextPage();">NEXT PAGE</a>

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>


        </section>


        <div class="modal fade newsletter-modal" tabindex="-1" role="dialog" aria-labelledby="NewsletterModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="modal-header card-header" style="margin-bottom:1rem;">
                        <h3 class="modal-title" style="color:#DE0404;font-weight: bold;margin:auto;"><span>Newsletter</span></h3>
                        <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="container" style="padding:2rem;padding-top:0;">

                        <form id="newsletter-form" class="text-left" action="./videos.php?cat=9" method="post">
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
                    <h3 class="modal-title" style="color:#DE0404;font-weight: bold;margin:auto;"><span>Contact us</span></h3>
                    <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="container" style="padding:2rem;padding-top:0;">
                    <form id="contactForm" class="text-left" action="./videos.php?cat=9" method="post">
                        <div class="login-form-main-message"></div>
                        <div class="main-login-form">
                            <div style="padding-bottom:1em;">Get in touch via the contact form below or contact us via email at <a href="mailto:info@megavid.uk">info@megavid.uk</a> or via phone at <a href="tel:490780392311">+49 (0) 780 392 311</a> (Monday-Friday from 9:00 a.m. to 12:00 a.m. and 2:30 p.m. to 5:30 p.m. CEST).</div>
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
                    <h3 class="modal-title" style="color:#DE0404;font-weight: bold;margin:auto;"><span>Imprint</span></h3>
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
                    <h3 class="modal-title" style="color:#DE0404;font-weight: bold;margin:auto;"><span>How To buy videos at Megavid</span></h3>
                    <button class="close" type="button" style="margin:0;padding:0;margin-top: auto;margin-bottom: auto;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="accordion" id="accordionHowToBuy">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingHTbuy0">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="./videos.php?cat=9#htbuycollapse0" aria-expanded="true" aria-controls="collapse0">
                                    1. FIND VIDEOS & OPEN DETAIL PAGES
                                </a>
                            </h5>
                        </div>

                        <div id="htbuycollapse0" class="collapse show" role="tabpanel" data-parent="#accordionHowToBuy">
                            <div class="card-body">
                                <p>Search our video library by keywords, video URLs, item IDs, or filter it by categories and dates. To find out more about a specific video, open its detail page by clicking on “→ LICENSE VIDEO FROM €50.00”.
                                <p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingHTbuyOne">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseOne">
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
                                <p>If you don’t find the right package or need help, please get in touch: <a href="mailto:licensing@megavid.uk">licensing@megavid.uk</a>
                                <p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingHTbuyTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseTwo">
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
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseThree">
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
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseFour">
                                    5. ENTER LICENSEE INFO
                                </a>
                            </h5>
                        </div>

                        <div id="htbuycollapseFour" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
                            <div class="card-body">
                                <p>Fill in contact and billing address of the company / organization which shall be entitled to use the videos you have on your cart and enter into the <a href="https://megavid.uk/buyerlicenseagreement.pdf" target="_blank">Buyer License Agreement</a>; private consumers are not admitted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingHTbuyFive">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseFive">
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
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseFive2">
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
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseSix">
                                    8. DOWNLOAD VIDEOS
                                </a>
                            </h5>
                        </div>

                        <div id="htbuycollapseSix" class="collapse" role="tabpanel" data-parent="#accordionHowToBuy">
                            <div class="card-body">
                                <p>Currently you need to download videos you purchased at Megavid from YouTube. You will find the respective videos’ YouTube-URL(s) in your order confirmation and in your order history.
                                    If you need a download-program for YouTube videos, we recommend taking a look into (i.e.) the following reviews:</p>
                                <a href="https://www.techradar.com/news/the-best-free-youtube-downloader" target="_blank">www.techradar.com/news/the-best-free-youtube-downloader</a><br>
                                <a href="https://www.gihosoft.com/hot-topics/best-free-youtube-downloader" target="_blank">www.gihosoft.com/hot-topics/best-free-youtube-downloader.html</a><br>
                                <a href="http://www.chip.de/Downloads-Download-Tag-Charts-Top-100-aller-Zeiten_76820739.html?xbl_category=tag_youtube-downloader" target="_blank">www.chip.de/Downloads-Download-Tag-Charts-Top-100-aller-Zeiten_76820739.html?xbl_category=tag_youtube-downloader</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingHTbuySeven">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="./videos.php?cat=9#htbuycollapseSeven">
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
                    <a class="btn btn-default btn-primary" data-dismiss="modal" data-toggle="modal" data-target=".contact-modal">Contact us</a>
                </div>
            </div>
        </div>
    </div>

    <style>



    </style>
    <!-- Footer -->
    <?php include_once('components/footer.php'); ?>
    <!-- ./Footer -->

    <script>
        var customerLoggedIn = false;

        function replaceQueryParam(param, newval, search) {
            var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
            var query = search.replace(regex, "$1").replace('/&$/', '');
            returnVal = (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
            returnVal = returnVal.replace('&&', '&');
            return returnVal.replace('&&', '&');
        }

        $.urlParam = function(name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results == null) {
                return 0;
            }
            return decodeURI(results[1]) || 0;
        }


        $(document).ready(function() {
            var sortParam = $.urlParam('sort');
            $('#sortby').val(sortParam);
            var catParam = $.urlParam('cat');
            $('#categorySel').val(catParam);
            var dateParam = $.urlParam('date');
            $('#dateSel').val(dateParam);
            var dispParam = $.urlParam('disp');
            $('#dispSel').val(dispParam);


            // if ($("#checkLicenseDetails").checked && customerLoggedIn){
            //     $("#selectLicenseDetails").css('display', 'block');
            // }
        });
    </script>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="js/own.js"></script>
    <script type="text/javascript" src="./js/jquery.qtip.min.js"></script>

    <script src="angular/angularapp.js"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        })

        $(document).ready(function() {
            if ($(window).width() < 515) {
                $('#btnNextPage').html('>');
                $('#btnPrevPage').html('<');
            }

            //load bookmarks
            $('#bookmarksDropdown').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
            $('#bookmarksDropdownSmall').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
            $('#bookmarksDropdownXtraSmall').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
            if (!!Cookies.get('videoBookmarks')) {
                var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks'));
                if (existingBookmarks.length > 0) {
                    $('#bookmarksDropdown').html('');
                    $('#bookmarksDropdownSmall').html('');
                    $('#bookmarksDropdownXtraSmall').html('');
                }
                for (var i = 0; i < existingBookmarks.length; i++) {
                    //var id = existingBookmarks[i];
                    $.post("getVideoTitleByID", {
                            ytid: existingBookmarks[i],
                        },
                        function(data, status) {
                            $('#bookmarksDropdown').append(data);
                            $('#bookmarksDropdownSmall').append(data);
                            $('#bookmarksDropdownXtraSmall').append(data);
                        });

                    $('#bookmarkSetter-' + existingBookmarks[i]).html('<i style="font-size:24px;" class="fa fa-bookmark" ></i>');
                    $('#bookmarkSetter-' + existingBookmarks[i]).css('color', '#DE0404');
                }
                $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (' + existingBookmarks.length + ')</span></center>');
                $('#bookmarkNumPill').html(existingBookmarks.length);
                $('#bookmarkNumPillSmall').html(existingBookmarks.length);
                var videoID = '';
                if ($.inArray(videoID, existingBookmarks) != -1) {
                    $('#bookmarkSetter-' + videoID).html('<i class="fa fa-2x fa-bookmark" ></i>');
                    $('#bookmarkSetter-' + videoID).css('color', '#DE0404');
                }

            }
        });

        function addBookmark(videoID) {
            // Create a cookie
            if (typeof(Cookies.get('videoBookmarks')) === 'undefined') {
                Cookies.set('videoBookmarks', JSON.stringify([videoID]), {
                    expires: 20
                });

                $('#bookmarksDropdown').html('');
                $('#bookmarksDropdownSmall').html('');
                $('#bookmarksDropdownXtraSmall').html('');

                $.post("getVideoTitleByID", {
                        ytid: videoID,
                    },
                    function(data, status) {
                        $('#bookmarksDropdown').append(data);
                        $('#bookmarksDropdownSmall').append(data);
                        $('#bookmarksDropdownXtraSmall').append(data);
                    });
                $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (1)</span></center>');
                $('#bookmarkNumPill').html('1');
                $('#bookmarkNumPillSmall').html('1');
            } else {
                var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks'));
                if (existingBookmarks.length == 0) {
                    $('#bookmarksDropdown').html('');
                    $('#bookmarksDropdownSmall').html('');
                    $('#bookmarksDropdownXtraSmall').html('');
                }
                if ($.inArray(videoID, existingBookmarks) == -1) {
                    existingBookmarks.push(videoID);
                    Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks), {
                        expires: 20
                    });
                    $.post("getVideoTitleByID", {
                            ytid: videoID,
                        },
                        function(data, status) {
                            $('#bookmarksDropdown').append(data);
                            $('#bookmarksDropdownSmall').append(data);
                            $('#bookmarksDropdownXtraSmall').append(data);
                        });
                    $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (' + existingBookmarks.length + ')</span></center>');
                    $('#bookmarkNumPill').html(existingBookmarks.length);
                    $('#bookmarkNumPillSmall').html(existingBookmarks.length);
                    $('#bookmarkSetter-' + videoID).html('<i style="font-size:24px;" class="fa fa-bookmark" ></i>');
                    $('#bookmarkSetter-' + videoID).css('color', '#DE0404');
                } else {
                    var index = existingBookmarks.indexOf(videoID);
                    if (index !== -1) existingBookmarks.splice(index, 1);
                    Cookies.set('videoBookmarks', JSON.stringify(existingBookmarks), {
                        expires: 20
                    });
                    $(".tab-" + videoID).remove();
                    $('#dropdownMenuLink').html('<center ><i class="fa fa-2x fa-bookmark" ></i><br><span class="d-none d-llg-block">BOOKMARKS (' + existingBookmarks.length + ')</span></center>');
                    $('#bookmarkNumPill').html(existingBookmarks.length);
                    $('#bookmarkNumPillSmall').html(existingBookmarks.length);
                    if (existingBookmarks.length == 0) {
                        $('#bookmarksDropdown').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
                        $('#bookmarksDropdownSmall').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
                        $('#bookmarksDropdownXtraSmall').html('<div class="text-center w-100">Bookmark videos to save them for later.</div>');
                    }

                    $('#bookmarkSetter-' + videoID).html('<i style="font-size:24px;" class="fa fa-bookmark-o" ></i>');
                    $('#bookmarkSetter-' + videoID).css('color', '#DE0404');
                }

            }


        }
    </script>
    <div class="modal fade" id="EmptyCartModel" tabindex="-1" role="dialog" aria-labelledby="EmptyCart" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EmptyCartLabel">Your cart is empty. Find a video, select license details, add it to your cart and proceed to checkout.</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>



<script type='text/javascript'>
    $(document).ready(function() {
        let isEmptyCart = sessionStorage.getItem("emptyCart");
        if (isEmptyCart && isEmptyCart === "true") {
            $('#EmptyCartModel').modal('show');
            sessionStorage.removeItem("emptyCart");
        }

    });
</script>


<script>
    //change page and show videos:
    var page = 1;
    var videosPerPage = 1;
    var minIndex = 0;
    var amountVideos = 0;
    var maxPage = 1;


    $(document).ready(function() {
        page = 1;
        videosPerPage = (parseInt($('#dispSel').val()) * 10 + 40);
        minIndex = videosPerPage * (page - 1);
        getVideoCount();
        loadVideos();
    });

    function nextPage() {
        page = page + 1;
        videosPerPage = (parseInt($('#dispSel').val()) * 10 + 40);
        minIndex = videosPerPage * (page - 1);
        loadVideos();
    }

    function prevPage() {
        if (page > 1) {
            page = page - 1;
            videosPerPage = (parseInt($('#dispSel').val()) * 10 + 40);
            minIndex = videosPerPage * (page - 1);
            loadVideos();
        }
    }

    function showLastPage() {
        page = maxPage;
        videosPerPage = (parseInt($('#dispSel').val()) * 10 + 40);
        minIndex = videosPerPage * (page - 1);
        loadVideos();
    }

    function changePage() {
        page = parseInt($('#pageNum').val());
        if (page > maxPage) {
            page = maxPage;
        }
        videosPerPage = (parseInt($('#dispSel').val()) * 10 + 40);
        minIndex = videosPerPage * (page - 1);
        loadVideos();
    }


    function loadVideos() {
        if (page == 1) {
            $('#btnPrevPage').css('visibility', 'hidden');
        } else {
            $('#btnPrevPage').css('visibility', 'visible');
        }


        if (page == maxPage) {
            $('#btnNextPage').css('visibility', 'hidden');
        } else {
            $('#btnNextPage').css('visibility', 'visible');
        }
        $('#pageNum').val(page);

        $('#videorow').empty();

        $.ajax({
            url: 'getVideos.php',
            type: 'post',
            data: {
                <?php
                if (isset($_GET['cat'])) {
                    echo 'cat:"' . $_GET['cat'] . '"';
                } else if (isset($_GET['sort'])) {
                    echo 'sort:"' . $_GET['sort'] . '"';
                } else {
                    echo 'cat:"9"';
                } ?>,
                minIndex: minIndex,
                maxIndex: videosPerPage
            },
            beforeSend: function() {},
            success: function(response) {
                document.getElementById("videorow").innerHTML += response;
                if (response.length > 10) {
                    var youtube = document.querySelectorAll(".youtube");
                    for (var i = 0; i < youtube.length; i++) {
                        var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/hqdefault.jpg";
                        var image = new Image();
                        image.src = source;
                        image.addEventListener("load", function() {
                            youtube[i].appendChild(image);
                        }(i));
                    };
                }

                $('[data-toggle="tooltip"]').tooltip();
                if (typeof(Cookies.get('videoBookmarks')) !== 'undefined') {
                    var existingBookmarks = JSON.parse(Cookies.get('videoBookmarks'));
                    for (var i = 0; i < existingBookmarks.length; i++) {
                        $('#bookmarkSetter-' + existingBookmarks[i]).html('<i style="font-size:24px;" class="fa fa-bookmark" ></i>');
                        $('#bookmarkSetter-' + existingBookmarks[i]).css('color', '#DE0404');
                    }
                }
                getYTPlayer();
            }
        });
    }

    function getVideoCount() {
        $('#videorow').empty();
        $.ajax({
            url: 'getVideosCount.php',
            type: 'post',
            data: {
                <?php
                if (isset($_GET['cat'])) {
                    echo 'cat:"' . $_GET['cat'] . '"';
                } else if (isset($_GET['sort'])) {
                    echo 'sort:"' . $_GET['sort'] . '"';
                } else {
                    echo 'cat:"9"';
                } ?>,
            },
            beforeSend: function() {},
            success: function(response) {
                amountVideos = parseInt(response);
                maxPage = Math.ceil(amountVideos / videosPerPage);
                $('#maxPageLink').html(maxPage);
                $("#pageNum").attr({
                    "max": maxPage
                });
                if (page == maxPage) {
                    $('#btnNextPage').css('visibility', 'hidden');
                } else {
                    $('#btnNextPage').css('visibility', 'visible');
                }
            }
        });
    }




    $('body').on('click', function(e) {
        $('[data-toggle="tooltip"]').each(function() {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.tooltip').has(e.target).length === 0) {
                $(this).tooltip('hide');
            }
        });
    });







    // var hidden = 2;
    // var curViewport = '';
    //   (function($, viewport){

    // var visibilityDivs = {
    //     'xs': $('<div class="d-xs-block d-sm-none d-md-none d-lg-none d-xl-none"></div>'),
    //     'sm': $('<div class="d-none d-sm-block d-md-none d-lg-none d-xl-none"></div>'),
    //     'md': $('<div class="d-none d-md-block d-sm-none d-lg-none d-xl-none"></div>'),
    //     'lg': $('<div class="d-none d-lg-block d-sm-none d-md-none d-xl-none"></div>'),
    //     'xl': $('<div class="d-none d-xl-block d-sm-none d-md-none d-lg-none"></div>'),
    // };

    // viewport.use('custom', visibilityDivs);


    // var manageSortCard = function() {
    //     if(viewport.is('>lg')) {
    //         $('#sortCard').children().removeClass( "col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12" ).addClass( "col" );
    //     }
    //     else{
    //         $('#sortCard').children().removeClass( "col" ).addClass( "col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12" );
    //     }
    // }

    // // on resize
    // $(window).resize(
    //     viewport.changed(function() {
    //     if (curViewport != viewport.current() ){
    //         curViewport = viewport.current();
    //         manageSortCard();
    //     }
    //     })
    // ).resize();
    // })(jQuery, ResponsiveBootstrapToolkit);



    $(window).resize(function() {
        if ($(window).width() < 515) {
            $('#btnNextPage').html('>');
            $('#btnPrevPage').html('<');
        } else {
            $('#btnNextPage').html('NEXT PAGE');
            $('#btnPrevPage').html('PREVIOUS PAGE');
        }
    });

    $(document).ready(function() {
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has("buyers-FAQ")) {
            $("#howToBuy-modal").modal();
        }
    });
</script>


</html>