<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl26_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl26_argument'}->createConditionValue();
if(!${'site_srl26_argument'}->isValid()) return ${'site_srl26_argument'}->getErrorMessage();
} else
${'site_srl26_argument'} = NULL;if(${'site_srl26_argument'} !== null) ${'site_srl26_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module27_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module27_argument'}->createConditionValue();
if(!${'module27_argument'}->isValid()) return ${'module27_argument'}->getErrorMessage();
} else
${'module27_argument'} = NULL;if(${'module27_argument'} !== null) ${'module27_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl26_argument,"equal")
,new ConditionWithArgument('`module`',$module27_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>