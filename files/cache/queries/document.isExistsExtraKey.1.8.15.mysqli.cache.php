<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsExtraKey");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx2_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notequal');
${'var_idx2_argument'}->checkFilter('number');
${'var_idx2_argument'}->createConditionValue();
if(!${'var_idx2_argument'}->isValid()) return ${'var_idx2_argument'}->getErrorMessage();
} else
${'var_idx2_argument'} = NULL;if(${'var_idx2_argument'} !== null) ${'var_idx2_argument'}->setColumnType('number');

${'eid3_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid3_argument'}->checkNotNull();
${'eid3_argument'}->createConditionValue();
if(!${'eid3_argument'}->isValid()) return ${'eid3_argument'}->getErrorMessage();
if(${'eid3_argument'} !== null) ${'eid3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`HeadspaK_new_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal", 'where')
,new ConditionWithArgument('`var_idx`',$var_idx2_argument,"notequal", 'and')
,new ConditionWithArgument('`eid`',$eid3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>