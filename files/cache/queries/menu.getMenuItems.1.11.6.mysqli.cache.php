<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl5_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl5_argument'}->checkFilter('number');
${'menu_srl5_argument'}->checkNotNull();
${'menu_srl5_argument'}->createConditionValue();
if(!${'menu_srl5_argument'}->isValid()) return ${'menu_srl5_argument'}->getErrorMessage();
if(${'menu_srl5_argument'} !== null) ${'menu_srl5_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl6_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl6_argument'}->checkFilter('number');
${'parent_srl6_argument'}->createConditionValue();
if(!${'parent_srl6_argument'}->isValid()) return ${'parent_srl6_argument'}->getErrorMessage();
} else
${'parent_srl6_argument'} = NULL;if(${'parent_srl6_argument'} !== null) ${'parent_srl6_argument'}->setColumnType('number');

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl5_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "desc")
));
$query->setLimit();
return $query; ?>