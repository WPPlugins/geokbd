<?php
/**
 * Plugin Name: GeoKBD
 * Plugin URI: http://www.code.ge/geokbd-wp
 * Description:  Georgian Keybord Library for WordPress
 * Author: Ioseb Dzmanashvili
 * Author URI: http://www.code.ge
 * Version 1.1
 */
include_once('functions.php');

geokbd_check_first_install();

function geokbd_load() {
	wp_enqueue_script('geokbd', WP_PLUGIN_URL . '/geokbd/js/geokbd.js', array('jquery'));
	echo "<script type='text/javascript'>\n
				var GeoKBD_admin_text = '".get_option('geokbd_admin_checkbox_text')."';
				var GeoKBD_admin_mainLang  = '".get_option('geokbd_admin_mainLang')."';
				var GeoKBD_admin_show_checkbox = '".get_option('geokbd_admin_checkbox_show')."';
				var GeoKBD_admin_fields = [".GeoKBDAdminFields()."];
		  </script>\n";
	wp_enqueue_script('geokbdwp', WP_PLUGIN_URL . '/geokbd/js/geokbdwp.js', array('geokbd', 'jquery'));
}

function geokbd_tinymce() {
	return array('geokbd' => WP_PLUGIN_URL . '/geokbd/js/geokbdtinymce.js');
}

add_action('admin_print_scripts', 'geokbd_load');
if (get_option('geokbd_admin_element_ON_visualEditor')==1){
	add_filter('mce_external_plugins', 'geokbd_tinymce');
}


############################ LOAD GEOKBD USER SIDE #############################################
function geokbd_user_init(){
	$geokbd_mainLang = strtolower(get_option('geokbd_mainLang'));
	echo "<script type='text/javascript' src='". WP_PLUGIN_URL . "/geokbd/js/geokbd.js' ></script>\n";		#include geokbd core
	echo "<script type='text/javascript' src='". WP_PLUGIN_URL . "/geokbd/js/geokbd_wp_user_plugin.js' ></script>\n"; #include geokbd wp plugin
	echo "<script type='text/javascript'>\n"; 	# inicializing gekbd
	echo "window.onload = function(){\n";
	$geokbd_user_mainLang = get_option('geokbd_user_mainLang');
	if(get_option('geokbd_user_checkbox_show') == 1) {
		echo "GeoKBD.wp_plugin.showCheckboxInComments(".(($geokbd_user_mainLang=='KA') ? 'true' : 'false').",'".get_option('geokbd_user_checkbox_text')."');\n";
	}
	$constString  = array();
	if(get_option('geokbd_user_def_element_ON_author') == 1)  { $constString[] = "'author'"; }
	if(get_option('geokbd_user_def_element_ON_comment') == 1) { $constString[] = "'comment'"; }
	if(get_option('geokbd_user_def_element_ON_search') == 1)  { $constString[] = "'s'"; }
	if(count($constString)>0){
		echo "GeoKBD.map({ \n
						 	fields: [".implode(',',$constString)."]
				});\n";
	}
	echo "}\n";
	echo "</script>\n";
}
add_action('wp_head', 'geokbd_user_init');

############################ LOAD GEOKBD SETTINGS ##############################################
function geokbd_settings() {  
     include('geokbd_settings.php');
}

function geokbd_setting_actions() {
	add_options_page("geokbd_settings 1", "GeoKBD-ს პარამეტრები", 1, "geokbd_settings", "geokbd_settings");  
}

add_action('admin_menu', 'geokbd_setting_actions'); 


?>