<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCategory");
$query->setAction("delete");
$query->setPriority("");

${'category_srl3_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl3_argument'}->checkFilter('number');
${'category_srl3_argument'}->checkNotNull();
${'category_srl3_argument'}->createConditionValue();
if(!${'category_srl3_argument'}->isValid()) return ${'category_srl3_argument'}->getErrorMessage();
if(${'category_srl3_argument'} !== null) ${'category_srl3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>