<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'var_idx3_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx3_argument'}->checkFilter('number');
${'var_idx3_argument'}->checkNotNull();
if(!${'var_idx3_argument'}->isValid()) return ${'var_idx3_argument'}->getErrorMessage();
if(${'var_idx3_argument'} !== null) ${'var_idx3_argument'}->setColumnType('number');

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
if(isset($args->var_default)) {
${'var_default8_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default8_argument'}->isValid()) return ${'var_default8_argument'}->getErrorMessage();
} else
${'var_default8_argument'} = NULL;if(${'var_default8_argument'} !== null) ${'var_default8_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc9_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc9_argument'}->isValid()) return ${'var_desc9_argument'}->getErrorMessage();
} else
${'var_desc9_argument'} = NULL;if(${'var_desc9_argument'} !== null) ${'var_desc9_argument'}->setColumnType('text');

${'eid10_argument'} = new Argument('eid', $args->{'eid'});
${'eid10_argument'}->checkNotNull();
if(!${'eid10_argument'}->isValid()) return ${'eid10_argument'}->getErrorMessage();
if(${'eid10_argument'} !== null) ${'eid10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`var_idx`', ${'var_idx3_argument'})
,new InsertExpression('`var_name`', ${'var_name4_argument'})
,new InsertExpression('`var_type`', ${'var_type5_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required6_argument'})
,new InsertExpression('`var_search`', ${'var_search7_argument'})
,new InsertExpression('`var_default`', ${'var_default8_argument'})
,new InsertExpression('`var_desc`', ${'var_desc9_argument'})
,new InsertExpression('`eid`', ${'eid10_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>