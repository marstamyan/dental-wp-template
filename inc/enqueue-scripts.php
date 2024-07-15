<?php 
/**
 * Enqueue scripts and styles.
 */

 function theme_enqueue_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );		
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'media-css', get_template_directory_uri() . '/assets/css/media.css' );

	wp_enqueue_script( 'swiper-script', get_template_directory_uri() .'/assets/js/swiper-bundle.min.js', [], '1.0', true );
	wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.js', [], '1.0', true );
	wp_enqueue_script( 'ajax-forms', get_template_directory_uri() .'/assets/js/ajax-forms.js', [], '1.0', true );

	wp_localize_script('script', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
	// wp_localize_script('ajax-forms', 'success_message', array('message' => pll__( 'Application submitted' )) );
	// wp_localize_script('ajax-forms', 'error_message', array('message' => pll__( 'Some error' )) );
	wp_localize_script('ajax-forms', 'ajax_forms_data', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('submit_form_nonce'),
        'success_message' => pll__( 'Application submitted' ),
        'error_message' => pll__( 'Some error' )
    ));

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>