<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title3_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title3_argument'}->checkNotNull();
${'title3_argument'}->createConditionValue();
if(!${'title3_argument'}->isValid()) return ${'title3_argument'}->getErrorMessage();
if(${'title3_argument'} !== null) ${'title3_argument'}->setColumnType('varchar');

${'site_srl4_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl4_argument'}->ensureDefaultValue('0');
${'site_srl4_argument'}->createConditionValue();
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title3_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>