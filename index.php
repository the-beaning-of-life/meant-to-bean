<?php 
/*
Template Name: Home Page
*/
 ?>

<?php get_header();  ?>

<div class="mainPage">

	<section class="heroImage">
		<div class="container">
			<div class="titleTagline">
				<h1>
					<?php bloginfo( 'name' ); ?>
		    </h1>
		    <h2 class="subtitle">
			    	<?php echo get_bloginfo ( 'description' );  ?>
		    </h2>
			</div>
    </div>
	</section>

  <section class="welcomeAbout">
  	<div class="container">
  		<h2>Hello and welcome to <?php bloginfo( 'name' ); ?>!</h2>
  		<p>
  			We are a cafe thats works hard to offer you a selection of meals that are as fresh and sustainable as possible. 
  		</p>
  	</div>
  </section>

  <section class="menuInfo">
  	<div class="container">
  		<h2>Take a look at our menu</h2>
  		<div class="menuButton">
  			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Menu' ) ) ); ?>">Click Here</a>
  		</div>
  	</div>
  </section>

  <section class="blogInfo">
  	<div class="container">
  		<h2>News</h2>
  		<h3>Find out more about what we're up to...</h3>
  		<div class="miniPostCont">
  			<?php $the_query = new WP_Query( 'showposts=3' ); ?>
  			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  			<div class="homeMiniPost">
  				<a href="<?php the_permalink() ?>">
  					<?php the_title(); ?>
  				</a>
  				<div class="miniPostImg">
		  			<?php set_post_thumbnail_size( 300, 300 );the_post_thumbnail('medium'); ?>
  				</div>
  			</div>
  			<?php endwhile;?>
  		</div>
  	</div>
  </section>

  <section class="pictureSection">
  	<div class="container">

  	</div>
  </section>

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