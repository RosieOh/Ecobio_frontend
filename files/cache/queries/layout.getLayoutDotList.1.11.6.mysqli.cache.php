<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl21_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl21_argument'}->checkFilter('number');
${'site_srl21_argument'}->ensureDefaultValue('0');
${'site_srl21_argument'}->checkNotNull();
${'site_srl21_argument'}->createConditionValue();
if(!${'site_srl21_argument'}->isValid()) return ${'site_srl21_argument'}->getErrorMessage();
if(${'site_srl21_argument'} !== null) ${'site_srl21_argument'}->setColumnType('number');

${'layout_type22_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type22_argument'}->ensureDefaultValue('P');
${'layout_type22_argument'}->createConditionValue();
if(!${'layout_type22_argument'}->isValid()) return ${'layout_type22_argument'}->getErrorMessage();
if(${'layout_type22_argument'} !== null) ${'layout_type22_argument'}->setColumnType('char');

${'layout23_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout23_argument'}->ensureDefaultValue('.');
${'layout23_argument'}->createConditionValue();
if(!${'layout23_argument'}->isValid()) return ${'layout23_argument'}->getErrorMessage();
if(${'layout23_argument'} !== null) ${'layout23_argument'}->setColumnType('varchar');

${'sort_index24_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index24_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index24_argument'}->isValid()) return ${'sort_index24_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl21_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type22_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout23_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index24_argument'}, "desc")
));
$query->setLimit();
return $query; ?>