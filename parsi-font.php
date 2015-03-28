<?php
/*
Plugin Name: WP-Parsi Admin Font Editor
Plugin URI: http://forum.wp-parsi.com/
Description: Change WordPress dashboard font
Author: Ghaem
Version: 4.1
Tags: admin, admin font, font, wordpress font, change font, parsi font, fonts, persian, persian fonts, persian font, admin font editor, wp-parsi admin font editor
Author URI: http://wp-parsi.com
Copyright: Ghaem Omidi - 2014
License: GPL

*/

/* 
Special thanks to : WP-Parsi
*/


function my_admin_head() {
  global $current_user;
    get_currentuserinfo();

	$parsifont_font_size = get_user_meta($current_user->ID, 'parsifont-font-size', true); 
	$parsifont_font_family = get_user_meta($current_user->ID, 'parsifont-font-family', true); 
	
	if ($parsifont_font_family || $parsifont_font_size) { ?>
	  
	<style>
	 
	textarea#content.wp-editor-area { 
	
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
	<?php } ?>
	}
		
	textarea#wp_mce_fullscreen { 
	
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
	<?php } ?>
	}
		
	textarea#replycontent { 
	
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
	<?php } ?>
	}

	#wpwrap,
	#wpcontent,
	#wpfooter,
	.folded #wpcontent,
	.folded #wpfooter,
	#wpbody-content,
	#adminmenuback,
	#adminmenuwrap,
	#adminmenu,
	#adminmenu .wp-submenu,
	.folded #adminmenuback,
	.folded #adminmenuwrap,
	.folded #adminmenu,
	.folded #adminmenu li.menu-top,
	.wp-admin input[type="file"],
	#adminmenu a:focus,
	#myhead,
	#adminmenu a:active,
	.screen-reader-text:focus,
	.wp-admin select,
	.wp-admin .button-cancel,
	.wp-admin select[multiple],
	table.widefat span.delete a:hover,
	table.widefat span.trash a:hover,
	table.widefat span.spam a:hover,
	#dashboard_recent_comments .delete a:hover,
	#dashboard_recent_comments .trash a:hover,
	#dashboard_recent_comments .spam a:hover,
	.plugins a.delete:hover,
	#all-plugins-table .plugins a.delete:hover,
	#search-plugins-table .plugins a.delete:hover,
	.submitbox .submitdelete:hover,
	#media-items a.delete:hover,
	#wpadminbar,
	#wpadminbar ul li:before,
	#wpadminbar .quicklinks > ul > li > a,
	#wpadminbar *,
	.rtl #wpadminbar *,
	html:lang(he-il) .rtl #wpadminbar *,
	#wpadminbar a.ab-item,
	#wpadminbar > #wp-toolbar span.ab-label,
	#wpadminbar > #wp-toolbar span.noticon,
	#wpadminbar ul li:after,
	#wpadminbar #wp-admin-bar-site-name a.ab-item,
	#wpadminbar #wp-admin-bar-my-sites a.ab-item,
	#wpadminbar ul li:before,
	#wpadminbar ul li:after,
	#wpadminbar a,
	#wpadminbar a:hover,
	#wpadminbar a img,
	#wpadminbar a img:hover,
	#wpadminbar a:focus,
	#wpadminbar a:active,
	#wpadminbar input[type="text"],
	#wpadminbar input[type="password"],
	#wpadminbar input[type="number"],
	#wpadminbar input[type="search"],
	#wpadminbar input[type="email"],
	#wpadminbar input[type="url"],
	#wpadminbar select,
	#wpadminbar textarea,
	#wpadminbar div,
	#wpadminbar .ab-sub-wrapper,
	#wpadminbar ul,
	#wpadminbar ul li,
	#wpadminbar ul#wp-admin-bar-root-default>li,
	#wpadminbar .quicklinks,
	#wpadminbar .quicklinks ul,
	#wpadminbar li,
	#wpadminbar .ab-empty-item,
	#wpadminbar .quicklinks .ab-top-secondary > li,
	#wpadminbar .quicklinks a,
	#wpadminbar .quicklinks .ab-empty-item,
	#wpadminbar .shortlink-input,
	#wpadminbar .quicklinks > ul > li > a,
	#wpadminbar .menupop .ab-sub-wrapper,
	#wpadminbar .shortlink-input,
	#wpadminbar.ie7 .menupop .ab-sub-wrapper,
	#wpadminbar.ie7 .shortlink-input,
	#wpadminbar .ab-top-menu > .menupop > .ab-sub-wrapper,
	#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper,
	#wpadminbar .ab-submenu,
	#wpadminbar .selected .shortlink-input,
	#wpadminbar .quicklinks .menupop ul li,
	#wpadminbar .quicklinks .menupop ul li a strong,
	#wpadminbar .quicklinks .menupop ul li .ab-item,
	#wpadminbar .quicklinks .menupop ul li a strong,
	#wpadminbar .quicklinks .menupop.hover ul li .ab-item,
	#wpadminbar.nojs .quicklinks .menupop:hover ul li .ab-item,
	#wpadminbar .shortlink-input,
	.wp_themeSkin a:hover,.wp_themeSkin a:link,.wp_themeSkin a:visited,.wp_themeSkin a:active,
	.wp_themeSkin table td,
	.wp_themeSkin *,.wp_themeSkin a:hover,.wp_themeSkin a:link,.wp_themeSkin a:visited,.wp_themeSkin a:active,
	.wp_themeSkin span.mce_sup,.wp_themeSkin span.mce_sub,.wp_themeSkin span.mce_media,.wp_themeSkin span.mce_styleprops,.wp_themeSkin span.mce_search,.wp_themeSkin span.mce_emotions,.wp_themeSkin span.mce_print,.wp_themeSkin span.mce_attribs,.wp_themeSkin span.mce_hr,.wp_themeSkin span.mce_cut,.wp_themeSkin span.mce_copy,.wp_themeSkin span.mce_paste,.wp_themeSkin span.mce_cite,.wp_themeSkin span.mce_visualchars,.wp_themeSkin span.mce_advhr,.wp_themeSkin span.mce_insertdate,.wp_themeSkin span.mce_anchor,.wp_themeSkin span.mce_visualaid,.wp_themeSkin span.mce_cleanup,.wp_themeSkin span.mce_table,.wp_themeSkin span.mce_row_props,.wp_themeSkin span.mce_cell_props,.wp_themeSkin span.mce_row_before,.wp_themeSkin span.mce_row_after,.wp_themeSkin span.mce_delete_row,.wp_themeSkin span.mce_col_before,.wp_themeSkin span.mce_col_after,.wp_themeSkin span.mce_delete_col,.wp_themeSkin span.mce_split_cells,.wp_themeSkin span.mce_merge_cells,.wp_themeSkin span.mce_delete_table,.wp_themeSkin span.mce_ins,.wp_themeSkin span.mce_abbr,.wp_themeSkin span.mce_acronym,.wp_themeSkin span.mce_del,.wp_themeSkin span.mce_replace,.wp_themeSkin span.mce_code,.wp_themeSkin span.mce_nonbreaking,.wp_themeSkin span.mce_inserttime,.wp_themeSkin span.mce_insertlayer,.wp_themeSkin span.mce_moveforward,.wp_themeSkin span.mce_movebackward,.wp_themeSkin span.mce_absolute,
	#wp-link .toggle-arrow,
	.wp_themeSkin .mceSplitButtonEnabled a.mceOpen,.wp_themeSkin .mceSplitButtonSelected a.mceOpen,.wp_themeSkin .mceSplitButtonActive a.mceOpen,.wp_themeSkin .mceSplitButtonEnabled:hover a.mceOpen,
	.ui-dialog,
	.ui-dialog .ui-dialog-titlebar,
	.ui-dialog .ui-dialog-title,
	.ui-dialog .ui-dialog-titlebar-close,
	.ui-dialog .ui-dialog-content,
	.ui-dialog .ui-dialog-buttonpane,
	.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset,
	.ui-dialog .ui-dialog-buttonpane button,
	.ui-dialog .ui-resizable-se,
	.ui-draggable .ui-dialog-titlebar,
	.wp-dialog,
	.wp-dialog .ui-dialog-title,
	.fade-trigger,
	.wp-switch-editor switch-html,
	.mceText mceTitle,
	.media-menu,
	.media-menu>a,
	.media-menu .active,.media-menu .active:hover,
	.media-menu .separator,
	.media-frame-title h1,
	.wp-list-table a,
	.media-router a,
	.attachment-details,
	.acf-content-title h2,
	.media-frame input[type="text"],
	.media-frame input[type="password"],
	.media-frame input[type="number"],
	.media-frame input[type="search"],
	.media-frame input[type="email"],
	.media-frame input[type="url"],
	.media-frame textarea,
	.media-frame select,
	.media-modal-content,
	.rtl .media-modal,
	.attachment-display-settings,
	textarea.large-text,
	input.large-text,
	input.large-text,textarea.large-text,
	text,
	input[type="text"],
	.wp_themeSkin .mceListBox a.mceText,
	code,
	kbd,code,
	.titlewrap input,
	.rtl .media-frame input[type="text"],
	.rtl .media-frame .search,
	.rtl .media-frame input[type="search"],
	.rtl .media-frame select,
	.media-modal .media-sidebar .setting textarea,
	#TB_ajaxWindowTitle,
	#sidemenu,
	body *,
	body,
	#template textarea,
	#docs-list,
	#sidemenu a.current,
	textarea.code,
	html,
	*,
	.html,
	#html,
	.wp_themeSkin table td,
	#wp-content-editor-container,
	.wp_themeSkin *,
	.wp_themeSkin tr,
	#wp-link .toggle-arrow,
	.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp_themeSkin .mceMenu,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,
	.wp_themeSkin table,.wp_themeSkin tbody,.wp_themeSkin a,.wp_themeSkin img,.wp_themeSkin tr,.wp_themeSkin div,.wp_themeSkin td,.wp_themeSkin iframe,.wp_themeSkin span,.wp_themeSkin *,.wp_themeSkin .mceText,
	#media-items a.delete-permanently:hover {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
	<?php } ?>
	}
	.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?> !important;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
	<?php } ?>
	}
	.bodyparsi {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	font-size:10pt;
	color:#787878;
	direction:rtl;
	text-align:right;
	margin:0 auto;
	width:560px;
	padding:0px;
	background-color:#fff;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
	}
	.errorwppafe{
	width:400px;
	border:1px #d3400d solid;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	padding:10px 10px 10px 10px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	text-align: center !important;
	display:block !important;
	float:none !important;
	margin-right:auto !important;
	margin-left:auto !important;
	background:yellow  !important;
	}
	.okwppafe{
	width:500px;
	border:1px #a1cb45 solid;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	margin:5px 10px 10px 10px;
	padding:10px 10px 10px 10px;
	background:#eaf8cc;
	display:block;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	float: none;
	}
	#mainparsi{
	background-color:#ffffff;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	border: 4px dashed #F00;
	border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
	}
	.clear{clear:both}
	form {
	margin:0px;
	padding:0px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	input, select {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	padding:5px;
	font-size:10pt;
	border: 1px solid #cacaca;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	}
	input[type="submit"]{
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	padding:5px;
	font-size:11pt;
	border: 1px solid #cacaca;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	}
	.contentparsi {
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	margin:50px 0 0 0;
	padding:10px;
	text-align: center;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.formsparsi {
	direction: rtl;
	padding-right:20px;
	text-align: right;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.formsparsi h2 {
	padding: 8px 2px;
	border-bottom: 1px solid #CCC;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.formsparsi label {
	width: 100px;
	text-align: center;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	display:block;
	float:none;
	margin-right:auto;
	margin-left:auto;
	}
	.formsparsi .formparsi, .formsparsi .form-ltr {
	width: 300px;
	float: right;
	padding: 2px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	margin: 5px 0;
	}
	.formsparsi .form-ltr {
	direction: ltr;
	text-align: left;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.formsparsi.text {
	width: 250px;
	height: 100px;
	overflow: auto;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.submitbot:hover {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	padding:5px;
	font-size:11pt;
	border: 1px solid #7613ae;
	background:#7613ae;
	color:#fff;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	}
	.textare2:hover {
	border: 1px solid #6295f3;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.textare2 {
	width:500px;
	}
	.textare1:hover {
	border: 1px solid #6295f3;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	}
	.textare1 {
	width:500px;
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } ?>
	padding:5px;
	font-size:10pt;
	border: 1px solid #cacaca;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	}
	</style>
	
	
	

	
	
	
	<?php }
}

add_action('admin_head', 'my_admin_head');


function parsifont_settings_page() { 
global $user_id;
global $current_user;
get_currentuserinfo();
$current_user->ID; ?>

<div class="wrap">

<div id="icon-options-general" class="icon32"><br></div>
<div style="margin-top:40px;font-size:50px;text-align:center;"><?php _e('Parsi Font', 'parsifont'); ?></div>
<br/>
<br/>
<?php
			if( $_POST['parsifont-font-family'] || $_POST['parsifont-font-size'] )  {
			  
			      if (!$_POST['parsifont-font-family-user']) {
	      
			      update_user_meta( $current_user->ID, 'parsifont-font-family', (string)$_POST['parsifont-font-family'] );
			      
			      } else {
				
			      update_user_meta( $current_user->ID, 'parsifont-font-family', (string)trim($_POST['parsifont-font-family-user']) );
			      update_user_meta( $current_user->ID, 'parsifont-font-family-user', (string)trim($_POST['parsifont-font-family-user']) );	
				
			      }
			
			update_user_meta( $current_user->ID, 'parsifont-font-size', $_POST['parsifont-font-size'] ); ?>
						
			<div id="setting-error-settings_updated" class="updated settings-error"> 
			<p><strong><?php _e('Settings saved.', 'parsifont'); ?></strong></p></div>
			
			<?php 
			} ?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">

   <table class="form-table">
        
	 <tr valign="top">
        <th scope="row"><?php _e('Font Size (px)', 'parsifont'); ?></th>
        <td>
	 
		<select name="parsifont-font-size" id="parsifont-font-size" style="width:290px;">
			<option value=""><?php _e('Select Font Size', 'parsifont'); ?></option>
			
			<?php
			
			$parsifont_font_size = get_user_meta($current_user->ID, 'parsifont-font-size', true); 
			
			for($i=10; $i<=22; $i++) { 
				if ((string)$i !== (string)$parsifont_font_size) {  ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } else { ?>
				<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
				<?php }
			 } ?>
			
		</select>
		
	
	 
	</td>
        </tr>
	 
	  <tr valign="top">
        <th scope="row"><?php _e('Font Family', 'parsifont'); ?></th>
        <td>
	 
	
		<select name="parsifont-font-family" id="parsifont-font-family" style="width:290px;">
			<option value=""><?php _e('Select font from list or type a font name below', 'parsifont'); ?></option>
			
			<?php
			
			$parsifont_font_family = get_user_meta($current_user->ID, 'parsifont-font-family', true);
			$parsifont_font_family_user = get_user_meta($current_user->ID, 'parsifont-font-family-user', true); 
			
			$parsifont_fonts = array('Arial', 'Verdana', 'Sultan K Bold', 'Sultan Adan', 'Sultan Koufi', 'IranNastaliq', 'IRYekan', 'B Nazanin', 'BBCNassim', 'B Koodak', 'B Yekan', 'B Farnaz', 'B Homa', 'B Morvarid', 'B Moj', 'B Siavash', 'B Sina', 'B Titr', 'B Traffic', 'Comic Sans MS', 'B Koodak, Comic Sans MS', 'B Yekan, Comic Sans MS', 'B Farnaz, Comic Sans MS', 'B Homa, Comic Sans MS', 'B Morvarid, Comic Sans MS', 'B Moj, Comic Sans MS', 'B Siavash, Comic Sans MS', 'B Sina, Comic Sans MS', 'B Titr, Comic Sans MS', 'B Traffic, Comic Sans MS', 'B Nazanin, Comic Sans MS', 'BBCNassim, Comic Sans MS', 'IRYekan, Comic Sans MS', 'IranNastaliq, Comic Sans MS', 'Sultan Koufi, Comic Sans MS', 'Sultan Adan, Comic Sans MS', 'Sultan K Bold, Comic Sans MS');
			
			for($i=0; $i<count($parsifont_fonts); $i++) { 
				if($parsifont_fonts[$i] !== $parsifont_font_family) { ?>
				<option value="<?php echo $parsifont_fonts[$i]; ?>"><?php echo $parsifont_fonts[$i]; ?></option>
				<?php } else {
				  $using_preset = 1;  ?>
				<option value="<?php echo $parsifont_fonts[$i]; ?>" selected="selected"><?php echo $parsifont_fonts[$i]; ?></option>
				<?php }
			
			 } ?>
			
		</select>
	 
	 	<br/>
		<input type="text" placeholder="<?php _e('You can also type a font name here', 'parsifont'); ?>" value="<?php if(!$using_preset) { echo $parsifont_font_family_user;} ?>" name="parsifont-font-family-user" id="parsifont-font-family-user" style="width:290px;">
	 
	
	</td>
        </tr>
	
	
		  <tr valign="top">
        <th scope="row" ><?php _e('Preview', 'parsifont'); ?></th>
        <td>
	 
	<textarea name="parsifont-preview" style="text-align:center;font-size:<?php echo $parsifont_font_size; ?>px; font-family:<?php echo $parsifont_font_family; ?>; width:400px;height:90px;color:#000;" id="parsifont-preview" class="large-text code" disabled="disabled" spellcheck="false">این متن فقط برای آزمایش است.
	<?php _e('This text is just to test.', 'parsifont') ?></textarea>
	
		</td>
        </tr>

</table>

<p style="text-align:center !important;font-size:20px;"><a style="text-decoration: none;" href="http://dl.barfaksite.ir/fonts.zip"><?php _e('Download fonts', 'parsifont') ?></a></p>

    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'parsifont') ?>" />
    </p>


</form>

<div style="padding-top:8px;color:#666;text-align:center;background: none repeat scroll 0% 0% #F5F5DC;padding-bottom:50px;border-bottom-right-radius:44px;border-top-left-radius:44px;border:5px dashed;">
<h3><b><?php _e('Plugin Features', 'parsifont') ?></b></h3>
<ul>

	<li><strong><?php _e('Beautiful dashboard by changing the font', 'parsifont') ?></strong></li>
    <li><strong><?php _e('Select a font from the list of available fonts', 'parsifont') ?></strong></li>	
    <li><strong><?php _e('The user can write the name of the own favorite font.', 'parsifont') ?></strong></li>
    <li><strong><?php _e('This plugin is developed by Ghaem Omidi.', 'parsifont') ?></strong></li>
</ul>
<div style="text-align:center;"><b><h3><?php _e('Dedicated to the all users of WP-Parsi and Mandegarweb.', 'parsifont') ?></h3></b></div>

<?php
session_start();
if(isset($_POST['submit'])) {
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])  && !empty($_POST['subject'])) {
if($_POST['code'] == $_SESSION['rand_code']) {
// send email
$accept = __('Your message was successfully sent. Thanks', 'parsifont');
$to = "ghaemomidi@yahoo.com";
$subject = $_POST['subject'];
$name= $_POST['name'];
$from = $_POST['email'];
$user_message = $_POST['message'];
$body = "\n".
"Name: $name\n".
"Email: $from \n".
"Message: \n ".
"$user_message\n".
$headers = "From: $from \r\n";
$headers .= "Reply-To: $from \r\n";
mail($to, $subject, $body, $headers);
}
} else {
$error = __('Please fill all fields.', 'parsifont');
}
}
?>
<div class="bodyparsi">
<div id="mainparsi">
<div class="contentparsi">
<h2><?php _e('If you want your favorite font to be used in plugin or you have comments or suggestions please let us know via this form:', 'parsifont') ?></h2>
<?php if(!empty($error)) echo '<div class="errorwppafe">'.$error.'</div>'; ?>
<?php if(!empty($accept)) echo '<div class="okwppafe">'.$accept.'</div>'; ?>
<p>
<div class="formsparsi">     
<form action="" method="post">
<label for="username"><?php _e('Name', 'parsifont') ?></label>
<br/>
<input class="textare2" type="text" class="formparsi" value="" name="name">
<br/><br/>
<label for="email"><?php _e('Email', 'parsifont') ?></label>
<br/>
<input class="textare2" type="text" id="email" value="" class="form-ltr" name="email">
<br/><br/>
<label for="sub"><?php _e('Subject', 'parsifont') ?></label>
<br/>
<input class="textare2" type="text" id="sub" value="" class="formparsi" name="subject">
<br/><br/>
<label for="mess"><?php _e('Your Message', 'parsifont') ?></label>
<br/>
<textarea class="textare1" id="mess" rows="7" name="message"></textarea>
<br/><br/>
<input style="float:none !important;margin-right:auto;margin-left:auto;display:block;" class="submitbot" type="submit" name="submit" value="<?php _e('Send', 'parsifont') ?>">
</form>
</div>
</p>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<script type="text/javascript">

	jQuery(document).ready( function($) {
	
		$("#parsifont-font-family").change(function() {
	   	$('#parsifont-preview').css("font-family", $(this).val());
		$('#parsifont-font-family-user').val("");
		});
	
	
		$("#parsifont-font-size").change(function() {
	   	$('#parsifont-preview').css("font-size", $(this).val() + "px");
		});
			
		$("#parsifont-font-family-user").blur(function() {
		  
		  if($(this).val()) {
		  
	   	$('#parsifont-preview').css("font-family", $(this).val());
		$('#parsifont-font-family option[value=""]').attr('selected','selected');
		  }
	});
	
			
			
	});

</script>

<?php
}


function parsifont_create_menu() {
add_menu_page(__("Parsi Font", 'parsifont'), __("Parsi Font", 'parsifont'), 1, "parsifont-settings", "parsifont_settings_page");  
}

add_action('admin_menu', 'parsifont_create_menu');

// for transalations
function parsifont_action_init() {
load_plugin_textdomain('parsifont', false, dirname(plugin_basename(__FILE__) ) . '/languages/' );
}

add_action('init', 'parsifont_action_init');