<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->category_srl)) {
${'category_srl16_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl16_argument'}->checkFilter('number');
${'category_srl16_argument'}->createConditionValue();
if(!${'category_srl16_argument'}->isValid()) return ${'category_srl16_argument'}->getErrorMessage();
} else
${'category_srl16_argument'} = NULL;if(${'category_srl16_argument'} !== null) ${'category_srl16_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`HeadspaK_new_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>