<?php if(!defined("__XE__"))exit;?><script id="javascript-sdk" src="//developers.kakao.com/sdk/js/kakao.js"></script>
<div class="rd_var">
	<?php if(!$__Context->mi->et_var=='2' && $__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><div class="ic_wrap">
		<div class="ic_lf">
			<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->eid=='insta_address' && $__Context->oDocument->getExtraEidValue('insta_address')){ ?><a class="ic_03" href="https://www.instagram.com/<?php echo $__Context->oDocument->getExtraEidValue('insta_address') ?>" target="_blank"><i class="xi-instagram"></i></a><?php } ?>
			<?php if($__Context->val->eid=='blog_address' && $__Context->oDocument->getExtraEidValue('blog_address')){ ?><a class="ic_04" href="https://blog.naver.com/<?php echo $__Context->oDocument->getExtraEidValue('blog_address') ?>" target="_blank"><i class="xi-naver"></i></a><?php } ?>
			<?php if($__Context->val->eid=='kakao' && $__Context->oDocument->getExtraEidValue('kakao')){ ?><a class="ic_02" href="<?php echo $__Context->oDocument->getExtraEidValue('kakao') ?>" target="_blank"><i class="xi-kakaotalk"></i></a><?php } ?>
			<?php } ?>
		</div>
		<div class="ic_rt">
			<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->lang_type == 'ko'){ ?>
			<?php if($__Context->val->eid=='homepage_address' && $__Context->oDocument->getExtraEidValue('homepage_address')){ ?><a class="ic_05" href="<?php echo $__Context->oDocument->getExtraEidValue('homepage_address') ?>" target="_blank">홈페이지 보기 <i class="xi-paper-plane"></i></a><?php } ?>
			<?php if($__Context->val->eid=='reserv_address' && $__Context->oDocument->getExtraEidValue('reserv_address')){ ?><a class="ic_05" href="<?php echo $__Context->oDocument->getExtraEidValue('reserv_address') ?>" target="_blank">예약하러 가기 <i class="xi-paper-plane"></i></a><?php } ?>
			<?php }else if($__Context->lang_type == 'en'){ ?>
			<?php if($__Context->val->eid=='homepage_address' && $__Context->oDocument->getExtraEidValue('homepage_address')){ ?><a class="ic_05" href="<?php echo $__Context->oDocument->getExtraEidValue('homepage_address') ?>" target="_blank">Go website <i class="xi-paper-plane"></i></a><?php } ?>
			<?php if($__Context->val->eid=='reserv_address' && $__Context->oDocument->getExtraEidValue('reserv_address')){ ?><a class="ic_05" href="<?php echo $__Context->oDocument->getExtraEidValue('reserv_address') ?>" target="_blank">Make reservation <i class="xi-paper-plane"></i></a><?php } ?>
			<?php } ?>
			<?php } ?>
		</div>
	</div><?php } ?>
	<?php if(!$__Context->mi->et_var && $__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted())){ ?><table border="0" cellpadding="0" cellspacing="0" class="var_table">
		<colgroup>
			<col width="100px" />
			<col width="50%" />
			<col width="100px" />
			<col width="50%" />
		</colgroup>
		<tbody>
			<tr>
				<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->eid=='market_name'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->val->eid=='market_name'){ ?><td class="cont"><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php if($__Context->val->eid=='open_time'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->val->eid=='open_time'){ ?><td class="cont"><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php } ?>
			</tr>
			<tr>
				<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->eid=='address'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->lang_type == 'ko'){ ?>
				<?php if($__Context->val->eid=='address'){ ?><td class="cont"><?php if($__Context->oDocument->getExtraEidValue('zipcode')){ ?>[<?php echo $__Context->oDocument->getExtraEidValue('zipcode') ?>]<?php } ?> <?php echo $__Context->oDocument->getExtraEidValue('address') ?> <?php echo $__Context->oDocument->getExtraEidValue('address_add') ?></td><?php } ?>
				<?php }else if($__Context->lang_type == 'en'){ ?>
				<?php if($__Context->val->eid=='address'){ ?><td class="cont"><?php if($__Context->oDocument->getExtraEidValue('zipcode')){ ?>[<?php echo $__Context->oDocument->getExtraEidValue('zipcode') ?>]<?php } ?> <?php echo $__Context->oDocument->getExtraEidValue('address_add') ?>, <?php echo $__Context->oDocument->getExtraEidValue('address') ?></td><?php } ?>
				<?php } ?>
				<?php if($__Context->val->eid=='phone_no'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->val->eid=='phone_no'){ ?><td class="cont">
					<?php if(htmlspecialchars($__Context->oDocument->getExtraEidValue('phone_no'))){ ?>
					<?php echo htmlspecialchars($__Context->oDocument->getExtraEidValue('phone_no')) ?>
					<?php } ?>
				</td><?php } ?>
				<?php } ?>
			</tr>
			<tr>
				<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->eid=='detail_etc'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->val->eid=='detail_etc'){ ?><td colspan="3" class="cont"><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php } ?>
			</tr>
			<tr>
				<?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() AS $__Context->key=>$__Context->val){ ?>
				<?php if($__Context->val->eid=='facility'){ ?><th class="title"><h3><?php echo $__Context->val->name ?></h3></th><?php } ?>
				<?php if($__Context->val->eid=='facility'){ ?><td colspan="3" class="cont"><?php echo $__Context->val->getValueHTML() ?></td><?php } ?>
				<?php } ?>
			</tr>
		</tbody>
	</table><?php } ?>
</div>