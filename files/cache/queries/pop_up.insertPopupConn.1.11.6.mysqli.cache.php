<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPopupConn");
$query->setAction("insert");
$query->setPriority("");

${'popup_conn_srl1_argument'} = new Argument('popup_conn_srl', $args->{'popup_conn_srl'});
${'popup_conn_srl1_argument'}->checkNotNull();
if(!${'popup_conn_srl1_argument'}->isValid()) return ${'popup_conn_srl1_argument'}->getErrorMessage();
if(${'popup_conn_srl1_argument'} !== null) ${'popup_conn_srl1_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl2_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
} else
${'document_srl2_argument'} = NULL;if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

${'popup_name3_argument'} = new Argument('popup_name', $args->{'popup_name'});
${'popup_name3_argument'}->ensureDefaultValue('');
${'popup_name3_argument'}->checkNotNull();
if(!${'popup_name3_argument'}->isValid()) return ${'popup_name3_argument'}->getErrorMessage();
if(${'popup_name3_argument'} !== null) ${'popup_name3_argument'}->setColumnType('varchar');

${'target_type4_argument'} = new Argument('target_type', $args->{'target_type'});
${'target_type4_argument'}->ensureDefaultValue('module');
${'target_type4_argument'}->checkNotNull();
if(!${'target_type4_argument'}->isValid()) return ${'target_type4_argument'}->getErrorMessage();
if(${'target_type4_argument'} !== null) ${'target_type4_argument'}->setColumnType('varchar');

${'target_srl5_argument'} = new Argument('target_srl', $args->{'target_srl'});
${'target_srl5_argument'}->ensureDefaultValue('0');
${'target_srl5_argument'}->checkNotNull();
if(!${'target_srl5_argument'}->isValid()) return ${'target_srl5_argument'}->getErrorMessage();
if(${'target_srl5_argument'} !== null) ${'target_srl5_argument'}->setColumnType('number');

${'popup_type6_argument'} = new Argument('popup_type', $args->{'popup_type'});
${'popup_type6_argument'}->ensureDefaultValue('data');
${'popup_type6_argument'}->checkNotNull();
if(!${'popup_type6_argument'}->isValid()) return ${'popup_type6_argument'}->getErrorMessage();
if(${'popup_type6_argument'} !== null) ${'popup_type6_argument'}->setColumnType('varchar');

${'popup_url7_argument'} = new Argument('popup_url', $args->{'popup_url'});
${'popup_url7_argument'}->ensureDefaultValue('');
${'popup_url7_argument'}->checkNotNull();
if(!${'popup_url7_argument'}->isValid()) return ${'popup_url7_argument'}->getErrorMessage();
if(${'popup_url7_argument'} !== null) ${'popup_url7_argument'}->setColumnType('varchar');

${'popup_linkto8_argument'} = new Argument('popup_linkto', $args->{'popup_linkto'});
${'popup_linkto8_argument'}->ensureDefaultValue('');
if(!${'popup_linkto8_argument'}->isValid()) return ${'popup_linkto8_argument'}->getErrorMessage();
if(${'popup_linkto8_argument'} !== null) ${'popup_linkto8_argument'}->setColumnType('varchar');

${'popup_linkto_newwindow9_argument'} = new Argument('popup_linkto_newwindow', $args->{'popup_linkto_newwindow'});
${'popup_linkto_newwindow9_argument'}->ensureDefaultValue('');
if(!${'popup_linkto_newwindow9_argument'}->isValid()) return ${'popup_linkto_newwindow9_argument'}->getErrorMessage();
if(${'popup_linkto_newwindow9_argument'} !== null) ${'popup_linkto_newwindow9_argument'}->setColumnType('varchar');

${'popup_data10_argument'} = new Argument('popup_data', $args->{'popup_data'});
${'popup_data10_argument'}->ensureDefaultValue('');
${'popup_data10_argument'}->checkNotNull();
if(!${'popup_data10_argument'}->isValid()) return ${'popup_data10_argument'}->getErrorMessage();
if(${'popup_data10_argument'} !== null) ${'popup_data10_argument'}->setColumnType('text');

${'open_type11_argument'} = new Argument('open_type', $args->{'open_type'});
${'open_type11_argument'}->ensureDefaultValue('outter');
if(!${'open_type11_argument'}->isValid()) return ${'open_type11_argument'}->getErrorMessage();
if(${'open_type11_argument'} !== null) ${'open_type11_argument'}->setColumnType('varchar');

${'exp_days12_argument'} = new Argument('exp_days', $args->{'exp_days'});
${'exp_days12_argument'}->ensureDefaultValue('1');
if(!${'exp_days12_argument'}->isValid()) return ${'exp_days12_argument'}->getErrorMessage();
if(${'exp_days12_argument'} !== null) ${'exp_days12_argument'}->setColumnType('number');

${'width13_argument'} = new Argument('width', $args->{'width'});
${'width13_argument'}->ensureDefaultValue('');
if(!${'width13_argument'}->isValid()) return ${'width13_argument'}->getErrorMessage();
if(${'width13_argument'} !== null) ${'width13_argument'}->setColumnType('number');

${'height14_argument'} = new Argument('height', $args->{'height'});
${'height14_argument'}->ensureDefaultValue('');
if(!${'height14_argument'}->isValid()) return ${'height14_argument'}->getErrorMessage();
if(${'height14_argument'} !== null) ${'height14_argument'}->setColumnType('number');

${'top15_argument'} = new Argument('top', $args->{'top'});
${'top15_argument'}->ensureDefaultValue('');
if(!${'top15_argument'}->isValid()) return ${'top15_argument'}->getErrorMessage();
if(${'top15_argument'} !== null) ${'top15_argument'}->setColumnType('number');

${'left16_argument'} = new Argument('left', $args->{'left'});
${'left16_argument'}->ensureDefaultValue('');
if(!${'left16_argument'}->isValid()) return ${'left16_argument'}->getErrorMessage();
if(${'left16_argument'} !== null) ${'left16_argument'}->setColumnType('number');

${'startdate17_argument'} = new Argument('startdate', $args->{'startdate'});
${'startdate17_argument'}->ensureDefaultValue(date("YmdHis"));
${'startdate17_argument'}->checkNotNull();
if(!${'startdate17_argument'}->isValid()) return ${'startdate17_argument'}->getErrorMessage();
if(${'startdate17_argument'} !== null) ${'startdate17_argument'}->setColumnType('date');

${'enddate18_argument'} = new Argument('enddate', $args->{'enddate'});
${'enddate18_argument'}->ensureDefaultValue(date("YmdHis"));
${'enddate18_argument'}->checkNotNull();
if(!${'enddate18_argument'}->isValid()) return ${'enddate18_argument'}->getErrorMessage();
if(${'enddate18_argument'} !== null) ${'enddate18_argument'}->setColumnType('date');

${'regdate19_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate19_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate19_argument'}->checkNotNull();
if(!${'regdate19_argument'}->isValid()) return ${'regdate19_argument'}->getErrorMessage();
if(${'regdate19_argument'} !== null) ${'regdate19_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`popup_conn_srl`', ${'popup_conn_srl1_argument'})
,new InsertExpression('`document_srl`', ${'document_srl2_argument'})
,new InsertExpression('`popup_name`', ${'popup_name3_argument'})
,new InsertExpression('`target_type`', ${'target_type4_argument'})
,new InsertExpression('`target_srl`', ${'target_srl5_argument'})
,new InsertExpression('`popup_type`', ${'popup_type6_argument'})
,new InsertExpression('`popup_url`', ${'popup_url7_argument'})
,new InsertExpression('`popup_linkto`', ${'popup_linkto8_argument'})
,new InsertExpression('`popup_linkto_newwindow`', ${'popup_linkto_newwindow9_argument'})
,new InsertExpression('`popup_data`', ${'popup_data10_argument'})
,new InsertExpression('`open_type`', ${'open_type11_argument'})
,new InsertExpression('`exp_days`', ${'exp_days12_argument'})
,new InsertExpression('`width`', ${'width13_argument'})
,new InsertExpression('`height`', ${'height14_argument'})
,new InsertExpression('`top`', ${'top15_argument'})
,new InsertExpression('`left`', ${'left16_argument'})
,new InsertExpression('`startdate`', ${'startdate17_argument'})
,new InsertExpression('`enddate`', ${'enddate18_argument'})
,new InsertExpression('`regdate`', ${'regdate19_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_pop_ups`', '`pop_ups`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>