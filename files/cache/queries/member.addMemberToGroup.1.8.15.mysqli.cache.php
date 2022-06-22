<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl2_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl2_argument'}->checkNotNull();
if(!${'group_srl2_argument'}->isValid()) return ${'group_srl2_argument'}->getErrorMessage();
if(${'group_srl2_argument'} !== null) ${'group_srl2_argument'}->setColumnType('number');

${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl3_argument'}->checkNotNull();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'site_srl4_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl4_argument'}->ensureDefaultValue('0');
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');

${'regdate5_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate5_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl2_argument'})
,new InsertExpression('`member_srl`', ${'member_srl3_argument'})
,new InsertExpression('`site_srl`', ${'site_srl4_argument'})
,new InsertExpression('`regdate`', ${'regdate5_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>