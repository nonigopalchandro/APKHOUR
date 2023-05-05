<?php

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 100);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'"></a>';
return $excerpt;
}

function get_similar_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 100);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'"></a>';
return $excerpt;
}


function wpd_testimonials_query( $query ){
    if( ! is_admin()
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'wpd_testimonials_query' );
function wpmu_theme_setup() {
	
	// translation
	load_theme_textdomain( 'wpmu', get_stylesheet_directory() . '/languages' );
	// post formats
	add_theme_support( 'post_formats' );
	// Post thumbnails or featured images
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	// RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	// navigation menu
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wpmu' )
	) );
}
add_action( 'after_setup_theme', 'wpmu_theme_setup' );
function ag_iframe($atts, $content) {
 if (!$atts['width']) { $atts['width'] = 630; }
 if (!$atts['height']) { $atts['height'] = 1500; }

 return '<iframe border="0" class="shortcode_iframe" src="' . $atts['src'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '"></iframe>';
}
add_shortcode('iframe', 'ag_iframe');

function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="btn-primary2" href="'.$link.'"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'sButton');
add_filter('widget_text', 'do_shortcode');

remove_action('wp_head', 'feed_links', 2);


 add_filter( 'no_texturize_shortcodes', 'momt_shortcodes_to_exempt_from_wptexturize' );
function momt_shortcodes_to_exempt_from_wptexturize($shortcodes){
    $shortcodes[] = 'tabs';
    $shortcodes[] = 'accordions';
    $shortcodes[] = 'images';
    $shortcodes[] = 'graphs';
    return $shortcodes;
}

function adsenseads() {
    return '<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 336*280 PC -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-1014489749965344"
     data-ad-slot="2499721164"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>';
}
add_shortcode('ads', 'adsenseads');

function myUrl($atts, $content = null) {
  extract(shortcode_atts(array(
    "href" => 'http://'
  ), $atts));
  return '<center><a class="dnld" href="'.$href.'">'.$content.'</a></center><br/>';
}

add_shortcode("url", "myUrl");


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}
function remove_footer_admin () {
echo 'Powered by <a href="http://howtrick.com" target="_blank">HowTrick.Com</a> | Designed by <a href="https://facebook.com/hacku2day" target="_blank">Liton</a> | Our All of tutorials <a href="http://howtrick.com" target="_blank">HowTrick.Com</a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');



function force_comment_author_url($comment)
{
    // does the comment have a valid author URL?
    $no_url = !$comment->comment_author_url || $comment->comment_author_url == 'http://';

    if ($comment->user_id && $no_url) {
        // comment was written by a registered user but with no author URL
        $comment->comment_author_url = 'http://howtrick.com/?author=' . $comment->user_id;
    }
    return $comment;
}
add_filter('get_comment', 'force_comment_author_url');


 add_filter( 'avatar_defaults', 'newgravatar' );

    function newgravatar ($avatar_defaults) {
    $myavatar = get_bloginfo('template_directory') . '/images/avatar.png';
    $avatar_defaults[$myavatar] = "PC";
    return $avatar_defaults;
    }

add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );
function remove_xmlrpc_pingback_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} ;

function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, $home ) )
			unset($links[$l]);
}

add_action( 'pre_ping', 'no_self_ping' );

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/wp-content/themes/HowTrick_PC_V2.0/images/noimage.png";
  }
  return $first_img;
}

/* Modify the read more link on the_excerpt() */
 function et_excerpt_length($length) {
    return 18;}
add_filter('excerpt_length', 'et_excerpt_length');
 /* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn"></a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');


function change_author_base() {
  global $wp_rewrite;
   $author_base = 'member'; // Rename user with your slug
   $wp_rewrite->author_base = $author_base;
  $wp_rewrite->flush_rules();
}
add_action('init','change_author_base');


add_filter('widget_text', 'do_shortcode');

//Media file upload access for contributor

if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
$contributor = get_role('contributor');
$contributor->add_cap('upload_files');
}

function wp_hide_update() {
        global $current_user;
        get_currentuserinfo();

        if ($current_user->ID != 1) { // only admin will see it
            remove_action( 'admin_notices', 'update_nag', 3 );
        }
    }
    add_action('admin_menu','wp_hide_update');



function get_related_author_posts() {
    global $authordata, $post;
    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 8 ) );
    $output = '<div class="title"><h2><?php the_author();?> Posts</h2></div>';
    foreach ( $authors_posts as $authors_post ) {
        $output .= '<div class="fmsg"><div class="liton_h3"><h3><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></h3></div></div>';
    }
    $output .= '</div>';
    return $output;
}


function annointed_admin_bar_remove() {
        global $wp_admin_bar;
 
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
 
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function comicpress_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; " . $copyright_dates[0]->firstdate;
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
}

function howdy_message($translated_text, $text, $domain) {
    $new_message = str_replace('Howdy', 'Welcome', $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);

/* Wordpres admin bar remove */
show_admin_bar( false );

/* Enable support for Post Thumbnails */
add_theme_support( 'post-thumbnails' );

/* Custom login page logo */
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login-logo.png)!important; background-size: 100% auto !important; background-position: center top !important; background-repeat: no-repeat !important; }</style>'; }
add_action('login_head','custom_login_logo');

/* Custom login logo url */
function loginpage_custom_link() {
	return '/';
}
add_filter('login_headerurl','loginpage_custom_link');

/* Count posts views */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Download";
    }
    return $count.' Downloads';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/* Human time diff */
function human_time( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
}

/* Show user role */
function get_user_role($id) {
    $user = new WP_User($id);

    return array_shift($user->roles);
}


?>