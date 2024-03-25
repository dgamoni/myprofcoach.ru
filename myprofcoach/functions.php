<?php
 

//enable post thumbnails
add_theme_support('post-thumbnails');

// Register our sidebars and widgetized areas


function dgamoni_widgets_init5() {
	register_sidebar( array(
		'name' => __( 'footer Contact', 'twentyeleven' ),
		'id' => 'contact_widget',
		'before_widget' => '<div>',
		'after_widget' => "</div>",
		'before_title' => '<div class="title_small">',
		'after_title' => '</div>',
	) );
}

add_action( 'widgets_init', 'dgamoni_widgets_init5' );


// end register widget



// Menu wp3
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
	'primary' => __( 'Left-Top Navigation Menu' ),
	'primary-2' => __( 'Right-Top Navigation Menu' ),
	'primary-center' => __( 'Center Navigation Menu' )
	
	));
	add_theme_support( 'menus' ); // new nav menus for wp 3.0
}


// end  Menu

// excerpt option
function custom_excerpt_length( $length ) {
	return 25;
}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//
function new_excerpt_more( $more ) {
	return ' ....';
}
add_filter('excerpt_more', 'new_excerpt_more');
//
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<br><a class="mymore" href="'. get_permalink($post->ID) . '">Подробно</a>';
}
//add_filter('the_excerpt', 'excerpt_read_more_link');

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');

// end excerpt option

// breadcrumb
function the_breadcrumb() {
    echo '<div class="mybread">';
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Главная';
        echo "</a> > ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " > ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
		echo "</div>";
    }
    else {
        echo '';
    }
}
// end breadcrumb
add_image_size( 'homepage-rotator', '306', '230', true );
add_image_size( 'big-rotator', '470', '266', true );

function set_flexslider_hg_rotators()
{
  $rotators = array();
  $rotators['homepage'] = array( 'size' => 'homepage-rotator' );
  $rotators['gallery'] = array( 'size' => 'homepage-rotator' );
  $rotators['gallery_big'] = array( 'size' => 'big-rotator');
  //$rotators['contactus'] 		= array( 'size' => 'thumbnail' );
  return $rotators;
}
add_filter('flexslider_hg_rotators', 'set_flexslider_hg_rotators');

//current page url

