    <?php
        function wp_customize_register($wp_customize){
            // Showcase Section
            $wp_customize->add_section('showcase', array(
                'title'         => __('Showcase', 'myportfolio'),
                'description'   => sprintf(__('Options for Showcase', 'myportfolio')),
                'priority'      => 130
            ));
            
            // Image
            $wp_customize->add_setting('showcase_image', array(
                'default'       => get_bloginfo('template_directory').'/img/showcase.jpg',
                'type'          => 'theme_mod'
            ));
            
            // Image Control
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
                'label'         => __('Showcase Image', 'myportfolio'),
                'section'       => 'showcase',
                'settings'      => 'showcase_image',
                'priority'      => 1
            )));
            
            // Heading
            $wp_customize->add_setting('showcase_heading', array(
                'default'       => _x('David\'s Portfolio Site', 'myportfolio'),
                'type'          => 'theme_mod'
            ));
            
            // Heading Control
            $wp_customize->add_control('showcase_heading', array(
                'label'         => __('Heading', 'myportfolio'),
                'section'       => 'showcase',
                'priority'      => 2
            ));
            
            // Subheading
            $wp_customize->add_setting('showcase_text', array(
                'default'       => _x('Just a brief intro to David and why he loves what he does', 'myportfolio'),
                'type'          => 'theme_mod'
            ));
            
            // Subheading control
            $wp_customize->add_control('showcase_text', array(
                'label'         => __('Text', 'myportfolio'),
                'section'       => 'showcase',
                'priority'      => 3
            ));
            
            // Button
            $wp_customize->add_setting('btn_url', array(
                'default'       => _x('http://www.davidmdugger.com', 'myportfolio'),
                'type'          => 'theme_mod'
            ));
            
            // Button Control
            $wp_customize->add_control('btn_url', array(
                'label'         => _x('Button URL', 'myportfolio'),
                'section'       => 'showcase',
                'priority'      => 4
            ));
            
            // Button Text
            $wp_customize->add_setting('btn_text', array(
                'default'       => _x('Read More', 'myportfolio'),
                'type'          => 'theme_mod'
            ));
            
            // Button Text Control
            $wp_customize->add_control('btn_text', array(
                'label'         => __('Button Text', 'myportfolio'),
                'section'       => 'showcase',
                'priority'      => 5
            ));
        }

        add_action('customize_register', 'wp_customize_register');
    ?>