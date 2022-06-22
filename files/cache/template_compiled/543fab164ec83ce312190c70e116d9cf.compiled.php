<?php if(!defined("__XE__"))exit;?><div class="wid_sli_wrap">
    <div class="wid_nav" id="wid_prev"><i class="xi-arrow-left"></i></div>
    <div class="wid_nav" id="wid_next"><i class="xi-arrow-right"></i></div>
    <div class="swiper-container" id="wid_sli">
        <div class="swiper-wrapper">
        <?php $__Context->_idx=0 ?>
        <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>        
        <div class="swiper-slide wid_sli"<?php if($__Context->_idx >= $__Context->widget_info->list_count){ ?> style="display:none"<?php } ?>>
            <div class="wid_sli_box">
                <h4><a href="<?php echo getSiteUrl($__Context->item->domain, '', 'mid', $__Context->item->get('mid')) ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getBrowserTitle() ?></a></h4>
                <h3><a href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a></h3>
                <p><?php echo $__Context->item->getContent() ?></p>
                <p class="date"><?php echo $__Context->item->getRegdate("Y-m-d") ?></p>
            </div>
        </div>
        <?php $__Context->_idx++ ?>
        <?php } ?>
        </div>
    </div>
</div>