<?php if(!defined("__XE__"))exit;
if($__Context->lang_type == 'ko'){ ?>
	<div class="search_wrap">
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" class="seach_form" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="extra_vars3" />
			<div class="search_box">
				<input type="text" name="search_keyword" id="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>" class="" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" placeholder="주소를 입력하세요." />
				<button type="submit" id="search_submit" class=""><i class="xi-magnifier"></i></button>
			</div>
            
		</form>
	</div>
	<?php if($__Context->search_keyword==''){ ?>
	<div class="li_map_box">
        <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=qvo9v8qrb7&R41blFMsdcJ6LZ6NkgPGnykymY1PfCJ1EMRaexFK"></script>
		<!--<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6e24ffcbf9915e991c16b77e488cd893&libraries=services,clusterer,drawing"></script> -->
		<div id="map"  style="width:100%; height:400px;">Loading...</div>
                <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=qvo9v8qrb7&R41blFMsdcJ6LZ6NkgPGnykymY1PfCJ1EMRaexFK"></script>
                <script type="text/javascript">
                   var map = new naver.maps.Map('map', {
                       center: new naver.maps.LatLng(36.3991201,127.3923762),
                       zoom: 15
                   });
                    var marker = new naver.maps.Marker({
                        position: new naver.maps.LatLng(36.3991201,127.3923762),
                        map: map
                    });
                </script>
	<!--		<script>
                <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID&callback=initMap"></script>
    <script type="text/javascript">
	   jQuery(function($) {
				var mapObj = document.getElementById('map_extra'), mapOption = {center: new daum.maps.LatLng(33.450701, 126.570667),level: 3};  
				var map = new daum.maps.Map(mapObj, mapOption),geocoder = new daum.maps.services.Geocoder();
				var aftermark = function(){
					geocoder.addressSearch("대전 유성구 유성대로 1646", function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
				}
				$('td.address').each(function(){
					var $add = $(this).children('p').text();
					geocoder.addressSearch($add, function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
					aftermark();
				})
			});
		</script> -->
	</div>
	<?php }else{ ?>
	<div class="li_map_box">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID"></script>
	<!--<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6e24ffcbf9915e991c16b77e488cd893&libraries=services,clusterer,drawing"></script>-->
		<div id="map"  style="width:100%; height:400px;"></div>
        
            <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=YOUR_CLIENT_ID&callback=initMap"></script>
                    <script type="text/javascript">
                        var map = null;
                        function map() {
                            map = new naver.maps.Map('map', {
                                center: new naver.maps.LatLng(37.3595704, 127.105399),
                                zoom: 10
                            });
                        }
                    </script>
	<!--	<script>
			jQuery(function($) {
				var mapObj = document.getElementById('map_extra'), mapOption = {center: new daum.maps.LatLng(33.450701, 126.570667),level: 3};  
				var map = new daum.maps.Map(mapObj, mapOption),geocoder = new daum.maps.services.Geocoder();
				$('td.address').each(function(){
					var $add = $(this).children('p').text();
					geocoder.addressSearch($add, function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
				})
			});
		</script> -->
	</div>
	<?php } ?>
<?php }else if($__Context->lang_type == 'en'){ ?>
	<div class="search_wrap">
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" class="seach_form" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="extra_vars3" />
			<div class="search_box">
				<input type="text" name="search_keyword" id="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>" class="" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" placeholder="Enter wanted address" />
				<button type="submit" id="search_submit" class=""><i class="xi-magnifier"></i></button>
			</div>
		</form>
	</div>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIV_FxXqVU1wl5Ol8RxyqRahRhyb97VmE&libraries=&v=weekly" defer ></script>
	<div class="li_map_box" id="li_map_box"></div>
	<?php if($__Context->search_keyword==''){ ?>
	<script>
		jQuery(function($){
			"use strict";
			const map = new google.maps.Map(document.getElementById("li_map_box"), { zoom: 16, center: { lat: -34.397, lng: 150.644 } });
			const geocoder = new google.maps.Geocoder();
			$('td.address').each(function(){
				var $add = $(this).children('p').text();
				geocodeAddress(geocoder, map);
				function geocodeAddress(geocoder, resultsMap) {
					geocoder.geocode(
						{
							address: $add
						},
						(results, status) => {
							if (status === "OK") {
								resultsMap.setCenter(results[0].geometry.location);
								new google.maps.Marker({
									map: resultsMap,
									position: results[0].geometry.location
								});
							} else {
								alert(
									"Geocode was not successful for the following reason: " + status
								);
							}
						}
					);
				}
			});
			aftermark();
			function aftermark(){
				$(window).load(function(){
					geocodeAddress(geocoder, map);
					function geocodeAddress(geocoder, resultsMap) {
						geocoder.geocode(
							{
								address: '461-6, Jeonmin-dong, Yuseong-gu, Daejeon, Republic of Korea'
							},
							(results, status) => {
								if (status === "OK") {
									resultsMap.setCenter(results[0].geometry.location);
									new google.maps.Marker({
										map: resultsMap,
										position: results[0].geometry.location
									});
								} else {
									alert(
										"Geocode was not successful for the following reason: " + status
									);
								}
							}
						);
					}
				})
			}
		})
	</script>
	<?php }else{ ?>
	<script>
		jQuery(function($){
			"use strict";
			const map = new google.maps.Map(document.getElementById("li_map_box"), { zoom: 16, center: { lat: -34.397, lng: 150.644 } });
			const geocoder = new google.maps.Geocoder();
			$('td.address').each(function(){
				var $add = $(this).children('p').text();
				geocodeAddress(geocoder, map);
				function geocodeAddress(geocoder, resultsMap) {
					geocoder.geocode(
						{
							address: $add
						},
						(results, status) => {
							if (status === "OK") {
								resultsMap.setCenter(results[0].geometry.location);
								new google.maps.Marker({
									map: resultsMap,
									position: results[0].geometry.location
								});
							} else {
								alert(
									"Geocode was not successful for the following reason: " + status
								);
							}
						}
					);
				}
			})
		})
	</script>
	<?php } ?>
<?php } ?>
<?php if($__Context->order_type=="desc"){ ?>
<?php 
$__Context->order_icon="down";
$__Context->order_type="asc";
 ?>
<?php }else{ ?>
<?php 
$__Context->order_icon="up";
$__Context->order_type="desc";
 ?>
<?php } ?>
<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><p class="no_doc"><?php echo $__Context->lang->no_documents ?></p><?php } ?>
<?php if($__Context->document_list || $__Context->notice_list){ ?><table class="bd_lst bd_tb_lst bd_tb">
	<caption class="blind">List of Articles</caption>
	<thead class="bg_f_f9">
		
		<tr>
            <th scope="col" class="title"><span><a href="http://headspak.com/index.php?mid=headspa_markets&amp;sort_index=title&amp;order_type=desc"></a></span></th>
            <th scope="col" class="m_no"><span><a href="http://headspak.com/index.php?mid=headspa_markets&amp;sort_index=address&amp;order_type=desc">주소</a></span></th>																																				<th scope="col" class="m_no"><span><a href="p://heapak.com/index.php?mid=headsa_markets&amp;sort_index=open_time&amp;order_type=desc">영업시간</a></span></th>						<th scope="col" class="m_no"></th>		</tr>     
	</thead>
	<tbody>
		
		<tr class="notice">
            <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=451"><strong>헤드스파K 본사</strong></a>
				<!-- <span class="extraimages"><img src="http://headspak.com/modules/document/tpl/icons//file.gif" alt="file" title="file" style="margin-right:2px;" /></span> -->
			</td>
            <td class="m_no" onclick="newMarker(36.3991201, 127.3923762)">대전 유성구 전민동 461-6번지 한남대학교 대덕밸리캠퍼스 이노비즈파크 309호</td>			<td class="m_no" >월~금 09:00 ~ 18:00<br />(주말, 공휴일 휴무)</td>
                   </tr>		
		<tr>
            <td class="title">
                    <a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=605" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=605&amp;listStyle=viewer">
					헤드스파K 롯데백화점 대전점	</a>
                    <!-- <span class="extraimages"><img src="http://headspak.com/modules/document/tpl/icons//file.gif" alt="file" title="file" style="margin-right:2px;" /><i class="attached_image" title="Image"></i></span> -->
				<div class="event_ic">E</div></td>
                <td class="address m_no" onclick="newMap(37.0004163, 127.104195)"><p>대전 서구 괴정동 423-1 5층</p></td>
            <td class="open_time m_no"><p>월~목 10:30 ~ 20:00<br />금~일 10:30 ~ 20:30</p></td>								</tr><tr>
            <td class="title">
                    <a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=2215" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&document_srl=2215&amp;listStyle=viewer">
					헤드스파K 롯데백화점 대전프리미엄점	</a>
                    <!-- <span class="extraimages"><img src="http://headspak.com/modules/document/tpl/icons//file.gif" alt="file" title="file" style="margin-right:2px;" /><i class="attached_image" title="Image"></i></span> -->
				<div class="event_ic">E</div></td>
                <td class="address m_no" onclick="newMap(37.0004163, 127.104195)"><p>대전 서구 괴정동 423-1 8층</p></td>
            <td class="open_time m_no"><p>월~목 10:30 ~ 20:00<br />금~일 10:30 ~ 20:30</p></td>								</tr><tr>
				<td class="title">
				    <a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=462" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=462&amp;listStyle=viewer">
					헤드스파K 대전 반석점</a>
				<!-- <span class="extraimages"><img src="http://headspak.com/modules/document/tpl/icons//file.gif" alt="file" title="file" style="margin-right:2px;" /><i class="attached_image" title="Image"></i></span> -->
				</td>
				<td class="address m_no" onclick="newmap(36.3163214, 127.3526067)"><p>대전 유성구 반석로 23 1003호</p></td>						  <td class="open_time m_no"><p>월~금 10:00 ~ 20:30  토 10:00 ~ 18:00<br />(일요일 휴무)</p></td>						
                
            </tr>
        <tr>
                <td class="title">
                        <a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1413" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1413&amp;listStyle=viewer">
                            헤드스파K 평택 비전점</a>
                        <!-- <span class="extraimages"></span> -->
                </td>
				<td class="address m_no" onclick="newMap(37.0004163, 127.104195)"><p>경기도 평택시 비전동 1101-1 1층</p></td>						<td class="open_time m_no"><p>매일 10:00 ~ 20:00</p></td>
             		
            </tr><tr>
                <td class="title">
                    <a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1429" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1429&amp;listStyle=viewer">
                    헤드스파K 대전 대덕밸리점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
				<td class="address m_no" onclick="newMap(36.3935228, 127.406273)"><p>대전 유성구 문지동 653-2 유니스빌딩 3층</p></td>														<td class="open_time m_no"><p>월~금:10:00 ~ 22:00<br />
           토 :10:00 ~ 21:00<br />(일요일휴무)</p></td>
      		</tr><tr>
				<td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1431" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1431&amp;listStyle=viewer">
					헤드스파K 대전 둔산시청점</a>
                    <!-- <span class="extraimages"></span> -->
				</td>
				<td class="address m_no" onclick="newMap(36.3509516, 127.3881494)"><p> 대전 서구 둔산동 1453 대덕프라자 408호</p></td>		
                <td class="open_time m_no"><p>월,수,금 10:00 ~ 19:00  화,목 14:00 ~ 21:00<br />
                토 10:00 ~ 15:00<br />(일요일 휴무)</p></td>						
        
                </tr><tr>
				<td class="title">
				
				<a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1433" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1433&amp;listStyle=viewer">
					헤드스파 K 인천 부평점</a>
				<!-- <span class="extraimages"></span> -->
				</td>
				<td class="address m_no" onclick="newMap(37.4913867, 126.7267399)"><p>인천광역시 부평구 부평동 160-23 4층</p></td>						
        <td class="open_time m_no"><p>월~금 11:00 ~ 21:00  토~일 11:00 ~ 19:00<br />
             (첫째/셋째 토요일, 공휴일 휴무)</p></td>
          		
          </tr>
        <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1434" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1434&amp;listStyle=viewer">
					헤드스파K 남양주 다산점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>경기도 남양주시 다산동 6088-3 성산플레이스4 604호</p></td>
        <td class="open_time m_no"><p>월~금 10:00 ~ 20:00  토 10:00 ~ 16:00<br />
       (일요일, 공휴일 휴무)</p></td>		</tr><tr>
				<td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1677" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&amp;document_srl=1677&amp;listStyle=viewer">
				헤드스파K 세종 새롬점</a>
                 <!-- <span class="extraimages"><img src="http://headspak.com/modules/document/tpl/icons//new.gif" alt="new" title="new" style="margin-right:2px;" /></span> -->
				</td>
				<td class="address m_no"  onclick="newMap(37.6122148, 127.1650767)"><p>세종 새롬동 574 크리스마스빌딩 419호</p></td>
				<td class="open_time m_no"><p>월~토 10:00 ~ 20:00<br />(일요일 휴무)</p></td>
	<tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=1841" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&document_srl=1841">
					헤드스파K 진주 초전점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
		<td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>경상남도 진주시 초전동 1705-10 3층</p></td>
		<td class="open_time m_no"><p>월~금 09:30 ~ 22:00 토 08:00 ~ 17:30<br />(일요일, 공휴일 휴무)</p></td>		
	</tr>
         <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=2031" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&document_srl=2031">
					헤드스파K 충주 연수점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>충청북도 충주시 연수동 1576</p></td>
        <td class="open_time m_no"><p>매일 10:00 ~ 20:00<br /> </p></td>		</tr>
         <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2032" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2032">
					헤드스파K 서울 성신여대점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>서울특별시 성북구 동선동2가 84 301호</p></td>
        <td class="open_time m_no"><p>매일 09:00 ~ 23:00
<br /> </p></td>		
        </tr>
		 <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2033" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2033">
					헤드스파K 평택 서정점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>경기도 평택시 서정동 847-2 2층</p></td>
        <td class="open_time m_no"><p>매일 09:00 ~ 20:30<br /> </p></td>		</tr>
         <tr>
		 <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2108" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&page=2&document_srl=2033">
					헤드스파K 전주 효천점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>전라북도 전주시 완산구 천잠로63</p></td>
        <td class="open_time m_no"><p>평일 10:00 ~ 20:00 <br />(주일, 공휴일 휴무)</p></td>
         <tr>
		 <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=2133" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&document_srl=2133">
					헤드스파K 전주 효자점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>전라북도 전주시 완산구 효자동3가 1621-12</p></td>
        <td class="open_time m_no"><p>월~금 10:00 ~ 21:00 토 10:00 ~ 17:00<br />(일요일 휴무)</p></td>
         <tr>
		 <tr>
               <td class="title">
				<a href="http://headspak.com/index.php?mid=headspa_markets&document_srl=2236" class="hx" data-viewer="http://headspak.com/index.php?mid=headspa_markets&document_srl=2236">
					헤드스파K 인천 영종도점</a>
                    <!-- <span class="extraimages"></span> -->
                </td>
        <td class="address m_no" onclick="newMap(37.6122148, 127.1650767)"><p>인천광역시 중구 중산동 1876-13번지 스카이에비뉴1</p></td>
        <td class="open_time m_no"><p>월~토 10:00 ~ 21:00<br />(일요일 휴무)</p></td>
         <tr>
    </tbody>
</table><?php } ?>	
