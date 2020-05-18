<?php
/*
 Plugin Name: Dirigible Pick-Me-Up
 Plugin URI: https://dirigiblestudio.com/wordpress/plugins/
 description: Fix the weirdness with shipping addresses and Free Local Pickup in one step. Activate this, and when Local Pickup is selected, the shipping address fields will be unselected and hidden.
 Version: 1.0.2
 Author: Dirigible Studio
 Author URI: https://dirigiblestudio.com
*/

defined( 'ABSPATH' ) OR exit;  
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require_once 'src/DirigiblePickmeup.php';
$Pickmeup = new DirigiblePickmeup(__FILE__);