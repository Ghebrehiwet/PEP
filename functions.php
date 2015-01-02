<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

register_nav_menus();

register_nav_menu("main_menu", "Main Menu");

register_nav_menu("secondary_menu", "Secondary Menu");

//wp_nav_menu($mainMenu);

add_theme_support("post-thumbnails");

set_post_thumbnail_size(200,200, true);

add_post_type_support("page", "excerpt");

//menu
$mainMenu = array(
	"theme_location" => "main_menu",
	"container" => "ul",
	"container_class" => "",
	"container_id" => "main_menu",
	"depth" => 1
);

$SecondaryMenu = array(
	"theme_location" => "secondary_menu",
	"container" => "ul",
	"container_class" => "",
	"container_id" => "secondary_menu",
	"depth" => 1
);


require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wpbootstrap' ),
) );



function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'right',
			'name' => __( 'Right Sidebar' ),
			 
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the secondary sidebar.*/
	register_sidebar(
		array(
			'id' => 'widget',
			'name' => __( 'Widget Sidebar' ),
			 
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the footer widget area. */
	register_sidebar(
		array(
			'id' => 'footer',
			'name' => __( 'Footer Widget Area' ),
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the footer widget area. */
	register_sidebar(
		array(
			'id' => 'managerinfo',
			'name' => __( 'Footer Widget Area 2' ),
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'my_register_sidebars' );

?>