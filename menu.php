<?php 
/*
Template Name: Menu Page
*/
 ?>

<?php get_header();  ?>

<div class="main">
<div class="menuHeader">
	<h1>Menu</h1>
</div>
  <div class="container">


     <!--  <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
  	<?php the_title(); ?>
       <?php the_content(); ?> 


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>