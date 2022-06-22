<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleUpdateLog");
$query->setAction("insert");
$query->setPriority("");

${'update_id20_argument'} = new Argument('update_id', $args->{'update_id'});
${'update_id20_argument'}->checkNotNull();
if(!${'update_id20_argument'}->isValid()) return ${'update_id20_argument'}->getErrorMessage();
if(${'update_id20_argument'} !== null) ${'update_id20_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`update_id`', ${'update_id20_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_module_update`', '`module_update`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>