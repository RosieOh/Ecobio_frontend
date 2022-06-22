<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->lang_type == 'ko'){ ?>
<?php if($__Context->module_info->banner && !$__Context->document_srl){ ?><div class="banner_wrap">
    <img src="<?php echo $__Context->module_info->banner ?>" />
</div><?php } ?>
<?php }else if($__Context->lang_type == 'en'){ ?>
<?php if($__Context->module_info->banner_en && !$__Context->document_srl){ ?><div class="banner_wrap">
    <img src="<?php echo $__Context->module_info->banner_en ?>" />
</div><?php } ?>
<?php } ?>
<?php if(!$__Context->module_info->colorset){ ?>
    <?php $__Context->module_info->colorset = "white" ?>
<?php } ?>
<!--#Meta:modules/board/skins/coupon/css/board.css--><?php $__tmp=array('modules/board/skins/coupon/css/board.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->colorset == "black"){ ?>
	<!--#Meta:modules/board/skins/coupon/css/black.css--><?php $__tmp=array('modules/board/skins/coupon/css/black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/board/skins/coupon/css/white.css--><?php $__tmp=array('modules/board/skins/coupon/css/white.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if($__Context->module_info->cufon=='y'){ ?>
	
	<!--#Meta:modules/board/skins/coupon/font/cufon-yui.js--><?php $__tmp=array('modules/board/skins/coupon/font/cufon-yui.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/board/skins/coupon/font/ngb.font.js--><?php $__tmp=array('modules/board/skins/coupon/font/ngb.font.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<script type="text/javascript">
		Cufon.replace('.boardHeader h1')('.extraVarsList th');
	</script>
<?php } ?>
<?php if($__Context->mid == 'Alliance'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','hd_wrap.html') ?>
<!--#Meta:modules/board/skins/coupon/css/hd_wrap.css--><?php $__tmp=array('modules/board/skins/coupon/css/hd_wrap.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php if($__Context->mid == 'Inquiry'){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','hd_wrap2.html') ?>
<!--#Meta:modules/board/skins/coupon/css/hd_wrap2.css--><?php $__tmp=array('modules/board/skins/coupon/css/hd_wrap2.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php echo $__Context->module_info->header_text ?>
<!--#Meta:modules/board/skins/coupon/js/jquery.cookie.js--><?php $__tmp=array('modules/board/skins/coupon/js/jquery.cookie.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="board">
    <div class="boardHeader">
		<?php if($__Context->module_info->title){ ?><h1><?php echo $__Context->module_info->title ?></h1><?php } ?>
		<?php if($__Context->module_info->comment){ ?><p class="boardDescription"><?php echo $__Context->module_info->comment ?></p><?php } ?>
    </div>