<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl40_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl40_argument'}->createConditionValue();
if(!${'module_srl40_argument'}->isValid()) return ${'module_srl40_argument'}->getErrorMessage();
} else
${'module_srl40_argument'} = NULL;if(${'module_srl40_argument'} !== null) ${'module_srl40_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl41_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl41_argument'}->createConditionValue();
if(!${'member_srl41_argument'}->isValid()) return ${'member_srl41_argument'}->getErrorMessage();
} else
${'member_srl41_argument'} = NULL;if(${'member_srl41_argument'} !== null) ${'member_srl41_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress42_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress42_argument'}->createConditionValue();
if(!${'ipaddress42_argument'}->isValid()) return ${'ipaddress42_argument'}->getErrorMessage();
} else
${'ipaddress42_argument'} = NULL;if(${'ipaddress42_argument'} !== null) ${'ipaddress42_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl40_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl41_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress42_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>