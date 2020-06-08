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
        'show_in_rest' => true,
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
        'show_in_rest' => true,
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
        'show_in_rest' => true,
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
add_shortcode('coursecard', 'msosh_shortcode');
function msosh_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
   // add_css();
   $content1 = '<div class="row">
   <div class="col"><i class="fa fa-star"></i>
       <h1>Heading</h1>
       <div role="tablist" class="text-left accordion ml-5" id="accordion-q">
           <div class="card">
               <div role="tab" class="card-header">
                   <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-1" href="#accordion-q .item-1" class="collapsed">  Accordion ITEM</a></h5>
               </div>
               <div role="tabpanel" data-parent="#accordion-q" class="collapse item-1">
                   <div class="card-body">
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /></p>
                   </div>
               </div>
           </div>
           <div class="card">
               <div role="tab" class="card-header">
                   <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-2" href="#accordion-q .item-2" class="collapsed"><strong>ACCORDION ITEM</strong></a></h5>
               </div>
               <div role="tabpanel" data-parent="#accordion-q" class="collapse item-2">
                   <div class="card-body">
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
               </div>
           </div>
           <div class="card">
               <div role="tab" class="card-header">
                   <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-3" href="#accordion-q .item-3" class="collapsed"><strong>ACCORDION ITEM</strong></a></h5>
               </div>
               <div role="tabpanel" data-parent="#accordion-q" class="collapse item-3">
                   <div class="card-body">
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>';
    $content2 = '<div class="row">
    <div class="col">
        <div class="card col-sm-12 col-lg-3 col-md-6">
            <div class="card-body text-center bg-dark text-light">
                <h4 class="card-title text-light">Title</h4>
                <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a></div><img
                class="card-img-bottom w-100 d-block card-img-cover" /></div>
    </div>
</div>
'
;

    $content = $content2;
    return $content;
}
function add_css(){
    wp_register_style( 'msoshplugincss', get_template_directory_uri() . 'msoshstyles.css','','', 'screen' );}
    add_action( 'wp_enqueue_scripts', 'add_css' );
?>
