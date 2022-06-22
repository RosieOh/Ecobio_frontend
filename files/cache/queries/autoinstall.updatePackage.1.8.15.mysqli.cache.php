<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path14_argument'} = new Argument('path', $args->{'path'});
${'path14_argument'}->checkNotNull();
if(!${'path14_argument'}->isValid()) return ${'path14_argument'}->getErrorMessage();
if(${'path14_argument'} !== null) ${'path14_argument'}->setColumnType('varchar');

${'have_instance15_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance15_argument'}->checkNotNull();
if(!${'have_instance15_argument'}->isValid()) return ${'have_instance15_argument'}->getErrorMessage();
if(${'have_instance15_argument'} !== null) ${'have_instance15_argument'}->setColumnType('char');

${'updatedate16_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate16_argument'}->checkNotNull();
if(!${'updatedate16_argument'}->isValid()) return ${'updatedate16_argument'}->getErrorMessage();
if(${'updatedate16_argument'} !== null) ${'updatedate16_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl17_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl17_argument'}->checkFilter('number');
if(!${'category_srl17_argument'}->isValid()) return ${'category_srl17_argument'}->getErrorMessage();
} else
${'category_srl17_argument'} = NULL;if(${'category_srl17_argument'} !== null) ${'category_srl17_argument'}->setColumnType('number');

${'latest_item_srl18_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl18_argument'}->checkNotNull();
if(!${'latest_item_srl18_argument'}->isValid()) return ${'latest_item_srl18_argument'}->getErrorMessage();
if(${'latest_item_srl18_argument'} !== null) ${'latest_item_srl18_argument'}->setColumnType('number');

${'version19_argument'} = new Argument('version', $args->{'version'});
${'version19_argument'}->checkNotNull();
if(!${'version19_argument'}->isValid()) return ${'version19_argument'}->getErrorMessage();
if(${'version19_argument'} !== null) ${'version19_argument'}->setColumnType('varchar');

${'package_srl20_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl20_argument'}->checkNotNull();
${'package_srl20_argument'}->createConditionValue();
if(!${'package_srl20_argument'}->isValid()) return ${'package_srl20_argument'}->getErrorMessage();
if(${'package_srl20_argument'} !== null) ${'package_srl20_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path14_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance15_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate16_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl17_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl18_argument'})
,new UpdateExpression('`version`', ${'version19_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl20_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>