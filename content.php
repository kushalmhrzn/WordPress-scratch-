<h3><?php the_title(); ?></h3>

<!--hook to call the post thumbnails -->
<div class="thumbnail-img"><?php the_post_thumbnail(); ?> </div>

<!-- here the f j y means the time and date-->
<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>

<hr>