<?php include('constants.php');?>
<!DOCTYPE html>
<html>

<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Systrail Solutions</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/slick-theme.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="icon" href="assets/logo/favicon-new.png" type="assets/images.png">
</head>

<body>
<div class="koolconsole-wrapper">
<section class="home header-sticky header-v1 hide-topbar-mobile">
    <header id="masthead" class="site-header">
        <div class="header-main clearfix">
            <div class="container">
                <div class="row menu-row">
                    <div class="site-logo col-lg-3 col-md-3 col-sm-8">
                        <a href="<?php echo BASEURL;?>" class="logo"><img src="assets/logo/logo-new-removebg.png" alt="GRD" class="logo"></a>
                    </div>
                    <div class='mobile-togle'>
                        <a href="#" class="navigationMenu" id="navigationMenu" onclick="navOpenFunction()"> <i class="fas fa-bars"></i></a>
                    </div>
                    <div class="header-content col-lg-9 col-md-9 col-xs-12 pull-right">
                        <!-- top bar -->
                        <div id="topbar" class="topbar ">
                            <div class="topbar-widgets clearfix">
                                <div class=" widget">
                                    <ul class="socials">
                                        <li> <a href="<?php echo FACEBOOK;?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li> <a href="<?php echo TWITTER;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li> <a href="<?php echo LINKDIN;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="<?php echo INSTAGRAM;?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="<?php echo GITHUB;?>" target="_blank"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <div class="float-left"><span class="svg-icon"><i class="fas fa-phone-alt flaticon-call-answer"></i></span></div>
                                    <div class="float-right">
                                        <div>Call Us</div>
                                        <div><?php echo CONTACT;?></div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="float-left"><span class="svg-icon"><i class="flaticon-timer fas fa-envelope"></i></span></div>
                                    <div class="float-right">
                                        <div class="title">Mail Us</div>
                                        <div class="sub-title"><?php echo EMAIL;?></div>
                                    </div>
                                </div>
                                <div class="menu-block-right" style="width: 151.5px; right: -150.5px;"></div>
                            </div>
                        </div>
                        <!-- top bar -->
                        <div class="primary-mobile-nav site-menu navigatiList" id="navigatiList">
                            <nav id=" site-navigation" class="main-nav primary-nav nav">
                                <a href="#" class="close-toggle closeBtn" id="closeBtn" onclick="navCloseFunction()"> <i class="fas fa-times"></i></a>
                                <ul class="menu">
                                    <li class="has-children <?php echo ($activeMenu == 'home-page')?'active':'';?>">
                                        <a href="<?php echo BASEURL;?>" class="">Home</a> 
                                    </li>
                                    <li class="has-children <?php echo ($activeMenu == 'about-us')?'active':'';?>">
                                        <a href="<?php echo BASEURL.'about-us';?>" class="">About Us</a> 
                                    </li>
                                    <li class="has-children <?php echo ($activeMenu == 'services-page')?'active':'';?>">
                                        <a href="<?php echo BASEURL.'services';?>" class="">Services</a> 
                                    </li>
                                    <li class="has-children <?php echo ($activeMenu == 'contact-us')?'active':'';?>">
                                        <a href="<?php echo BASEURL.'contact-us';?>" class="">Contact Us</a> 
                                    </li>
                                    <li class="has-children mobile-info">
                                        <a href="#" class="title-gray sm-title d-flex mobile-info"></span>Call Us:<br><?php echo CONTACT;?></a>
                                    </li>
                                    <li class="has-children mobile-info">
                                        <a href="#" class="title-gray sm-title d-flex mobile-info"></span>Contact Us:<br><?php echo EMAIL;?></a> 
                                    </li> 
                                    <li class="has-children  widget bobile-social-icon">
                                        <span class="socials">
                                            <a href="<?php echo FACEBOOK;?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="<?php echo TWITTER;?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php echo LINKDIN;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="<?php echo INSTAGRAM;?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="<?php echo GITHUB;?>" target="_blank"><i class="fab fa-github"></i></a>
                                        </span>
                                    </li> 
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
</section>