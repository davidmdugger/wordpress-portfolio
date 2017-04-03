<?php
    function wp_theme_setup(){
        add_theme_support( 'post-thumbnails' );

        // Nav Menus
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'myportfolio')
        ));
        
        // post formats
        add_theme_support('post-formats', array('aside', 'gallery'));
        
    }

    add_action('after_setup_theme', 'wp_theme_setup');

    // Excerpt Length Control

    function set_excerpt_length(){
        return 30;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    // Widgeth Locations

    function wp_init_widgets($id){
        register_sidebar(array(
            'name'                  => 'Sidebar',
            'id'                    => 'sidebar',
            'before_widget'         => '<div class="sidebar-module">',
            'after_widger'          => '</div>',
            'before_title'          => '<h4>',
            'after_title'           => '</h4>'
        ));
        
        register_sidebar(array(
            'name'                  => 'Box1',
            'id'                    => 'box1',
            'before_widget'         => '<div class="box">',
            'after_widger'          => '</div>',
            'before_title'          => '<h3>',
            'after_title'           => '</h3>'
        ));

        register_sidebar(array(
            'name'                  => 'Box2',
            'id'                    => 'box2',
            'before_widget'         => '<div class="box">',
            'after_widger'          => '</div>',
            'before_title'          => '<h3>',
            'after_title'           => '</h3>'
        ));

        register_sidebar(array(
            'name'                  => 'Box3',
            'id'                    => 'box3',
            'before_widget'         => '<div class="box">',
            'after_widger'          => '</div>',
            'before_title'          => '<h3>',
            'after_title'           => '</h3>'
        ));
        
        
    }

    add_action('widgets_init', 'wp_init_widgets');

    // Customize File
    require get_template_directory() . '/inc/customizer.php'

?>


