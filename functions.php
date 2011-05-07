<?php

automatic_feed_links();

	
function removeHeadLinks() {
   	remove_action('wp_head', 'rsd_link');
   	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');
    
function footer(){
	echo '<div data-role="footer" class="ui-bar"><a href="http://www.webdevcat.com" data-role="button" data-icon="info">Theme by WebDevCat</a></div>';
} add_action('wp_footer', 'footer');
?>