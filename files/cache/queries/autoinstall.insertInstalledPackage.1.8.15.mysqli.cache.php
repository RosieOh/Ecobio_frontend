<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl22_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl22_argument'}->checkFilter('number');
${'package_srl22_argument'}->checkNotNull();
if(!${'package_srl22_argument'}->isValid()) return ${'package_srl22_argument'}->getErrorMessage();
if(${'package_srl22_argument'} !== null) ${'package_srl22_argument'}->setColumnType('number');

${'version23_argument'} = new Argument('version', $args->{'version'});
${'version23_argument'}->checkNotNull();
if(!${'version23_argument'}->isValid()) return ${'version23_argument'}->getErrorMessage();
if(${'version23_argument'} !== null) ${'version23_argument'}->setColumnType('varchar');

${'current_version24_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version24_argument'}->checkNotNull();
if(!${'current_version24_argument'}->isValid()) return ${'current_version24_argument'}->getErrorMessage();
if(${'current_version24_argument'} !== null) ${'current_version24_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update25_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update25_argument'}->isValid()) return ${'need_update25_argument'}->getErrorMessage();
} else
${'need_update25_argument'} = NULL;if(${'need_update25_argument'} !== null) ${'need_update25_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl22_argument'})
,new InsertExpression('`version`', ${'version23_argument'})
,new InsertExpression('`current_version`', ${'current_version24_argument'})
,new InsertExpression('`need_update`', ${'need_update25_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>