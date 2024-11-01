<?php
/*
Plugin Name: Subscriber Inbound Traffic Tracker
Plugin URI: http://briancray.com/2009/08/07/track-subscriber-inbound-traffic-google-analytics-wordpress/
Description: Originally authored by <a href="http://briancray.com/">Brian Cray</a>, this plugin adds Google Analytics campaign tracking to your RSS feed so you can track subscriber inbound traffic with Google Analytics. 
Author: Brian Cray
Author URI: http://www.briancray.com
Version: 1.0
*/

function add_ga_campaign($permalink)
{
	return $permalink . '?utm_source=subscriber&amp;utm_medium=rss&amp;utm_campaign=rss';
}
add_filter('the_permalink_rss','add_ga_campaign');

?>