<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K','metaHead.html') ?>
<div id="container">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/include','header.html') ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/quickmenu','quickmenu.html') ?>
	
	<?php if($__Context->layout_info->layout_type!='main'){ ?><block class="container" id="sub_container">
		<!--#Meta:layouts/Headspa_K/css/sub.css--><?php $__tmp=array('layouts/Headspa_K/css/sub.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<!--#Meta:layouts/Headspa_K/js/sub.js--><?php $__tmp=array('layouts/Headspa_K/js/sub.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<section class="subtop_wrap col-12">
			<div class="subtop_txt_wrap">
				<?php if($__Context->layout_info->subtop_txt_use==='Y'){ ?><div class="subtop_txt">
					<?php if($__Context->layout_info->subtop_title){ ?><h1 class="subtop_title"><?php echo $__Context->layout_info->subtop_title ?></h1><?php } ?>
					<?php if($__Context->layout_info->subtop_subtitle){ ?><h3 class="subtop_subtitle"><?php echo $__Context->layout_info->subtop_subtitle ?></h3><?php } ?>
				</div><?php } ?>
			</div>
			<div class="location_collapse">
				<div class="loc_col_wrap">
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && !$__Context->val1['list']){ ?>
						<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){ ?><div class="loc_btn <?php if($__Context->val1['selected']){ ?>on<?php } ?>"><a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['text'] ?></a></div><?php } ?>
					<?php }} ?>
					<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?>
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><div class="loc_btn <?php if($__Context->val2['selected']){ ?>on<?php } ?>"><a href="<?php echo $__Context->val2['href'] ?>"><?php echo $__Context->val2['link'] ?></a></div><?php } ?>
						<?php }} ?>
					<?php }} ?>
				</div>
			</div>
		</section>
		<section class="content_wrap flex_wrap pdh-20" id="content">
			<?php if($__Context->layout_info->subpage_type==='left'){ ?><div class="sub_aside left_aside col-20"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/include','aside.html') ?></div><?php } ?>
			<?php if($__Context->layout_info->subpage_type==='full'){ ?><div class="sub_content content_side col-12"><?php echo $__Context->content ?></div><?php } ?>
			<?php if($__Context->layout_info->subpage_type==='left'){ ?><div class="sub_content content_right col-80"><?php echo $__Context->content ?></div><?php } ?>
			<?php if($__Context->layout_info->subpage_type==='right'){ ?><div class="sub_content content_left col-80"><?php echo $__Context->content ?></div><?php } ?>
			<?php if($__Context->layout_info->subpage_type==='right'){ ?><div class="sub_aside right_aside col-20"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/include','aside.html') ?></div><?php } ?>
		</section>
	<?php } ?>
	<?php if($__Context->layout_info->layout_type=='main'){ ?><block class="container" id="main_container">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/include','main.html') ?>
		<!--#Meta:layouts/Headspa_K/css/main.css--><?php $__tmp=array('layouts/Headspa_K/css/main.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<?php  ?>
		<!--#Meta:layouts/Headspa_K/js/main.js--><?php $__tmp=array('layouts/Headspa_K/js/main.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<?php } ?>
</div>
<!--footer-->
<div id="footer">
	<div class="footer_info_wrap">
		<div class="footer_info">
			<?php if($__Context->lang_type == 'ko'){ ?>
			<div class="footer_info_pt pt_lf">
				<div class="footer_info_box">
					<div class="footer_pt_info pt_logo"><img src="/layouts/Headspa_K/img/footer_logo.png"></div>
					<div class="footer_contact">
						<p class="pdh-05">
							(주)헤드스파K / 대표이사 : 박안나 / 대전광역시 유성구 유성대로 1646 한남대학교 대덕밸리캠퍼스 이노비즈파크 307호<br />
							사업자등록번호 : 793-19-00803 / TEL : 042-826-3773
						</p>
					</div>
					<h4 class="footer_title">Copyright © by HEAD SPA K Co., Ltd. All Rights Reserved.</h4>
				</div>
			</div>
			<div class="footer_info_pt pt_rt">
				<div class="footer_info_box">
					<h5>CS CENTER</h5>
					<h3>042-826-3773</h3>
					<p class="time"><span>AM 09:00 ~ PM 06:00</span> &nbsp; &nbsp;<span>MON-FRI</span></p>
					<p class="time"><span>WEEKEND/HOLIDAY</span> &nbsp; &nbsp;<span>OFF</span></p>
				</div>
			</div>
			<?php }else if($__Context->lang_type == 'en'){ ?>
			<div class="footer_info_pt pt_lf">
				<div class="footer_info_box">
					<div class="footer_pt_info pt_logo"><img src="/layouts/Headspa_K/img/footer_logo.png"></div>
					<div class="footer_contact">
						<p class="pdh-05">
							Headspa K Co.,Ltd. / CEO : Anna Park / Rm.307, Innobiz park, 1646, Yuseong-daero, Yuseong-gu, Daejeon, Republic of Korea<br />
							Business No. : 793-19-00803 / TEL : +82-42-826-3773
						</p>
					</div>
					<h4 class="footer_title">Copyright © by HEAD SPA K Co., Ltd. All Rights Reserved.</h4>
				</div>
			</div>
			<div class="footer_info_pt pt_rt">
				<div class="footer_info_box">
					<h5>CS CENTER</h5>
					<h3>+82-42-826-3773</h3>
					<p class="time"><span>AM 09:00 ~ PM 06:00</span> &nbsp; &nbsp;<span>MON-FRI</span></p>
					<p class="time"><span>WEEKEND/HOLIDAY</span> &nbsp; &nbsp;<span>OFF</span></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
