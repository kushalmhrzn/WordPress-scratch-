<!--this is page only develop for the admin so that others cannot view it-->
<?php
/*
    Template Name: Page No Title
*/
get_header(); ?>
	<?php 

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<h3> This is my Static page </h3>

            <!-- here the f j y means the time and date-->
            
			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

			<p><?php the_content(); ?></p>

			<hr>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?> 
