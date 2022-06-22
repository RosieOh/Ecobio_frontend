<?php if(!defined("__XE__"))exit;?>
<?php  $__Context->sub_header_title = $__Context->module_info->browser_title ?>
<?php  $__Context->_container_class = array() ?>
<?php  $__Context->_content_class = array() ?>
<?php  $__Context->_aside_class = array() ?>
<?php  $__Context->_nopadding_class = array() ?>
<?php  $__Context->_disp_act = array(
	'dispMemberSignUpForm',
	'dispMemberLoginForm',
	'dispMemberFindAccount',
	'dispMemberInfo',
	'dispMemberModifyPassword',
	'dispMemberModifyEmailAddress',
	'dispMemberModifyInfo',
	'dispMemberLeave',
	'dispMemberScrappedDocument',
	'dispMemberSavedDocument',
	'dispMemberOwnDocument',
	'dispCommunicationFriend',
	'dispCommunicationMessages',
	'dispNcenterliteUserConfig',
	'dispNcenterliteNotifyList',
	'dispLoginxeclientListProvider',
	'dispAjaxboardNotificationConfig',
	'IS'
) ?>
<?php if(in_array($__Context->act, $__Context->_disp_act)){;
$__Context->layout_info->layout_type = 'sub';
} ?>
<?php if(!$__Context->layout_info->subtop_use){;
$__Context->layout_info->subtop_use = 'Y';
} ?>
<?php if(!$__Context->layout_info->subtop_height){;
$__Context->layout_info->subtop_height = '400';
} ?> 
<?php if(!$__Context->layout_info->subtop_color){;
$__Context->layout_info->subtop_color = '#333';
} ?> 
<?php if(!$__Context->layout_info->subtop_txt_use){;
$__Context->layout_info->subtop_txt_use = 'Y';
} ?>
<?php if(!$__Context->layout_info->subtop_txt_color){;
$__Context->layout_info->subtop_txt_color = '#fff';
} ?>
<?php if(!$__Context->layout_info->content_width){;
$__Context->layout_info->content_width = '1340';
} ?>