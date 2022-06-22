<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePopupConn");
$query->setAction("update");
$query->setPriority("");

${'popup_name1_argument'} = new Argument('popup_name', $args->{'popup_name'});
${'popup_name1_argument'}->ensureDefaultValue('');
${'popup_name1_argument'}->checkNotNull();
if(!${'popup_name1_argument'}->isValid()) return ${'popup_name1_argument'}->getErrorMessage();
if(${'popup_name1_argument'} !== null) ${'popup_name1_argument'}->setColumnType('varchar');

${'target_type2_argument'} = new Argument('target_type', $args->{'target_type'});
${'target_type2_argument'}->ensureDefaultValue('module');
${'target_type2_argument'}->checkNotNull();
if(!${'target_type2_argument'}->isValid()) return ${'target_type2_argument'}->getErrorMessage();
if(${'target_type2_argument'} !== null) ${'target_type2_argument'}->setColumnType('varchar');

${'target_srl3_argument'} = new Argument('target_srl', $args->{'target_srl'});
${'target_srl3_argument'}->ensureDefaultValue('0');
${'target_srl3_argument'}->checkNotNull();
if(!${'target_srl3_argument'}->isValid()) return ${'target_srl3_argument'}->getErrorMessage();
if(${'target_srl3_argument'} !== null) ${'target_srl3_argument'}->setColumnType('number');

${'popup_type4_argument'} = new Argument('popup_type', $args->{'popup_type'});
${'popup_type4_argument'}->ensureDefaultValue('data');
${'popup_type4_argument'}->checkNotNull();
if(!${'popup_type4_argument'}->isValid()) return ${'popup_type4_argument'}->getErrorMessage();
if(${'popup_type4_argument'} !== null) ${'popup_type4_argument'}->setColumnType('varchar');

${'popup_url5_argument'} = new Argument('popup_url', $args->{'popup_url'});
${'popup_url5_argument'}->ensureDefaultValue('');
${'popup_url5_argument'}->checkNotNull();
if(!${'popup_url5_argument'}->isValid()) return ${'popup_url5_argument'}->getErrorMessage();
if(${'popup_url5_argument'} !== null) ${'popup_url5_argument'}->setColumnType('varchar');

${'popup_linkto6_argument'} = new Argument('popup_linkto', $args->{'popup_linkto'});
${'popup_linkto6_argument'}->ensureDefaultValue('');
if(!${'popup_linkto6_argument'}->isValid()) return ${'popup_linkto6_argument'}->getErrorMessage();
if(${'popup_linkto6_argument'} !== null) ${'popup_linkto6_argument'}->setColumnType('varchar');

${'popup_linkto_newwindow7_argument'} = new Argument('popup_linkto_newwindow', $args->{'popup_linkto_newwindow'});
${'popup_linkto_newwindow7_argument'}->ensureDefaultValue('');
if(!${'popup_linkto_newwindow7_argument'}->isValid()) return ${'popup_linkto_newwindow7_argument'}->getErrorMessage();
if(${'popup_linkto_newwindow7_argument'} !== null) ${'popup_linkto_newwindow7_argument'}->setColumnType('varchar');

${'popup_data8_argument'} = new Argument('popup_data', $args->{'popup_data'});
${'popup_data8_argument'}->ensureDefaultValue('');
${'popup_data8_argument'}->checkNotNull();
if(!${'popup_data8_argument'}->isValid()) return ${'popup_data8_argument'}->getErrorMessage();
if(${'popup_data8_argument'} !== null) ${'popup_data8_argument'}->setColumnType('text');

${'open_type9_argument'} = new Argument('open_type', $args->{'open_type'});
${'open_type9_argument'}->ensureDefaultValue('outter');
if(!${'open_type9_argument'}->isValid()) return ${'open_type9_argument'}->getErrorMessage();
if(${'open_type9_argument'} !== null) ${'open_type9_argument'}->setColumnType('varchar');

${'exp_days10_argument'} = new Argument('exp_days', $args->{'exp_days'});
${'exp_days10_argument'}->ensureDefaultValue('1');
if(!${'exp_days10_argument'}->isValid()) return ${'exp_days10_argument'}->getErrorMessage();
if(${'exp_days10_argument'} !== null) ${'exp_days10_argument'}->setColumnType('number');

${'width11_argument'} = new Argument('width', $args->{'width'});
${'width11_argument'}->ensureDefaultValue('');
if(!${'width11_argument'}->isValid()) return ${'width11_argument'}->getErrorMessage();
if(${'width11_argument'} !== null) ${'width11_argument'}->setColumnType('number');

${'height12_argument'} = new Argument('height', $args->{'height'});
${'height12_argument'}->ensureDefaultValue('');
if(!${'height12_argument'}->isValid()) return ${'height12_argument'}->getErrorMessage();
if(${'height12_argument'} !== null) ${'height12_argument'}->setColumnType('number');

${'top13_argument'} = new Argument('top', $args->{'top'});
${'top13_argument'}->ensureDefaultValue('');
if(!${'top13_argument'}->isValid()) return ${'top13_argument'}->getErrorMessage();
if(${'top13_argument'} !== null) ${'top13_argument'}->setColumnType('number');

${'left14_argument'} = new Argument('left', $args->{'left'});
${'left14_argument'}->ensureDefaultValue('');
if(!${'left14_argument'}->isValid()) return ${'left14_argument'}->getErrorMessage();
if(${'left14_argument'} !== null) ${'left14_argument'}->setColumnType('number');

${'startdate15_argument'} = new Argument('startdate', $args->{'startdate'});
${'startdate15_argument'}->ensureDefaultValue(date("YmdHis"));
${'startdate15_argument'}->checkNotNull();
if(!${'startdate15_argument'}->isValid()) return ${'startdate15_argument'}->getErrorMessage();
if(${'startdate15_argument'} !== null) ${'startdate15_argument'}->setColumnType('date');

${'enddate16_argument'} = new Argument('enddate', $args->{'enddate'});
${'enddate16_argument'}->ensureDefaultValue(date("YmdHis"));
${'enddate16_argument'}->checkNotNull();
if(!${'enddate16_argument'}->isValid()) return ${'enddate16_argument'}->getErrorMessage();
if(${'enddate16_argument'} !== null) ${'enddate16_argument'}->setColumnType('date');

${'regdate17_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate17_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate17_argument'}->checkNotNull();
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

${'popup_conn_srl18_argument'} = new ConditionArgument('popup_conn_srl', $args->popup_conn_srl, 'equal');
${'popup_conn_srl18_argument'}->checkFilter('number');
${'popup_conn_srl18_argument'}->ensureDefaultValue('0');
${'popup_conn_srl18_argument'}->checkNotNull();
${'popup_conn_srl18_argument'}->createConditionValue();
if(!${'popup_conn_srl18_argument'}->isValid()) return ${'popup_conn_srl18_argument'}->getErrorMessage();
if(${'popup_conn_srl18_argument'} !== null) ${'popup_conn_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`popup_name`', ${'popup_name1_argument'})
,new UpdateExpression('`target_type`', ${'target_type2_argument'})
,new UpdateExpression('`target_srl`', ${'target_srl3_argument'})
,new UpdateExpression('`popup_type`', ${'popup_type4_argument'})
,new UpdateExpression('`popup_url`', ${'popup_url5_argument'})
,new UpdateExpression('`popup_linkto`', ${'popup_linkto6_argument'})
,new UpdateExpression('`popup_linkto_newwindow`', ${'popup_linkto_newwindow7_argument'})
,new UpdateExpression('`popup_data`', ${'popup_data8_argument'})
,new UpdateExpression('`open_type`', ${'open_type9_argument'})
,new UpdateExpression('`exp_days`', ${'exp_days10_argument'})
,new UpdateExpression('`width`', ${'width11_argument'})
,new UpdateExpression('`height`', ${'height12_argument'})
,new UpdateExpression('`top`', ${'top13_argument'})
,new UpdateExpression('`left`', ${'left14_argument'})
,new UpdateExpression('`startdate`', ${'startdate15_argument'})
,new UpdateExpression('`enddate`', ${'enddate16_argument'})
,new UpdateExpression('`regdate`', ${'regdate17_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_pop_ups`', '`pop_ups`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`popup_conn_srl`',$popup_conn_srl18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>