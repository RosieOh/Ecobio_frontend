<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/tpl','header.html') ?>
<!--TODO-->
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == ''){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<table id="boardList" class="x_table x_table-striped x_table-hover">
	<caption>
		<strong>Total: <?php echo escape(number_format($__Context->total_count), false) ?>, Page: <?php echo escape(number_format($__Context->page), false) ?>/<?php echo escape(number_format($__Context->total_page), false) ?></strong>
	</caption>
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->no ?></th>
			<th scope="col"><?php echo $__Context->lang->module_category ?></th>
			<th scope="col"><?php echo $__Context->lang->mid ?></th>
			<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
			<th scope="col"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_edit ?></th>
			<th scope="col"><input type="checkbox" data-name="cart" title="Check All" /></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->board_list&&count($__Context->board_list))foreach($__Context->board_list as $__Context->no=>$__Context->val){ ?><tr>
			<td><?php echo escape($__Context->no, false) ?></td>
			<td>
				<?php if(!$__Context->val->module_category_srl){ ?>
					<?php if($__Context->val->site_srl){;
echo $__Context->lang->virtual_site;
} ?>
					<?php if(!$__Context->val->site_srl){;
echo $__Context->lang->not_exists;
} ?>
				<?php } ?>
				<?php if($__Context->val->module_category_srl){;
echo escape($__Context->module_category[$__Context->val->module_category_srl]->title, false);
} ?>
			</td>
			<td><?php echo escape($__Context->val->mid, false) ?></td>
			<td><a href="<?php echo escape(getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid), false) ?>"><?php echo escape($__Context->val->browser_title, false) ?></a></td>
			<td><?php echo escape(zdate($__Context->val->regdate,"Y-m-d"), false) ?></td>
			<td>
				<a href="<?php echo escape(getUrl('act','dispBoardAdminBoardInfo','module_srl',$__Context->val->module_srl), false) ?>" class="x_icon-cog" title="<?php echo $__Context->lang->cmd_setup ?>"><?php echo $__Context->lang->cmd_setup ?></a>
				<a href="<?php echo escape(getUrl('','module','module','act','dispModuleAdminCopyModule','module_srl',$__Context->val->module_srl), false) ?>" class="x_icon-plus" onclick="popopen(this.href);return false;" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></a>
				<a href="<?php echo escape(getUrl('act','dispBoardAdminDeleteBoard','module_srl', $__Context->val->module_srl), false) ?>" class="x_icon-remove" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></a>
			</td>
			<td><input type="checkbox" name="cart" value="<?php echo escape($__Context->val->module_srl, false) ?>" class="selectedModule" data-mid="<?php echo escape($__Context->val->mid, false) ?>" data-browser_title="<?php echo escape($__Context->val->browser_title, false) ?>" /></td>
		</tr><?php } ?>
		<?php if(!$__Context->board_list){ ?><tr>
			<td><?php echo $__Context->lang->no_board_instance ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left"  style="margin-top:0"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>">
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', ''), false) ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
			<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo escape(getUrl('page', $__Context->page_no), false) ?>"><?php echo escape($__Context->page_no, false) ?></a></li>
			<?php } ?>
			<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', $__Context->page_navigation->last_page), false) ?>" title="<?php echo escape($__Context->page_navigation->last_page, false) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form><?php } ?>
	<span class="x_pull-right x_btn-group">
		<!--<a class="x_btn x_btn-inverse" href="<?php echo escape(getUrl('act','dispBoardAdminInsertBoard','module_srl',''), false) ?>"><?php echo $__Context->lang->cmd_create_board ?></a>-->
		<a class="x_btn modalAnchor _manage_selected" href="#manageSelectedModule"><?php echo $__Context->lang->cmd_manage_selected_board ?></a>
	</span>
</div>
<form action="" class="search x_input-append center" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>">
	<?php if(count($__Context->module_category)){ ?><select name="module_category_srl" title="<?php echo $__Context->lang->module_category ?>" style="margin-right:4px">
		<option value=""<?php if(!$__Context->module_category_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->all ?></option>
		<option value="0"<?php if($__Context->module_category_srl==='0'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_exists ?></option>
		<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>" <?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
	</select><?php } ?>
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<option value="mid"<?php if($__Context->search_target=='mid'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->mid ?></option>
		<option value="browser_title"<?php if($__Context->search_target=='browser_title'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->browser_title ?></option>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo escape(getUrl('', 'module', $__Context->module, 'act', $__Context->act), false) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<?php echo $__Context->selected_manage_content ?>
<script>
jQuery(function($){
	// Modal anchor activation
	var $docTable = $('#boardList');
	$docTable.find(':checkbox').change(function(){
		var $modalAnchor = $('a.modalAnchor._manage_selected');
		if($docTable.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#manageSelectedModule').removeClass('x_disabled');
		}
	}).change();
	// Button action
	$('a.modalAnchor._manage_selected').click(function(){
		if($docTable.find('tbody :checked').length == 0){
			$('body').css('overflow','auto');
			alert('<?php echo $__Context->lang->choose_board_instance ?>');
			return false;
		}
	});
});
</script>
