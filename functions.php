<?php 

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'auto_scripts' );

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

function auto_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/assets/css/_normalize.css' );
    wp_enqueue_style( 'style_blog', get_stylesheet_directory_uri() . '/assets/css/style_blog.css' );
    wp_enqueue_style( 'media', get_stylesheet_directory_uri() . '/assets/css/media.css' );
    wp_enqueue_style( 'patreons', get_stylesheet_directory_uri() . '/assets/css/style_patreons.css' );

wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/jquery.cookie.js', array(), '1.0.0', true );
}

show_admin_bar(false);

add_theme_support('post-thumbnails'); // добавляем банеры к постам 


// добавляем меню 
add_theme_support( 'after_setup_theme', 'theme_register_nav_menu'); 

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu_ua' => 'Меню в шапке/укр',
		'footer_menu_ua' => 'Меню в подвале/укр',
        'mobile_menu_ua' => 'Мобильное меню/укр',
        'header_menu_en' => 'Меню в шапке/анг',
		'footer_menu_en' => 'Меню в подвале/анг',
        'mobile_menu_en' => 'Мобильное меню/анг'
	] );
} );