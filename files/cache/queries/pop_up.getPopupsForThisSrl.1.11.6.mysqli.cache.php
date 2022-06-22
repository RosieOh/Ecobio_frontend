<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPopupsForThisSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl4_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl4_argument'}->createConditionValue();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
} else
${'module_srl4_argument'} = NULL;if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->curdate)) {
${'curdate5_argument'} = new ConditionArgument('curdate', $args->curdate, 'less');
${'curdate5_argument'}->createConditionValue();
if(!${'curdate5_argument'}->isValid()) return ${'curdate5_argument'}->getErrorMessage();
} else
${'curdate5_argument'} = NULL;if(${'curdate5_argument'} !== null) ${'curdate5_argument'}->setColumnType('date');
if(isset($args->curdate)) {
${'curdate6_argument'} = new ConditionArgument('curdate', $args->curdate, 'more');
${'curdate6_argument'}->createConditionValue();
if(!${'curdate6_argument'}->isValid()) return ${'curdate6_argument'}->getErrorMessage();
} else
${'curdate6_argument'} = NULL;if(${'curdate6_argument'} !== null) ${'curdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('`pop_ups`.*')
,new SelectExpression('`documents`.`content`')
));
$query->setTables(array(
new Table('`HeadspaK_new_pop_ups`', '`pop_ups`')
,new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`target_srl`',$module_srl4_argument,"equal")
,new ConditionWithoutArgument('`documents`.`document_srl`','`pop_ups`.`document_srl`',"equal", 'and')
,new ConditionWithoutArgument('`target_type`',"'module'","equal", 'and')
,new ConditionWithArgument('`pop_ups`.`startdate`',$curdate5_argument,"less", 'and')
,new ConditionWithArgument('`pop_ups`.`enddate`',$curdate6_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>