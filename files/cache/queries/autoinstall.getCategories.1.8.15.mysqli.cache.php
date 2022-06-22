<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCategories");
$query->setAction("select");
$query->setPriority("");

${'list_order15_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order15_argument'}->ensureDefaultValue('list_order');
if(!${'list_order15_argument'}->isValid()) return ${'list_order15_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order15_argument'}, "asc")
));
$query->setLimit();
return $query; ?>