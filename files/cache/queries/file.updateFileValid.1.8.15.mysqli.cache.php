<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid43_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid43_argument'}->ensureDefaultValue('Y');
${'isvalid43_argument'}->checkNotNull();
if(!${'isvalid43_argument'}->isValid()) return ${'isvalid43_argument'}->getErrorMessage();
if(${'isvalid43_argument'} !== null) ${'isvalid43_argument'}->setColumnType('char');

${'upload_target_srl44_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl44_argument'}->checkFilter('number');
${'upload_target_srl44_argument'}->checkNotNull();
${'upload_target_srl44_argument'}->createConditionValue();
if(!${'upload_target_srl44_argument'}->isValid()) return ${'upload_target_srl44_argument'}->getErrorMessage();
if(${'upload_target_srl44_argument'} !== null) ${'upload_target_srl44_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid43_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl44_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>