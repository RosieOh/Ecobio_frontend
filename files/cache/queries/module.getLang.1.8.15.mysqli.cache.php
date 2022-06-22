<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLang");
$query->setAction("select");
$query->setPriority("");

${'site_srl19_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl19_argument'}->checkFilter('number');
${'site_srl19_argument'}->checkNotNull();
${'site_srl19_argument'}->createConditionValue();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name20_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name20_argument'}->createConditionValue();
if(!${'name20_argument'}->isValid()) return ${'name20_argument'}->getErrorMessage();
} else
${'name20_argument'} = NULL;if(${'name20_argument'} !== null) ${'name20_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_lang`', '`lang`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl19_argument,"equal")
,new ConditionWithArgument('`name`',$name20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>