<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/pop_up/tpl/filter','insert_pop_conn.xml');$__xmlFilter->compile(); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pop_up/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_pop_conn)" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
<input type="hidden" name="popup_conn_srl" value="<?php echo $__Context->popup_conn_srl ?>" />
<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row" class="w200"><div><?php echo $__Context->lang->popup_name ?></div></th>
        <td><input type="text" name="popup_name" value="<?php echo $__Context->popup_info->popup_name?$__Context->popup_info->popup_name:'' ?>" class="inputTypeText w200" /><p><?php echo $__Context->lang->popup_name_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->select_target_module ?></div></th>
        <td>
            <select name="target_srl" class="w400">
                <option value=""><?php echo $__Context->lang->select ?></option>
                <?php if($__Context->target_modules&&count($__Context->target_modules))foreach($__Context->target_modules as $__Context->key => $__Context->val){ ?>
                <option value="<?php echo $__Context->val->module_srl ?>" <?php if($__Context->popup_info->target_srl==$__Context->val->module_srl){ ?>selected="selected"<?php } ?>><?php echo "(".$__Context->val->module.") ".$__Context->key." - ".$__Context->val->browser_title ?></option>
                <?php } ?>
            </select>
            <p><?php echo $__Context->lang->select_target_module_explanation ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->open_type ?></div></th>
        <td>
            <select name="open_type" class="w200">
                <option value="inner" <?php if($__Context->popup_info->open_type=="inner"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->inner_layout ?></option>
            </select>
            <p><?php echo $__Context->lang->open_type_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->data_type ?></div></th>
        <td>
            <select name="popup_type" class="w300" onchange="togglePopupDataType()">
                <option value="content" <?php if($__Context->popup_info->popup_type=="content"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->input_content ?></option>
                <option value="url" <?php if($__Context->popup_info->popup_type=="url"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->input_url ?></option>
            </select>
            <p><?php echo $__Context->lang->data_type_explanation ?></p>
		</td>
    </tr>
    <tr alt="popup_data_type" <?php if($__Context->popup_info->popup_type!="content"){ ?>style="display:none;" <?php } ?>>
        <th scope="row"><div><?php echo $__Context->lang->input_content ?></div></th>
        <td><?php echo $__Context->oDocument->getEditor() ?>
		</td>
    </tr>
    <tr alt="popup_data_type" <?php if($__Context->popup_info->popup_type!="url"){ ?>style="display:none;" <?php } ?>>
        <th scope="row"><div><?php echo $__Context->lang->input_url ?></div></th>
        <td><input type="text" name="popup_url" value="<?php echo $__Context->popup_info->popup_url?$__Context->popup_info->popup_url:'' ?>" class="inputTypeText w400" /><p><?php echo $__Context->lang->url_explanation ?><br ></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->linkto ?></div></th>
        <td><input type="text" name="popup_linkto" value="<?php echo $__Context->popup_info->popup_linkto?$__Context->popup_info->popup_linkto:'' ?>" class="inputTypeText w400" /><p><?php echo $__Context->lang->link_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->to_new_window ?></div></th>
        <td><input type="checkbox" name="popup_linkto_newwindow" value="true" <?php if($__Context->popup_info->popup_linkto_newwindow=="true"){ ?>checked="true"<?php } ?>/><p><?php echo $__Context->lang->to_new_window_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->start_date ?></div></th>
        <td>
            <input type="hidden" name="startdate" id="date_startdate" value="<?php echo $__Context->popup_info->startdate ?>" /><input type="text" class="inputDate" value="<?php echo zdate($__Context->popup_info->startdate,'Y-m-d') ?>" readonly="readonly"/><p><?php echo $__Context->lang->start_date_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->end_date ?></div></th>
        <td>
            <input type="hidden" name="enddate" id="date_enddate" value="<?php echo $__Context->popup_info->enddate ?>" /><input type="text" class="inputDate" value="<?php echo zdate($__Context->popup_info->enddate,'Y-m-d') ?>" readonly="readonly"/><p><?php echo $__Context->lang->end_date_explanation ?> </p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->width_size ?></div></th>
        <td><input type="text" name="width" value="<?php echo $__Context->popup_info->width?$__Context->popup_info->width:'' ?>" class="inputTypeText w80" /><p><?php echo $__Context->lang->width_size_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->height_size ?></div></th>
        <td><input type="text" name="height" value="<?php echo $__Context->popup_info->height?$__Context->popup_info->height:'' ?>" class="inputTypeText w80" /><p><?php echo $__Context->lang->height_size_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->top ?></div></th>
        <td><input type="text" name="top" value="<?php echo $__Context->popup_info->top?$__Context->popup_info->top:'' ?>" class="inputTypeText w80" /><p><?php echo $__Context->lang->top_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->left ?></div></th>
        <td><input type="text" name="left" value="<?php echo $__Context->popup_info->left?$__Context->popup_info->left:'' ?>" class="inputTypeText w80" /><p><?php echo $__Context->lang->left_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->disable_period ?></div></th>
        <td><input type="text" name="exp_days" value="<?php echo $__Context->popup_info->exp_days?$__Context->popup_info->exp_days:'' ?>" class="inputTypeText w40" /><p><?php echo $__Context->lang->disable_period_explanation ?></p>
		</td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" accesskey="s" /></span>
            <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_list ?>" onclick="location.href=current_url.setQuery('popup_conn_srl','').setQuery('act','dispPop_upAdminContent').setQuery('page','<?php echo $__Context->page ?>');return false;" /></span>
        </th>
    </tr>
    </table>
</form>
<script type="text/javascript">
(function($){
    $(function(){
        var option = { gotoCurrent: false,yearRange:'-100:+10', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
    });
})(jQuery);
</script>