<?php
//menu 
register_nav_menus( array(
	'menu'=>'Menu superior',
	));
//submenu
function new_submenu_class($menu) {    
	$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);        
	return $menu;      
}
add_filter('wp_nav_menu','new_submenu_class'); 
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
