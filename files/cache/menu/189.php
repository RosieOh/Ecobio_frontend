<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[961] = array("en"=>'',"ko"=>'',"jp"=>'',"zh-CN"=>'',"zh-TW"=>'',"fr"=>'',"de"=>'',"ru"=>'',"es"=>'',"tr"=>'',"vi"=>'',"mn"=>'',); $_menu_names[199] = array("en"=>'문의게시판',"ko"=>'문의게시판',"jp"=>'문의게시판',"zh-CN"=>'문의게시판',"zh-TW"=>'문의게시판',"fr"=>'문의게시판',"de"=>'문의게시판',"ru"=>'문의게시판',"es"=>'문의게시판',"tr"=>'문의게시판',"vi"=>'문의게시판',"mn"=>'문의게시판',); ; $menu->list = array(961=>array("node_srl" => 961, "parent_srl" => 0, "menu_name_key" => '', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[961][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','pop_up') : ""), "url" => (true ? 'pop_up' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("pop_up") && in_array(Context::get("mid"), array("pop_up")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("pop_up") && in_array(Context::get("mid"), array("pop_up")) ? $_menu_names[961][$lang_type] : $_menu_names[961][$lang_type]) : ""),),199=>array("node_srl" => 199, "parent_srl" => 0, "menu_name_key" => '문의게시판', "isShow" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged && 0)) ? true : false), "text" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged && 0)) ? $_menu_names[199][$lang_type] : ""), "href" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged && 0)) ? getSiteUrl('', '','mid','inquiry_board') : ""), "url" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged && 0)) ? 'inquiry_board' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("inquiry_board") && in_array(Context::get("mid"), array("inquiry_board")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged && 0)) ? (array("inquiry_board") && in_array(Context::get("mid"), array("inquiry_board")) ? $_menu_names[199][$lang_type] : $_menu_names[199][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>