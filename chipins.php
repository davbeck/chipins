<?php
/*
Plugin Name: Chipins
Plugin URI: http://davidbeck.co
Description: A Wordpress plugin that adds a short code to show giving progress with a link to give using [The City](http://www.onthecity.org).
Version: 1.0
Author: David Beck
Author URI: http://davidbeck.co
License: BSD
*/


function chipins_short_code($atts)
{
	setlocale(LC_MONETARY, 'en_US');
	
	$atts = shortcode_atts(array(
		'name' => '',
		'total' => 0,
		'raised' => 0,
		'campus_id' => 32316,//LS Sparks
		'fund_id' => 10549,//Sparks Expantion 2013
		'suggested_amount' => '',
		'description' => false,
	), $atts);
	
	$atts['percentage'] = round($atts['raised'] / $atts['total'] * 100);
	$atts['percentage_limited'] = min($atts['percentage'], 100);
	$atts['total'] = '$' . number_format($atts['total'], 2);
	$atts['raised'] = '$' . number_format($atts['raised'], 2);
	
	$widget = file_get_contents(dirname(__FILE__).'/widget.html');
	$widget = ca_replace_vars($atts, $widget);
	
	return $widget;
}

function ca_replace_vars($atts, $text)
{
	if (count($atts)>0) foreach($atts as $name => $att) {
		$text = preg_replace("/%if\\($name\\)%(.*?)%endif\\($name\\)%/is", 
							$att ? "$1" : '', 
							$text);
		$text = str_replace("%$name%", $att, $text);
	}
	
	return $text;
}

add_shortcode('chipins', 'chipins_short_code');

?>