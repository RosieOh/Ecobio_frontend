<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopupList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->popup_conn_srl)) {
${'popup_conn_srl1_argument'} = new ConditionArgument('popup_conn_srl', $args->popup_conn_srl, 'equal');
${'popup_conn_srl1_argument'}->createConditionValue();
if(!${'popup_conn_srl1_argument'}->isValid()) return ${'popup_conn_srl1_argument'}->getErrorMessage();
} else
${'popup_conn_srl1_argument'} = NULL;if(${'popup_conn_srl1_argument'} !== null) ${'popup_conn_srl1_argument'}->setColumnType('number');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('popup_conn_srl');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`pop_ups`.*')
,new SelectExpression('`target_modules`.`mid`', '`target_mid`')
));
$query->setTables(array(
new Table('`HeadspaK_new_pop_ups`', '`pop_ups`')
,new Table('`HeadspaK_new_modules`', '`target_modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`pop_ups`.`popup_conn_srl`',$popup_conn_srl1_argument,"equal")
,new ConditionWithoutArgument('`target_modules`.`module_srl`','`pop_ups`.`target_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>