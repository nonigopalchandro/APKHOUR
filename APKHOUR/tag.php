<?php get_header(); ?>

<div class="left_sidebar"><div class="title"><h3>Tagged Posts '<?php single_tag_title(); ?>'</h3></div>
<ul class="recent">
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<li>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>
<?php
// Feature post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img src="';
 echo catch_that_image();
 echo '" alt="" />';
} ?>
<p>Posted by: <?php the_author_posts_link(); ?> <font color="red">|</font> <?php echo human_time(); ?> <font color="red">|</font> <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'No Comment', '1 Comment', '% Comments' ); ?></a> <font color="red">|</font> <?php echo getPostViews(get_the_ID()); ?></p><?php the_excerpt('10'); ?>
</li>
<?php endwhile; else: ?>
<?php endif; ?>
</ul>
<div class="title"><?php wp_pagenavi(); ?></div>
</div>
<?php get_sidebar();?>
</div></div>

<?php get_footer(); ?>