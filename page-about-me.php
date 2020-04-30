<!-- specific page for the about me with a different structure-->
<!--specific shouldn't be created everytime if client is using-->
<!--the header and footer should always be repeated incase absence the wordpress will not automatically implement it-->
<?php get_header(); ?>

	<?php 

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

            <h3><?php the_title(); ?></h3>

			<hr>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?> 
