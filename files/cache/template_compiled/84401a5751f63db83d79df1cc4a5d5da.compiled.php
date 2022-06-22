<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/07-03-partner/content.css--><?php $__tmp=array('modules/page/skins/07-03-partner/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<div class="sub_wrap">
	<div class="sub_title_wrap">
		<h1>헤드스파 K 전문점</h1>
	</div>
	<div class="sub_tab_wrap">
		<div class="sub_tab on"><a>헤드스파 K 전문점 안내</p></div>
		<div class="sub_tab"><a href="/index.php?mid=headspa_markets">국내</a></div>
		<div class="sub_tab"><a href="/index.php?mid=market_foreign">해외</a></div>
	</div>
	<select class="sub_sel" onchange="location.href=this.value">
		<option selected="selected" value="">헤드스파 K 전문점 안내</option>
		<option value="/index.php?mid=headspa_markets">국내</option>
		<option value="/index.php?mid=market_foreign">해외</option>
	</select>
	<div class="sub_tabcon_wrap">
		<div class="sub_tabcon">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/07-03-partner','tab_01.html') ?>
		</div>
	</div>
</div>
<?php }else if($__Context->lang_type == 'en'){ ?>
<div class="sub_wrap">
	<div class="sub_title_wrap">
		<h1>Headspa K partners</h1>
	</div>
	<div class="sub_tab_wrap">
		<div class="sub_tab on"><a>Partner Information</p></div>
		<div class="sub_tab"><a href="/index.php?mid=headspa_markets">Domestic markets</a></div>
		<div class="sub_tab"><a href="/index.php?mid=market_foreign">Overseas markets</a></div>
	</div>
	<select class="sub_sel" onchange="location.href=this.value">
		<option selected="selected" value="">Partner Information</option>
		<option value="/index.php?mid=headspa_markets">Domestic markets</option>
		<option value="/index.php?mid=market_foreign">Overseas markets</option>
	</select>
	<div class="sub_tabcon_wrap">
		<div class="sub_tabcon">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/07-03-partner','tab_01.html') ?>
		</div>
	</div>
</div>
<?php } ?>