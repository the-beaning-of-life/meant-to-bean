<?php 
/*
Template Name: Home Page
*/
 ?>

<?php get_header();  ?>

<div class="main">

	<section class="heroImage">
		<div class="container">
			<h1>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
    </div>
	</section>

  <div class="container">

	

  </div> 
</div> <!-- /.main -->

<?php get_footer(); ?>

 <!--    <div class="content">
	    <div class="header">	
		    <h1>Name of coffee shop</h1>
		</div>

		 <h2><a href="<?php echo get_permalink('$menu'); ?>">Link to menu page</a></h2>

		 <?php $permalink = get_permalink( $id, $leavename ); ?> 

		

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div>  -->