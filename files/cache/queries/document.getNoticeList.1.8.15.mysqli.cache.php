<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNoticeList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
} else
${'module_srl11_argument'} = NULL;if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl12_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl12_argument'}->createConditionValue();
if(!${'category_srl12_argument'}->isValid()) return ${'category_srl12_argument'}->getErrorMessage();
} else
${'category_srl12_argument'} = NULL;if(${'category_srl12_argument'} !== null) ${'category_srl12_argument'}->setColumnType('number');

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"in")
,new ConditionWithoutArgument('`is_notice`',"'Y'","equal", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "desc")
));
$query->setLimit();
return $query; ?>