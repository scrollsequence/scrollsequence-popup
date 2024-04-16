<?php
/**
 * @package ssq-popup
 * @version 1.7.2
 */
/*
Plugin Name: Scrollsequence Popup
Plugin URI: https://scrollsequence.com
Description: This is a popup plugin that works with Scrollsequence and it hooks into Scrollsequence ssqPreloadPercentage JavaScript hook. The popup dissapears if one of two condition are met. Either the video ends, or after the ssqPreloadPercentage fires. 
Author: Ales Kozelsky
Version: 1.0.2
Author URI: https://scrollsequence.com
*/


function popup_shortcode() {
	// create my own version codes
	$my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'ssq-popup-script.js' ));
    wp_enqueue_script( 'ssq-popup-script', plugins_url( 'ssq-popup-script.js', __FILE__ ), array('gsap'), $my_js_ver );

	ob_start();
	?>
        <div style="position:fixed; top:0; left:0; bottom:0; right:0; z-index:999999; background:black;max-width: 100%!important;width: 100%!important;" id="ssq-popup">
            <div style="position: absolute;top: 50%;left: 50%;  transform: translate(-50%, -50%); color:white">
                <video autoplay muted id="ssq-popup-video">
                    <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                    <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    <?php
	return ob_get_clean();
}
add_shortcode( 'scrollsequencepopup', 'popup_shortcode' );