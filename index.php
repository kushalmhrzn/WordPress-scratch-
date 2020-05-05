<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">	

			<?php 

			if( have_posts() ):

				while( have_posts() ): the_post(); echo 'THIS IS POST FORMAT: '.get_post_format(); ?>

					<!--function used to get template part gives us the ability to include without
					using included require from PHP a specific part of our team inside web-based directories-->
					<?php get_template_part('content',get_post_format()); ?>

				<?php endwhile;

			endif;

			?>
		</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>	
			

<?php get_footer(); ?> 
