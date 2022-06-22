<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status14_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status14_argument'}->createConditionValue();
if(!${'status14_argument'}->isValid()) return ${'status14_argument'}->getErrorMessage();
} else
${'status14_argument'} = NULL;if(${'status14_argument'} !== null) ${'status14_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
} else
${'module_srl15_argument'} = NULL;if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl16_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl16_argument'}->checkFilter('number');
${'document_srl16_argument'}->createConditionValue();
if(!${'document_srl16_argument'}->isValid()) return ${'document_srl16_argument'}->getErrorMessage();
} else
${'document_srl16_argument'} = NULL;if(${'document_srl16_argument'} !== null) ${'document_srl16_argument'}->setColumnType('number');

${'list_count18_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count18_argument'}->ensureDefaultValue('20');
if(!${'list_count18_argument'}->isValid()) return ${'list_count18_argument'}->getErrorMessage();

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status14_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl15_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl16_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count18_argument'}));
return $query; ?>