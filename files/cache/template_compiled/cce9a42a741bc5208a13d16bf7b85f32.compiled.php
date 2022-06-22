<?php if(!defined("__XE__"))exit;
if($__Context->module_info->colorset == "black"){ ?>
<!--#Meta:modules/board/skins/coupon/css/m_board_black.css--><?php $__tmp=array('modules/board/skins/coupon/css/m_board_black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
<!--#Meta:modules/board/skins/coupon/css/m_board.css--><?php $__tmp=array('modules/board/skins/coupon/css/m_board.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/skins/coupon','insert.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="boardWrite" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <?php if($__Context->module_info->content_use == 'y'){ ?>
        <?php if(!$__Context->oDocument->getContentText() && $__Context->module_info->content_default){ ?>
        <input type="hidden" name="content" value="<?php echo htmlspecialchars($__Context->module_info->content_default) ?>" />
        <?php }else{ ?>
        <input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
        <?php } ?>
    <?php } ?>
    <?php if($__Context->module_info->content_use == 'n'){ ?><input type="hidden" name="content" value="본문 사용안함" /><?php } ?>
    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="password" value="<?php echo date('hndisy') ?>"/>
    <input type="hidden" name="status" value="SECRET">
    <table cellspacing="0" summary="Extra Form" class="extraVarsList" style="border-top:2px solid #333;">
        <?php if(!$__Context->is_logged && $__Context->module_info->info_use == ''){ ?>
            
            <?php if($__Context->module_info->info_open == 'n'){ ?><!--#Meta:modules/board/skins/coupon/down.js--><?php $__tmp=array('modules/board/skins/coupon/down.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
            <?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){;
if($__Context->val->eid=='agree'){ ?><tr class="agree">
                <?php 
                if(!$__Context->module_info->info_rows) $__Context->module_info->info_rows = 3;
                 ?>
                <th scope="col" colspan="2" class="info_btn">
                    <?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?>
                    <?php echo $__Context->val->name ?>
                    <?php if($__Context->module_info->info_open == 'n'){ ?><span class="form-button form-button-default form-button-grey no_btn" style="position:absolute; top:5px; right:10px;">약관보기</span><?php } ?>
                </th>
                <td class="info_box" colspan="2">
                    <textarea rows="<?php echo $__Context->module_info->info_rows ?>" name="agree_info" class="info_p"<?php if($__Context->module_info->info_open == 'n'){ ?> style="display: none;"<?php } ?> readonly><?php echo $__Context->module_info->info_p ?></textarea>
                    <p><?php echo $__Context->val->getFormHTML() ?></p>
                </td>
            </tr><?php }} ?>
        <?php } ?>
        <?php if($__Context->module_info->use_category=='Y'){ ?><tr>
            <th scope="row"><?php echo $__Context->lang->category ?></th>
            <td>
                <select name="category_srl" class="category">
                    <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
                    <option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
                        <?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?>
                </option>
                <?php } ?>
            </select>
        </td>
    </tr><?php } ?>       
    
    <?php if(!$__Context->module_info->title_message){ ?><tr class="title">
        <?php if(!$__Context->module_info->title_name){ ?><th scope="row"><?php echo $__Context->lang->title ?></th><?php } ?>
        <?php if($__Context->module_info->title_name){ ?><th scope="row"><?php echo $__Context->module_info->title_name ?></th><?php } ?>
        <td>
            <?php if($__Context->oDocument->getTitleText()){ ?>
            <input type="text" name="title" id="postTitle" class="iText" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" />
            <?php }else{ ?>
            <input type="text" name="title" id="postTitle" class="iText" value="" title="<?php echo $__Context->lang->title ?>" onfocus="if (this.value == this.title) this.value = '';" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" />
            <?php } ?>
        </td>
    </tr><?php } ?>
    <?php if($__Context->module_info->title_message){ ?>
        <?php if($__Context->oDocument->getTitleText()){ ?>
        <input type="hidden" name="title" id="postTitle" class="iText" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" />
        <?php }else{ ?>
        <input type="hidden" name="title" id="postTitle" class="iText" value="<?php echo $__Context->module_info->title_message ?>(<?php echo date("Ymd-his") ?>)" title="<?php echo $__Context->lang->title ?>" onfocus="if(this.value==this.title) this.value='';" />
               <?php } ?>
    <?php } ?>
    <?php if(!$__Context->is_logged){ ?>
          
        <?php if(!$__Context->module_info->writer_message || !$__Context->module_info->email_message){ ?><tr class="writer">
            <?php if(!$__Context->module_info->writer_name){ ?><th scope="row"><?php echo $__Context->lang->writer ?></th><?php } ?>
            <?php if($__Context->module_info->writer_name){ ?><th scope="row"><?php echo $__Context->module_info->writer_name ?></th><?php } ?>
            <td><input type="text" name="nick_name" class="iText userName" value="" title="<?php echo $__Context->lang->writer ?>" onfocus="if (this.value == this.title) this.value = ''; return false;" /></td>
        </tr><?php } ?>
        <?php if($__Context->module_info->writer_message){ ?><input type="hidden" name="nick_name" value="<?php echo $__Context->module_info->writer_message ?>"/><?php } ?>
        <?php if($__Context->module_info->email_message){ ?><input type="hidden" name="email_address" value="<?php echo $__Context->module_info->email_message ?>"/><?php } ?>
        
        <?php if(!$__Context->module_info->email_message){ ?><tr class="email">
            <?php if(!$__Context->module_info->email_name){ ?><th scope="row"><?php echo $__Context->lang->email_address ?></th><?php } ?>
            <?php if($__Context->module_info->email_name){ ?><th scope="row"><?php echo $__Context->module_info->email_name ?></th><?php } ?>
            <td><input type="text" name="email_address" class="iText emailAddress" value="" title="<?php echo $__Context->lang->email_address ?>"  onfocus="if (this.value == this.title) this.value = '';return false;" /></td>
        </tr><?php } ?>
    <?php } ?>
    
    <?php if(count($__Context->extra_keys)){ ?>
    <?php 
    $__Context->oDocumentController = &getController('document');
    $__Context->oDocumentController->addXmlJsFilter($__Context->module_info->module_srl);
     ?>
    <?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key=>$__Context->val){;
if($__Context->val->eid!='agree'){ ?><tr class="exvar <?php echo $__Context->val->eid ?>">
        <th scope="row"><?php if($__Context->val->is_required=='Y'){ ?><em>*</em><?php } ?><p><?php echo $__Context->val->name ?></p></th>
        <td>
            <?php echo $__Context->val->getFormHTML() ?>
        </td>
    </tr><?php }} ?>
    <?php } ?>
    
    <?php 
        if(!$__Context->module_info->content_use) $__Context->module_info->content_use = 'y';
     ?>
    <?php if($__Context->module_info->content_use == 'y'){ ?><tr class="content">
        <th scope="row"><?php echo $__Context->lang->content ?></th>
        <td><?php echo $__Context->oDocument->getEditor() ?></td>
    </tr><?php } ?>
</table>
<p style="text-align: center;">
    <?php if($__Context->lang_type == 'ko'){ ?><input type="submit" value="쿠폰 발급받기" class="form-button form-button-default form-button-blue m_btn" /><?php } ?>
    <?php if($__Context->lang_type == 'en'){ ?><input type="submit" value="Register coupon" class="form-button form-button-default form-button-blue m_btn" /><?php } ?>
    <?php if(!$__Context->grant->manager){ ?><a href="<?php echo getUrl('document_srl','') ?>" class="form-button form-button-default form-button-grey no_btn"><?php echo $__Context->lang->cmd_cancel ?></a><?php } ?>
    <?php if($__Context->grant->manager){ ?><a href="javascript:history.go(-1)" class="form-button form-button-default form-button-grey no_btn"><?php echo $__Context->lang->cmd_list ?></a><?php } ?>
</p>
</form>