<!-- specific page for the about me with a different structure-->
<!--specific shouldn't be created everytime if client is using-->
<!--the header and footer should always be repeated incase absence the wordpress will not automatically implement it-->
<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<p><?php the_content(); ?></p>
				
				<h3><?php the_title(); ?></h3>
				
				<hr>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?> 
