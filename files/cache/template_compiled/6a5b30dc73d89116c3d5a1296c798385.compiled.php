<?php if(!defined("__XE__"))exit;?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php Context::loadLang('layouts/Headspa_K/lang'); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Headspa_K/include','initial_setting.html') ?>
<!--CSS-->
<!--#Meta:layouts/Headspa_K/css/general.css--><?php $__tmp=array('layouts/Headspa_K/css/general.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- swiper -->
<!--#Meta:layouts/Headspa_K/css/swiper.min.css--><?php $__tmp=array('layouts/Headspa_K/css/swiper.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Headspa_K/js/swiper.min.js--><?php $__tmp=array('layouts/Headspa_K/js/swiper.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	jQuery(function($){
		$(document).ready(function(){
			var sec01sli = new Swiper('#sec01_sli', {
				effect:'fade',
				speed:1000,
				loop:true,
				pagination:{
					el:'#sec01_page',
					clickable:true
				},
				autoplay:{
					delay:5000,
					disableOnInteraction:false
				}
			})
			var sec01slinum = $('.sec01_sli').not('.swiper-slide-duplicate').length;
			if(sec01slinum <= 1){
				$('#sec01_page').hide(0);
				console.log(sec01slinum);
			}else{
				$('#sec01_page').show(0);
				console.log(sec01slinum);
			}
			var widsli = new Swiper('#wid_sli', {
				loop:true,
				speed:600,
				slidesPerView:3,
				spaceBetween:25,
				navigation:{
					prevEl:'#wid_prev',
					nextEl:'#wid_next'
				},
				breakpoints:{
					1080:{ slidesPerView:2 },
					700:{ slidesPerView:1 }
				}
			})
			$(window).load(function(){
				var sec02sli = new Swiper('#sec02_sli', {
					loop:true,
					speed:800,
					pagination:{
						el:'#sec02_page',
						clickable:true
					},
					autoplay:{
						delay:4000,
						disableOnInteraction:false
					},
					navigation:{
						prevEl:'#sec02_prev',
						nextEl:'#sec02_next'
					}
				})
			})
		})
	})
</script>
<!--wenfont-->
<!--#Meta:layouts/Headspa_K/css/font-awesome.min.css--><?php $__tmp=array('layouts/Headspa_K/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<link rel="stylesheet" href="/common/xeicon/xeicon.min.css">
<!-- wow.animate -->
<!--#Meta:layouts/Headspa_K/animate/animate.css--><?php $__tmp=array('layouts/Headspa_K/animate/animate.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Headspa_K/animate/wow.min.js--><?php $__tmp=array('layouts/Headspa_K/animate/wow.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	jQuery(function ($) {
		new WOW().init();
	});
</script>
<!--style-->
<style type="text/css">
	#header.fixed{ background-color:#161616; background-color:<?php echo $__Context->layout_info->header_background ?>; }
	.header_logo_wrap a{ color:#fff; color:<?php echo $__Context->layout_info->logo_text_color ?>; }
	.depth1 a{ color:#fff; color:<?php echo $__Context->layout_info->menu_color ?>; }
	.login_submit{ background-color:#f6c453; background-color:<?php echo $__Context->layout_info->point_color ?>; }
	.pc_gnb li:hover > a, .pc_gnb li a:focus, .pc_gnb li a:active{ color:#b42323; color:<?php echo $__Context->layout_info->point_color ?>; }
	.pc_gnb li.depth1 ul li.depth2 a:hover, .pc_gnb li.depth1 ul li.depth2 a:focus, .pc_gnb li.depth1 ul li.depth2 a:active{ color:#fff;/* color:<?php echo $__Context->layout_info->point_color ?>;*/ }
	.footer_pt_title span{ border-color:#b43232; border-color:<?php echo $__Context->layout_info->point_color ?>; }
	/********************main.css********************/
	.sec03_title, .sec07_title{ border-color:#b42323; border-color:<?php echo $__Context->layout_info->point_color ?>; }
	.img_left:after, .img_right:after, .sec07_pt:first-child:after, .sec07_pt:last-child:after{ background-color:#b42323; background-color:<?php echo $__Context->layout_info->point_color ?>; }
	/********************sub.css********************/
	.subtop_wrap{ background-image:url(<?php echo $__Context->layout_info->subtop_image ?>); background-color:<?php echo $__Context->layout_info->subtop_color ?>; min-height:<?php echo $__Context->layout_info->subtop_height ?>px; }
	.content_wrap{ max-width:<?php echo $__Context->layout_info->content_width ?>px; }
	.subtop_txt, .site_location a{ color:<?php echo $__Context->layout_info->subtop_txt_color ?>; }
	.subtop_line{ background-color:<?php echo $__Context->layout_info->subtop_txt_color ?>; }
	.subtop_title span{ color:<?php echo $__Context->layout_info->point_color ?> }
	.lnb_title span{ border-bottom:1px solid <?php echo $__Context->layout_info->point_color ?>;}
	.lnb_list li.on a, .lnb_list > li > a:hover, .lnb_list > li > ul.depth2 > li > a:hover, .lnb_list > li > ul.depth2 > li.on > a{ color:<?php echo $__Context->layout_info->point_color ?> }
	@media( max-width:1100px ){
		#header{ background-color:#161616; background-color:<?php echo $__Context->layout_info->header_background ?>; }
	}
</style>
<!--style_default-->
<!--JS-->
<!--#Meta:layouts/Headspa_K/js/general.js--><?php $__tmp=array('layouts/Headspa_K/js/general.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>