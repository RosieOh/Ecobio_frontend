<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module6_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module6_argument'}->checkNotNull();
${'module6_argument'}->createConditionValue();
if(!${'module6_argument'}->isValid()) return ${'module6_argument'}->getErrorMessage();
if(${'module6_argument'} !== null) ${'module6_argument'}->setColumnType('varchar');

${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl7_argument'}->checkNotNull();
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`HeadspaK_new_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module6_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>