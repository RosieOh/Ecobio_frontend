<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateListOrder");
$query->setAction("update");
$query->setPriority("");

${'change_order1_argument'} = new Argument('change_order', $args->{'change_order'});
${'change_order1_argument'}->checkNotNull();
if(!${'change_order1_argument'}->isValid()) return ${'change_order1_argument'}->getErrorMessage();
if(${'change_order1_argument'} !== null) ${'change_order1_argument'}->setColumnType('number');

${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->checkNotNull();
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`list_order`', ${'change_order1_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>