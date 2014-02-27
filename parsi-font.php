<?php
/*
Plugin Name: WP-Parsi Admin Font Editor
Plugin URI: http://www.forum.wp-parsi.com/
Description: Change fonts of wordpress.
Author: Ghaem
Version: 3.5
Tags: admin, admin font, html editor, visual editor, fonts, font, wordpress font, change font, parsi font, fonts, oersian, persian fonts, persian font
Author URI: http://www.forum.wp-parsi.com/
Copyright: Ghaem Omidi(WP-Parsi)
License: GPL

*/

/* 
Special thanks to :
	Ariaieboy
 	Wordpress Parsi admins and moderators (Parsa Kafi, Mohsen Ghiasi, Saeed Fard, Abdolmajed Shahbakhsh, Morteza Rocky and Mostafa Soufi)
 	Wordpress Parsi forum members for great support(forum.wp-parsi.com)
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
	if ($afe_font_family) { ?>	
	font-family: <?php echo $afe_font_family; ?>;
	<?php } 
	if ($afe_font_size) { ?>	
	font-size: <?php echo $afe_font_size; ?>px;
	<?php } ?>
	}
		
	textarea#wp_mce_fullscreen { 
	
	<?php
	if ($afe_font_family) { ?>	
	font-family: <?php echo $afe_font_family; ?>;
	<?php } 
	if ($afe_font_size) { ?>	
	font-size: <?php echo $afe_font_size; ?>px;
	<?php } ?>
	}
		
	textarea#replycontent { 
	
	<?php
	if ($afe_font_family) { ?>	
	font-family: <?php echo $afe_font_family; ?>;
	<?php } 
	if ($afe_font_size) { ?>	
	font-size: <?php echo $afe_font_size; ?>px;
	<?php } ?>
	}

	body#tinymce.wp-editor 
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
	.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp_themeSkin .mceMenu .mceText,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,
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
	code,
	kbd,code,
	.titlewrap input,
	#TB_ajaxWindowTitle,
	#sidemenu,
	body *,
	body,
	#template textarea,
	#docs-list,
	#sidemenu a.current,
	textarea.code,	
	html,
	.html,
	#html,
	.wp_themeSkin table td,
	#wp-link .toggle-arrow,
	.wp-editor-container,
	.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp_themeSkin .mceMenu .mceText,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,
	.wp_themeSkin table,.wp_themeSkin tbody,.wp_themeSkin a,.wp_themeSkin img,.wp_themeSkin tr,.wp_themeSkin div,.wp_themeSkin td,.wp_themeSkin iframe,.wp_themeSkin span,.wp_themeSkin *,.wp_themeSkin .mceText,
	#media-items a.delete-permanently:hover {
	<?php
	if ($afe_font_family) { ?>	
	font-family: <?php echo $afe_font_family; ?>;
	<?php } 
	if ($afe_font_size) { ?>	
	font-size: <?php echo $afe_font_size; ?>px;
	<?php } ?>
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
<?php echo '<h2>' . __('Parsi Font', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font') . '</h2>'; ?>

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
			<p><strong><?php _e('Settings saved.', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></strong></p></div>
			
			<?php 
			} ?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">

   <table class="form-table">
        
	 <tr valign="top">
        <th scope="row"><?php _e('Font Size (px)', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></th>
        <td>
	 
		<select name="parsifont-font-size" id="parsifont-font-size" style="width:290px;">
			<option value=""><?php _e('Select', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></option>
			
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
        <th scope="row"><?php _e('Font Family', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></th>
        <td>
	 
	
		<select name="parsifont-font-family" id="parsifont-font-family" style="width:290px;">
			<option value=""><?php _e('Select font from list or type a font name below', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></option>
			
			<?php
			
			$parsifont_font_family = get_user_meta($current_user->ID, 'parsifont-font-family', true);
			$parsifont_font_family_user = get_user_meta($current_user->ID, 'parsifont-font-family-user', true); 
			
			$parsifont_fonts = array('B Koodak', 'B Yekan', 'B Farnaz', 'B Homa', 'B Morvarid', 'B Moj', 'B Siavash', 'B Sina', 'B Titr', 'B Traffic', 'Comic Sans MS', 'B Koodak, Comic Sans MS', 'B Yekan, Comic Sans MS', 'B Farnaz, Comic Sans MS', 'B Homa, Comic Sans MS', 'B Morvarid, Comic Sans MS', 'B Moj, Comic Sans MS', 'B Siavash, Comic Sans MS', 'B Sina, Comic Sans MS', 'B Titr, Comic Sans MS', 'B Traffic, Comic Sans MS');
			
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
		<input type="text" placeholder="<?php _e('You can also type a font name here', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?>" value="<?php if(!$using_preset) { echo $parsifont_font_family_user;} ?>" name="parsifont-font-family-user" id="parsifont-font-family-user" style="width:290px;">
	 
	
	</td>
        </tr>
	
	
		  <tr valign="top">
        <th scope="row"><?php _e('Preview', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'); ?></th>
        <td>
	 
	<textarea name="parsifont-preview" style="text-align:center;font-size:<?php echo $parsifont_font_size; ?>px; font-family:<?php echo $parsifont_font_family; ?>; width: 305px; height: 79px;color:#000;" id="parsifont-preview" class="large-text code" disabled="disabled" spellcheck="false">.این متن فقط برای آزمایش است
This text is just to test.</textarea>
	
		</td>
        </tr>

</table>

    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font') ?>" />
    </p>


</form>

<div style="border-top: 1px solid #ccc; padding-top: 8px; color: #666;">
<b><h3>ویژگی های افزونه</h3><b>
<ul style="list-style:inside">
	<li><strong>زیبا کردن پنل مدیریت با تغییر فونت</strong></li>
	<li><strong>تغییر فونت ویرایشگر وردپرس</strong></li>
    <li><strong>تغییر فونت پنل مدیریت وردپرس</strong></li>
    <li><strong>انتخاب فونت از لیست موجود فونت ها</strong></li>	
    <li><strong>نوشتن نام فونت مورد نظر کاربر</strong></li>
    <li><strong>این افزونه توسط قائم امیدی ساخته شده است.</strong></li>
</ul>
<div style="text-align:center;"><b><h3>تقدیم به تمامی کاربران وردپرس پارسی</h3><b></div>
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

add_menu_page(__("Parsi Font", 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'), __("Parsi Font", 'parsifont', 'G:\\\\Web\\\\Wordpress\\\\Plugins\\\\parsi-font'), 1, "parsifont-settings", "parsifont_settings_page");  

}

add_action('admin_menu', 'parsifont_create_menu');

function plugin_mce_css( $mce_css ) {
  
    global $current_user;
    get_currentuserinfo();

	$parsifont_font_size = get_user_meta($current_user->ID, 'parsifont-font-size', true); 
	$parsifont_font_family = get_user_meta($current_user->ID, 'parsifont-font-family', true); 
  
	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= plugins_url( 'css.php?size='.$parsifont_font_size.'&font='.$parsifont_font_family, __FILE__ );
	
	return $mce_css;
}

add_filter( 'mce_css', 'plugin_mce_css' );



// for transalations
function parsifont_action_init() {
load_plugin_textdomain('parsifont', false, dirname(plugin_basename(__FILE__) ) . '/languages/' );
}

add_action('init', 'parsifont_action_init');