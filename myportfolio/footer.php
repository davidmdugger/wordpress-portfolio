            <?php if(!is_front_page()) : ?>
                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

                  <?php if(is_active_sidebar('sidebar')) : ?>
                      <?php dynamic_sidebar('sidebar'); ?>
                  <?php endif; ?>

                </div><!-- /.blog-sidebar -->
            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->

    <?php get_footer(); ?>
     

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