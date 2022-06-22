<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAdminId");
$query->setAction("delete");
$query->setPriority("");

${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->checkNotNull();
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
} else
${'member_srl9_argument'} = NULL;if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_module_admins`', '`module_admins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>