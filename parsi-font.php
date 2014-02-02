<?php
/*
Plugin Name: Parsi Font
Plugin URI: http://www.forum.wp-parsi.com/
Description: Change fonts of wordpress.
Author: Ghaem Omidi
Version: 2.0
Tags: admin, admin font, html editor, visual editor, fonts, font, wordpress font, change font, parsi font, fonts, oersian, persian fonts, persian font
Author URI: http://forum.wp-parsi.com
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
	#adminmenu .menu-icon-dashboard div.wp-menu-image:before,
	#adminmenu .menu-icon-post div.wp-menu-image:before,
	#adminmenu .menu-icon-media div.wp-menu-image:before,
	#adminmenu .menu-icon-links div.wp-menu-image:before,
	#adminmenu .menu-icon-page div.wp-menu-image:before,
	#adminmenu .menu-icon-comments div.wp-menu-image:before,
	#adminmenu .menu-icon-appearance div.wp-menu-image:before,
	#adminmenu .menu-icon-plugins div.wp-menu-image:before,
	#adminmenu .menu-icon-users div.wp-menu-image:before,
	#adminmenu .menu-icon-tools div.wp-menu-image:before,
	#adminmenu .menu-icon-settings div.wp-menu-image:before,
	#adminmenu .menu-icon-site div.wp-menu-image:before,
	#adminmenu .menu-icon-generic div.wp-menu-image:before,
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
	html:lang(fa-IR) .rtl #wpadminbar *,
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
	.wp-pointer-content,
	.wp-pointer-content h3,
	.wp-pointer-content h3:before,
	.wp-pointer-content p,
	.wp-pointer-buttons,
	.wp-pointer-buttons a,
	.wp-pointer-buttons a.close,
	.wp-pointer-buttons a.close:before,
	.wp-pointer-arrow,.wp-pointer-arrow-inner,
	.wp-pointer-arrow,
	.wp-pointer-arrow-inner,
	.wp-pointer-top,.wp-pointer-undefined,
	.wp-pointer-bottom,
	.wp-pointer-left,
	.wp-pointer-right,
	.wp-pointer-top .wp-pointer-arrow,.wp-pointer-bottom .wp-pointer-arrow,.wp-pointer-undefined .wp-pointer-arrow,
	.wp-pointer-left .wp-pointer-arrow,.wp-pointer-right .wp-pointer-arrow,
	.wp-pointer-top .wp-pointer-arrow,.wp-pointer-undefined .wp-pointer-arrow,
	.wp-pointer-top .wp-pointer-arrow:before,.wp-pointer-undefined .wp-pointer-arrow:before,
	.wp-pointer-bottom .wp-pointer-arrow,
	.wp-pointer-bottom .wp-pointer-arrow:before,
	.wp-pointer-left .wp-pointer-arrow,
	.wp-pointer-left .wp-pointer-arrow:before,
	.wp-pointer-right .wp-pointer-arrow,
	.wp-pointer-right .wp-pointer-arrow:before,
	.wp-pointer,
	#wp-auth-check-wrap.hidden,
	#wp-auth-check-wrap #wp-auth-check-bg,
	#wp-auth-check-wrap #wp-auth-check,
	#wp-auth-check-wrap.fallback #wp-auth-check,
	#wp-auth-check-wrap #wp-auth-check-form,
	#wp-auth-check-wrap #wp-auth-check-form iframe,
	#wp-auth-check-wrap .wp-auth-check-close,
	#wp-auth-check-wrap .wp-auth-check-close:before,
	#wp-auth-check-wrap .wp-auth-check-close:hover:before,
	#wp-auth-check-wrap .wp-auth-check-close:focus,
	#wp-auth-check-wrap .wp-auth-fallback-expired,
	#wp-auth-check-wrap .wp-auth-fallback,
	#wp-auth-check-wrap.fallback .wp-auth-fallback,
	#wp-auth-check-wrap.fallback .wp-auth-check-close,
	.media-modal *,
	.media-modal,
	.media-frame,
	.media-frame input,
	.media-frame textarea,
	.media-frame select,
	.wp-admin .media-frame select,
	.media-frame a,
	.media-frame a:hover,
	.media-frame a.button,
	.media-frame a.button:hover,
	.media-frame a.button-primary,
	.media-frame a.button-primary:hover,
	.media-frame input[type="text"],
	.media-frame input[type="password"],
	.media-frame input[type="number"],
	.media-frame input[type="search"],
	.media-frame input[type="email"],
	.media-frame input[type="url"],
	.media-frame textarea,
	.media-frame select,
	.media-frame select,
	.media-frame input:disabled,
	.media-frame textarea:disabled,
	.media-frame input[readonly],
	.media-frame textarea[readonly],
	.media-frame input[type="search"],
	.media-frame :-moz-placeholder,
	.ui-sortable,
	.ui-draggable,
	.meta-box-sortables.ui-sortable,
	.meta-box-sortables.ui-sortable .hndle,
	.media-modal,
	.wp-customizer .media-modal,
	.media-modal-backdrop,
	.wp-customizer .media-modal-backdrop,
	.media-modal-content,
	.media-toolbar,
	.media-toolbar-primary,
	.media-toolbar-secondary,
	.media-toolbar-primary > .media-button,
	.media-toolbar-primary > .media-button-group,
	.media-toolbar-secondary > .media-button,
	.media-toolbar-secondary > .media-button-group,
	.media-sidebar,
	.hide-toolbar .media-sidebar,
	.media-sidebar .sidebar-title,
	.media-sidebar .sidebar-content,
	.media-sidebar .search,
	.media-sidebar h3,
	.media-sidebar .setting,
	.media-sidebar .setting label,
	.media-sidebar .setting .link-to-custom,
	.media-sidebar .setting span,
	.media-sidebar .setting select,
	.media-sidebar .setting input[type="checkbox"],
	.media-sidebar .field input[type="checkbox"],
	.media-sidebar .setting span,
	.compat-item label span,
	.media-sidebar .setting input,
	.media-sidebar .setting textarea,
	.compat-item .field textarea,
	.media-sidebar select,
	.compat-item,
	.compat-item table,
	.compat-item tr,
	.compat-item .label,
	.compat-item .field,
	.compat-item .label span,
	.compat-item .field input,
	.media-menu,
	.media-menu > a,
	.media-menu > a:hover,
	.media-menu > a:active,
	.media-menu .active,
	.media-menu .active:hover,
	.media-menu .separator,
	.media-router,
	.media-router > a,
	.media-router > a:last-child,
	.media-router > a:active,
	.media-router > a:focus,
	.media-router .active,
	.media-router .active:hover,
	.media-router .active,
	.media-router > a.active:last-child,
	.media-router .active:after,
	.media-frame,
	.media-frame-menu,
	.media-frame-title,
	.media-frame-router,
	.media-frame-content,
	.media-frame-toolbar,
	.media-frame.hide-menu .media-frame-title,
	.media-frame.hide-menu .media-frame-router,
	.media-frame.hide-menu .media-frame-toolbar,
	.media-frame.hide-menu .media-frame-content,
	.media-frame.hide-menu .media-frame-menu,
	.media-frame.hide-toolbar .media-frame-content,
	.media-frame.hide-toolbar .media-frame-toolbar,
	.media-frame.hide-router .media-frame-content,
	.media-frame.hide-router .media-frame-router,
	.media-frame.hide-router .media-frame-title,
	.media-frame .media-toolbar .add-to-gallery,
	.media-frame-title h1,
	.media-frame .media-iframe,
	.media-frame .media-iframe,
	.media-frame .media-iframe iframe,
	.media-frame select.attachment-filters,
	.media-frame .search,
	.media-toolbar-secondary .search,
	.attachments,
	.attachment,
	.selected.attachment,
	.attachment-preview,
	.attachment .icon,
	.attachment .thumbnail,
	.attachment-preview .thumbnail:after,
	.attachment .thumbnail img,
	.attachment .thumbnail .centered,
	.attachment .thumbnail .centered img,
	.attachment .filename,
	.attachment .filename div,
	.div,
	.ul,
	.li,
	.p,
	.attachment-preview .thumbnail,
	.attachment .thumbnail img,
	.attachment .close,
	.attachment .close:hover,
	.attachment:hover .close,
	.attachment .check,
	.attachment .check div,
	.attachment .check:hover div,
	.attachment.selected .check,
	.attachment.details,
	.attachment.details .check,
	.attachment.details .check div,
	.attachment.details .check:hover div,
	.media-frame .attachment .describe,
	.media-frame .attachments-browser,
	.attachments-browser .media-toolbar,
	.attachments-browser .media-toolbar-primary > .media-button,
	.attachments-browser .media-toolbar-primary > .media-button-group,
	.attachments-browser .media-toolbar-secondary > .media-button,
	.attachments-browser .media-toolbar-secondary > .media-button-group,
	.attachments-browser .attachments,
	.attachments-browser .uploader-inline,
	.attachments-browser .instructions,
	.media-progress-bar,
	.media-progress-bar div,
	.media-uploader-status .media-progress-bar,
	.uploading.media-uploader-status .media-progress-bar,
	.attachment-preview .media-progress-bar,
	.media-uploader-status,
	.media-sidebar .media-uploader-status,
	.uploader-inline .media-uploader-status h3,
	.media-uploader-status .upload-details,
	.uploading.media-uploader-status .upload-details,
	.media-uploader-status .upload-detail-separator,
	.media-uploader-status .upload-count,
	.media-uploader-status .upload-dismiss-errors,
	.media-uploader-status .upload-errors,
	.errors.media-uploader-status .upload-dismiss-errors,
	.errors.media-uploader-status .upload-errors,
	.media-uploader-status .upload-dismiss-errors,
	.media-sidebar .media-uploader-status .upload-dismiss-errors,
	.upload-errors .upload-error,
	.upload-errors .upload-error-label,
	.upload-errors .upload-error-message,
	.uploader-window,
	.uploader-window-content,
	.uploader-window h3,
	.uploader-window .media-progress-bar,
	.uploader-window .media-progress-bar div,
	.uploading .uploader-window .media-progress-bar,
	.media-frame .uploader-inline,
	.uploader-inline-content,
	.uploader-inline-content .upload-ui,
	.uploader-inline-content .post-upload-ui,
	.uploader-inline .has-upload-message .upload-ui,
	.uploader-inline h3,
	.uploader-inline .has-upload-message .upload-instructions,
	.uploader-inline .drop-instructions,
	.supports-drag-drop .uploader-inline .drop-instructions,
	.uploader-inline p,
	.uploader-inline .media-progress-bar,
	.uploading.uploader-inline .media-progress-bar,
	.uploader-inline .browser,
	.media-selection,
	.media-selection .selection-info,
	.media-selection.empty,
	.media-selection.editing,
	.media-selection.one .edit-selection,
	.media-selection .count,
	.media-selection .selection-info a,
	.media-selection .selection-info a:hover,
	.media-selection .selection-info a:last-child,
	.media-selection .selection-info .clear-selection,
	.media-selection .selection-info .clear-selection:hover,
	.media-selection .selection-view,
	.media-selection .attachments,
	.media-selection .attachment .icon,
	.attachment.selection.selected,
	.attachment.selection.details,
	.media-selection .attachment.selection.details,
	.media-selection:after,
	.media-selection .attachment .filename,
	.media-frame .spinner,
	.media-sidebar .settings-save-status,
	.media-sidebar .settings-save-status .spinner,
	.media-sidebar .settings-save-status .saved,
	.media-sidebar .save-waiting .settings-save-status .spinner,
	.media-sidebar .save-complete .settings-save-status .saved,
	.attachment-details,
	.attachment-info,
	.attachment-info .filename,
	.attachment-info .thumbnail,
	.uploading .attachment-info .thumbnail,
	.uploading .attachment-info .media-progress-bar,
	.attachment-info .thumbnail:after,
	.attachment-info .thumbnail img,
	.attachment-info .details,
	.attachment-info .edit-attachment,
	.attachment-info .refresh-attachment,
	.attachment-info .delete-attachment,
	.attachment-info .refresh-attachment,
	.attachment-details.needs-refresh .attachment-info .edit-attachment,
	.attachment-details.needs-refresh .attachment-info .refresh-attachment,
	.attachment-info .edit-attachment,
	.attachment-info .delete-attachment,
	.attachment-info .delete-attachment:hover,
	.attachment-display-settings,
	.attachment-display-settings h4,
	.gallery-settings,
	.embed-url,
	.media-frame .embed-url input,
	.media-frame .embed-url .spinner,
	.media-frame .embed-loading .embed-url .spinner,
	.embed-link-settings,
	.embed-image-settings,
	.media-embed .thumbnail,
	.media-embed .thumbnail img,
	.media-embed .thumbnail:after,
	.media-embed .setting,
	.media-embed .setting span,
	.media-embed .setting .button-group,
	.media-embed .setting input,
	.media-embed .setting textarea,
	.ie7 .media-frame .attachments-browser,
	.ie7 .media-frame .embed-url input,
	.ie7 .compat-item,
	.ie7 .attachment-display-settings,
	.ie7 .attachment-preview,
	.ie7 .attachment-preview .thumbnail,
	.ie7 .media-frame .attachment .describe,
	.ie7 .media-sidebar .setting select,
	.ie7 .media-sidebar .setting input,
	.ie7 .media-sidebar .setting textarea,
	.ie7 .media-sidebar .setting .link-to-custom,
	.rtl .media-modal,
	.rtl .media-frame,
	.rtl .media-frame .search,
	.rtl .media-frame input[type="text"],
	.rtl .media-frame input[type="password"],
	.rtl .media-frame input[type="number"],
	.rtl .media-frame input[type="search"],
	.rtl .media-frame input[type="email"],
	.rtl .media-frame input[type="url"],
	.rtl .media-frame textarea,
	.rtl .media-frame select,
	:lang(fa-IR) .rtl .media-modal,
	:lang(fa-IR) .rtl .media-frame,
	:lang(fa-IR) .rtl .media-frame .search,
	:lang(fa-IR) .rtl .media-frame input[type="text"],
	:lang(fa-IR) .rtl .media-frame input[type="password"],
	:lang(fa-IR) .rtl .media-frame input[type="number"],
	:lang(fa-IR) .rtl .media-frame input[type="search"],
	:lang(fa-IR) .rtl .media-frame input[type="email"],
	:lang(fa-IR) .rtl .media-frame input[type="url"],
	:lang(fa-IR) .rtl .media-frame textarea,
	:lang(fa-IR) .rtl .media-frame select,
	.media-frame-content .media-toolbar-primary .search,
	.media-frame-content .media-toolbar-secondary .attachment-filters,
	.media-frame-menu,
	.media-menu > a,
	.media-frame-title,
	.media-frame-router,
	.media-frame-content,
	.media-frame-toolbar,
	.media-sidebar,
	.attachments-browser .attachments,
	.attachments-browser .uploader-inline,
	.attachments-browser .media-toolbar,
	.media-sidebar .setting input,
	.media-sidebar .setting textarea,
	.media-sidebar .setting span,
	.compat-item label span,
	.media-sidebar .setting span,
	.compat-item label span,
	.media-sidebar .setting input,
	.media-sidebar .setting textarea,
	.media-sidebar .setting select,
	.media-sidebar .setting select.columns,
	.media-frame input,
	.media-frame textarea,
	.media-frame .search,
	.media-frame-content .attachment .icon,
	.media-selection,
	.media-selection:after,
	.media-selection .attachments,
	.media-menu .separator,
	.media-frame input[type="text"],
	.media-frame input[type="password"],
	.media-frame input[type="number"],
	.media-frame input[type="search"],
	.media-frame input[type="email"],
	.media-frame input[type="url"],
	.media-frame textarea,
	.media-frame select,
	.media-frame-content .media-toolbar .instructions,
	.media-frame-menu,
	.media-menu,
	.media-menu a,
	.media-frame-title,
	.media-frame-toolbar,
	.media-toolbar,
	.media-frame,
	.attachments-browser .attachments,
	.attachment-details h3,
	.media-menu a:nth-child(2),
	.media-menu a:last-child,
	.media-menu .separator,
	.media-frame-title,
	.media-frame-title h1,
	.media-frame-router,
	.media-frame-content,
	.media-frame .attachments-browser,
	.media-sidebar,
	.media-modal,
	.media-toolbar-primary, .media-toolbar-secondary,
	.uploader-inline h3,
	.uploader-inline-content,
	.uploader-inline-content .upload-ui,
	.attachments-browser .attachments, .attachments-browser .uploader-inline,
	.media-modal,
	.media-modal-backdrop,
	.attachments-browser .attachment,
	.attachments-browser .attachment-preview,
	.attachments-browser .media-toolbar-primary input.search,
	.uploader-inline-content,
	.media-sidebar .setting input[type="checkbox"],
	.media-sidebar .field input[type="checkbox"],
	.embed-link-settings,
	.embed-image-settings,
	.media-frame.hide-router .media-frame-content,
	.gallery-settings h3,
	.media-menu,
	.media-menu a,
	.media-menu a:nth-child(2),
	.media-menu a:last-child,
	.media-frame-router,
	.media-frame-content,
	.attachments-browser .attachments,
	.embed-link-settings,
	.media-frame-content .media-toolbar .search,
	.media-frame-content .media-toolbar .attachment-filters,
	.media-frame .spinner,
	.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp_themeSkin .mceMenu .mceText,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,
	.wp_themeSkin table,.wp_themeSkin tbody,.wp_themeSkin a,.wp_themeSkin img,.wp_themeSkin tr,.wp_themeSkin div,.wp_themeSkin td,.wp_themeSkin iframe,.wp_themeSkin span,.wp_themeSkin *,.wp_themeSkin .mceText,
	.ui-helper-hidden,
	.ui-helper-hidden-accessible,
	.ui-helper-reset,
	.ui-helper-clearfix:before,
	.ui-helper-clearfix:after,
	.ui-helper-clearfix,
	.ui-helper-zfix,
	.ui-front,
	.ui-state-disabled,
	.ui-icon,
	.ui-widget-overlay,
	.ui-resizable,
	.ui-resizable-handle,
	.ui-resizable-disabled .ui-resizable-handle,
	.ui-resizable-autohide .ui-resizable-handle,
	.ui-resizable-n,
	.ui-resizable-s,
	.ui-resizable-e,
	.ui-resizable-w,
	.ui-resizable-se,
	.ui-resizable-sw,
	.ui-resizable-nw,
	.ui-resizable-ne,
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
	.wp-dialog .ui-dialog-titlebar,
	.wp-dialog .ui-dialog-content,
	.wp-dialog .ui-dialog-titlebar-close,
	.wp-dialog .ui-dialog-titlebar-close:before,
	.wp-dialog .ui-dialog-titlebar-close:hover:before,
	.wp-dialog .ui-dialog-titlebar-close .ui-button-text,
	.wp-dialog .ui-dialog-titlebar-close:hover,
	.wp-dialog .ui-dialog-titlebar-close:focus,
	.ui-widget-overlay,
	.curtime #timestamp,
	#screen-meta-links a.show-settings,
	.widget-top a.widget-action,
	.widget-top a.widget-action:hover,
	.sidebar-name-arrow,
	.sidebar-name:hover .sidebar-name-arrow,
	.meta-box-sortables .postbox:hover .handlediv,
	.tagchecklist span a,
	#bulk-titles div a,
	.tagchecklist span a:hover,
	#bulk-titles div a:hover,
	.wp_themeSkin .mceToolbar span.mce_undo,
	.wp_themeSkin .mceToolbar span.mce_redo,
	.wp_themeSkin .mceToolbar span.mce_bullist,
	.wp_themeSkin .mceToolbar span.mce_numlist,
	.wp_themeSkin .mceToolbar span.mce_blockquote,
	.wp_themeSkin .mceToolbar span.mce_charmap,
	.wp_themeSkin .mceToolbar span.mce_bold,
	.wp_themeSkin .mceToolbar span.mce_italic,
	.wp_themeSkin .mceToolbar span.mce_underline,
	.wp_themeSkin .mceToolbar span.mce_justifyleft,
	.wp_themeSkin .mceToolbar span.mce_justifyright,
	.wp_themeSkin .mceToolbar span.mce_justifycenter,
	.wp_themeSkin .mceToolbar span.mce_justifyfull,
	.wp_themeSkin .mceToolbar span.mce_indent,
	.wp_themeSkin .mceToolbar span.mce_outdent,
	.wp_themeSkin .mceToolbar span.mce_link,
	.wp_themeSkin .mceToolbar span.mce_unlink,
	.wp_themeSkin .mceToolbar span.mce_help,
	.wp_themeSkin .mceToolbar span.mce_removeformat,
	.wp_themeSkin .mceToolbar span.mce_fullscreen,
	.wp_themeSkin .mceToolbar span.mce_wp_fullscreen,
	.wp_themeSkin .mceToolbar span.mce_media,
	.wp_themeSkin .mceToolbar span.mce_pastetext,
	.wp_themeSkin .mceToolbar span.mce_pasteword,
	.wp_themeSkin .mceToolbar span.mce_wp_help,
	.wp_themeSkin .mceToolbar span.mce_wp_adv,
	.wp_themeSkin .mceToolbar span.mce_wp_more,
	.wp_themeSkin .mceToolbar span.mce_strikethrough,
	.wp_themeSkin .mceToolbar span.mce_spellchecker,
	.wp_themeSkin .mceToolbar span.mce_forecolor,
	.wp_themeSkin .mceToolbar .mce_forecolorpicker,
	.wp_themeSkin .mceToolbar .mceSplitButton .mce_spellchecker span.mce_spellchecker,
	.wp_themeSkin .mceToolbar .mceSplitButton .mce_forecolor span.mce_forecolor,
	.wp_themeSkin .mceToolbar .mceSplitButton span.mce_numlist,
	.wp_themeSkin .mceToolbar .mceSplitButton span.mce_bullist,
	.login h1 a:hover,
	.login #nav a:hover,
	.login #backtoblog a:hover,
	.login #nav a,
	.login #backtoblog a,
	body.login,
	.login form,.login form .input,
	.login input[type="text"],
	.login form input[type="checkbox"],
	a .mceIcon:hover,
	a .mceIcon, .mceAction,
	.sticky-menu #TB_window,
	.clearlooks2 .mceClose:hover:before,
	.clearlooks2 .mceClose:before,
	.clearlooks2 .mceTop span,
	.clearlooks2 .mceFocus .mceTop span,
	.clearlooks2 .mceMiddle span,
	.clearlooks2 .mceMiddle .mceLeft,
	.clearlooks2 .mceMiddle .mceRight,
	.clearlooks2 .mceBottom,
	.clearlooks2 .mceBottom .mceLeft,
	.clearlooks2 .mceBottom .mceCenter,
	.clearlooks2 .mceBottom .mceRight,
	.clearlooks2,
	.attachment.details .check ,
	.attachment .check,
	.details.attachment,
	.media-router .active,
	.media-router > a.active:last-child,
	.media-sidebar,
	.media-menu .separator,
	.media-frame-content,
	.ie8 input[type="password"],
	.ie8 .login form .input,
	body.login,
	div.updated,
	.login .message,
	.press-this #message,
	div.error,
	.login #login_error,
	#loginform p.submit,
	.login-action-lostpassword p.submit,
	.login form,
	.login *,
	.login form .forgetmenot,
	.login .button-primary,
	#login form p,
	#login form p.submit,
	.login label,
	.login form .forgetmenot label,
	.login h1,
	.login h1 a,
	#login,
	#login_error,
	.login .message,
	.login #nav,
	.login #backtoblog,
	.login #nav,
	#backtoblog,
	.login form .input,
	.login input[type="text"],
	.login #pass-strength-result,
	.mobile #login,
	.mobile #login form,
	.mobile #login .message,
	.mobile #login_error,
	.mobile #login #nav,
	.mobile #login #backtoblog,
	.mobile #login h1 a,
	body.interim-login,
	div.updated,
	.login .message,
	.press-this #message,
	#media-items a.delete-permanently:hover {
	<?php
	if ($parsifont_font_family) { ?>	
	font-family: <?php echo $parsifont_font_family; ?>;
	<?php } 
	if ($parsifont_font_size) { ?>	
	font-size: <?php echo $parsifont_font_size; ?>px;
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
<?php echo '<h2>' . __('Parsi Font', 'parsifont') . '</h2>'; ?>

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
			<option value=""><?php _e('Select', 'parsifont'); ?></option>
			
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
			
			$parsifont_fonts = array('B Koodak', 'B Yekan', 'B Farnaz', 'B Homa', 'B Morvarid', 'B Moj', 'B Siavash', 'B Sina', 'B Titr', 'B Traffic', 'Comic Sans MS', 'B Koodak, Comic Sans', 'B Yekan, Comic Sans MS', 'B Farnaz, Comic Sans MS', 'B Homa, Comic Sans MS', 'B Morvarid, Comic Sans MS', 'B Moj, Comic Sans MS', 'B Siavash, Comic Sans MS', 'B Sina, Comic Sans MS', 'B Titr, Comic Sans MS', 'B Traffic, Comic Sans MS');
			
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
        <th scope="row"><?php _e('Preview', 'parsifont'); ?></th>
        <td>
	 
	<textarea name="parsifont-preview" style="text-align:center;font-size:<?php echo $parsifont_font_size; ?>px; font-family:<?php echo $parsifont_font_family; ?>; width: 305px; height: 79px;color:#000;" id="parsifont-preview" class="large-text code" disabled="disabled" spellcheck="false">.این متن فقط برای آزمایش است
This text is just to test.</textarea>
	
		</td>
        </tr>

</table>

    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'parsifont') ?>" />
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

add_menu_page("پارسی فونت", "پارسی فونت", 1, "parsifont-settings", "parsifont_settings_page");  

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