<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleSkinVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->checkNotNull();
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_module_skins`', '`module_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>