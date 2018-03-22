<?php
//menu 
require_once('wp-bootstrap-navwalker.php');
//theme Support
function theme_setup(){
	register_nav_menus(array(
		'primary'=>__('Primary Menu')

	));
}

add_action('after_setup_theme','theme_setup');




/*if(function_exists('register_nav_menus')){
	register_nav_menus(array('superior'=> 'Menu Principal Superior'));
}

// crear clase para el a
add_filter('nav_menu_link_attributes','clase_menu_invento',10,3);

function clase_menu_invento($atts, $item, $args){
	$class ='nav-link';
	$atts['class']=$class;
	return $atts;
}
*/

//submenu

// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
add_theme_support( 'post-thumbnails');
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
add_image_size( 'slider_thumbs', 220, 180, true );
add_image_size( 'list_articles_thumbs', 220, 180, true );

//logo

add_theme_support ('custom-logo', array (
	'altura' => 100,
	'ancho' => 400,
	'flex-height' => verdadero,
	'flex-width' => verdadero,
	'header-text' => array ('site-title', 'site-description'),
));



/*FUNCIONDE BUSCAR */
/* INICIO*/
function my_custom_searchengine($query) 
{ 
	if ($query->is_search && !is_admin())
	{ 
		$query->set('post_type', array('post', 'page')); 
		$query->set('post_status', array('publish')); 
	} 
	return $query; 
} add_filter('pre_get_posts', 'my_custom_searchengine'); 
/*FUNCIONDE BUSCAR */
/* FIN */


//sidebars
register_sidebar( array(
	'name'          => 'SideBar',              
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );

register_sidebar( array(
	'name'          => 'Pie-de-pagina',              
	'before_widget' => '<div id="%1$s"  class="widget text-center  %2$s" >',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle" style="color:white">',
	'after_title'   => '</h2>',
));

register_sidebar( array(
	'name'          => 'login',              
	'before_widget' => '<div id="%1$s"  class="widget text-center  %2$s" >',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle" style="color:white">',
	'after_title'   => '</h2>',
));

//remove_action( 'personal_options', '_admin_bar_preferences' );
?>
