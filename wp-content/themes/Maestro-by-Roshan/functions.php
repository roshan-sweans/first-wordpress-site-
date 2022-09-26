    <?php
    /**
     * Theme Functions.
     * @package Maestro-by-Roshan
     */

    //  linking the style sheets into the page 

    function mastro_load_scripts()
    {
        $version = wp_get_theme()->get('Version');
        // wp_enqueue_style('googel-fonts',"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200",array(),'1.0','all');
        wp_enqueue_style('mastro-roshan', get_template_directory_uri() . "/assets/css/style.css", array('owl-theme'), fileatime(get_template_directory().'/assets/css/style.css'), 'all');
        wp_enqueue_style('owl', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array('font-awesome'), '1.0', 'all');
        wp_enqueue_style('owl-theme', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array('owl'), '1.0', 'all');
        wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0');
    }
    add_action('wp_enqueue_scripts', 'mastro_load_scripts');


// linking the js files into the page 

    function load_mastro_js()
    {
        wp_enqueue_script('mastro-jquery', get_template_directory_uri() . "/assets/js/jquery.3.6.1.js", array(), '1.0', true);
        wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . "/assets/js/owl.carousel.min-2.3.4.js", array('mastro-jquery'), '1.0', true);
        wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", array('owl-carousel-js'), '1.0', true);
    }
    add_action('wp_enqueue_scripts','load_mastro_js');
    ?>