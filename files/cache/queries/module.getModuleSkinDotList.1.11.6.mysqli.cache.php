<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin26_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin26_argument'}->ensureDefaultValue('.');
${'skin26_argument'}->createConditionValue();
if(!${'skin26_argument'}->isValid()) return ${'skin26_argument'}->getErrorMessage();
if(${'skin26_argument'} !== null) ${'skin26_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`HeadspaK_new_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin26_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>