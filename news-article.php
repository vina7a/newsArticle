<?php 
/*
Plugin Name: NewsArticle Schema
Description: Plugin is for news article schema only
Author: Vinayak
Version: 1.02v 
*/


function wmt_newsArticle() {

echo
'<script type="application/ld+json">
{
  "@context": "http:\/\/schema.org",
  "@type": "NewsArticle",
  "headline": "'. esc_html(get_the_title($post->id)) .'",
  "dateline": "NEW YORK, US",
  "image": [
    "'.esc_html(get_the_post_thumbnail_url($post->id)).'"
  ],
  "datePublished": "'.esc_html(get_the_date($post->id)).'",
  "description": "'.esc_html(get_the_excerpt($post->id)).'"
}
</script>';

}
//,
//"articleBody": "'.esc_html(get_the_content($post->id)).'"
add_action( 'wp_footer', 'wmt_newsArticle' );
?>
