<div class="related-post">
<div class="related-widget">
<div class="related-heading"><h3>Similar</h3></div>
<div class="row">
<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
<div class="col-xs-6 col-sm-4 col-md-4">
<div class="inner-box clearfix">
<div class="cover text-center sidebarp">
<div class="inner-cover"> 
<img data-lazyloaded="1" 
src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" 
class="img-rounded image-thumb" data-src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>/">
<noscript>
<img  class="img-rounded image-thumb" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title() ?>/">
</noscript>
</div> 
<a href="<?php the_permalink() ?>">
</a>
</div>
<div class="detail"> 
<a class="sidebar-a" href="<?php the_permalink() ?>" 
title="<?php the_title() ?>"> 
<?php the_title() ?>
<span class="para-end"></span> </a>
<div class="sub-detail"> 
<a class="excerpt-shadow hidden-xs hidden-sm" 
href="<?php the_permalink() ?>">
<p class="excerpt">
<?php echo get_similar_excerpt();?>
</p> 
</a> 
<?php
$category = get_the_category();
$first_category = $category[0];
echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );
?>
<span style="display: none;">Free</span></div>
<div class="display-rating "> 
<img data-lazyloaded="1" 
src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" 
data-src="https://apkhome.net/wp-content/plugins/wp-postratings/images/stars/rating_off.gif" 
alt="0 votes, average: 0.00 out of 5" title="0 votes, average: 0.00 out of 5" class="post-ratings-image" />



<div style="display: none;" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
</div>
</div> 
<span style="float:right;color: #00BCD4;">Free</span>
</div>
</div>
</div>
</div>
<?php } wp_reset_postdata(); ?>
</div>
</div>
</div>

