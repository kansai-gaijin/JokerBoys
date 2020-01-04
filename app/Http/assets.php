<?php

namespace JokerB\Theme\App\Http;

/*
|-----------------------------------------------------------------
| Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your theme stylesheets and scripts.
| In here you should also deregister all unwanted assets which
| can be shiped with various third-parity plugins.
|
*/

use function JokerB\Theme\App\asset_path;

/**
 * Registers theme stylesheet files.
 *
 * @return void
 */
function register_stylesheets() {
    wp_enqueue_style('app', asset_path('css/app.css'));
}
add_action('wp_enqueue_scripts', 'JokerB\Theme\App\Http\register_stylesheets');

/**
 * Registers theme script files.
 *
 * @return void
 */
function register_scripts() {
    wp_enqueue_script('app', asset_path('js/app.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'JokerB\Theme\App\Http\register_scripts');

/**
 * Registers theme admin script files.
 *
 * @return void
 */
function register_admin_scripts() {
  wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-sortable');
 
	if ( ! did_action( 'wp_enqueue_media' ) )
    wp_enqueue_media();
    
    wp_enqueue_script('app', asset_path('js/admin.js'), ['jquery'], null, true);
    wp_enqueue_style('app', asset_path('css/admin.css'));
}
add_action( 'admin_enqueue_scripts', 'JokerB\Theme\App\Http\register_admin_scripts' );

/**
 * Registers editor stylesheets.
 *
 * @return void
 */
function register_editor_stylesheets() {
    add_editor_style(asset_path('css/app.css'));
}
add_action('admin_init', 'JokerB\Theme\App\Http\register_editor_stylesheets');

/**
 * Moves front-end jQuery script to the footer.
 *
 * @param  \WP_Scripts $wp_scripts
 * @return void
 */
function move_jquery_to_the_footer($wp_scripts) {
    if (! is_admin()) {
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }
}
add_action('wp_default_scripts', 'JokerB\Theme\App\Http\move_jquery_to_the_footer');
