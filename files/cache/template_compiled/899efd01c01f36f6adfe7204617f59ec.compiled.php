<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/pop_up/tpl','header.html') ?>
<!-- 정보 -->
<div class="summary">
    <strong>Total</strong> <em><?php echo number_format($__Context->total_count) ?></em>, Page <strong><?php echo number_format($__Context->page) ?></strong>/<?php echo number_format($__Context->total_page) ?>
</div>
<!-- 목록 -->
<table cellspacing="0" class="rowTable">
<thead>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->target_type ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->target_name ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->popup_type ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->popup_name ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->start_date ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->end_date ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
        <th scope="col" colspan="2"><div>&nbsp;</div></th>
    </tr>
</thead>
<tbody>
    <?php if($__Context->popup_list&&count($__Context->popup_list))foreach($__Context->popup_list as $__Context->no => $__Context->val){ ?>
    <tr>
        <td class="center number"><?php echo $__Context->no ?></td>
        <td class="center"><?php echo $__Context->val->target_type ?></td>
        <td><a href="<?php echo getUrl('mid', $__Context->val->target_mid,'act','') ?>" title="Preview" target="_blank"><?php echo $__Context->val->target_mid ?></a></td>
        <td><?php echo $__Context->val->popup_type ?></td>
        <td><?php echo $__Context->val->popup_name ?></td>
        <td><?php echo zdate($__Context->val->startdate,"Y-m-d") ?></td>
        <td><?php echo zdate($__Context->val->enddate,"Y-m-d") ?></td>
        <td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
        <td><a href="<?php echo getUrl('act','dispPop_upAdminInsertPopupConn','popup_conn_srl',$__Context->val->popup_conn_srl) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_setup ?></span></a></td>
        <td><a href="<?php echo getUrl('act','dispPop_upAdminDeletePopupConn','popup_conn_srl', $__Context->val->popup_conn_srl) ?>" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<div class="clear">
    <div class="fr">
        <a href="<?php echo getUrl('act','dispPop_upAdminInsertPopupConn','popup_conn_srl','') ?>" class="button black strong"><span><?php echo $__Context->lang->cmd_make ?></span></a>
    </div>
</div>
<!-- 페이지 네비게이션 -->
<div class="pagination a1">
    <a href="<?php echo getUrl('page','','popup_conn_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'popup_conn_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'popup_conn_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
