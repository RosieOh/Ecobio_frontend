<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
} else
${'site_srl8_argument'} = NULL;if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module9_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module9_argument'}->createConditionValue();
if(!${'module9_argument'}->isValid()) return ${'module9_argument'}->getErrorMessage();
} else
${'module9_argument'} = NULL;if(${'module9_argument'} !== null) ${'module9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal")
,new ConditionWithArgument('`module`',$module9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>