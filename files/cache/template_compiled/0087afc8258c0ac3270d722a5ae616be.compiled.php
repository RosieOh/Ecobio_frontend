<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/contactfree/skins/Inquiry_franchise/filter','insert.xml');$__xmlFilter->compile(); ?>
<!--#Meta:widgets/contactfree/skins/Inquiry_franchise/css/default.css--><?php $__tmp=array('widgets/contactfree/skins/Inquiry_franchise/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/contactfree/skins/Inquiry_franchise/js/contact.js--><?php $__tmp=array('widgets/contactfree/skins/Inquiry_franchise/js/contact.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<form id='contactus' action="./" method="post" onsubmit="return submit_request(this);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<fieldset>
	<input type="hidden" name="mid" value="<?php echo $__Context->widget_info->target_mid ?>" />
	<input type="hidden" name="password" value="<?php echo $__Context->rand_password ?>" />
	<input type="hidden" name="nick_name" value="" />
	<input type="hidden" name="title" value="" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="category_srl" value="0" />
	<h3 class="form_title">개인정보 수집 및 활용동의</h3>
	<div class="form_agree_wrap">
		<div class="agree_txt">
			1. 개인정보의 수집 및 이용 목적<br />
			가맹 관련 문의 확인 및 답변을 위한 연락통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.<br /><br />
			2. 처리하는 개인정보 항목<br />
			- 필수항목 : 이름, 연락처 (접속 IP 정보, 쿠키, 서비스 이용 기록, 접속 로그)<br />
			- 선택항목 : 이메일<br /><br />
			3. 개인정보의 처리 및 보유 기간<br />
			① 법령에 따른 개인정보 보유.이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유, 이용기간 내에서 개인정보를 처리, 보유합니다.<br />
			② 개인정보의 보유 기간은 5년입니다.
		</div>
		<div class="agree_chk_wrap">
			<input type="checkbox" name="agree" id="agree_chk" value="Y"><label class="agree_chk" for="agree_chk"></label><label for="agree_chk">개인정보취급방침에 동의합니다.</label>
		</div>
	</div>
	<div class="form_table">
		<div class="form_tr">
			<div class="form_th">성명</div>
			<div class="form_td"><input type="text" name="user_name" maxlength="50" size="30" placeholder="" value="" /></div>
		</div>
		<div class="form_tr">
			<div class="form_th">연락처</div>
			<div class="form_td">
				<select class="phone" name="number1">
					<option value="010">010</option>
					<option value="011">011</option>
					<option value="016">016</option>
					<option value="019">019</option>
				</select> - 
				<input type="text" class="phone" name="number2" maxlength="50" size="30" placeholder="" value="" /> - 
				<input type="text" class="phone" name="number3" maxlength="50" size="30" placeholder="" value="" />
			</div>
		</div>
		<div class="form_tr">
			<div class="form_th">E-mail</div>
			<div class="form_td">
				<input type="text" class="mail" name="email_address1" maxlength="80" size="30" placeholder="" value="" /> @ 
				<input type="text" class="mail" name="email_address2" maxlength="80" size="30" placeholder="" value="" />
			</div>
		</div>
		<div class="form_tr">
			<div class="form_th">문의 내용</div>
			<div class="form_td"><textarea name="inquiry" cols="50" rows="10" placeholder=""></textarea></div>
		</div>
	</div>
	<div class="form_container">
		<div class="submit_btn_wrap">
			<input type="submit" value="등록하기" alt="SUBMIT" id="submit_btn" />
		</div>
	</div>
	<script>
		jQuery(function($){
			$('input[type="submit"]').click(function(){
				if($('#agree_chk').is(':checked')){
				}else{
					alert('개인정보취급방침에 동의해야 합니다.');
					return false;
				}
			})
		})
	</script>
</fieldset>
</form>
<?php }else if($__Context->lang_type == 'en'){ ?>
<form id='contactus' action="./" method="post" onsubmit="return submit_request(this);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<fieldset>
	<input type="hidden" name="mid" value="<?php echo $__Context->widget_info->target_mid ?>" />
	<input type="hidden" name="password" value="<?php echo $__Context->rand_password ?>" />
	<input type="hidden" name="nick_name" value="" />
	<input type="hidden" name="title" value="" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="category_srl" value="0" />
	<h3 class="form_title">Consent to collection and use of personal information</h3>
	<div class="form_agree_wrap">
		<div class="agree_txt">
			1. Purpose of collection and use of personal information<br />
			We process personal information for the purpose of contact notification for confirmation and response of affiliate-related inquiries and notification of processing results.<br /><br />
			2. Items of personal information processed<br />
			-Required items: name, contact information (access IP information, cookies, service use record, access log)<br />
			-Optional: Email<br /><br />
			3. Processing and retention period of personal information<br />
			① We process and retain personal information within the period of retention and use of personal information in accordance with laws or the retention and use period of personal information agreed upon when collecting personal information from the information subject.<br />
			② The retention period of personal information is 5 years.
		</div>
		<div class="agree_chk_wrap">
			<input type="checkbox" name="agree" id="agree_chk" value="Y"><label class="agree_chk" for="agree_chk"></label><label for="agree_chk">I agree to the privacy policy.</label>
		</div>
	</div>
	<div class="form_table">
		<div class="form_tr">
			<div class="form_th">Name</div>
			<div class="form_td"><input type="text" name="user_name" maxlength="50" size="30" placeholder="" value="" /></div>
		</div>
		<div class="form_tr">
			<div class="form_th">Tel</div>
			<div class="form_td">
				<select class="phone" name="number1">
					<option value="010">010</option>
					<option value="011">011</option>
					<option value="016">016</option>
					<option value="019">019</option>
				</select> - 
				<input type="text" class="phone" name="number2" maxlength="50" size="30" placeholder="" value="" /> - 
				<input type="text" class="phone" name="number3" maxlength="50" size="30" placeholder="" value="" />
			</div>
		</div>
		<div class="form_tr">
			<div class="form_th">E-mail</div>
			<div class="form_td">
				<input type="text" class="mail" name="email_address1" maxlength="80" size="30" placeholder="" value="" /> @ 
				<input type="text" class="mail" name="email_address2" maxlength="80" size="30" placeholder="" value="" />
			</div>
		</div>
		<div class="form_tr">
			<div class="form_th">Inquiry</div>
			<div class="form_td"><textarea name="inquiry" cols="50" rows="10" placeholder=""></textarea></div>
		</div>
	</div>
	<div class="form_container">
		<div class="submit_btn_wrap">
			<input type="submit" value="SEND" alt="SUBMIT" id="submit_btn" />
		</div>
	</div>
	<script>
		jQuery(function($){
			$('input[type="submit"]').click(function(){
				if($('#agree_chk').is(':checked')){
				}else{
					alert('You must agree to the privacy policy.');
					return false;
				}
			})
		})
	</script>
</fieldset>
</form>
<?php } ?>