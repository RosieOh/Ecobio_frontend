<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/03-04-instrument/content.css--><?php $__tmp=array('modules/page/skins/03-04-instrument/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/skins/03-04-instrument/content.js--><?php $__tmp=array('modules/page/skins/03-04-instrument/content.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub_title_wrap">
				<h2>헤드스파 K 기기</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on" onclick="tabClick(1);">5종 복합 두피 관리기기</div>
				<div class="sub_tab" onclick="tabClick(2);">헤드스파 스티머</div>
				<!--<div class="sub_tab">갈바닉이온 두피브러쉬</div>-->
				<div class="sub_tab" onclick="tabClick(4);">두피 진단기 </div>
<!--				<div class="sub_tab">Glossystemeter<br /> GL 200</div>&ndash;&gt;-->
<!--				<div class="sub_tab">유분측정기</div> &ndash;&gt;-->
<!--				<div class="sub_tab">갈바닉이온 두피브러쉬</div> &ndash;&gt;-->
			</div>
			<select class="sub_sel">
				<option value="0">5종 복합 두피 관리기기</option>
				<option value="1">헤드스파 스티머</option>
<!--				<option value="2">갈바닉이온 두피브러쉬</option>-->
				<option value="2">두피 진단기 </option>
<!--				<option value="3">Glossystemeter GL 200</option> -->
<!--				<option value="4">유분측정기</option> -->
<!--				<option value="5">갈바닉이온 두피브러쉬</option> -->
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on" id="sub_tabcon_01"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_01.html') ?></div>
			<div class="sub_tabcon" id="sub_tabcon_02"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_02.html') ?></div>
<!--			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_03.html') ?></div>-->
			<div class="sub_tabcon" id="sub_tabcon_04"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_04.html') ?></div>
<!--			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_05.html') ?></div>-->
<!--			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_06.html') ?></div>-->
		</div>
	</section>
</div>
<?php }else if($__Context->lang_type == 'en'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub_title_wrap">
				<h2>HeadSpa K device</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on" onclick="tabClick(1);">5 types of complex scalp management device</div>
				<div class="sub_tab" onclick="tabClick(2);">Mister</div>
			<!--	<div class="sub_tab">Galvanic Scalp Brush</div>-->
				<div class="sub_tab" onclick="tabClick(4);">Scalp analyzer</div>
				<div class="sub_tab" onclick="tabClick(5);">Glossystemeter<br /> GL 200</div>
				<div class="sub_tab" onclick="tabClick(6);">Oil content meter</div>
			</div>
			<select class="sub_sel">
				<option value="0">5 types of complex scalp management device</option>
				<option value="1">Mister</option>
				<!--option value="2">Galvanic Scalp Brush</option-->
				<option value="2">Scalp analyzer</option>
				<option value="3">Glossystemeter GL 200</option>
				<option value="4">Oil content meter</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on" id="sub_tabcon_01"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_01.html') ?></div>
			<div class="sub_tabcon" id="sub_tabcon_02"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_02.html') ?></div>
<!--			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_03.html') ?></div>-->
			<div class="sub_tabcon" id="sub_tabcon_04"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_04.html') ?></div>
			<div class="sub_tabcon" id="sub_tabcon_05"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_05.html') ?></div>
			<div class="sub_tabcon" id="sub_tabcon_06"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/03-04-instrument','tab_06.html') ?></div>
		</div>
	</section>
</div>
<?php } ?>
