<?php 
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define ( 'IMAGES', TEMPPATH. "/images");

/* code for menu support in wordpress */
add_theme_support('nav-menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(
            array(
                'main' => 'Main Nav'
            ));
}

/* code for sidebar support in wordpress */
if (function_exists('register_sidebar')) {
    register_sidebar ( array (
        'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
        'id' => 'primary-widget-area',
        'description' => __( 'The primary widget area', 'dir' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

/* for the custom post type */
require_once('business-manager.php');
require_once ('theme-options.php');
require_once ('director-widgets.php');

/* For displaying custom post */
add_action('init', 'director_rewrite');
function director_rewrite(){
    global $wp_rewrite;
    $wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
    add_rewrite_rule('typename/[0-9]{4}/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
    $wp_rewrite->flush_rules();
}

/* Changing the_excerpt in wordpress */
function director_excerpt_more($more) {
    return ' <a href="'. get_permalink() .'">Continue...</a>';
}
add_filter('excerpt_more', 'director_excerpt_more', 999);

?>