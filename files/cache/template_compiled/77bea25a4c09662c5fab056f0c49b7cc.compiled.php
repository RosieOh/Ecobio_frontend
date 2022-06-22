<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/document/tpl','header.html') ?>
<form action="./" method="post" class="x_form-horizontal" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="document" />
	<input type="hidden" name="act" value="procDocumentAdminInsertConfig" />
	<div class="x_control-group">
		<label class="x_control-label" for="icons"><?php echo $__Context->lang->cmd_pc_icon_setting ?></label>
		<div class="x_controls">
			<select name="icons" id="icons">
				<option value=""><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->pcIconSkinList&&count($__Context->pcIconSkinList))foreach($__Context->pcIconSkinList as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->title, false) ?>"<?php if($__Context->config->icons == $__Context->val->title){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
			</select>
			<a href="#icons_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="icons_help" class="x_help-block" hidden><?php echo $__Context->lang->about_cmd_pc_icon_setting ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="micons"><?php echo $__Context->lang->cmd_mobile_icon_setting ?></label>
		<div class="x_controls">
			<select name="micons" id="micons">
				<option value=""><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->pcIconSkinList&&count($__Context->pcIconSkinList))foreach($__Context->pcIconSkinList as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->title, false) ?>"<?php if($__Context->config->micons == $__Context->val->title){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
			</select>
			<a href="#micons_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="micons_help" class="x_help-block" hidden><?php echo $__Context->lang->about_cmd_mobile_icon_setting ?></p>
		</div>
	</div>
	<div class="btnArea">
		<input class="btn" type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" />
		<input class="btn" type="button" value="<?php echo $__Context->lang->cmd_delete_all_thumbnail ?>" onclick="doDeleteAllThumbnail()"/>
	</div>
</form>