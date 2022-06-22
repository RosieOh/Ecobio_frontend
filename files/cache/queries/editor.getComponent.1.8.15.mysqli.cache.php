<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComponent");
$query->setAction("select");
$query->setPriority("");

${'component_name33_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name33_argument'}->checkNotNull();
${'component_name33_argument'}->createConditionValue();
if(!${'component_name33_argument'}->isValid()) return ${'component_name33_argument'}->getErrorMessage();
if(${'component_name33_argument'} !== null) ${'component_name33_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name33_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>