<?php 
/*=======================================
       ADDS STYLESHEETS & JS FILES
=======================================*/

function custom_theme_scripts(){
    //JQUERY
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/jquery/dist/jquery.min.js');
        //MAIN JS FILE
        wp_enqueue_script(
            'myscript', // lowercase name of script
            get_template_directory_uri() . '/js/scripts.js', // url to script
            array( 'jquery' ), // libraries to use
            false, // version of script (false is WP version)
            true // load in footer (true) or head (false)? 
        );

        wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), NULL, true ); 


        wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/js/slider.js', array('jquery'), NULL, true ); 
        wp_enqueue_script('slideshow-js', get_stylesheet_directory_uri() . '/js/slideshow.js', array('jquery'), NULL, true ); 

    


    //MAIN STYLESHEET
    wp_enqueue_style('main-style', get_stylesheet_uri());


}

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

register_sidebar(array(
    'name' => ('IG Plugin'),
    'id' => 'ig-plugin',
    'description' => 'Widget Space for IG',
    'before_widget' => '<div class="container">',
        'after_widget' => '</div>'
    ));

?>