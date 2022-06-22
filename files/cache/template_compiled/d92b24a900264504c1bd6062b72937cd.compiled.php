<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','_header.html') ?>
<?php if($__Context->oDocument->isExists()){ ?>
<div class="viewDocument">
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','view_document.html') ?>
</div>
<?php }else{ ?>
<?php if(!$__Context->grant->manager){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','write_form.html') ?>
<?php }else{ ?>
<!-- 카테고리 출력 -->
<?php if($__Context->module_info->use_category=='Y'){ ?><div class="categoryList">
    <span<?php if(!$__Context->category){ ?> class="categoryThisItem"<?php };
if($__Context->category){ ?> class="categoryItemOver"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->module_info->mid) ?>">전체</a></span>
    <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
    <span<?php if($__Context->category==$__Context->val->category_srl){ ?> class="categoryThisItem"<?php };
if($__Context->category!=$__Context->val->category_srl){ ?> class="categoryItemOver"<?php } ?>><a href="<?php echo getUrl('','mid',$__Context->module_info->mid, 'category',$__Context->val->category_srl) ?>"><?php echo $__Context->val->title ?> <?php if($__Context->val->document_count){ ?>[<?php echo $__Context->val->document_count ?>]<?php } ?></a> </span>
    <?php } ?>                           
</div><?php } ?>	
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','_style.list.html') ?>
<div class="boardNavigation">
    <div class="btnArea" style="text-align: right;">
        <a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="form-button form-button-default form-button-blue m_btn"><?php echo $__Context->lang->cmd_write ?></a>
        <a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" class="form-button bold form-button-default form-button-grey"><?php echo $__Context->lang->cmd_setup ?></a>
        <a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href, 'manageDocument'); return false;" class="form-button bold form-button-default form-button-grey"><?php echo $__Context->lang->cmd_manage_document ?></a>
        <span class="etc">
            <a href="<?php echo getUrl('','mid',$__Context->mid,'page',$__Context->page,'document_srl','','listStyle',$__Context->listStyle) ?>" class="form-button bold form-button-default form-button-grey"><?php echo $__Context->lang->cmd_list ?></a>
        </span>
    </div>
    <div class="pagination">
        <a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
        <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
        <a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a>
        <?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
    </div>
</div>
<?php } ?>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/coupon','_footer.html') ?>