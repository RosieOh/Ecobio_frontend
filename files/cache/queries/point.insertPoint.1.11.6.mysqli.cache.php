<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl8_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl8_argument'}->checkFilter('number');
${'member_srl8_argument'}->checkNotNull();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');

${'point9_argument'} = new Argument('point', $args->{'point'});
${'point9_argument'}->checkFilter('number');
${'point9_argument'}->ensureDefaultValue('0');
${'point9_argument'}->checkNotNull();
if(!${'point9_argument'}->isValid()) return ${'point9_argument'}->getErrorMessage();
if(${'point9_argument'} !== null) ${'point9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl8_argument'})
,new InsertExpression('`point`', ${'point9_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>