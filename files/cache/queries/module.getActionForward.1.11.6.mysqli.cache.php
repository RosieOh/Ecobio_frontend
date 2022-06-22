<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act49_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act49_argument'}->createConditionValue();
if(!${'act49_argument'}->isValid()) return ${'act49_argument'}->getErrorMessage();
} else
${'act49_argument'} = NULL;if(${'act49_argument'} !== null) ${'act49_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act49_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>