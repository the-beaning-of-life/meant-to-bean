<?php 
/*
Template Name: Menu Page
*/
 ?>

<?php get_header();  ?>

<div class="main">
  <div class="container">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
       <!--  <?php the_content(); ?> -->

       <div class="menuColumn">
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>
       </div>

       <div class="menuColumn">
	       <h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>
       </div>

       <div class="menuColumn">
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>	
	       	<h3><?php the_title(); ?></h3>
	       	<p><?php the_content(); ?></p>
       </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>