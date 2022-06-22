<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleTags");
$query->setAction("delete");
$query->setPriority("");

${'module_srl25_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl25_argument'}->checkFilter('number');
${'module_srl25_argument'}->checkNotNull();
${'module_srl25_argument'}->createConditionValue();
if(!${'module_srl25_argument'}->isValid()) return ${'module_srl25_argument'}->getErrorMessage();
if(${'module_srl25_argument'} !== null) ${'module_srl25_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl25_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>