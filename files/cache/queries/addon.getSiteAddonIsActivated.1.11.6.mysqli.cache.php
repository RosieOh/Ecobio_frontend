<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl27_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl27_argument'}->checkNotNull();
${'site_srl27_argument'}->createConditionValue();
if(!${'site_srl27_argument'}->isValid()) return ${'site_srl27_argument'}->getErrorMessage();
if(${'site_srl27_argument'} !== null) ${'site_srl27_argument'}->setColumnType('number');

${'addon28_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon28_argument'}->checkNotNull();
${'addon28_argument'}->createConditionValue();
if(!${'addon28_argument'}->isValid()) return ${'addon28_argument'}->getErrorMessage();
if(${'addon28_argument'} !== null) ${'addon28_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`HeadspaK_new_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl27_argument,"equal")
,new ConditionWithArgument('`addon`',$addon28_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>