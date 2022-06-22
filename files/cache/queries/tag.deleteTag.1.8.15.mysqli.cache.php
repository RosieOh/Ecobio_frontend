<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl49_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl49_argument'}->checkFilter('number');
${'document_srl49_argument'}->checkNotNull();
${'document_srl49_argument'}->createConditionValue();
if(!${'document_srl49_argument'}->isValid()) return ${'document_srl49_argument'}->getErrorMessage();
if(${'document_srl49_argument'} !== null) ${'document_srl49_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl49_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>