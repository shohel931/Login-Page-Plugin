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
    'dashicons-lock',
    101
  );
}
add_action('admin_menu', 'shohel_login_page_option_page');

// Callback function for the option page
function shohel_login_page_option_page_callback(){
  ?>
  <div class="shohel_login_main">
    <h1><?php _e('Login Page Options', 'shohel-login-page'); ?></h1>
    <form method="post" action="options.php">
        <?php wp_nonce_field('update-options'); ?>
        <label for="shohel-primary-color" name="shohel-primary-color"><?php print esc_attr('Primary Color');  ?></label>
        <input type="color" name="shohel-primary-color" value="<?php print get_option('shohel-primary-color'); ?>">
      
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="page_options" value="shohel-primary-color">
        <input type="submit" value="<?php _e('Save Changes', 'shohel-login-page'); ?>" class="button button-primary">
        <?php settings_fields('shohel-login-page-options'); ?>
    </form>
  </div>
   

<?php



}











?>




