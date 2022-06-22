<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/pop_up/tpl/filter','delete_pop_conn.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pop_up/tpl','header.html') ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_pop_conn)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
<input type="hidden" name="popup_conn_srl" value="<?php echo $__Context->popup_module->popup_conn_srl ?>" />
    <h3 class="xeAdmin"><?php echo $__Context->lang->delete ?></h3>
        <table cellspacing="0" class="rowTable">
    <input type="hidden" name="mid" value="<?php echo $__Context->module_info->mid ?>" />
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->popup_name ?></div></th>
        <td colspan="3"><?php echo $__Context->popup_module->popup_name ?></td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->target_module ?></div></th>
        <td colspan="3"><?php echo $__Context->popup_module->target_mid ?> (<?php echo $__Context->popup_module->target_type ?>)</td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->popup_type ?></div></th>
        <td colspan="3"><?php echo $__Context->popup_module->popup_type ?></td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->url ?></div></th>
        <td colspan="3" style="cursor:hand;"  onclick="openpop('<?php echo $__Context->popup_module->popup_url ?>')"><?php echo $__Context->popup_module->popup_url ?> </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->start_date ?></div></th>
        <td colspan="3"><?php echo zdate($__Context->popup_module->startdate,"Y-m-d") ?></td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->end_date ?></div></th>
        <td colspan="3"><?php echo zdate($__Context->popup_module->enddate,"Y-m-d") ?></td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->regdate ?></div></th>
        <td colspan="3"><?php echo zdate($__Context->popup_module->regdate,"Y-m-d") ?></td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->disable_period ?></div></th>
        <td colspan="3"><?php echo $__Context->popup_module->exp_days ?></td>
    </tr>
    <tr>
        <th></th>
        <th colspan="3" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span>
            <span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="history.back(); return false;" /></span>
        </th>
    </tr>
    </table>
</form>
