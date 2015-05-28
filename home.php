<?php 
/*
Template Name: Home Page
*/
 ?>

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
	    <div class="header">	
		    <h1>Name of coffee shop</h1>
		</div>

		 <h2><a href="<?php echo get_permalink( $menu.php ); ?>">Link to menu page</a></h2>


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>