<?php


//Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',

		)
	);
}



// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'about ' => __( 'about ', 'text_domain' ),
		'services' => __( 'services', 'text_domain' ),
		'projects' => __( 'projects', 'text_domain' ),
		'resume' => __( 'resume', 'text_domain' ),
		'blog' => __( 'blog', 'text_domain' ),
        'contact ' =>__('contact ', 'text_domain')
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );   
   
//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	
	
	
	
}


