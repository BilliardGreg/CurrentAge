<?php
/*
Plugin Name: Current Age
Plugin URI: http://www.gregwhitehead.us/

Description: This plugin allows you to show current age using the shortcode <strong>[showcurrentage month="1" day="1" year="2000"]</strong> in the content area and dynamically updates based on current date.

Author: Greg Whitehead
Version: 1.0
Author URI: http://www.gregwhitehead.us/
*/

function showCurrentAge($atts) {
	
	extract( shortcode_atts( array(
		'month' => '1',
		'day' => '1',
		'year' => '2000',
	), $atts ) );
	
	//date in mm/dd/yyyy format; or it can be in other formats as well
         $birthDate = "5/16/1980";
         //explode the date to get month, day and year
         $birthDate = explode("/", $birthDate);
         //get age from date or birthdate
         $age = (date("md", date("U", mktime(0, 0, 0, $month, $day, $year))) > date("md") ? ((date("Y")-$year)-1):(date("Y")-$year));


		return $age;
}

add_shortcode('showcurrentage','showCurrentAge');


?>