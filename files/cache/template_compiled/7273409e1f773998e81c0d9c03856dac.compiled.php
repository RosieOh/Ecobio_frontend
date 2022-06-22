<?php if(!defined("__XE__"))exit;
if($__Context->widget_info->page_count || count($__Context->widget_info->tab)){ ?><!--#Meta:widgets/content/skins/headspa/js/content_widget.js--><?php $__tmp=array('widgets/content/skins/headspa/js/content_widget.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->colorset != 'layout'){ ?><!--#Meta:widgets/content/skins/headspa/css/widget.css--><?php $__tmp=array('widgets/content/skins/headspa/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<div class="widgetContainer<?php if($__Context->colorset=='black'){ ?> black<?php } ?>">
    <?php if($__Context->widget_info->tab_type  == "tab_left"){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/headspa','_tab_left.html') ?>
    <?php }elseif($__Context->widget_info->tab_type == "tab_top"){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/headspa','_tab_top.html') ?>
    <?php }else{ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/content/skins/headspa','_tab_none.html') ?>
    <?php } ?>
</div>
