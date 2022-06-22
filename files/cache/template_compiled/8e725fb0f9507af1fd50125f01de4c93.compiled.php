<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/03-04-instrument/content.css--><?php $__tmp=array('modules/page/skins/03-04-instrument/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/skins/03-04-instrument/content.js--><?php $__tmp=array('modules/page/skins/03-04-instrument/content.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub_title_wrap">
				<h2>헤드스파 K 기기</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on">5종 복합 두피 관리기기</div>
				<div class="sub_tab">미스트기</div>
				<!--<div class="sub_tab">모발 가습기</div>-->
				<div class="sub_tab">두피 진단기 </div>
				<div class="sub_tab">Glossystemeter<br /> GL 200</div>
				<div class="sub_tab">유분측정기</div>
			</div>
			<select class="sub_sel">
				<option value="0">5종 복합 두피 관리기기</option>
				<option value="1">미스트기</option>
				<!--<option value="2">모발 가습기</option>-->
				<option value="3">두피 진단기 </option>
				<option value="4">유분측정기</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_01.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_02.html') ?></div>
			<!--<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_03.html') ?></div>-->
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_04.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_05.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_06.html') ?></div>
		</div>
	</section>
</div>