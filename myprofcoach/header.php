<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/button.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/assets/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/forprogram.css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"></link>
<!-- IE? -->
<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico"><![endif]-->

<!--[if lte IE 7]>
<style type="text/css">

</style>
<![endif]-->

<!--[if lte IE 8]>
<style type="text/css">
.field { padding-top: 5px;}
</style>
<![endif]-->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie9.css" />
<![endif]-->

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	
	wp_enqueue_script('jquery');
	 
	wp_head();
?>



<!--<script src="<?php echo get_template_directory_uri(); ?>/js/.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/myjquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/fix-ie-css-limit.js"></script>-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->

<script src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.fittext.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.lettering.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>

   
<script type="text/javascript">
		
	</script>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header class="d980">

    	<div id="rez">

		<nav class="left" role="navigation">
			<!-- top menu -->
              <div id="myslidemenu-left" class="jqueryslidemenu">
              
                 <?php wp_nav_menu( array(
                    'theme_location' => 'primary', 
                    'menu_id' => '', 
					'menu_class' => '',
                    'container' => '', 
                    'container_id' => '', 
                    'fallback_cb' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => '0',
                  )); ?>  
              
           
           	</div><!-- end top menu -->
  
		</nav><!-- end nav -->
        
        <div id="logo" class="left"><!-- logo -->
        	<div id="logocenter">
    		<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo_profcoach.png" alt="Карьерный коучинг"></a>
        	</div>
        </div><!-- end logo -->
        
        <nav class="group left" role="navigation">
			<!-- top menu -->
              <div id="myslidemenu-right" class="jqueryslidemenu">
              
                 <?php wp_nav_menu( array(
                    'theme_location' => 'primary-2', 
                    'menu_id' => '', 
					'menu_class' => '',
                    'container' => '', 
                    'container_id' => '', 
                    'fallback_cb' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => '0',
                  )); ?>  
              
           
           	</div><!-- end top menu -->
  
		</nav><!-- end nav -->
        
       

		<div class="clearfix"></div>
        
        </div>
        
         <div id="myslidemenu-center" class="jqueryslidemenu">
              
                 <?php wp_nav_menu( array(
                    'theme_location' => 'primary-center', 
                    'menu_id' => '', 
					'menu_class' => '',
                    'container' => '', 
                    'container_id' => '', 
                    'fallback_cb' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => '0',
                  )); ?>  
              
           
           	</div><!-- end top menu -->
            <div class="clearfix"></div>

	</header><!-- end header -->

	<div class="line"> </div>

	<div id="main" class="group">

  <!-- update 26-03-14 translate -->
  <div id="translate_google">
    <a href="http://translate.google.ru/translate?js=y&prev=_t&hl=ru&ie=UTF-8&layout=1&eotf=1&u=http%3A%2F%2Fmyprofcoach.ru&sl=ru&tl=en" target="_blank">ENG</a>
  </div>