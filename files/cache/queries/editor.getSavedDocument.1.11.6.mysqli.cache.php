<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl39_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl39_argument'}->createConditionValue();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
} else
${'module_srl39_argument'} = NULL;if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl40_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl40_argument'}->createConditionValue();
if(!${'member_srl40_argument'}->isValid()) return ${'member_srl40_argument'}->getErrorMessage();
} else
${'member_srl40_argument'} = NULL;if(${'member_srl40_argument'} !== null) ${'member_srl40_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress41_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress41_argument'}->createConditionValue();
if(!${'ipaddress41_argument'}->isValid()) return ${'ipaddress41_argument'}->getErrorMessage();
} else
${'ipaddress41_argument'} = NULL;if(${'ipaddress41_argument'} !== null) ${'ipaddress41_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key42_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key42_argument'}->createConditionValue();
if(!${'certify_key42_argument'}->isValid()) return ${'certify_key42_argument'}->getErrorMessage();
} else
${'certify_key42_argument'} = NULL;if(${'certify_key42_argument'} !== null) ${'certify_key42_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl39_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl40_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress41_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key42_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>