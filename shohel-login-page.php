<?php  

/*
* Plugin Name: Shohel Login Page
* Plugin URI: https://wordpress.org/plugins/shohel-login-page
* Description: A simple plugin to customize the WordPress login page with a custom logo and background.
* Version: 1.0.0
* Requires at least: 5.8
* Requires PHP: 7.0
* Author: Shohel Rana
* Author URI: https://shohelrana.top
* License: GPLv2 or later 
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: shohel-login-page
*/



/*
* Option Page for the plugin 
*/
function shohel_login_page_option_page(){
  add_menu_page(
    __('Login Page Options', 'shohel-login-page'),
    __('Login Option', 'shohel-login-page'),
    'manage_options',
    'shohel-login-page-options',
    'shohel_login_page_option_page_callback',
    'dashicons-unlock',
    101
  );
}
add_action('admin_menu', 'shohel_login_page_option_page');

// Callback function for the option page
function shohel_login_page_option_page_callback(){
  ?>


<?php



}






?>