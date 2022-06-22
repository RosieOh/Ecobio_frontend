<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl45_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl45_argument'}->checkFilter('number');
${'member_srl45_argument'}->checkNotNull();
if(!${'member_srl45_argument'}->isValid()) return ${'member_srl45_argument'}->getErrorMessage();
if(${'member_srl45_argument'} !== null) ${'member_srl45_argument'}->setColumnType('number');

${'point46_argument'} = new Argument('point', $args->{'point'});
${'point46_argument'}->checkFilter('number');
${'point46_argument'}->ensureDefaultValue('0');
${'point46_argument'}->checkNotNull();
if(!${'point46_argument'}->isValid()) return ${'point46_argument'}->getErrorMessage();
if(${'point46_argument'} !== null) ${'point46_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl45_argument'})
,new InsertExpression('`point`', ${'point46_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>