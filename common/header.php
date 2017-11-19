<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<!--<![endif]-->
<?php
    ob_start();

//Start session
session_start();
$_SESSION['valid']   = false;

?>
<!-- Mirrored from medicalpress.inspirythemes.biz/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2017 15:13:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />

    <link rel="shortcut icon" href="../wp-content/uploads/2014/05/favicon-new.png" />
    <!-- Pingback URL -->
    <link rel="pingback" href="xmlrpc.php" />

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="Medical Press" href="./feed/index.html" />
    <link rel="alternate" type="application/atom+xml" title="Medical Press" href="feed/atom/index.html" />

    <title>Medical Press &#8211; Just another WordPress site</title>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Medical Press &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Medical Press &raquo; Comments Feed" href="comments/feed/index.html"
    />
    <link rel="alternate" type="application/rss+xml" title="Medical Press &raquo; Home Comments Feed" href="home/feed/index.html"
    />
 

    
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .body-top {
        margin-top: 40px;
        }
    </style>
        <?php include('commonfiles.php')?>

    <!-- <link rel='stylesheet' id='rs-plugin-settings-css'  href='http://medicalpress.inspirythemes.biz/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.0.9' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="../wp-content/cache/wpfc-minified/7b0e14603013e01c80126810e9034ad4/1507873310index.css"
        media="all" />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <!-- <link rel='stylesheet' id='woocommerce-layout-css'  href='http://medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.2.1' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="../wp-content/cache/wpfc-minified/186ef885d2d4b7dae1a130092e46921b/1507873310index.css"
        media="all" />
    <!-- <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='http://medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.2.1' type='text/css' media='only screen and (max-width: 768px)' /> -->
    <link rel="stylesheet" type="text/css" href="../wp-content/cache/wpfc-minified/767deadd3cdd79e98a9a33d0cf296f81/1507873310index.css"
        media="only screen and (max-width: 768px)" />
    <!-- <link rel='stylesheet' id='woocommerce-general-css'  href='http://medicalpress.inspirythemes.biz/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.2.1' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='wpemailcapturestyles-css'  href='http://medicalpress.inspirythemes.biz/wp-content/plugins/wp-email-capture/inc/css/wp-email-capture-styles.css?ver=1.0' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="../wp-content/cache/wpfc-minified/2677dcb331770610d5534bb12a7bda16/1507873310index.css"
        media="all" />
    <link rel='stylesheet' id='google-raleway-css' href='http://fonts.googleapis.com/css?family=Raleway%3A400%2C100%2C200%2C300%2C500%2C600%2C700%2C800%2C900&amp;ver=4.8.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-droid-serif-css' href='http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%2C400italic%2C700italic&amp;ver=4.8.2'
        type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='bootstrap-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/bootstrap.css?ver=3.0' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='flexslider-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/js/flexslider/flexslider.css?ver=2.3.0' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='animations-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/animations.css?ver=1.0' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='font-awesome-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/font-awesome.css?ver=4.0.3' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='datepicker-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/datepicker.css?ver=1.10.4' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='swipebox-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/swipebox.css?ver=1.2.1' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='meanmenu-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/meanmenu.css?ver=2.0.6' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='select2-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/select2.min.css?ver=4.0.3' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='main-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/main.css?ver=1.0' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='custom-responsive-css-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/custom-responsive.css?ver=1.0' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='parent-default-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/style.css?ver=4.8.2' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='parent-custom-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress/css/custom.css?ver=1.2' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='child-default-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress-child/style.css?ver=1.1' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='child-custom-css'  href='http://medicalpress.inspirythemes.biz/wp-content/themes/inspiry-medicalpress-child/child-custom.css?ver=1.1' type='text/css' media='all' /> -->
    <link rel="stylesheet" type="text/css" href="../wp-content/cache/wpfc-minified/16fc2a0ec4aae7ab9d89734d0304d6ee/1507873310index.css"
        media="all" />
    <script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.mind6ea.js?ver=5.0.9'></script>
    <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.mind6ea.js?ver=5.0.9'></script>
    <link rel='https://api.w.org/' href='../wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="medical/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.8.2" />
    <meta name="generator" content="WooCommerce 3.2.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embedf5b9.json?url=http%3A%2F%2Fmedicalpress.inspirythemes.biz%2F"
    />
    <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed0a09?url=http%3A%2F%2Fmedicalpress.inspirythemes.biz%2F&amp;format=xml"
    />
    <style type='text/css' id='inspiry-dynamic-css'>
      .docregis  .palel-primary {
    border-color: #bce8f1;
}

.docregis .panel-primary>.panel-heading {
    background: #bce8f1;
}

.docregis .panel-primary>.panel-body {
    background-color: #bce8f1;
}
.patregis  .palel-primary {
    border-color: #67c9e0;
}

.patregis .panel-primary>.panel-heading {
    background: #67c9e0;
}

.patregis .panel-primary>.panel-body {
    background-color: #bce8f1;
}
.patlogin  .palel-primary {
    border-color: #67c9e0;
}

.patlogin .panel-primary>.panel-heading {
    background: #67c9e0;
}

.patlogin .panel-primary>.panel-body {
    background-color: #bce8f1;
}
.doclogin  .palel-primary {
    border-color: #67c9e0;
}

.doclogin .panel-primary>.panel-heading {
    background: #67c9e0;
}

.doclogin .panel-primary>.panel-body {
    background-color: #bce8f1;
}
nav.main-menu ul>li ul li {
            border-color: #73d1e7;
        }

        a {
            color: #3a3c41;
        }

        a:hover,
        a:focus {
            color: #f15b5a;
        }

        form input[type="submit"],
        .woocommerce a.added_to_cart,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit,
        .woocommerce #respond input[type="submit"] {
            background-color: #3a3c41;
        }

        form input[type="submit"]:hover,
        form input[type="submit"]:focus,
        .woocommerce a.added_to_cart:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce #respond input[type="submit"]:hover {
            background-color: #f15b5a;
        }

        form input[type="submit"],
        .woocommerce a.added_to_cart,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit,
        .woocommerce #respond input[type="submit"] {
            color: #ffffff;
        }

        form input[type="submit"]:hover,
        form input[type="submit"]:focus,
        .woocommerce a.added_to_cart:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce #respond input[type="submit"]:hover {
            color: #ffffff;
        }

        .read-more,
        .woocommerce ul.products li.product .button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt {
            background-color: #67c9e0;
        }

        .read-more:hover,
        .read-more:focus,
        .woocommerce ul.products li.product .button:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            background-color: #f15b5a;
        }

        .read-more,
        .woocommerce ul.products li.product .button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt {
            color: #ffffff;
        }

        .read-more:hover,
        .read-more:focus,
        .woocommerce ul.products li.product .button:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            color: #ffffff;
        }

        .home-slider .make-appoint {
            background-color: #3a3c41;
        }

        .home-slider .make-appoint:hover {
            background-color: #000;
        }

        .home-slider .appointment-form,
        .ui-datepicker-header {
            background-color: #67c9e0;
        }

        td .ui-state-active,
        td .ui-state-hover,
        td .ui-state-highlight,
        .ui-datepicker-header .ui-state-hover {
            background-color: #3fa6be;
        }

        #main-footer,
        .footer-bottom,
        #main-footer .widget ul,
        #main-footer .widget ul li {
            border-color: #4a4c52;
        }

        #main-footer .widget a {
            color: #b5bac6;
        }

        #main-footer .widget a:hover {
            color: #cbd1de;
        }

        #main-footer .widget a:active {
            color: #cbd1de;
        }

        .footer-bottom .footer-social-nav li .fa {
            color: #53565c;
        }

        .footer-bottom .footer-social-nav li .fa:hover {
            color: #ffffff;
        }

        .footer-bottom .footer-social-nav li .fa:active {
            color: #ffffff;
        }

        @media only screen and (max-width: 530px) {
            .mean-container .mean-bar {
                background-color: #53c3dd;
            }

        }
    </style>
 
</head>

<body class="home page-template page-template-home-template page-template-home-template-php page page-id-11 page-parent inspiry-themes inspiry-medicalpress-theme">

    <!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

    <div id="page">

        <div class="header-top clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 ">
                        <p>Welcome to OMHS(Online Medical Help Support) - Website For You.</p>
                        </div>
                    <div class="col-lg-7 col-md-7  text-right">
                        <p>
                            Opening Hours :
                            <span>Monday to Saturday - 8am to 9pm</span>
                            <br class="visible-xs" />&nbsp;&nbsp;Contact :
                            <span>+91-9105331157</span>
                            <br/>
                            <?php     include('commontop.php'); ?>

                            </p>
                    </div>
                </div>
            </div>
        </div>


        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <!-- Website Logo -->   
                        <div class="logo clearfix">
                            <a href="index.php">
                                <img src="https://www.vistaprint.in/any/preview/viewlogo.aspx?cnf=OMHS&icid=1079&csid=106&fsid=2&txid=7&tid=1&cfid=0&xcf=&arid=8&msid=0&drid=0&width=140&height=110" alt="Online Medical Help Support" />
                            </a>
                        </div>

                        <!-- Main Navigation -->
                        <?php
                        if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1" && $_SESSION['user_type']=="p") 
                        {
                         include("patient_menus.php");
                         }
                        else if (isset($_SESSION['user_type']) && isset($_SESSION['login'])  &&  $_SESSION['login'] == "1" && $_SESSION['user_type']=="d" )
                         {  
                            include("doctor_menus.php");
                         }
                         else{
                            include("common_menus.php");
                        }

                        ?>                     

                        <div id="responsive-menu-container"></div>

                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider clearfix">
            <div class="flexslider loading">
                <ul class="slides">
                    <li>
                        <img src="../wp-content/uploads/2014/05/slide-one.jpg" class="gallery-post-single" alt="Medical Services <span>That You Can Trust</span>"
                        />
                        <div class="content-wrapper clearfix">
                            <div class="container">
                                <div class="slide-content clearfix ">
                                    <h2>Medical Services
                                        <span>That You Can Trust</span>
                                    </h2>
                                    <p>Let Us Help You Redefine Health.</p>
                                    <!--  <a class="btn" href="doctors/index.html">Read More</a> -->
                                  </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="../wp-content/uploads/2014/05/slide-two.jpg" class="gallery-post-single" alt="We <span>Care</span> for <span>You</span>"
                        />
                        <div class="content-wrapper clearfix">
                            <div class="container">
                                <div class="slide-content clearfix ">
                                    <h2>We
                                        <span>Care</span> for
                                        <span>You</span>
                                    </h2>
                                    <p>It is health that is real wealth and not pieces of gold and silver.</p>
                                    <!--  <a class="btn" href="services/index.html">Read More</a> -->
                                  </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="../wp-content/uploads/2014/05/slide-three.jpg" class="gallery-post-single" alt="Qualified Staff With <span>Expertise in Services We Offer</span>"
                        />
                        <div class="content-wrapper clearfix">
                            <div class="container">
                                <div class="slide-content clearfix ">
                                    <h2>Qualified Staff With
                                        <span>Expertise in Services We Offer</span>
                                    </h2>
                                     <!--  <a class="btn" href="gallery/index.html">Read More</a>  -->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
            if( isset($_SESSION['user_type']) && isset($_SESSION['login'])     &&      $_SESSION['login'] == "1"  && ( $_SESSION['user_type'] == 'p' || $_SESSION['user_type'] == 'd' ) ){
                
                    include('../common/appointment.php');
                    
                
                }
            ?>


        </div>

        <div class="body-top">
                         
