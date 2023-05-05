<?php get_header();?>


<div class="container">
<section class="home-section clearfix">
<article>
<div class="home-heading clearfix"> 
<a href="<?php bloginfo('url'); ?>/category/games/">
<h2>Popular Apps & Games</h2></a> 
<a href="<?php bloginfo('url'); ?>/category/games/">
<span class="btn-success">See more</span>
</a>
</div>
<div class="main-content">
<div class="row">
<?php
$popularpost = new WP_Query( array( 'posts_per_page' => 12,
                                    'meta_key' => 'post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'post__not_in' => get_option('sticky_posts'),
                                    'order' => 'DESC'  ) ); ?>
                                    
<?php  while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
<?php $count = '';?>
<div class=" col-xs-6 col-md-2 col-sm-4">
<div class="inner-box ">
<div class="cover text-center">
<div class="inner-cover"> 
<img data-lazyloaded="1" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" class="img-rounded image-thumb" data-src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>" />
<noscript>
<img class="img-rounded image-thumb" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>"  />
</noscript>
</div> 

<a href="<?php the_permalink() ?>"></a></div>
<div class="detail"> <a class="sidebar-a" href="<?php the_permalink() ?>" title="<?php the_title() ?>"> 
<?php the_title() ?>
<span class="para-end"></span> </a><div class="sub-detail"> 
<?php
$category = get_the_category();
$first_category = $category[0];
echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );
?>
<span style="display: none;">Free</span></div>
<div class="display-rating "> 
<img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="https://apkhome.net/wp-content/plugins/wp-postratings/images/stars/rating_off.gif" alt="0 votes, average: 0.00 out of 5" title="0 votes, average: 0.00 out of 5" class="post-ratings-image" />
<span style="float:right;color: #00BCD4;">Free</span>
</div>
</div>
</div>
</div>


<?php endwhile; ?>


</div>
</div>
</article>
				
				
				
				
<article>
<div class="home-heading clearfix"> 
<a href="<?php bloginfo('url'); ?>/category/apps/"><h2>New Apps & Games</h2></a>
<a href="<?php bloginfo('url'); ?>/category/apps/"><span class="btn-success">See more</span></a></div>

<div class="main-content">
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class=" col-xs-6 col-md-2 col-sm-4">
<div class="inner-box ">
<div class="cover text-center">
<div class="inner-cover"> 
<img data-lazyloaded="1" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" class="img-rounded image-thumb" data-src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>" />
<noscript>
<img class="img-rounded image-thumb" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>"  />
</noscript>
</div> 

<a href="<?php the_permalink() ?>"></a></div>
<div class="detail"> <a class="sidebar-a" href="<?php the_permalink() ?>" title="<?php the_title() ?>"> 
<?php the_title() ?>
<span class="para-end"></span> </a><div class="sub-detail"> 
<?php
$category = get_the_category();
$first_category = $category[0];
echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );
?>
<span style="display: none;">Free</span></div>
<div class="display-rating "> 
<img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="https://apkhome.net/wp-content/plugins/wp-postratings/images/stars/rating_off.gif" alt="0 votes, average: 0.00 out of 5" title="0 votes, average: 0.00 out of 5" class="post-ratings-image" />
<span style="float:right;color: #00BCD4;">Free</span>
</div>
</div>
</div>
</div>


<?php endwhile; else: ?>
<?php endif; ?>

</div>
</div>
</article>



</section>
</div>
<div class="clear">
</div>
<?php get_footer();?>