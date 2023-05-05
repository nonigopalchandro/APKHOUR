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

<br/>
<center>
<script type="text/javascript" src="https://www.gstatic.com/swiffy/v7.4/runtime.js"></script>
<script type="text/javascript" src="http://www.bestchange.com/images/banners/728x90-6.js"></script>
<a target="_blank" href="https://www.bestchange.com/?p=850857" title="Electronic money exchange &ndash; BestChange"><span id="yyiKs29iZyeyisTfBsn2" style="display: inline-block; width: 728px; height: 90px; background-color: #89b508; margin: 0; padding: 0; border: none; overflow: hidden" onclick="return false"></span></a>
<script type="text/javascript">
var stage = new swiffy.Stage(document.getElementById('yyiKs29iZyeyisTfBsn2'), swiffyobject, {});
stage.setFlashVars('clickTAG=https://www.bestchange.com/?p=850857');
stage.start();
</script>
</center>

<div class="post-content">
<div class="post-detail clearfix">
<div class="post-cover"> 
<img data-lazyloaded="1" src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" style="width: 130px;height: 13	0px;" class="img-rounded" data-src="<?php 
echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php the_title(); ?>" />
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
<?php comments_number( 'No Comment', '1 Comment', '% Comments' ); ?>
</div>
</div>
</div>

<div class="post-main-content">
<div class="clear">
</div>
<div class="center-post-widget">
</div>
<div class="slide-image">

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

<br/>
<center>
<script type="text/javascript" src="https://www.gstatic.com/swiffy/v7.4/runtime.js"></script>
<script type="text/javascript" src="http://www.bestchange.com/images/banners/728x90-6.js"></script>
<a target="_blank" href="https://www.bestchange.com/?p=850857" title="Electronic money exchange &ndash; BestChange"><span id="yyiKs29iZyeyisTfBsn2" style="display: inline-block; width: 728px; height: 90px; background-color: #89b508; margin: 0; padding: 0; border: none; overflow: hidden" onclick="return false"></span></a>
<script type="text/javascript">
var stage = new swiffy.Stage(document.getElementById('yyiKs29iZyeyisTfBsn2'), swiffyobject, {});
stage.setFlashVars('clickTAG=https://www.bestchange.com/?p=850857');
stage.start();
</script>
</center>

<br/>
<div class="navvv">
<?php previous_post_link(); ?>   ||
<?php next_post_link(); ?>
</div>

<?php comments_template( '', true ); ?>

<?php get_template_part( 'includes/post-related' ); ?>

</div>



<?php get_sidebar();?>


</div>
</section>
</div>

<div class="clear">
</div>
</body>

<?php get_footer();?>