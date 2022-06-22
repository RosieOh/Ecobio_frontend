<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/Headspa_K/quickmenu/quickmenu.css--><?php $__tmp=array('layouts/Headspa_K/quickmenu/quickmenu.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Headspa_K/quickmenu/quickmenu.js--><?php $__tmp=array('layouts/Headspa_K/quickmenu/quickmenu.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<div class="qm_wrap">
	<!--<a class="qm_btn" href="" title="예약하기">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-01.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-01-on.png">
		</div>
		<h3>예약하기</h3>
	</a>-->
	<a class="qm_btn" href="/index.php?mid=coupon" title="COUPON">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-04.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-04-on.png">
		</div>
		<h3>이달의쿠폰</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=headspa_markets" title="지점찾기">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-02.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-02-on.png">
		</div>
		<h3>지점찾기</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=inquiry" title="1:1문의">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-03.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-03-on.png">
		</div>
		<h3>1:1문의</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=event" title="EVENT">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-05.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-05-on.png">
		</div>
		<h3>EVENT</h3>
	</a>
</div>
<div class="mo_qm_wrap">
	<a class="mo_qm_btn" href="/index.php?mid=coupon" title="COUPON">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-04.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-04-on.png">
		</div>
		<h3>이달의 쿠폰</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=headspa_markets" title="지점찾기">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-02.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-02-on.png">
		</div>
		<h3>지점찾기</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=inquiry" title="1:1문의">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-03.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-03-on.png">
		</div>
		<h3>1:1문의</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=event" title="EVENT">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-05.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-05-on.png">
		</div>
		<h3>EVENT</h3>
	</a>
</div>
<?php }else if($__Context->lang_type == 'en'){ ?>
<div class="qm_wrap">
	<!--<a class="qm_btn" href="" title="Booking">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-01.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-01-on.png">
		</div>
		<h3>Booking</h3>
	</a>-->
	<a class="qm_btn" href="/index.php?mid=coupon" title="COUPON">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-04.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-04-on.png">
		</div>
		<h3>COUPON</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=headspa_markets" title="Markets">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-02.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-02-on.png">
		</div>
		<h3>Markets</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=inquiry" title="Inquiry">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-03.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-03-on.png">
		</div>
		<h3>Inquiry</h3>
	</a>
	<a class="qm_btn" href="/index.php?mid=event" title="EVENT">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-05.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-05-on.png">
		</div>
		<h3>EVENT</h3>
	</a>
</div>
<div class="mo_qm_wrap">
	<a class="mo_qm_btn" href="/index.php?mid=coupon" title="COUPON">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-04.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-04-on.png">
		</div>
		<h3>COUPON</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=headspa_markets" title="Markets">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-02.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-02-on.png">
		</div>
		<h3>Markets</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=inquiry" title="Inquiry">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-03.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-03-on.png">
		</div>
		<h3>Inquiry</h3>
	</a>
	<a class="mo_qm_btn" href="/index.php?mid=event" title="EVENT">
		<div class="qm_icon">
			<img class="off" src="/layouts/Headspa_K/img/qm-05.png">
			<img class="on" src="/layouts/Headspa_K/img/qm-05-on.png">
		</div>
		<h3>EVENT</h3>
	</a>
</div>
<?php } ?>