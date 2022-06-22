<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLang");
$query->setAction("insert");
$query->setPriority("");

${'site_srl3_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl3_argument'}->checkNotNull();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'name4_argument'} = new Argument('name', $args->{'name'});
${'name4_argument'}->checkNotNull();
if(!${'name4_argument'}->isValid()) return ${'name4_argument'}->getErrorMessage();
if(${'name4_argument'} !== null) ${'name4_argument'}->setColumnType('varchar');

${'lang_code5_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code5_argument'}->checkNotNull();
if(!${'lang_code5_argument'}->isValid()) return ${'lang_code5_argument'}->getErrorMessage();
if(${'lang_code5_argument'} !== null) ${'lang_code5_argument'}->setColumnType('varchar');

${'value6_argument'} = new Argument('value', $args->{'value'});
${'value6_argument'}->checkNotNull();
if(!${'value6_argument'}->isValid()) return ${'value6_argument'}->getErrorMessage();
if(${'value6_argument'} !== null) ${'value6_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl3_argument'})
,new InsertExpression('`name`', ${'name4_argument'})
,new InsertExpression('`lang_code`', ${'lang_code5_argument'})
,new InsertExpression('`value`', ${'value6_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_lang`', '`lang`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>