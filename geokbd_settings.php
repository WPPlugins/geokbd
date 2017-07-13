<?php 

include_once('functions.php');

geokbd_check_first_install();

if(isset($_POST['geokbd_params_save'])) {
	//Form data sent
			update_option('geokbd_user_mainLang', _POST_exists('geokbd_user_mainLang'));
			update_option('geokbd_admin_mainLang', _POST_exists('geokbd_admin_mainLang'));

			update_option('geokbd_user_checkbox_show', _POST_exists('geokbd_user_checkbox_show'));
			update_option('geokbd_admin_checkbox_show', _POST_exists('geokbd_admin_checkbox_show'));
			
			update_option('geokbd_user_def_element_ON_comment', _POST_exists('geokbd_user_def_element_ON_comment'));
			update_option('geokbd_user_def_element_ON_author', _POST_exists('geokbd_user_def_element_ON_author'));
			update_option('geokbd_user_def_element_ON_search', _POST_exists('geokbd_user_def_element_ON_search'));


			update_option('geokbd_admin_element_ON_postTitle', _POST_exists('geokbd_admin_element_ON_postTitle'));
			update_option('geokbd_admin_element_ON_visualEditor', _POST_exists('geokbd_admin_element_ON_visualEditor'));
			update_option('geokbd_admin_element_ON_htmlEditor', _POST_exists('geokbd_admin_element_ON_htmlEditor'));
			update_option('geokbd_admin_element_ON_excerpt', _POST_exists('geokbd_admin_element_ON_excerpt'));
			update_option('geokbd_admin_element_ON_newtag', _POST_exists('geokbd_admin_element_ON_newtag'));


			update_option('geokbd_user_checkbox_text', trim($_POST['geokbd_user_checkbox_text']));	
			update_option('geokbd_admin_checkbox_text', trim($_POST['geokbd_admin_checkbox_text']));	


	echo '<div class="updated" style="margin-top:25px"><p><strong>პარამეტრები შეინახა.</strong></p></div>';

} elseif(isset($_POST['geokbd_params_reset'])){
	geokbd_settings_reset();
	echo '<div class="updated" style="margin-top:25px"><p><strong>პარამეტრები შეინახა.</strong></p></div>';
}
?>
<style type="text/css">
.active .vers{
	background:#e7f7d3
}
/*---------- tooltip -----------*/
  div.tooltip span {display:none; padding:2px 3px; margin-top:10px; margin-left:-150px; width:130px; text-align:left;}
  div.tooltip:hover span{display:inline; position:absolute; background:#ffffff; border:1px solid #060; color:#F00;}
</style>

<div id="icon-options-general" class="icon32"><br/></div>
<h2>GeoKBD-WP-ს პარამეტრები</h2>

<div style="width:570px; margin:30px 0 15px 0; font-size:12px; color:#999;">
&nbsp;<a href="http://www.code.ge/geokbd-wp" target="_blank">GeoKBD-WP</a> არის დამატება(plugin) WordPress - ისათვის. დამატების მეშვეობით შესაძლებელია WordPress - ის ყველა საჭირო ფორმისათვის ქართულად ბეჭდვის მხარდაჭერის გააქტიურება. დამატებას საფუძვლად უდევს უკვე არსებული ქართული კლავიატურის სკრიპტი <a href="http://www.code.ge/geokbd" target="_blank">GeoKBD</a>.</div>
<hr>

<form name="geokbd_form" method="post" action="">    
<h3>GeoKBD-WP-ს პარამეტრები</h3>
<table border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td valign="top">
    <table cellspacing="0" class="widefat">
      <thead>
        <tr>
          <th colspan="4" class="num" style="height:16px; padding:4px">მომხმარებლის მხარე</th>
        </tr>
        <tr>
          <th class="num" style="width:16px">&nbsp;</th>
          <th class="num" style="width:130px">პარამეტრი</th>
          <th class="num" style="width:70px">მნიშვნელობა</th>
          <th class="num" style="width:16px"><img src="<?=WP_PLUGIN_URL?>/geokbd/img/help_t.png" /></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th class="num">&nbsp;</th>
          <th class="num">პარამეტრი</th>
          <th class="num">მნიშვნელობა</th>
          <th class="num" style="width:16px"><img src="<?=WP_PLUGIN_URL?>/geokbd/img/help_t.png" /></th>
        </tr>
      </tfoot>
      <tbody class="plugins">
        <tr class="<?=geokbd_select_tr_color('geokbd_user_mainLang')?>" >
          <td class="vers"><?=geokbd_option_icon('80,0')?></td>
          <td class="vers" style="width:95px"><label for="geokbd_user_mainLang">ძირითადი ენა</label></td>
          <td class="vers" style="text-align:center; width:95px"><select name="geokbd_user_mainLang" id="geokbd_user_mainLang" style="padding:0; height:18px; width:100px; text-align:center">
            <option style="height:16px; padding:0" value="KA" <?=geokbd_selected('geokbd_user_mainLang','KA')?> > ქართული </option>
            <option style="height:16px; padding:0" value="EN" <?=geokbd_selected('geokbd_user_mainLang','EN')?> > ინგლისური </option>
          </select></td>
          <td class="vers"><?=geokbd_help_icon('ძირითადი მომხმარებლის კლავიატურა გვერდის ჩატვირთვისას')?></td>
        </tr>
        <tr  class="<?=geokbd_tr_color('geokbd_user_checkbox_show')?>">
          <td class="vers"><?=geokbd_option_icon('0,0')?></td>
          <td class="vers"><label for="geokbd_user_checkbox_show">ჩექბოქსი</label></td>
          <td class="vers" style="text-align:center"><input type="checkbox" align="left" value="1" name="geokbd_user_checkbox_show" id="geokbd_user_checkbox_show" <?=geokbd_checked('geokbd_user_checkbox_show')?> /></td>
          <td class="vers"><?=geokbd_help_icon('გამოჩნდეს თუ არა ჩექბოქსი მომხმარებლის კომენტარების ველების თავზე')?></td>
        </tr>
        <tr class="<?=geokbd_tr_color('geokbd_user_def_element_ON_comment')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_user_def_element_ON_comment">კომენტარში</label></td>
          <td class="vers" style="text-align:center"><input  type="checkbox" align="left" value="1" name="geokbd_user_def_element_ON_comment" id="geokbd_user_def_element_ON_comment" <?=geokbd_checked('geokbd_user_def_element_ON_comment')?> /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა კომენტარის ველში ქართულად')?></td>
        </tr>
        <tr  class="<?=geokbd_tr_color('geokbd_user_def_element_ON_author')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_user_def_element_ON_author">სახელში</label></td>
          <td class="vers" style="text-align:center"><input type="checkbox" value="1" <?=geokbd_checked('geokbd_user_def_element_ON_author')?> id="geokbd_user_def_element_ON_author" name="geokbd_user_def_element_ON_author" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა სახელის ველში ქართულად')?></td>
        </tr>
        <tr class="<?=geokbd_tr_color('geokbd_user_def_element_ON_search')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_user_def_element_ON_search">ძიებაში</label></td>
          <td class="vers"  style="text-align:center"><input type="checkbox" <?=geokbd_checked('geokbd_user_def_element_ON_search','s')?> name="geokbd_user_def_element_ON_search" value="1" id="geokbd_user_def_element_ON_search" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა ძიების ველში ქართულად')?></td>
        </tr>
        <tr class="<?=geokbd_tr_text_color('geokbd_user_checkbox_text')?>">
          <td class="vers"><?=geokbd_option_icon('59,0,17')?></td>
          <td class="vers"><label for="geokbd_user_checkbox_text">ტექსტი ჩექბოქსისთვის</label></td>
          <?php
      $geokbd_user_checkbox_textC = get_option('geokbd_user_checkbox_text');
	  $geokbd_user_checkbox_textC = (trim($geokbd_user_checkbox_textC)!='') ? $geokbd_user_checkbox_textC : 'ქართული კლავიატურა (~)';
	  ?>
          <td class="vers" style="text-align:center"><input type="text" value="<?=$geokbd_user_checkbox_textC?>"  name="geokbd_user_checkbox_text" id="geokbd_user_checkbox_text" class="regular-text code" style="font-size:10px; padding:0; height:20px; width:150px; text-align:center" /></td>
          <td class="vers"><?=geokbd_help_icon('ტექსტი მომხმარებლისთვის, რომელიც გამოჩნდება ჩექბოქსთან ერთად')?></td>
        </tr>
      </tbody>
    </table></td>
    <td valign="top">
    <table cellspacing="0" class="widefat">
      <thead>
        <tr>
          <th colspan="4" class="num"  style="height:16px; padding:4px">ადმინისტრატორის მხარე</th>
        </tr>
        <tr>
          <th class="num" style="width:16px">&nbsp;</th>
          <th class="num" style="width:130px">პარამეტრი</th>
          <th class="num" style="width:70px">მნიშვნელობა</th>
          <th class="num" style="width:16px"><img src="<?=WP_PLUGIN_URL?>/geokbd/img/help_t.png" /></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th class="num">&nbsp;</th>
          <th class="num">პარამეტრი</th>
          <th class="num">მნიშვნელობა</th>
          <th class="num" style="width:16px"><img src="<?=WP_PLUGIN_URL?>/geokbd/img/help_t.png" /></th>
        </tr>
      </tfoot>
      <tbody class="plugins">
        <tr class="<?=geokbd_select_tr_color('geokbd_admin_mainLang')?>" >
          <td class="vers"><?=geokbd_option_icon('80,0')?></td>
          <td class="vers" style="width:95px"><label for="geokbd_admin_mainLang">ძირითადი ენა</label></td>
          <td class="vers" style="text-align:center; width:95px"><select name="geokbd_admin_mainLang" id="geokbd_admin_mainLang" style="padding:0; height:18px; width:100px; text-align:center">
            <option style="height:16px; padding:0" value="KA" <?=geokbd_selected('geokbd_admin_mainLang','KA')?> > ქართული </option>
            <option style="height:16px; padding:0" value="EN" <?=geokbd_selected('geokbd_admin_mainLang','EN')?> > ინგლისური </option>
          </select></td>
          <td class="vers"><?=geokbd_help_icon('ძირითადი ადმინისტრატორის კლავიატურა გვერდის ჩატვირთვისას')?></td>
          </tr>
        <tr class="<?=geokbd_tr_color('geokbd_admin_checkbox_show')?>">
          <td class="vers"><?=geokbd_option_icon('0,0')?></td>
          <td class="vers"><label for="geokbd_admin_checkbox_show">ჩექბოქსი</label></td>
          <td class="vers" style="text-align:center"><input type="checkbox" <?=geokbd_checked('geokbd_admin_checkbox_show')?> align="left" value="1" name="geokbd_admin_checkbox_show" id="geokbd_admin_checkbox_show" /></td>
          <td class="vers"><?=geokbd_help_icon('გამოჩნდეს თუ არა ჩექბოქსი ადმინისტრატორის ედიტორის გვერდით')?></td>
          </tr>
        <tr class="<?=geokbd_tr_color('geokbd_admin_element_ON_postTitle')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_admin_element_ON_postTitle">პოსტის სათაურში</label></td>
          <td class="vers" style="text-align:center"><input  type="checkbox" align="left" value="1" name="geokbd_admin_element_ON_postTitle" id="geokbd_admin_element_ON_postTitle" <?=geokbd_checked('geokbd_admin_element_ON_postTitle')?> /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა პოსტის ველში ქართულად')?></td>
        </tr>
        <tr  class="<?=geokbd_tr_color('geokbd_admin_element_ON_visualEditor')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_admin_element_ON_visualEditor">ედიტორში [Visual]</label></td>
          <td class="vers" style="text-align:center"><input type="checkbox" value="1" <?=geokbd_checked('geokbd_admin_element_ON_visualEditor')?> id="geokbd_admin_element_ON_visualEditor" name="geokbd_admin_element_ON_visualEditor" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა ვიზუალურ ედიტორში ქართულად')?></td>
        </tr>
        <tr  class="<?=geokbd_tr_color('geokbd_admin_element_ON_htmlEditor')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_admin_element_ON_htmlEditor">ედიტორში [HTML]</label></td>
          <td class="vers" style="text-align:center"><input type="checkbox" value="1" <?=geokbd_checked('geokbd_admin_element_ON_htmlEditor')?> id="geokbd_admin_element_ON_htmlEditor" name="geokbd_admin_element_ON_htmlEditor" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა HTML ედიტორში ქართულად')?></td>
        </tr>
        <tr class="<?=geokbd_tr_color('geokbd_admin_element_ON_excerpt')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_admin_element_ON_excerpt">ციტატაში</label></td>
          <td class="vers"  style="text-align:center"><input type="checkbox" <?=geokbd_checked('geokbd_admin_element_ON_excerpt')?> name="geokbd_admin_element_ON_excerpt" value="1" id="geokbd_admin_element_ON_excerpt" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა ციტატის ველში ქართულად')?></td>
        </tr>
        <tr class="<?=geokbd_tr_color('geokbd_admin_element_ON_newtag')?>">
          <td class="vers"><?=geokbd_option_icon('40,0')?></td>
          <td class="vers"><label for="geokbd_admin_element_ON_newtag">ტეგების ველში</label></td>
          <td class="vers"  style="text-align:center"><input type="checkbox" <?=geokbd_checked('geokbd_admin_element_ON_newtag')?> name="geokbd_admin_element_ON_newtag" value="1" id="geokbd_admin_element_ON_newtag" /></td>
          <td class="vers"><?=geokbd_help_icon('ვწეროთ თუ არა ტეგების ველში ქართულად')?></td>
        </tr>
        <tr class="<?=geokbd_tr_text_color('geokbd_admin_checkbox_text')?>">
          <td class="vers"><?=geokbd_option_icon('59,0,17')?></td>
          <td class="vers"><label for="geokbd_admin_checkbox_text">ტექსტი ჩექბოქსისთვის</label></td>
          <?php
      $geokbd_admin_checkbox_textC = get_option('geokbd_admin_checkbox_text');
	  $geokbd_admin_checkbox_textC = (trim($geokbd_checkbox_text_4userc)!='') ? $geokbd_admin_checkbox_textC : 'ქართული კლავიატურა (~)';
	  ?>
          <td class="vers" style="text-align:center"><input type="text" value="<?=$geokbd_admin_checkbox_textC?>"  name="geokbd_admin_checkbox_text" id="geokbd_admin_checkbox_text" class="regular-text code" style="font-size:10px; padding:0; height:20px; width:150px; text-align:center" /></td>
          <td class="vers"><?=geokbd_help_icon('ტექსტი მომხმარებლისთვის, რომელიც გამოჩნდება ჩექბოქსთან ერთად')?></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <p class="submit">
    	<input class="button-primary" type="submit" value="შენახვა" style="width:100px; letter-spacing:2px" name="geokbd_params_save"/>
        <input class="button-primary" type="submit" value="ჩამოყრა" onclick="return confirm('დარწმუნებული ხართ გსურთ მიმდინარე პარამეტრების ჩამოყრა პირველად საწყისზე?');" style="width:100px; letter-spacing:2px" name="geokbd_params_reset"/>
	</p> 
</td>
  </tr>
</table>

<script type="text/javascript" src="<?=WP_PLUGIN_URL?>/geokbd/js/cBox.js"></script>
<script type="text/javascript">
	GeoKBD.map('#geokbd_checkbox_text_4user');
	cBox.onImg =  '<?=WP_PLUGIN_URL?>/geokbd/img/on.png';
	cBox.offImg = '<?=WP_PLUGIN_URL?>/geokbd/img/off.png';
	cBox.init('geokbd_form');
</script>