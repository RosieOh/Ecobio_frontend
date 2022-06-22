<?php if(!defined("__XE__"))exit;?><section class="main_sec" id="sec_01">
	<div class="swiper-container" id="sec01_sli">
		<div class="swiper-wrapper">
            
            
      <script language="JavaScript">
	function setCookie( name, value, expiredays ) {
	  var todayDate = new Date();
	  todayDate.setDate( todayDate.getDate() + expiredays );
	  document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	function closeLayer(cn) {	  
	  if ( document.notice_form.chkbox.checked ) {
		setCookie( "maindiv", "done" , 2 );
	  }
	  if ( cn == "a" ) {
		setCookie( "maindiv", "done" , 2 );
	  }
	  document.all['divpop'].style.visibility = "hidden";
	}
</script>
         <!--      
                <div id="divpop" style="position:absolute; left:10px; top:130px; z-index:9900; visibility:hidden;">
                <div class="close_btn" style="width:35px; height:35px; float:right; background-color:#222;">
                    <img src="/files/attach/images/112/close_icon.png" alt="닫기" onClick="closeLayer('a');" />
                </div>
                <table width="502" height="500" cellpadding="0" cellspacing="0" border="0">
                    <form name="notice_form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                      <tr>
                        <td style="border:1px solid black; background-" align="center"><a href="http://headspak.com/index.php?mid=notice&document_srl=1878" target="_blank"><img src="/files/attach/images/112/cem_img2.jpg" width="602"></a></td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#EFEFEF" height="15"><input type="checkbox" name="chkbox" value="checkbox" onfocus="this.blur();" onClick="closeLayer();"> 
                        <a href="#" onClick="closeLayer('a');">2일 동안 이 창을 열지 않습니다.</a>
                        <a href="#" onClick="closeLayer('c');"><strong>[닫기]</strong></a></td>
                      </tr>
                    </form>
                </table>		
                </div>
            -->
<script language="JavaScript">
	cookiedata = document.cookie;
	if ( cookiedata.indexOf("maindiv=done") < 0 ) {
	  document.all['divpop'].style.visibility = "visible";
	}
	else {
	  document.all['divpop'].style.visibility = "hidden";
	}
</script>
			<div class="swiper-slide sec01_sli" style="background-image:url(<?php echo $__Context->layout_info->sec01_img01 ?>)">
				<div class="sec01_fr">
					<div class="sec01_pt_wrap">
						<div class="sec01_txt">
							<div class="sec01_txt_box">
								<?php if($__Context->layout_info->sec01_sub01){ ?><h3><?php echo $__Context->layout_info->sec01_sub01 ?></h3><?php } ?>
								<?php if($__Context->layout_info->sec01_title01){ ?><h1><?php echo $__Context->layout_info->sec01_title01 ?></h1><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01){ ?><p><?php echo $__Context->layout_info->sec01_desc01 ?></p><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01 && $__Context->layout_info->sec01_link01){ ?><div class="line"></div><?php } ?>
								<?php if($__Context->layout_info->sec01_link01){ ?><a href="<?php echo $__Context->layout_info->sec01_link01 ?>">LEARN MORE</a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if($__Context->layout_info->sec01_img02 || $__Context->layout_info->sec01_title02 || $__Context->layout_info->sec01_desc02 || $__Context->layout_info->sec01_link02){ ?><div class="swiper-slide sec01_sli" style="background-image:url(<?php echo $__Context->layout_info->sec01_img02 ?>)">
				<div class="sec01_fr">
					<div class="sec01_pt_wrap">
						<div class="sec01_txt">
							<div class="sec01_txt_box">
								<?php if($__Context->layout_info->sec01_sub02){ ?><h3><?php echo $__Context->layout_info->sec01_sub02 ?></h3><?php } ?>
								<?php if($__Context->layout_info->sec01_title02){ ?><h1><?php echo $__Context->layout_info->sec01_title02 ?></h1><?php } ?>
								<?php if($__Context->layout_info->sec01_desc02){ ?><p><?php echo $__Context->layout_info->sec01_desc02 ?></p><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01 && $__Context->layout_info->sec01_link01){ ?><div class="line"></div><?php } ?>
								<?php if($__Context->layout_info->sec01_link02){ ?><a href="<?php echo $__Context->layout_info->sec01_link02 ?>">LEARN MORE</a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><?php } ?>
			<?php if($__Context->layout_info->sec01_img03 || $__Context->layout_info->sec01_title03 || $__Context->layout_info->sec01_desc03 || $__Context->layout_info->sec01_link03){ ?><div class="swiper-slide sec01_sli" style="background-image:url(<?php echo $__Context->layout_info->sec01_img03 ?>)">
				<div class="sec01_fr">
					<div class="sec01_pt_wrap">
						<div class="sec01_txt">
							<div class="sec01_txt_box">
								<?php if($__Context->layout_info->sec01_sub03){ ?><h3><?php echo $__Context->layout_info->sec01_sub03 ?></h3><?php } ?>
								<?php if($__Context->layout_info->sec01_title03){ ?><h1><?php echo $__Context->layout_info->sec01_title03 ?></h1><?php } ?>
								<?php if($__Context->layout_info->sec01_desc03){ ?><p><?php echo $__Context->layout_info->sec01_desc03 ?></p><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01 && $__Context->layout_info->sec01_link01){ ?><div class="line"></div><?php } ?>
								<?php if($__Context->layout_info->sec01_link03){ ?><a href="<?php echo $__Context->layout_info->sec01_link03 ?>">LEARN MORE</a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><?php } ?>
			<?php if($__Context->layout_info->sec01_img04 || $__Context->layout_info->sec01_title04 || $__Context->layout_info->sec01_desc04 || $__Context->layout_info->sec01_link04){ ?><div class="swiper-slide sec01_sli" style="background-image:url(<?php echo $__Context->layout_info->sec01_img04 ?>)">
				<div class="sec01_fr">
					<div class="sec01_pt_wrap">
						<div class="sec01_txt">
							<div class="sec01_txt_box">
								<?php if($__Context->layout_info->sec01_sub04){ ?><h3><?php echo $__Context->layout_info->sec01_sub04 ?></h3><?php } ?>
								<?php if($__Context->layout_info->sec01_title04){ ?><h1><?php echo $__Context->layout_info->sec01_title04 ?></h1><?php } ?>
								<?php if($__Context->layout_info->sec01_desc04){ ?><p><?php echo $__Context->layout_info->sec01_desc04 ?></p><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01 && $__Context->layout_info->sec01_link01){ ?><div class="line"></div><?php } ?>
								<?php if($__Context->layout_info->sec01_link04){ ?><a href="<?php echo $__Context->layout_info->sec01_link04 ?>">LEARN MORE</a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><?php } ?>
			<?php if($__Context->layout_info->sec01_img05 || $__Context->layout_info->sec01_title05 || $__Context->layout_info->sec01_desc05 || $__Context->layout_info->sec01_link05){ ?><div class="swiper-slide sec01_sli" style="background-image:url(<?php echo $__Context->layout_info->sec01_img05 ?>)">
				<div class="sec01_fr">
					<div class="sec01_pt_wrap">
						<div class="sec01_txt">
							<div class="sec01_txt_box">
								<?php if($__Context->layout_info->sec01_sub05){ ?><h3><?php echo $__Context->layout_info->sec01_sub05 ?></h3><?php } ?>
								<?php if($__Context->layout_info->sec01_title05){ ?><h1><?php echo $__Context->layout_info->sec01_title05 ?></h1><?php } ?>
								<?php if($__Context->layout_info->sec01_desc05){ ?><p><?php echo $__Context->layout_info->sec01_desc05 ?></p><?php } ?>
								<?php if($__Context->layout_info->sec01_desc01 && $__Context->layout_info->sec01_link01){ ?><div class="line"></div><?php } ?>
								<?php if($__Context->layout_info->sec01_link05){ ?><a href="<?php echo $__Context->layout_info->sec01_link05 ?>">LEARN MORE</a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><?php } ?>
		</div>
		<div id="sec01_page"></div>
	</div>
</section>
<?php if($__Context->lang_type == 'ko'){ ?>
<section class="main_sec" id="sec02">
	<div class="sec_con">
		<div class="sec02_pt_wrap">
			<div class="sec02_pt pt_4">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=coupon">
						<div class="sec02_txt_box">
							<h3>이달의 쿠폰</h3>
							<div class="line"></div>
							<p>여러 가지 혜택으로 헤드스파K를 더욱 알뜰하게 이용하세요!</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_4">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=coupon">
						<div class="sec02_txt_box">
							<h3>이벤트</h3>
							<div class="line"></div>
							<p>헤드스파에서 제공하는 각종 이벤트를 확인해보세요.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=brand_story">
						<div class="sec02_txt_box">
							<h3>브랜드 스토리</h3>
							<div class="line"></div>
							<p>건강한 두피, 풍성하고 볼륨 있는 모발을 위한 시작, 헤드스파 K</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_02"></div>
					<a class="sec02_txt" href="/index.php?mid=clinical_data">
						<div class="sec02_txt_box">
							<h3>증상별 임상자료</h3>
							<div class="line"></div>
							<p>맞춤형 두피탈모관리 시스템에 축적된 증상별 임상자료를 소개합니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_03"></div>
					<a class="sec02_txt" href="/index.php?mid=scalp_aplopecia">
						<div class="sec02_txt_box">
							<h3>두피질환과 탈모</h3>
							<div class="line"></div>
							<p>건강하지 못하고 병든 두피는 탈모를 유발할 수 있습니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_04"></div>
					<a class="sec02_txt" href="/index.php?mid=partners">
						<div class="sec02_txt_box">
							<h3>헤드스파K 파트너</h3>
							<div class="line"></div>
							<p>맞춤형 두피탈모관리 시스템을 갖춘 헤드스파 K의 파트너를 소개합니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_2">
				<div class="swiper-container" id="sec02_sli">
					<div class="sec02_nav" id="sec02_prev"><i class="xi-angle-left"></i></div>
					<div class="sec02_nav" id="sec02_next"><i class="xi-angle-right"></i></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide sec02_sli"><a href="https://www.psmall.net/shop/detail.php?pno=B337E84DE8752B27EDA3A12363109E80&rURL=https%3A%2F%2Fwww.psmall.net%2F&ctype=1&cno1=1019"><img src="/layouts/Headspa_K/img/main/02-093.jpg" /></a></div>
                        <div class="swiper-slide sec02_sli"><a href="https://www.psmall.net/shop/detail.php?pno=EBA0DC302BCD9A273F8BBB72BE3A687B&rURL=https%3A%2F%2Fwww.psmall.net%2F&ctype=1&cno1=1019"><img src="/layouts/Headspa_K/img/main/02-09.jpg" /></a></div>
						<div class="swiper-slide sec02_sli"><a href="https://www.psmall.net/shop/detail.php?pno=4E732CED3463D06DE0CA9A15B6153677&rURL=https%3A%2F%2Fwww.psmall.net%2F&ctype=1&cno1=1019"><img src="/layouts/Headspa_K/img/main/02-092.jpg" /></a></div>
					</div>
					<div id="sec02_page"></div>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_05"></div>
					<a class="sec02_txt" href="https://blog.naver.com/headspa_k">
						<div class="sec02_txt_box">
							<h3>블로그</h3>
							<div class="line"></div>
							<p>헤드스파K의 블로그에서 21년 탈모 노하우를 공유합니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_06"></div>
					<a class="sec02_txt" href="/index.php?mid=counsel_measure">
						<div class="sec02_txt_box">
							<h3>두피 상담&측정</h3>
							<div class="line"></div>
							<p>1 : 1 두피상담&측정을 통해 맞춤형 솔루션 프로그램을 제시합니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_07"></div>
					<a class="sec02_txt" href="https://www.instagram.com/headspa_k/">
						<div class="sec02_txt_box">
							<h3>인스타그램</h3>
							<div class="line"></div>
							<p>헤드스파K의 인스타그램에서 21년 탈모 노하우를 공유합니다.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_3">
				<a class="sec02_pt3_link" href="http://www.headspa.kr/index.php" target="_blank"><img src="/layouts/Headspa_K/img/main/02-11.jpg" /></a>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_08"></div>
					<a class="sec02_txt" href="https://www.facebook.com/HeadSpa-K-316393759163423">
						<div class="sec02_txt_box">
							<h3>페이스북</h3>
							<div class="line"></div>
							<p>헤드스파K의 페이스북에서 21년 탈모 노하우를 공유합니다. </p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main_sec" id="sec03">
	<div class="sec_con">
		<div class="sec03_title_wrap">
			<h1>HEAD SPA K PROGRAM</h1>
		</div>
		<div class="sec03_tab_wrap">
			<div class="sec03_tab on">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-01.png" />
					<div class="sec03_tab_txt">
						<h3>두피 스케일링 테라피3S</h3>
						<p>두피 타입에 맞는 각질 제거제를 처방하여 모공이 막혀 발생한 두피 문제를 해결하는 프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=scaling_3sg">자세히 보기</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-02.png" />
					<div class="sec03_tab_txt">
						<h3>탄산 테라피 4C</h3>
						<p>두피 세정력과 모발 수렴효과로 인한 탄산수 적용 헤드스파 관리 프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=sparkling">자세히 보기</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-03.png" />
					<div class="sec03_tab_txt">
						<h3>두피 디톡스</h3>
						<p>두피 표피와 모공 속 노폐물과 독소를 배출시켜 건강한 두피와 모발을 유지하는 관리프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=detox_care">자세히 보기</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-04.png" />
					<div class="sec03_tab_txt">
						<h3>두피 유형별</h3>
						<p>고객의 두피 유형을 파악하고 맞춤 프로그램과 테크닉을 적용하여 두피의 문제점을 개선하는 프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=type_program">자세히 보기</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-05.png" />
					<div class="sec03_tab_txt">
						<h3>심화탈모테라피</h3>
						<p>DP(디페시아)
                            앰플을 적용함으로써 모모세포 활성화 및 건강한 두피 환경 조성을 돕는 프로그램</p>
						<div class="sec03_link"><a href="http://headspak.com/index.php?mid=tal">자세히 보기</a></div>
					</div>
				</div>
			</div>
            <div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-05.png" />
					<div class="sec03_tab_txt">
						<h3>헤드테라피</h3>
						<p>두개해부학을 베이스로 한 헤드 마사지의 특별한 테크닉으로 심신의 안정과 두피노화를 예방하는 프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=brain_solution">자세히 보기</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-06.png" />
					<div class="sec03_tab_txt">
						<h3>디페시아(탈모)</h3>
						<p>탈모의 진행상태와 유형, 원인을 파악하여 모발의 성장 사이클 정상화하는 관리프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=depecia">자세히 보기</a></div>
					</div>
				</div>
			</div>
            <div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-06.png" />
					<div class="sec03_tab_txt">
						<h3>헤어 리페어 크리닉</h3>
						<p>효과적인 케어는 윤기와 탄력을 자연스럽게 부여하여 건강한 모발을 유지시켜 주는 프로그램</p>
						<div class="sec03_link"><a href="/index.php?mid=rep">자세히 보기</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec03_txt">
			<h3>Nature Healing · Nature Energy · Science</h3>
		</div>
		<div class="sec03_tabcon_wrap">
			<div class="sec03_tabcon on">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/bGn-Pqu2RJI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/Qtn0JPOR3cg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/AyEZS5IwL1Y?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/mMWy-oUYpmA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
		</div>
	</div>
</section>
<section class="main_sec" id="sec04">
	<div class="sec_con">
		<div class="sec04_pt_wrap">
			<div class="sec04_pt pt_lf">
				<div class="sec04_txt">
					<h1>소식</h1>
					<a href="/index.php?mid=notice">전체보기 <div class="sec04_link_mk"><i class="xi-plus"></i></div></a>
				</div>
			</div>
			<div class="sec04_pt pt_rt">
				<img class="zbxe_widget_output" widget="content" skin="headspa" colorset="white" content_type="document" module_srls="115" list_type="image_title_content" tab_type="none" markup_type="table" content_cut_size="300" list_count="6" cols_list_count="6" page_count="1" option_view="title,regdate,content" show_browser_title="Y" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" />
			</div>
		</div>
	</div>
</section>
<?php }else if($__Context->lang_type == 'en'){ ?>
<section class="main_sec" id="sec02">
	<div class="sec_con">
		<div class="sec02_pt_wrap">
			<div class="sec02_pt pt_4">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=coupon">
						<div class="sec02_txt_box">
							<h3>Coupon</h3>
							<div class="line"></div>
							<p>Use Headspa K more reasonably through various benefits!</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_4">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=coupon">
						<div class="sec02_txt_box">
							<h3>Event</h3>
							<div class="line"></div>
							<p>Check the new events of Headspa K!</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_01"></div>
					<a class="sec02_txt" href="/index.php?mid=brand_story">
						<div class="sec02_txt_box">
							<h3>Brand story</h3>
							<div class="line"></div>
							<p>Healthy scalp, start for volumnious hair with HeadSpa K</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_02"></div>
					<a class="sec02_txt" href="/index.php?mid=clinical_data">
						<div class="sec02_txt_box">
							<h3>Clinical data by symptom</h3>
							<div class="line"></div>
							<p>Customized scalp management system, shows accumulated clinical datas by symptoms.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_03"></div>
					<a class="sec02_txt" href="/index.php?mid=scalp_aplopecia">
						<div class="sec02_txt_box">
							<h3>Scalp disease and alopecia</h3>
							<div class="line"></div>
							<p>Unhealthy and ill scalp can cause an alopecia.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_04"></div>
					<a class="sec02_txt" href="/index.php?mid=partners">
						<div class="sec02_txt_box">
							<h3>HeadSpa K partnership</h3>
							<div class="line"></div>
							<p>Introducing HeadSpa K with customized scalp management system.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_2">
				<div class="swiper-container" id="sec02_sli">
					<div class="sec02_nav" id="sec02_prev"><i class="xi-angle-left"></i></div>
					<div class="sec02_nav" id="sec02_next"><i class="xi-angle-right"></i></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide sec02_sli"><a href="/index.php?mid=tonic_toner&document_srl=236"><img src="/layouts/Headspa_K/img/main/02-094.jpg" /></a></div>
						<div class="swiper-slide sec02_sli"><a href="/index.php?mid=treatment_pack&document_srl=244"><img src="/layouts/Headspa_K/img/main/02-095.jpg" /></a></div>
						<div class="swiper-slide sec02_sli"><a href="/index.php?mid=shampoo_hair&document_srl=221"><img src="/layouts/Headspa_K/img/main/02-096.jpg" /></a></div>
					</div>
					<div id="sec02_page"></div>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_05"></div>
					<a class="sec02_txt" href="/index.php?mid=success">
						<div class="sec02_txt_box">
							<h3>Success story</h3>
							<div class="line"></div>
							<p>Introducing success story of our customers with HeadSpa K.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_06"></div>
					<a class="sec02_txt" href="/index.php?mid=counsel_measure">
						<div class="sec02_txt_box">
							<h3>Scalp consulting&diagnosis</h3>
							<div class="line"></div>
							<p>Through 1on1 scalp consulting & diagnosis, provide customized solution program.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_07"></div>
					<a class="sec02_txt" href="/index.php?mid=review">
						<div class="sec02_txt_box">
							<h3>Customer story</h3>
							<div class="line"></div>
							<p>Telling the experience of our customers after meeting HeadSpa K</p>
						</div>
					</a>
				</div>
			</div>
			<div class="sec02_pt pt_3">
				<a class="sec02_pt3_link" href="http://www.headspa.kr/index.php" target="_blank"><img src="/layouts/Headspa_K/img/main/02-112.jpg" /></a>
			</div>
			<div class="sec02_pt">
				<div class="sec02_pt_box">
					<div class="sec02_img img_08"></div>
					<a class="sec02_txt" href="/index.php?mid=review">
						<div class="sec02_txt_box">
							<h3>Experience review</h3>
							<div class="line"></div>
							<p>Review of customers who have experienced Head Spa K management program.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main_sec" id="sec03">
	<div class="sec_con">
		<div class="sec03_title_wrap">
			<h1>HEAD SPA K PROGRAM</h1>
		</div>
		<div class="sec03_tab_wrap">
			<div class="sec03_tab on">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-01.png" />
					<div class="sec03_tab_txt">
						<h3>Scalp scaling therapy 3S</h3>
						<p>Prescribing right exfoliating agent for different scalp type, to treat the clogged pores that cause the scalp troubles. </p>
						<div class="sec03_link"><a href="/index.php?mid=scaling_3sg">LEARN MORE</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-02.png" />
					<div class="sec03_tab_txt">
						<h3>Carbonated Therapy 4C</h3>
						<p>Scalp management program, applying carbonated water for clean and convergence effect. </p>
						<div class="sec03_link"><a href="/index.php?mid=sparkling">LEARN MORE</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-03.png" />
					<div class="sec03_tab_txt">
						<h3>Scalp detox</h3>
						<p>Management program to maintain healthy scalp & hair condition by releasing toxins and wastes from the scalp epidermis and pores.</p>
						<div class="sec03_link"><a href="/index.php?mid=detox_care">LEARN MORE</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-04.png" />
					<div class="sec03_tab_txt">
						<h3>Management by scalp type</h3>
						<p>Determining customer scalp type and apply customized management program with techniques to improve scalp problems.</p>
						<div class="sec03_link"><a href="/index.php?mid=type_program">LEARN MORE</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-05.png" />
					<div class="sec03_tab_txt">
						<h3>Head Therapy</h3>
						<p>Program to provide inner peace and prevent scalp aging with special head massage techniques based from skull anatomy. </p>
						<div class="sec03_link"><a href="/index.php?mid=brain_solution">LEARN MORE</a></div>
					</div>
				</div>
			</div>
			<div class="sec03_tab">
				<div class="sec03_tab_box">
					<img src="/layouts/Headspa_K/img/main/03-06.png" />
					<div class="sec03_tab_txt">
						<h3>Depecia(Hair loss)</h3>
						<p>Figuring out the progress and type of hair loss problem and main factor causing hair loss and normalize the cycle of hair growth.</p>
						<div class="sec03_link"><a href="/index.php?mid=depecia">LEARN MORE</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sec03_txt">
			<h3>Nature Healing · Nature Energy · Science</h3>
		</div>
		<div class="sec03_tabcon_wrap">
			<div class="sec03_tabcon on">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/bGn-Pqu2RJI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/K59RfUzHuFk?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/AyEZS5IwL1Y?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/mMWy-oUYpmA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			<div class="sec03_tabcon">
				<div class="sec03_vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/uzUD2juZZ58?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
			</div>
			
		</div>
	</div>
</section>
<section class="main_sec" id="sec04">
	<div class="sec_con">
		<div class="sec04_pt_wrap">
			<div class="sec04_pt pt_lf">
				<div class="sec04_txt">
					<h1>NE<br />WS</h1>
					<a href="/index.php?mid=notice">MORE <div class="sec04_link_mk"><i class="xi-plus"></i></div></a>
				</div>
			</div>
			<div class="sec04_pt pt_rt">
				<img class="zbxe_widget_output" widget="content" skin="headspa" colorset="white" content_type="document" module_srls="115" list_type="image_title_content" tab_type="none" markup_type="table" content_cut_size="300" list_count="6" cols_list_count="6" page_count="1" option_view="title,regdate,content" show_browser_title="Y" show_comment_count="N" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" />
			</div>
		</div>
	</div>
</section>
<?php } ?>
