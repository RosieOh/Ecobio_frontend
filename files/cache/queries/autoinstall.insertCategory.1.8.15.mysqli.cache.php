<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl10_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl10_argument'}->checkFilter('number');
${'category_srl10_argument'}->checkNotNull();
if(!${'category_srl10_argument'}->isValid()) return ${'category_srl10_argument'}->getErrorMessage();
if(${'category_srl10_argument'} !== null) ${'category_srl10_argument'}->setColumnType('number');

${'parent_srl11_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl11_argument'}->checkFilter('number');
${'parent_srl11_argument'}->checkNotNull();
if(!${'parent_srl11_argument'}->isValid()) return ${'parent_srl11_argument'}->getErrorMessage();
if(${'parent_srl11_argument'} !== null) ${'parent_srl11_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title12_argument'} = new Argument('title', $args->{'title'});
if(!${'title12_argument'}->isValid()) return ${'title12_argument'}->getErrorMessage();
} else
${'title12_argument'} = NULL;if(${'title12_argument'} !== null) ${'title12_argument'}->setColumnType('varchar');

${'list_order13_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order13_argument'}->checkFilter('number');
${'list_order13_argument'}->checkNotNull();
if(!${'list_order13_argument'}->isValid()) return ${'list_order13_argument'}->getErrorMessage();
if(${'list_order13_argument'} !== null) ${'list_order13_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl10_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl11_argument'})
,new InsertExpression('`title`', ${'title12_argument'})
,new InsertExpression('`list_order`', ${'list_order13_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>