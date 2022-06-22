<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/07-04-inquiry/content.css--><?php $__tmp=array('modules/page/skins/07-04-inquiry/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/skins/07-04-inquiry/content.js--><?php $__tmp=array('modules/page/skins/07-04-inquiry/content.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub_title_wrap">
				<h2>1:1 문의</h2>
			</div>
			<div class="sub01_bn_wrap">
				<div class="sub01_bn">
					<h3>두피·탈모·모발·헤드 마사지에 대한 전문적인 프로그램이 운영되는 브랜드 SHOP</h3>
					<p class="phone">042-826-3773</p>
					<p>평일 9:00~18:00 / 점심 12:30~13:30 / 주말,공휴일 휴무<br />파트너점 문의를 남겨주시면 순차적으로 연락을 드리고 있습니다. 감사합니다.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_con">
			<div class="sub02_wid_wrap">
				<!-- <iframe src="/mail/form.php" width="100%" height="480px"></iframe> -->
				<img class="zbxe_widget_output" widget="contactfree" skin="Inquiry_franchise" colorset="default" target_mid="inquiry_board" />
			</div>
		</div>
	</section>
</div>
<?php }else if($__Context->lang_type == 'en'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub_title_wrap">
				<h2>1:1 inquiry</h2>
			</div>
			<div class="sub01_bn_wrap">
				<div class="sub01_bn">
					<h3>Brand Shop with specialized programs for scalp, hair loss, hair, and head massage</h3>
					<p class="phone">+82-42-826-3773</p>
					<p>Weekdays 9:00~18:00 / Lunch 12:30~13:30 / Closed on weekends and holidays<br />If you leave a partnership or business inquiries, we will contact you in sequence. Thank you.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_con">
			<div class="sub02_wid_wrap">
				<!-- <iframe src="/mail/form.php" width="100%" height="480px"></iframe> -->
				<img class="zbxe_widget_output" widget="contactfree" skin="Inquiry_franchise" colorset="default" target_mid="inquiry_board" />
			</div>
		</div>
	</section>
</div>
<?php } ?>