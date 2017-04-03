<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>   
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <?php wp_head(); ?>
    
    <style>
        .showcase{
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        }
    </style>
  </head>

  <body>

    <!-- HEADER -->
    <header class="site-header" role="banner">
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/"class="navbar-brand">DAVID<span>DUGGER</span></a>
                    </div>
                    
                    <?php
                        wp_nav_menu(array(
                            'theme_location'        => 'primary',
                            'container'             => 'nav',
                            'container_class'       => 'navbar-collapse collapse',
                            'menu_class'            => 'nav navbar-nav navbar-right'
                        ));
                    ?>
                    
                </div>
            </div>
        </div>
    </header>
        
    <section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'David\'s Portfolio Site'); ?></h1>
            <h4><?php echo get_theme_mod('showcase_text', 'What do you want to say'); ?></h4>
            <a href="<?php get_theme_mod('btn_url', 'http://www.davidmdugger.com'); ?>" class="btn btn-default btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
        </div>
    </section>

    <footer class="blog-footer">
      <p>&copy;<?php echo date('Y') . " - " . "David M Dugger"; ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>
</html>