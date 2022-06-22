<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_module_skins`', '`module_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl10_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>