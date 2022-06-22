<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAlias");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->alias_srl)) {
${'alias_srl17_argument'} = new ConditionArgument('alias_srl', $args->alias_srl, 'equal');
${'alias_srl17_argument'}->checkFilter('number');
${'alias_srl17_argument'}->createConditionValue();
if(!${'alias_srl17_argument'}->isValid()) return ${'alias_srl17_argument'}->getErrorMessage();
} else
${'alias_srl17_argument'} = NULL;if(${'alias_srl17_argument'} !== null) ${'alias_srl17_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl18_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl18_argument'}->checkFilter('number');
${'document_srl18_argument'}->createConditionValue();
if(!${'document_srl18_argument'}->isValid()) return ${'document_srl18_argument'}->getErrorMessage();
} else
${'document_srl18_argument'} = NULL;if(${'document_srl18_argument'} !== null) ${'document_srl18_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl19_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl19_argument'}->checkFilter('number');
${'module_srl19_argument'}->createConditionValue();
if(!${'module_srl19_argument'}->isValid()) return ${'module_srl19_argument'}->getErrorMessage();
} else
${'module_srl19_argument'} = NULL;if(${'module_srl19_argument'} !== null) ${'module_srl19_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_document_aliases`', '`document_aliases`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`alias_srl`',$alias_srl17_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl18_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl19_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>