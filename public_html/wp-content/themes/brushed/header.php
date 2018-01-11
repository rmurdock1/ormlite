<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!-- 
  IMPORTANT: To Link to this Page 

  Click 'Menu' button at the top and select 'Copy Link' 
--> 


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php wp_title( '|', true, 'right' ); ?></title>   
<?php wp_head(); ?>
<!-- 
  IMPORTANT: To Include this File

   Click 'Menu' button at the top and select 'Copy Link' 
--> 



<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/supersized.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/supersized.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/common/libs/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body <?php body_class(); ?>>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        
        <?php if(get_field('add_silders')): ?>
            <ul id="slide-list">
		<?php while(has_sub_field('add_silders')): ?>
			<li class="slide-link-1"><a><?php the_sub_field('add_slide_image'); ?></a></li>
		<?php endwhile; ?>
	       </ul>

        <?php endif; ?>
        
    <!--<ul id="slide-list">
            <li class="slide-link-0 current-slide"><a></a></li>
            <li class="slide-link-1"><a></a></li>
            <li class="slide-link-2"><a></a></li>
            <li class="slide-link-3"><a></a></li>
        </ul>-->
        <!--<ul id="slide-list"></ul>-->
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <?php if( is_page_template('template-parts/home.php') ) { ?>
            <div id="logo">
                <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template" style="background: url(<?php echo ot_get_option('add_logo');?>) no-repeat;"><?php echo ot_get_option('add_logo_text');?></a>
            </div>
        <?php } else { ?>
            <div id="logo">
                <a id="goUp" href="<?php echo get_home_url(); ?>" title="Brushed | Responsive One Page Template" style="background: url(<?php echo ot_get_option('add_logo');?>) no-repeat;"><?php echo ot_get_option('add_logo_text');?></a>
            </div>
        <?php }?>
        
        <?php if( is_page_template('template-parts/home.php') ) { ?>
        <nav id="menu">
            <?php wp_nav_menu(array("menu"=>"main_menu","container"=>false,  "items_wrap" => '<ul id="menu-nav">%3$s</ul>',  ));?>
        	
        </nav>
        <?php } else { ?>
        <nav id="menu">
            <?php wp_nav_menu(array("menu"=>"page_main_menu","container"=>false,  "items_wrap" => '<ul id="menu-nav">%3$s</ul>',  ));?>
        	
        </nav>
        <?php }?>
    
       
        
    </div>
</header>
<!-- End Header -->