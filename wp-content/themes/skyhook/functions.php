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
        'secondary' => __('Secondary Menu', 'skyhook' ),
        'solution' => __('Solution Menu', 'skyhook'),
        'other' => __('other','skyhook')
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
	));
//Footer Logo iamge 	
        register_sidebar(array(
            'id' => 'footer-logo',
            'name' => 'Footer Logo',
            'description' => 'company logo for footer',
            'before_widget' => '',
		    'after_widget'  => '',
		    'before_title'  => '',
		    'after_title'   => '',
        ));
        //Footer description text 	
        register_sidebar(array(
            'id' => 'footer-text',
            'name' => 'Footer Description',
            'description' => 'Footer text after logo',
            'before_widget' => '',
		    'after_widget'  => '',
		    'before_title'  => '',
		    'after_title'   => '',
        ));
        register_sidebar(array(
            'id'=> 'copyright_text',
            'name' => 'Copyriht Text',
            'description' =>'Footer Copyright Text',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
        register_sidebar(array(
            'id'=> 'social-icon',
            'name' => 'Social Icon',
            'description' =>'Social Icon links',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
}
add_action( 'widgets_init', 'skyhook_widgets_init' );

?>