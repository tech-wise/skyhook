<?php
 
if ( ! function_exists( 'skyhook_setup' ) ) :
function skyhook_setup() {
 

	add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'skyhook' ),
        'secondary' => __('Secondary Menu', 'skyhook' )
    ) );
 
}
endif; // 
add_action( 'after_setup_theme', 'skyhook_setup' );

// Define Widgets 
function skyhook_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'skyhook' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'skyhook_widgets_init' );

?>