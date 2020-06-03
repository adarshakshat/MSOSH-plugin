<?php 
/**
 * Plugin Name:       Add Course
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Add Course Facility to MSOSH
 * Version:           1.0
 * Author:            Adarsh Akshat
 * Author URI:        github.com/adarshakshat
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */




/**
 * Register the "Course" custom post type
 */
function msoshcourse_setup_post_type() {
    $args = array(
        'label' => 'Courses',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' =>'courses'),
        'query_var' => true,
        'supports' =>array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'course', $args);



    $args = array(
        'label' => 'Faculty',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' =>'faculty'),
        'query_var' => true,
        'supports' =>array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
        
    register_post_type( 'faculty', $args);



    $args = array(
        'label' => 'Notices',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' =>'notice'),
        'query_var' => true,
        'supports' =>array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'comments',
            'custom-fields',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
        
    register_post_type( 'notice', $args);
} 
add_action( 'init', 'msoshcourse_setup_post_type' );
 
 
/**
 * Activate the plugin.
 */
function msoshcourse_activate() {
    // Trigger our function that registers the custom post type plugin.
    msoshcourse_setup_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'msoshcourse_activate' );


/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'faculty' );
    unregister_post_type( 'course' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );

?>
