<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl47_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl47_argument'}->checkFilter('number');
${'document_srl47_argument'}->checkNotNull();
${'document_srl47_argument'}->createConditionValue();
if(!${'document_srl47_argument'}->isValid()) return ${'document_srl47_argument'}->getErrorMessage();
if(${'document_srl47_argument'} !== null) ${'document_srl47_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl47_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>