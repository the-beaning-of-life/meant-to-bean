<?php 
/*
Template Name: Contact Page
*/
 ?>

<?php get_header();  ?>

<div class="main-contact">
	<div class="contact-content">
      	<div class="contact-form clearfix">
				<form action="mail.php" method="POST" class="mail">
					<h2><?php the_title(); ?></h2>
					<input type="text" name="name" class="username" placeholder="Your Name">
					<input type="email" name="email" class="email" placeholder="Your Email">
					<textarea name="bio" class="bio" cols="30" rows="10" placeholder="Your message"></textarea>
					<input type="submit" value="Send Email" class="submitButton">
				</form>
		</div>
    </div> <!-- /,content -->
</div> <!-- /.main -->

<?php get_footer(); ?>