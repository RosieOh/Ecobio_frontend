<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePopupConn");
$query->setAction("delete");
$query->setPriority("");

${'popup_conn_srl1_argument'} = new ConditionArgument('popup_conn_srl', $args->popup_conn_srl, 'equal');
${'popup_conn_srl1_argument'}->checkFilter('number');
${'popup_conn_srl1_argument'}->checkNotNull();
${'popup_conn_srl1_argument'}->createConditionValue();
if(!${'popup_conn_srl1_argument'}->isValid()) return ${'popup_conn_srl1_argument'}->getErrorMessage();
if(${'popup_conn_srl1_argument'} !== null) ${'popup_conn_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_pop_ups`', '`pop_ups`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`popup_conn_srl`',$popup_conn_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>