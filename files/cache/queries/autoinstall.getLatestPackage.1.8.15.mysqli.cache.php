<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLatestPackage");
$query->setAction("select");
$query->setPriority("");

${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('1');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('updatedate');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_autoinstall_packages`', '`packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>