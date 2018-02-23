<?php
/*
Plugin Name: Side Scroll
Author: Travis Fantina
Author URI: http://www.travisfantina.com
Description: Unable to find a side scrolling text plugin that WORKED I built this one
very simple functionality the equivilent of the old HTML <marquee></marquee> tag.
Version: v0.0.1
License: GPL2
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
*/

//
function banner_scroll($atts)
  {
    wp_enqueue_style('style1', plugins_url('sidescroll.css', __FILE__));
    $a = shortcode_atts(array(
            'text' => 'your announcement here',
          ), $atts);

    echo "<div class='marquee-box'>
            <div class='marquee'>{$a['text']}</div>
          </div>";
  }

add_shortcode('scroll', 'banner_scroll')


?>
