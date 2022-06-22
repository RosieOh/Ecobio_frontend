<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl22_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl22_argument'}->checkFilter('number');
${'module_srl22_argument'}->checkNotNull();
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');

${'name23_argument'} = new Argument('name', $args->{'name'});
${'name23_argument'}->checkNotNull();
if(!${'name23_argument'}->isValid()) return ${'name23_argument'}->getErrorMessage();
if(${'name23_argument'} !== null) ${'name23_argument'}->setColumnType('varchar');

${'value24_argument'} = new Argument('value', $args->{'value'});
${'value24_argument'}->checkNotNull();
if(!${'value24_argument'}->isValid()) return ${'value24_argument'}->getErrorMessage();
if(${'value24_argument'} !== null) ${'value24_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl22_argument'})
,new InsertExpression('`name`', ${'name23_argument'})
,new InsertExpression('`value`', ${'value24_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>