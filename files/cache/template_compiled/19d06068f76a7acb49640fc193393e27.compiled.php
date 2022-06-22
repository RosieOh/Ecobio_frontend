<?php if(!defined("__XE__"))exit;
if($__Context->oDocument->isGranted()){ ?><div class="boardRead">
	<!-- <?php if($__Context->module_info->title_message){ ?><h3><?php echo $__Context->oDocument->getTitle() ?></h3><?php } ?>
	<span style="position: absolute; right: 0; top:10px;"><?php echo $__Context->oDocument->getRegdate('Y.m.d') ?> <?php echo $__Context->oDocument->getRegdate('H:i:s') ?></span> -->
    <table border="1" cellspacing="0" summary="Extra Form" class="extraVarsList" style="border-top:2px solid #333;">
    <?php if($__Context->module_info->use_category=='Y'){ ?><tr>
        <th><?php echo $__Context->lang->category ?></th>
        <td><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></td>
    </tr><?php } ?>
    <?php if(!$__Context->module_info->title_message){ ?><tr>
        <?php if(!$__Context->module_info->title_name){ ?><th><?php echo $__Context->lang->title ?></th><?php } ?>
        <?php if($__Context->module_info->title_name){ ?><th><?php echo $__Context->module_info->title_name ?></th><?php } ?>
        <td><?php echo $__Context->oDocument->getTitle() ?></td>
    </tr><?php } ?>
    <?php if(!$__Context->module_info->writer_message){ ?><tr>
        <?php if(!$__Context->module_info->writer_name){ ?><th><?php echo $__Context->lang->writer ?></th><?php } ?>
        <?php if($__Context->module_info->writer_name){ ?><th><?php echo $__Context->module_info->writer_name ?></th><?php } ?>
        <td><?php echo $__Context->oDocument->getNickName() ?></td>
    </tr><?php } ?>
    <!-- <?php if(!$__Context->module_info->email_message){ ?><tr>
        <?php if(!$__Context->module_info->email_name){ ?><th><?php echo $__Context->lang->email_address ?></th><?php } ?>
        <?php if($__Context->module_info->email_name){ ?><th><?php echo $__Context->module_info->email_name ?></th><?php } ?>
        <td><a href="mailto:<?php echo $__Context->oDocument->get('email_address') ?>"><?php echo $__Context->oDocument->get('email_address') ?></a></td>
    </tr><?php } ?> -->
    <?php if($__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted()) ){ ?>
	    <?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key => $__Context->val){ ?>
	    <?php if($__Context->val->eid!='coupon' && $__Context->val->eid!='agree'){ ?><tr class="<?php echo $__Context->val->eid ?>">
	        <th><?php echo $__Context->val->name ?></th>
	        <td><?php echo $__Context->val->getValueHTML() ?>&nbsp;</td>
	    </tr><?php } ?>
	    <?php } ?>
    <?php } ?>
    <?php if($__Context->module_info->content_use=='y'){ ?><tr>
        <th><?php echo $__Context->lang->content ?></th>
        <td><?php echo $__Context->oDocument->getContent(false) ?></td>
    </tr><?php } ?>
    <?php if($__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted()) ){ ?>
        <?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key => $__Context->val){ ?>
        <?php if($__Context->val->eid=='coupon'){ ?><tr class="<?php echo $__Context->val->eid ?>">
            <th><?php echo $__Context->val->name ?></th>
            <td>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '1'){ ?><img src="<?php echo $__Context->module_info->cou_img01 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '2'){ ?><img src="<?php echo $__Context->module_info->cou_img02 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '3'){ ?><img src="<?php echo $__Context->module_info->cou_img03 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '4'){ ?><img src="<?php echo $__Context->module_info->cou_img04 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '5'){ ?><img src="<?php echo $__Context->module_info->cou_img05 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '6'){ ?><img src="<?php echo $__Context->module_info->cou_img06 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '7'){ ?><img src="<?php echo $__Context->module_info->cou_img07 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '8'){ ?><img src="<?php echo $__Context->module_info->cou_img08 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '9'){ ?><img src="<?php echo $__Context->module_info->cou_img09 ?>"><?php } ?>
                <?php if($__Context->oDocument->getExtraEidValueHTML('coupon') == '10'){ ?><img src="<?php echo $__Context->module_info->cou_img10 ?>"><?php } ?>
            </td>
        </tr><?php } ?>
        <?php } ?>
    <?php } ?>
    <?php if($__Context->oDocument->hasUploadedFiles()){ ?>
    <tr>
        <th><?php echo $__Context->lang->uploaded_file ?> (<?php echo $__Context->oDocument->get('uploaded_count') ?>)</th>
        <td>
            <?php  $__Context->uploaded_list = $__Context->oDocument->getUploadedFiles()  ?>
            <?php if($__Context->uploaded_list&&count($__Context->uploaded_list))foreach($__Context->uploaded_list as $__Context->key => $__Context->file){ ?>
            <a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" style="text-decoration: none;"><?php echo $__Context->file->source_filename ?></a>
            <span class="file_info">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span><br/>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
    </table>
    <?php if($__Context->grant->manager){ ?><div class="btnArea" style="text-align: right;">
        <?php if($__Context->oDocument->isEditable()){ ?>
	<a href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>" class="form-button form-button-default form-button-grey"><?php echo $__Context->lang->cmd_modify ?></a>
        <a href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>" class="form-button form-button-default form-button-blue"><?php echo $__Context->lang->cmd_delete ?></a>
        <?php } ?>
        <span class="etc">
            <a href="<?php echo getUrl('document_srl','') ?>" class="form-button form-button-default form-button-grey"><?php echo $__Context->lang->cmd_list ?></a>
        </span>
    </div><?php } ?>
</div><?php } ?>
<?php if(!$__Context->grant->manager){ ?><blcok>
	<?php if($__Context->module_info->sucess_message_alt == ''){ ?><blcok>
		<?php 
			if(!$__Context->module_info->sucess_message) $__Context->module_info->sucess_message = '" 발송되었습니다. 감사합니다. "'
		 ?>
		<h4 class="message_box" ><?php echo $__Context->module_info->sucess_message ?></h4>
	</blcok><?php } ?>
	<?php if($__Context->module_info->view_btn == ''){ ?><p style="text-align: center;">
		<?php  if(!$__Context->module_info->home_btn_name) $__Context->module_info->home_btn_name = '홈 바로가기'  ?>
	    <a href="<?php echo getUrl('document_srl','') ?>" class="form-button form-button-default form-button-blue" ><?php echo $__Context->lang->cmd_back ?></a>
	    <a href="<?php echo getUrl() ?>" class="form-button form-button-default form-button-grey"><?php echo $__Context->module_info->home_btn_name ?></a>
	</p><?php } ?>
</blcok><?php } ?>