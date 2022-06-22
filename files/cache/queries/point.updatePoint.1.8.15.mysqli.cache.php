<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point8_argument'} = new Argument('point', $args->{'point'});
if(!${'point8_argument'}->isValid()) return ${'point8_argument'}->getErrorMessage();
} else
${'point8_argument'} = NULL;if(${'point8_argument'} !== null) ${'point8_argument'}->setColumnType('number');

${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point8_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>