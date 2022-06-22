<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl7_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl7_argument'}->createConditionValue();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
} else
${'category_srl7_argument'} = NULL;if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList8_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList8_argument'}->createConditionValue();
if(!${'statusList8_argument'}->isValid()) return ${'statusList8_argument'}->getErrorMessage();
} else
${'statusList8_argument'} = NULL;if(${'statusList8_argument'} !== null) ${'statusList8_argument'}->setColumnType('varchar');

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index9_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index9_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index9_argument'}->isValid()) return ${'sort_index9_argument'}->getErrorMessage();

${'order_type10_argument'} = new SortArgument('order_type10', $args->order_type);
${'order_type10_argument'}->ensureDefaultValue('asc');
if(!${'order_type10_argument'}->isValid()) return ${'order_type10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl6_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList8_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index9_argument'}, $order_type10_argument)
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>