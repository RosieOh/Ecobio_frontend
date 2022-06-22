<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/03-03-02-type_program/content.css--><?php $__tmp=array('modules/page/skins/03-03-02-type_program/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/skins/03-03-02-type_program/content.js--><?php $__tmp=array('modules/page/skins/03-03-02-type_program/content.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="sub_wrap">
	<div class="sub_sec" id="sub00">
		<div class="sub_con">
			<div class="sub_tab_wrap">
				<div><a href="/index.php?mid=scaling_3sg">두피 스케일링 테라피 3S</a></div>
				<div><a href="/index.php?mid=sparkling">탄산 테라피 4C</a></div>
				<div><a href="/index.php?mid=detox_care">두피 데톡스 케어 5D</a></div>
				<div class="on"><a>두피 유형별 클리닉 7M</a></div>
				<div><a href="/index.php?mid=brain_solution">브레인 솔루션 테라피10B</a></div>
				<div><a href="/index.php?mid=depecia">디페시아 케어 12P</a></div>
			</div>
			<select class="sub_sel" onchange="window.location.href=this.value">
				<option value="/index.php?mid=scaling_3sg">두피 스케일링 테라피 3S</option>
				<option value="/index.php?mid=sparkling">탄산 테라피 4C</option>
				<option value="/index.php?mid=detox_care">두피 데톡스 케어 5D</option>
				<option value="" selected="selected">두피 유형별 클리닉 7M</option>
				<option value="/index.php?mid=brain_solution">브레인 솔루션 테라피10B</option>
				<option value="/index.php?mid=depecia">디페시아 케어 12P</option>
			</select>
		</div>
	</div>
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub01_title_wrap">
				<h2>두피 유형별 클리닉 7M</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on"><p>건성 - DS<br /><span>(Dry&Sensitive scalp type)</span></p></div>
				<div class="sub_tab"><p>민감성(예민성, 가려움) - DS<br /><span>(Dry&Sensitive scalp type)</span></p></div>
				<div class="sub_tab"><p>지성, 복합성, 지루성 - OC<br /><span>(Oily&Combination scalp type)</span></p></div>
				<div class="sub_tab"><p>지루성·건선, 비듬(과다각질)</p></div>
			</div>
			<select class="sub_sel">
				<option value="0">건성 - DS(Dry&Sensitive scalp type)</option>
				<option value="1">민감성(예민성, 가려움) - DS(Dry&Sensitive scalp type)</option>
				<option value="2">지성, 복합성, 지루성 - OC(Oily&Combination scalp type)</option>
				<option value="3">지루성·건선, 비듬(과다각질)</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-03-02-type_program','tab_01.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-03-02-type_program','tab_02.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-03-02-type_program','tab_03.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-03-02-type_program','tab_04.html') ?></div>
		</div>
	</section>
</div>