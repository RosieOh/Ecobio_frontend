<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl2_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl2_argument'}->checkFilter('number');
${'category_srl2_argument'}->checkNotNull();
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');

${'parent_srl3_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl3_argument'}->checkFilter('number');
${'parent_srl3_argument'}->checkNotNull();
if(!${'parent_srl3_argument'}->isValid()) return ${'parent_srl3_argument'}->getErrorMessage();
if(${'parent_srl3_argument'} !== null) ${'parent_srl3_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title4_argument'} = new Argument('title', $args->{'title'});
if(!${'title4_argument'}->isValid()) return ${'title4_argument'}->getErrorMessage();
} else
${'title4_argument'} = NULL;if(${'title4_argument'} !== null) ${'title4_argument'}->setColumnType('varchar');

${'list_order5_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order5_argument'}->checkFilter('number');
${'list_order5_argument'}->checkNotNull();
if(!${'list_order5_argument'}->isValid()) return ${'list_order5_argument'}->getErrorMessage();
if(${'list_order5_argument'} !== null) ${'list_order5_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl2_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl3_argument'})
,new InsertExpression('`title`', ${'title4_argument'})
,new InsertExpression('`list_order`', ${'list_order5_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>