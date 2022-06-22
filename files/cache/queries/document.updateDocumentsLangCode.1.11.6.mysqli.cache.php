<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentsLangCode");
$query->setAction("update");
$query->setPriority("");

${'lang_code1_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code1_argument'}->checkNotNull();
if(!${'lang_code1_argument'}->isValid()) return ${'lang_code1_argument'}->getErrorMessage();
if(${'lang_code1_argument'} !== null) ${'lang_code1_argument'}->setColumnType('varchar');
if(isset($args->document_srl)) {
${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
} else
${'document_srl2_argument'} = NULL;if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`lang_code`', ${'lang_code1_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>