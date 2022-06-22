<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl1_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl1_argument'}->checkFilter('number');
${'menu_item_srl1_argument'}->checkNotNull();
if(!${'menu_item_srl1_argument'}->isValid()) return ${'menu_item_srl1_argument'}->getErrorMessage();
if(${'menu_item_srl1_argument'} !== null) ${'menu_item_srl1_argument'}->setColumnType('number');

${'parent_srl2_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl2_argument'}->checkFilter('number');
${'parent_srl2_argument'}->ensureDefaultValue('0');
if(!${'parent_srl2_argument'}->isValid()) return ${'parent_srl2_argument'}->getErrorMessage();
if(${'parent_srl2_argument'} !== null) ${'parent_srl2_argument'}->setColumnType('number');

${'menu_srl3_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl3_argument'}->checkFilter('number');
${'menu_srl3_argument'}->checkNotNull();
if(!${'menu_srl3_argument'}->isValid()) return ${'menu_srl3_argument'}->getErrorMessage();
if(${'menu_srl3_argument'} !== null) ${'menu_srl3_argument'}->setColumnType('number');

${'name4_argument'} = new Argument('name', $args->{'name'});
${'name4_argument'}->checkNotNull();
if(!${'name4_argument'}->isValid()) return ${'name4_argument'}->getErrorMessage();
if(${'name4_argument'} !== null) ${'name4_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc5_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc5_argument'}->isValid()) return ${'desc5_argument'}->getErrorMessage();
} else
${'desc5_argument'} = NULL;if(${'desc5_argument'} !== null) ${'desc5_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url6_argument'} = new Argument('url', $args->{'url'});
if(!${'url6_argument'}->isValid()) return ${'url6_argument'}->getErrorMessage();
} else
${'url6_argument'} = NULL;if(${'url6_argument'} !== null) ${'url6_argument'}->setColumnType('varchar');

${'is_shortcut7_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut7_argument'}->ensureDefaultValue('N');
${'is_shortcut7_argument'}->checkNotNull();
if(!${'is_shortcut7_argument'}->isValid()) return ${'is_shortcut7_argument'}->getErrorMessage();
if(${'is_shortcut7_argument'} !== null) ${'is_shortcut7_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window8_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window8_argument'}->isValid()) return ${'open_window8_argument'}->getErrorMessage();
} else
${'open_window8_argument'} = NULL;if(${'open_window8_argument'} !== null) ${'open_window8_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand9_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand9_argument'}->isValid()) return ${'expand9_argument'}->getErrorMessage();
} else
${'expand9_argument'} = NULL;if(${'expand9_argument'} !== null) ${'expand9_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn10_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn10_argument'}->isValid()) return ${'normal_btn10_argument'}->getErrorMessage();
} else
${'normal_btn10_argument'} = NULL;if(${'normal_btn10_argument'} !== null) ${'normal_btn10_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn11_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn11_argument'}->isValid()) return ${'hover_btn11_argument'}->getErrorMessage();
} else
${'hover_btn11_argument'} = NULL;if(${'hover_btn11_argument'} !== null) ${'hover_btn11_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn12_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn12_argument'}->isValid()) return ${'active_btn12_argument'}->getErrorMessage();
} else
${'active_btn12_argument'} = NULL;if(${'active_btn12_argument'} !== null) ${'active_btn12_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls13_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls13_argument'}->isValid()) return ${'group_srls13_argument'}->getErrorMessage();
} else
${'group_srls13_argument'} = NULL;if(${'group_srls13_argument'} !== null) ${'group_srls13_argument'}->setColumnType('text');

${'listorder14_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder14_argument'}->checkNotNull();
if(!${'listorder14_argument'}->isValid()) return ${'listorder14_argument'}->getErrorMessage();
if(${'listorder14_argument'} !== null) ${'listorder14_argument'}->setColumnType('number');

${'regdate15_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate15_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate15_argument'}->isValid()) return ${'regdate15_argument'}->getErrorMessage();
if(${'regdate15_argument'} !== null) ${'regdate15_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl1_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl2_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl3_argument'})
,new InsertExpression('`name`', ${'name4_argument'})
,new InsertExpression('`desc`', ${'desc5_argument'})
,new InsertExpression('`url`', ${'url6_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut7_argument'})
,new InsertExpression('`open_window`', ${'open_window8_argument'})
,new InsertExpression('`expand`', ${'expand9_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn10_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn11_argument'})
,new InsertExpression('`active_btn`', ${'active_btn12_argument'})
,new InsertExpression('`group_srls`', ${'group_srls13_argument'})
,new InsertExpression('`listorder`', ${'listorder14_argument'})
,new InsertExpression('`regdate`', ${'regdate15_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>