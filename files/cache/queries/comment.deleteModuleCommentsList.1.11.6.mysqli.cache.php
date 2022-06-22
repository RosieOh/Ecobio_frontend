<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleCommentsList");
$query->setAction("delete");
$query->setPriority("");

${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->checkNotNull();
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>