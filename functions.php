<?php
require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/carbon-fields/carbon-fields.php';
require_once get_template_directory() . '/template-parts/breadcrumbs.php';
require_once get_template_directory() . '/template-parts/pagination.php';
require_once get_template_directory() . '/inc/ajax-forms.php';

add_action( 'after_setup_theme', 'dental_setup_theme' );
function dental_setup_theme() {
	// menus
	register_nav_menus( [
		'header_menu' => esc_html__( 'Header menu', 'dental' ),
		'mobile_menu' => esc_html__( 'Mobile menu', 'dental' ),
		'footer_menu' => esc_html__( 'Footer menu', 'dental' )
	] );

	add_theme_support( 'custom-logo', [
		'height'               => '',
		'width'                => '',
		'flex-height'          => '',
		'flex-width'           => '',
		'header-text'          => [ 'site-title', 'site-description' ],
		'unlink-homepage-logo' => true,
	] );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'widgets' );
	load_theme_textdomain( 'dental', get_template_directory() . '/languages' );
}


add_action( 'init', 'staff_register_post_types' );
function staff_register_post_types() {
	register_post_type( 'staff', [
		'labels'             => [
			'name'               => esc_html__( 'Staff', 'dental' ),
			'singular_name'      => esc_html__( 'Staff', 'dental' ),
			'add_new'            => esc_html__( 'Add staff', 'dental' ),
			'add_new_item'       => esc_html__( 'Add new staff', 'dental' ),
			'edit_item'          => esc_html__( 'Edit staff', 'dental' ),
			'new_item'           => esc_html__( 'new staff', 'dental' ),
			'view_item'          => esc_html__( 'See post', 'dental' ),
			'search_items'       => esc_html__( 'Find', 'dental' ),
			'not_found'          => esc_html__( 'Not found', 'dental' ),
			'not_found_in_trash' => esc_html__( 'Not found', 'dental' ),
			'parent_item_colon'  => '',
			'menu_name'          => esc_html__( 'Staff', 'dental' )
		],
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'menu_icon'          => 'dashicons-admin-users',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => [ 'title', 'thumbnail' ]
	] );
}

//polylang
add_action( 'init', 'theme_polylang_strings' );

function theme_polylang_strings() {

	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	pll_register_string( 'dental', 'Перейти на' );
	pll_register_string( 'dental', 'Наш офис' );
	pll_register_string( 'dental', 'Страница не найдена' );
	pll_register_string( 'dental', 'главную' );
	pll_register_string( 'dental', 'Новая заявка' );
	pll_register_string( 'dental', 'Home' );
	pll_register_string( 'dental', 'home' );
	pll_register_string( 'dental', 'Получить консультацию' );
	pll_register_string( 'dental', 'Наши услуги' );
	pll_register_string( 'dental', 'Наши стоматологи' );
	pll_register_string( 'dental', 'Часы работы' );
	pll_register_string( 'dental', 'Ваше имя' );
	pll_register_string( 'dental', 'Ваш телефон' );
	pll_register_string( 'dental', 'Отправить' );
	pll_register_string( 'dental', 'Нажимая кнопку, я даю свое согласие на обработку моих персональных данных' );
	pll_register_string( 'dental', 'Наш телефон' );
	pll_register_string( 'dental', 'Наша почта' );
	pll_register_string( 'dental', 'Образование и квалификация' );
	pll_register_string( 'dental', 'Опыт' );
	pll_register_string( 'dental', 'График работы' );
	pll_register_string( 'dental', 'Связаться с нами' );
	pll_register_string( 'dental', 'Социальные сети' );
	pll_register_string( 'dental', 'Телефон' );
	pll_register_string( 'dental', 'Читать далее' );
	pll_register_string( 'dental', 'Нет постов для отображения' );
	pll_register_string( 'dental', 'Все статьи' );
	pll_register_string( 'dental', 'Наши специалисты' );
	pll_register_string( 'dental', 'Новости Dental Tooth' );
	pll_register_string( 'dental', 'Записаться на прием' );
	pll_register_string( 'dental', 'Previous' );
	pll_register_string( 'dental', 'Next' );
	pll_register_string( 'dental', 'First' );
	pll_register_string( 'dental', 'last' );
	pll_register_string( 'dental', 'Комментарий' );
	pll_register_string( 'dental', 'Application submitted' );
	pll_register_string( 'dental', 'Some error' );
}

if ( ! function_exists( 'pll__' ) ) {
	function pll__( $string ) {
		return $string;
	}
}

if ( ! function_exists( 'pll_e' ) ) {
	function pll_e( $string ) {
		echo $string;
	}
}

//polylang for carbon fields
function carbon_lang_prefix() {
	$prefix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $prefix;
	}
	$prefix = '_' . ICL_LANGUAGE_CODE;

	return $prefix;
}

// Add a hook to modify menu anchor links
add_filter( 'wp_nav_menu_objects', 'custom_menu_links_with_anchors' );
function custom_menu_links_with_anchors( $items ) {
	foreach ( $items as $item ) {
		if ( strpos( $item->url, '#' ) !== false ) {
			$item->url = home_url() . $item->url;
		}
	}

	return $items;
}


//views
function increment_post_views() {
    if (is_singular()) {
        $post_id = get_the_ID();
        $views_key = 'post_views_count';
        $views = get_post_meta($post_id, $views_key, true);
        $views = $views ? intval($views) + 1 : 1;
        update_post_meta($post_id, $views_key, $views);
    }
}
add_action('wp', 'increment_post_views');


function display_post_views() {
    if (is_singular()) {
        $post_id = get_the_ID();
        $views_key = 'post_views_count';
        $views = get_post_meta($post_id, $views_key, true);
        echo ' | &#128065; ' . $views;
    }
}