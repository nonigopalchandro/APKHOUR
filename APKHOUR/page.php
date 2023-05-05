<?php get_header();?>

<body data-rsssl=1 id="body-hidden" class="post-template-default single single-post postid-222099 single-format-standard wp-custom-logo">

<div class="container">
<section class="clearfix">
<div class="container row">
<div class="col-md-8">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="before-post-widget">
<div id="custom_html-10" class="widget_text widget_custom_html widget">
<div class="textwidget custom-html-widget"> 
</div></div></div>

<div class="post-content">
<div class="post-detail clearfix">
<div class="post-cover"> 
<noscript>
<img style="width: 130px;height: 13	0px;" class="img-rounded" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title();?>/">
</noscript>
</div>

<div class="short-detail"> <a href="<?php the_permalink() ?>">
<h2><?php the_title(); ?></h2></a>
<p> <?php the_category( ' › ' ) ?></p>
<div id="post-ratings-222099" class="post-ratings" itemscope itemtype="http://schema.org/Article" data-nonce="0a15f7b3e7">
<span class="post-ratings-text" id="ratings_222099_text"></span>
<div style="display: none;" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="<?php the_permalink() ?>" />
<meta itemprop="width" content="150" />
<meta itemprop="height" content="150" />
</div>

<div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="<?php the_permalink() ?>" />
</div>
</div>

</div>
</div>
</div>

<div class="post-main-content">
<div class="clear">
</div>

<section class="single-content">
<p><?php the_content(); ?></p>
<p style="text-align: center;">
</p>
</div>
</div>




<div class="after-info-widget">
<div id="text-5" class="widget_text widget">
<div class="textwidget">
<div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" ss-offset="0" heateor-sss-data-href='<?php the_permalink() ?>'>
<div class="heateorSssClear">
</div>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>



<?php get_sidebar();?>


</div>
</section>
</div>

<div class="clear">
</div>
</body>

<?php get_footer();?>