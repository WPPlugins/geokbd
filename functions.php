<?php

######### plugin functions ############
function GeoKBDAdminFields(){
		$array   = array();
		$array[] = (get_option('geokbd_admin_element_ON_postTitle')==1) ? "'post_title'" : '';
		$array[] = (get_option('geokbd_admin_element_ON_htmlEditor')==1) ? "'content'" : '';
		$array[] = (get_option('geokbd_admin_element_ON_excerpt')==1) ? "'excerpt'" : '';
		$array[] = (get_option('geokbd_admin_element_ON_newtag')==1) ? "'newtag'" : '';
	return implode(',',$array);
}


######### plugin setting functions ############

function geokbd_check_first_install(){
	if(get_option('geokbd_installed_status')!='installed'){ geokbd_settings_reset(); }
}

function geokbd_settings_reset(){
			update_option('geokbd_user_mainLang', 'KA');
			update_option('geokbd_admin_mainLang', 'KA');
			update_option('geokbd_user_checkbox_show', '1');
			update_option('geokbd_admin_checkbox_show', '1');
			update_option('geokbd_user_def_element_ON_comment', '1');
			update_option('geokbd_user_def_element_ON_author', '1');
			update_option('geokbd_user_def_element_ON_search', '1');
			update_option('geokbd_admin_element_ON_postTitle', '1');
			update_option('geokbd_admin_element_ON_visualEditor', '1');
			update_option('geokbd_admin_element_ON_htmlEditor', '1');
			update_option('geokbd_admin_element_ON_excerpt', '1');
			update_option('geokbd_admin_element_ON_newtag', '1');
			update_option('geokbd_user_checkbox_text', 'ქართული კლავიატურა (~)');	
			update_option('geokbd_admin_checkbox_text', 'ქართული კლავიატურა (~)');	
			update_option('geokbd_installed_status', 'installed');
}

function geokbd_tr_color($var){
	return get_option($var)=='1' ? 'active' : 'inactive';
}

function geokbd_tr_text_color($var){
	return trim(get_option($var))!='' ? 'active' : 'inactive';	
}

function geokbd_select_tr_color($getVar){
		return get_option($getVar)=='KA' ? 'active' : 'inactive';
}

function geokbd_checked($var){
	return get_option($var)=='1' ? 'checked="checked"' : '';
}
function geokbd_selected($getVar,$curVal){
	return get_option($getVar)==$curVal ? 'selected="selected"' : '';
}

function _POST_exists($var){
	global $_POST;
	return (isset($_POST[$var])) ? $_POST[$var] : '0';
}

function geokbd_option_icon($array){
	list($pos1,$pos2, $w, $h,$class,$innerHTML) = explode(',',$array);
	$w = (isset($w)) ? $w : '18'; 
	$h = (isset($h)) ? $h : '16'; 
	return '<div style="background:url('.WP_PLUGIN_URL.'/geokbd/img/icons.png) '.$pos1.'px '.$pos2.'px repeat scroll; width:'.$w.'px; height:'.$h.'px;">&nbsp;</div>';
}

function geokbd_help_icon($text){
	return '<div class="tooltip" style="background:url('.WP_PLUGIN_URL.'/geokbd/img/help.png); width:16px; height:16px;cursor:help" align="center">&nbsp;<span>'.$text.'</span></div>';
}

function nbsp($cnt=1){
	$nbsp = '';
	for($i=1; $cnt>=$i; $i++){
		$nbsp .='&nbsp;';
	}
	return $nbsp;
}








?>