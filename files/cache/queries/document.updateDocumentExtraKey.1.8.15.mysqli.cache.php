<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentExtraKey");
$query->setAction("update");
$query->setPriority("");

${'var_name4_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name4_argument'}->checkNotNull();
if(!${'var_name4_argument'}->isValid()) return ${'var_name4_argument'}->getErrorMessage();
if(${'var_name4_argument'} !== null) ${'var_name4_argument'}->setColumnType('varchar');

${'var_type5_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type5_argument'}->checkNotNull();
if(!${'var_type5_argument'}->isValid()) return ${'var_type5_argument'}->getErrorMessage();
if(${'var_type5_argument'} !== null) ${'var_type5_argument'}->setColumnType('varchar');

${'var_is_required6_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required6_argument'}->ensureDefaultValue('N');
${'var_is_required6_argument'}->checkNotNull();
if(!${'var_is_required6_argument'}->isValid()) return ${'var_is_required6_argument'}->getErrorMessage();
if(${'var_is_required6_argument'} !== null) ${'var_is_required6_argument'}->setColumnType('char');

${'var_search7_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search7_argument'}->ensureDefaultValue('N');
${'var_search7_argument'}->checkNotNull();
if(!${'var_search7_argument'}->isValid()) return ${'var_search7_argument'}->getErrorMessage();
if(${'var_search7_argument'} !== null) ${'var_search7_argument'}->setColumnType('char');

${'var_default8_argument'} = new Argument('var_default', $args->{'var_default'});
${'var_default8_argument'}->ensureDefaultValue('');
if(!${'var_default8_argument'}->isValid()) return ${'var_default8_argument'}->getErrorMessage();
if(${'var_default8_argument'} !== null) ${'var_default8_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc9_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc9_argument'}->isValid()) return ${'var_desc9_argument'}->getErrorMessage();
} else
${'var_desc9_argument'} = NULL;if(${'var_desc9_argument'} !== null) ${'var_desc9_argument'}->setColumnType('text');

${'eid10_argument'} = new Argument('eid', $args->{'eid'});
${'eid10_argument'}->checkNotNull();
if(!${'eid10_argument'}->isValid()) return ${'eid10_argument'}->getErrorMessage();
if(${'eid10_argument'} !== null) ${'eid10_argument'}->setColumnType('varchar');

${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->checkNotNull();
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

${'var_idx12_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx12_argument'}->checkFilter('number');
${'var_idx12_argument'}->checkNotNull();
${'var_idx12_argument'}->createConditionValue();
if(!${'var_idx12_argument'}->isValid()) return ${'var_idx12_argument'}->getErrorMessage();
if(${'var_idx12_argument'} !== null) ${'var_idx12_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`var_name`', ${'var_name4_argument'})
,new UpdateExpression('`var_type`', ${'var_type5_argument'})
,new UpdateExpression('`var_is_required`', ${'var_is_required6_argument'})
,new UpdateExpression('`var_search`', ${'var_search7_argument'})
,new UpdateExpression('`var_default`', ${'var_default8_argument'})
,new UpdateExpression('`var_desc`', ${'var_desc9_argument'})
,new UpdateExpression('`eid`', ${'eid10_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl11_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>