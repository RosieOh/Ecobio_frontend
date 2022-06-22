<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','_header.html') ?>
<div class="message_box" style="border-top:2px solid #333;">
	<h3><?php echo $__Context->lang->confirm_delete ?></h3>
	<form action="./" method="get" onsubmit="return procFilter(this, delete_document)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<div style="text-align: center; padding: 10px 0;">
			<input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" class="form-button bold form-button-default form-button-blue"/>
			<button type="button" onclick="history.back()" class="form-button bold form-button-default form-button-grey"><?php echo $__Context->lang->cmd_cancel ?></button>
		</div>
	</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','_footer.html') ?>
