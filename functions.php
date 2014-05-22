<?php
/*
Plugin Name: Custom TEDxTrento Admin
Description: Custom Admin
Author: Babbies Production
Author URI: http://www.facebook.com/babbiesproduction
*/

// AA: remove xmlrpc header
function remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}
add_filter('wp_headers', 'remove_x_pingback');

// AA: remove generator meta
remove_action('wp_head', 'wp_generator'); 

// AA: Remove Windows Live Writer link in header
// AA: Do Not do this if you use it
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link'); 

// AA: Remove WP version info
function hide_wp_vers()
{
    return 'TEDxTrento';
} // end hide_wp_vers function

add_filter('the_generator','hide_wp_vers');

function rm_generator_filter() { return 'TEDxTrento'; }

if (function_exists('add_filter')) {
  $types = array('html', 'xhtml', 'atom', 'rss2', /*'rdf',*/ 'comment', 'export');

  foreach ($types as $type)
    add_filter('get_the_generator_'.$type, 'rm_generator_filter');
}


// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
    // Add a new submenu under Settings:
    add_options_page(__('Test Settings','menu-test'), __('Test Settings','menu-test'), 'manage_options', 'testsettings', 'mt_settings_page');

    // Add a new submenu under Tools:
    add_management_page( __('Test Tools','menu-test'), __('Test Tools','menu-test'), 'manage_options', 'testtools', 'mt_tools_page');

    // Add a new top-level menu (ill-advised):
    add_menu_page(__('TEDxTN Istruzioni','menu-test'), __('TEDxTN Istruzioni','menu-test'), 'manage_options', 'mt-top-level-handle', 'mt_toplevel_page' );

}

// mt_settings_page() displays the page content for the Test settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Test Settings', 'menu-test' ) . "</h2>";
}

// mt_tools_page() displays the page content for the Test Tools submenu
function mt_tools_page() {
    echo "<h2>" . __( 'Test Tools', 'menu-test' ) . "</h2>";
}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
    echo "<h1>" . __( 'TEDxTrento - come aggiornare il sito:', 'menu-test' ) . "</h1>";
    get_template_part( 'how', 'to' );
}

//change login logo
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/img/tedxtrento-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>
