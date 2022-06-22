<?php if(!defined("__XE__"))exit;?><header id="header">
	<div class="header_mxwidth">
		<div class="header_logo_wrap">
			<a href="<?php echo $__Context->layout_info->header_logo_link ?>">
				<?php if($__Context->layout_info->header_logo){ ?><img src="<?php echo $__Context->layout_info->header_logo ?>"><?php } ?>
				<?php if(!$__Context->layout_info->header_logo && $__Context->layout_info->header_text){ ?>
				<?php echo $__Context->layout_info->header_text ?>
				<?php }else if(!$__Context->layout_info->header_logo && !$__Context->layout_info->header_text){ ?>
				<span>GOHOSOLAR</span>
				<?php } ?>
			</a>
		</div>
		<nav id="header_menu_wrap">
			<ul class="mo_gnb">
				<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?>
					<li class="mo_depth1">
						<a<?php if($__Context->val1['list']){ ?> class="mo_depth_list1"<?php };
if(!$__Context->val1['list']){ ?> href="<?php echo $__Context->val1['href'] ?>"<?php };
if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val1['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['selected']){;
$__Context->_selected_menu = $__Context->val1;
} ?>
						<?php if($__Context->val1['list']){ ?><ul>
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li class="mo_depth2 <?php if($__Context->val2['list']){ ?>more<?php } ?>">
								<a<?php if($__Context->val2['list']){ ?> class="mo_depth_list2"<?php };
if(!$__Context->val2['list']){ ?> href="<?php echo $__Context->val2['href'] ?>"<?php };
if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val2['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
								<?php if($__Context->val2['list']){ ?><ul>
									<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li class="mo_depth3">
										<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val3['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
									</li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
						</ul><?php } ?>
					</li>
				<?php }} ?>
			</ul>
			<?php if($__Context->layout_info->member_use=='Y'){ ?>
			<!-- <ul class="add_menu_wrap">
				<?php if($__Context->layout_info->member_menu='Y' && !$__Context->is_logged){ ?><li class="add_menu member_btn_wrap"><a class="member_btn_link"><i class="fa fa-lock" aria-hidden="true"></i></a></li><?php } ?>
				<?php if($__Context->layout_info->member_menu='Y' && $__Context->is_logged){ ?><li class="add_menu member_btn_wrap"><a class="member_btn_link"><i class="xi-user-info"></i></a></li><?php } ?>
			</ul> -->
			<?php } ?>
		</nav>
		<nav id="mo_menu_wrap">
			<ul class="mo_menu">
				<li class="mo_menu"><a class="mo_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
		<ul class="pc_gnb">
			<?php if($__Context->GNB->list&&count($__Context->GNB->list))foreach($__Context->GNB->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?>
				<li class="depth1">
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val1['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
					<?php if($__Context->val1['selected']){;
$__Context->_selected_menu = $__Context->val1;
} ?>
					<?php if($__Context->val1['list']){ ?><ul>
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li class="depth2 <?php if($__Context->val2['list']){ ?>more<?php } ?>">
							<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val2['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
							<?php if($__Context->val2['list']){ ?><ul>
								<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li class="depth3">
									<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window'] == 'Y'){ ?> target="_blank"<?php };
if($__Context->val3['selected']){ ?> style="color:<?php echo $__Context->layout_info->point_color ?>"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
								</li><?php } ?>
							</ul><?php } ?>
						</li><?php } ?>
					</ul><?php } ?>
				</li>
			<?php }} ?>
		</ul>
		<div class="pc_lang">
			<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->lang_type == $__Context->key){ ?><button class="lang_btn"><img src="/layouts/Headspa_K/img/lang_<?php echo $__Context->key ?>.jpg"> <?php echo $__Context->val ?><i class="xi-angle-down pull-right"></i></button><?php }} ?>
			<ul class="gnb_lang_list">
				<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->lang_type != $__Context->key){ ?><li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>'); return false;"><img src="/layouts/Headspa_K/img/lang_<?php echo $__Context->key ?>.jpg" /> <?php echo $__Context->val ?></a></li><?php }} ?>
			</ul>
		</div>
		<div class="mo_lang">
			<a class="lang_btn_link" title="<?php echo $__Context->lang->cmd_multilingual ?>"><i class="xi-globus"></i></a>
		</div>
	</div>
</header>
<?php if($__Context->layout_info->member_use=='Y'){ ?>
<aside class="member_menu_wrap">
	<div class="member_menu_box flex_center">
		<div class="member_menu">
			<div class="member_menu_close"><i class="fa fa-times"></i></div>
			<?php if($__Context->layout_info->profile_desc){ ?><div class="member_profile_desc"><?php echo $__Context->layout_info->profile_desc ?></div><?php } ?>
			<?php if(!$__Context->is_logged){ ?><form action="<?php echo getUrl() ?>" method="post" autocomplete="off" class="member_login_form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="act" value="procMemberLogin" />
				<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
				<input type="hidden" name="xe_validator_id" value="layouts/xedition/layout/1" />
				<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="error_message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>"><p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p></div><?php } ?>
				<fieldset autocomplete="off">
					<div class="form_wrap">
						<div class="form flex">
							<input type="<?php if($__Context->identifierForm->name=='email_address'){ ?>email<?php }else{ ?>text<?php } ?>" name="user_id" id="uid" value="" placeholder="<?php if($__Context->identifierForm->name=='email_address'){;
echo $__Context->lang->email;
}else{;
echo $__Context->lang->user_id;
} ?>" required />
						</div>
						<div class="form flex">
							<input type="password" name="password" id="upw" value="" placeholder="<?php echo $__Context->lang->password ?>" required />
						</div>
						<div class="form flex">
							
						</div>
					</div>
					<div class="keep_login">
						<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');">
						<label class="chk_label" for="keepid_opt">
						</label>
						<span><?php echo $__Context->lang->keep_signed ?></span>
					</div>
					<button type="submit" class="login_submit"><?php echo $__Context->lang->cmd_login ?></button>
				</fieldset>
				<a href="<?php echo getUrl('act', 'dispMemberSignUpForm') ?>" class="login_submit"><?php echo $__Context->lang->cmd_signup ?></a>
			</form><?php } ?>
			<?php if($__Context->is_logged){ ?><div class="">
				<ul>
					<li><a href="/index.php?module=admin" class="admin_btn"><?php echo $__Context->lang->cmd_management ?></a></li>
				</ul>
				<ul<?php if($__Context->layout_info->menu_background_color){ ?> style="background-color:<?php echo $__Context->layout_info->menu_background_color ?>;"<?php } ?>>
					<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo getUrl('act', $__Context->key, 'member_srl', '', 'page', '') ?>"><?php echo Context::getLang($__Context->val) ?></a></li><?php } ?>
					<li><a href="<?php echo getUrl('act', 'dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
				</ul>
			</div><?php } ?>
		</div>
	</div>
</aside>
<?php } ?>
<aside class="lang_menu_wrap">
	<div class="lang_menu_box flex_center">
		<div class="lang_menu">
			<div class="lang_menu_close"><i class="xi-close"></i></div>
			<div class="lang_title"><h1>LANGUAGE</h1></div>
			<ul class="lang_list">
				<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li>
					<a<?php if($__Context->lang_type == $__Context->key){ ?> class="selected"<?php } ?> href="" onclick="doChangeLangType('<?php echo $__Context->key ?>'); return false;"><img src="/layouts/Headspa_K/img/lang/<?php echo $__Context->key ?>.png"> <?php echo $__Context->val ?></a>
				</li><?php } ?>
			</ul>
		</div>
	</div>
</aside>