<?php 

/*
@package sunsettheme
    ===============================
    ADMIN PAGE
    ===============================

*/

function sunset_add_admin_page() {
    //Generate Sunset Admin Page
    add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'nesti_sunset', 'sunset_theme_create_page',  get_stylesheet_directory_uri() . '/img/sunset.png', 110);

    // Generate Sunset Admin Sub Pages
    add_submenu_page( 'nesti_sunset', 'Sunset Theme Options', 'General', 'manage_options', 'nesti_sunset', 'sunset_theme_create_page' );
    add_submenu_page( 'nesti_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'nesti_sunset_css', 'sunset_theme_settings_page' );
}

add_action('admin_menu', 'sunset_add_admin_page');


function sunset_theme_create_page() {
    //Generation of our admin page
    require_once( get_template_directory() . '/inc/template/sunset-admin.php');
}

function sunset_theme_settings_page() {

}