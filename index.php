<?php get_header(); ?>

	<?php 

	if( have_posts() ):

		while( have_posts() ): the_post(); echo 'THIS IS POST FORMAT: '.get_post_format(); ?>

			<!--function used to get template part gives us the ability to include without
			using included require from PHP a specific part of our team inside web-based directories-->
			<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?> 
