<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentExtraVar");
$query->setAction("update");
$query->setPriority("");
if(isset($args->value)) {
${'value13_argument'} = new Argument('value', $args->{'value'});
if(!${'value13_argument'}->isValid()) return ${'value13_argument'}->getErrorMessage();
} else
${'value13_argument'} = NULL;if(${'value13_argument'} !== null) ${'value13_argument'}->setColumnType('bigtext');
if(isset($args->lang_code)) {
${'lang_code14_argument'} = new Argument('lang_code', $args->{'lang_code'});
if(!${'lang_code14_argument'}->isValid()) return ${'lang_code14_argument'}->getErrorMessage();
} else
${'lang_code14_argument'} = NULL;if(${'lang_code14_argument'} !== null) ${'lang_code14_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid15_argument'} = new Argument('eid', $args->{'eid'});
if(!${'eid15_argument'}->isValid()) return ${'eid15_argument'}->getErrorMessage();
} else
${'eid15_argument'} = NULL;if(${'eid15_argument'} !== null) ${'eid15_argument'}->setColumnType('varchar');

${'module_srl16_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl16_argument'}->checkFilter('number');
${'module_srl16_argument'}->checkNotNull();
${'module_srl16_argument'}->createConditionValue();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl17_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl17_argument'}->checkFilter('number');
${'document_srl17_argument'}->createConditionValue();
if(!${'document_srl17_argument'}->isValid()) return ${'document_srl17_argument'}->getErrorMessage();
} else
${'document_srl17_argument'} = NULL;if(${'document_srl17_argument'} !== null) ${'document_srl17_argument'}->setColumnType('number');

${'var_idx18_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx18_argument'}->checkFilter('number');
${'var_idx18_argument'}->checkNotNull();
${'var_idx18_argument'}->createConditionValue();
if(!${'var_idx18_argument'}->isValid()) return ${'var_idx18_argument'}->getErrorMessage();
if(${'var_idx18_argument'} !== null) ${'var_idx18_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`value`', ${'value13_argument'})
,new UpdateExpression('`lang_code`', ${'lang_code14_argument'})
,new UpdateExpression('`eid`', ${'eid15_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl16_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl17_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx18_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>