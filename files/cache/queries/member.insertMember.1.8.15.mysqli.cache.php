<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl6_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl6_argument'}->checkFilter('number');
${'member_srl6_argument'}->checkNotNull();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

${'user_id7_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id7_argument'}->checkFilter('userid');
${'user_id7_argument'}->checkNotNull();
if(!${'user_id7_argument'}->isValid()) return ${'user_id7_argument'}->getErrorMessage();
if(${'user_id7_argument'} !== null) ${'user_id7_argument'}->setColumnType('varchar');

${'email_address8_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address8_argument'}->checkFilter('email');
${'email_address8_argument'}->checkNotNull();
if(!${'email_address8_argument'}->isValid()) return ${'email_address8_argument'}->getErrorMessage();
if(${'email_address8_argument'} !== null) ${'email_address8_argument'}->setColumnType('varchar');

${'password9_argument'} = new Argument('password', $args->{'password'});
${'password9_argument'}->checkNotNull();
if(!${'password9_argument'}->isValid()) return ${'password9_argument'}->getErrorMessage();
if(${'password9_argument'} !== null) ${'password9_argument'}->setColumnType('varchar');

${'email_id10_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id10_argument'}->checkNotNull();
if(!${'email_id10_argument'}->isValid()) return ${'email_id10_argument'}->getErrorMessage();
if(${'email_id10_argument'} !== null) ${'email_id10_argument'}->setColumnType('varchar');

${'email_host11_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host11_argument'}->checkNotNull();
if(!${'email_host11_argument'}->isValid()) return ${'email_host11_argument'}->getErrorMessage();
if(${'email_host11_argument'} !== null) ${'email_host11_argument'}->setColumnType('varchar');

${'user_name12_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name12_argument'}->checkNotNull();
if(!${'user_name12_argument'}->isValid()) return ${'user_name12_argument'}->getErrorMessage();
if(${'user_name12_argument'} !== null) ${'user_name12_argument'}->setColumnType('varchar');

${'nick_name13_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name13_argument'}->checkNotNull();
if(!${'nick_name13_argument'}->isValid()) return ${'nick_name13_argument'}->getErrorMessage();
if(${'nick_name13_argument'} !== null) ${'nick_name13_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question14_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question14_argument'}->isValid()) return ${'find_account_question14_argument'}->getErrorMessage();
} else
${'find_account_question14_argument'} = NULL;if(${'find_account_question14_argument'} !== null) ${'find_account_question14_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer15_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer15_argument'}->isValid()) return ${'find_account_answer15_argument'}->getErrorMessage();
} else
${'find_account_answer15_argument'} = NULL;if(${'find_account_answer15_argument'} !== null) ${'find_account_answer15_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage16_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage16_argument'}->isValid()) return ${'homepage16_argument'}->getErrorMessage();
} else
${'homepage16_argument'} = NULL;if(${'homepage16_argument'} !== null) ${'homepage16_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog17_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog17_argument'}->isValid()) return ${'blog17_argument'}->getErrorMessage();
} else
${'blog17_argument'} = NULL;if(${'blog17_argument'} !== null) ${'blog17_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday18_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday18_argument'}->isValid()) return ${'birthday18_argument'}->getErrorMessage();
} else
${'birthday18_argument'} = NULL;if(${'birthday18_argument'} !== null) ${'birthday18_argument'}->setColumnType('char');

${'allow_mailing19_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing19_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing19_argument'}->isValid()) return ${'allow_mailing19_argument'}->getErrorMessage();
if(${'allow_mailing19_argument'} !== null) ${'allow_mailing19_argument'}->setColumnType('char');

${'allow_message20_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message20_argument'}->ensureDefaultValue('Y');
if(!${'allow_message20_argument'}->isValid()) return ${'allow_message20_argument'}->getErrorMessage();
if(${'allow_message20_argument'} !== null) ${'allow_message20_argument'}->setColumnType('char');

${'denied21_argument'} = new Argument('denied', $args->{'denied'});
${'denied21_argument'}->ensureDefaultValue('N');
if(!${'denied21_argument'}->isValid()) return ${'denied21_argument'}->getErrorMessage();
if(${'denied21_argument'} !== null) ${'denied21_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date22_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date22_argument'}->isValid()) return ${'limit_date22_argument'}->getErrorMessage();
} else
${'limit_date22_argument'} = NULL;if(${'limit_date22_argument'} !== null) ${'limit_date22_argument'}->setColumnType('date');

${'regdate23_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate23_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate23_argument'}->isValid()) return ${'regdate23_argument'}->getErrorMessage();
if(${'regdate23_argument'} !== null) ${'regdate23_argument'}->setColumnType('date');

${'change_password_date24_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date24_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date24_argument'}->isValid()) return ${'change_password_date24_argument'}->getErrorMessage();
if(${'change_password_date24_argument'} !== null) ${'change_password_date24_argument'}->setColumnType('date');

${'last_login25_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login25_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login25_argument'}->isValid()) return ${'last_login25_argument'}->getErrorMessage();
if(${'last_login25_argument'} !== null) ${'last_login25_argument'}->setColumnType('date');

${'is_admin26_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin26_argument'}->ensureDefaultValue('N');
if(!${'is_admin26_argument'}->isValid()) return ${'is_admin26_argument'}->getErrorMessage();
if(${'is_admin26_argument'} !== null) ${'is_admin26_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description27_argument'} = new Argument('description', $args->{'description'});
if(!${'description27_argument'}->isValid()) return ${'description27_argument'}->getErrorMessage();
} else
${'description27_argument'} = NULL;if(${'description27_argument'} !== null) ${'description27_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars28_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars28_argument'}->isValid()) return ${'extra_vars28_argument'}->getErrorMessage();
} else
${'extra_vars28_argument'} = NULL;if(${'extra_vars28_argument'} !== null) ${'extra_vars28_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order29_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order29_argument'}->isValid()) return ${'list_order29_argument'}->getErrorMessage();
} else
${'list_order29_argument'} = NULL;if(${'list_order29_argument'} !== null) ${'list_order29_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl6_argument'})
,new InsertExpression('`user_id`', ${'user_id7_argument'})
,new InsertExpression('`email_address`', ${'email_address8_argument'})
,new InsertExpression('`password`', ${'password9_argument'})
,new InsertExpression('`email_id`', ${'email_id10_argument'})
,new InsertExpression('`email_host`', ${'email_host11_argument'})
,new InsertExpression('`user_name`', ${'user_name12_argument'})
,new InsertExpression('`nick_name`', ${'nick_name13_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question14_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer15_argument'})
,new InsertExpression('`homepage`', ${'homepage16_argument'})
,new InsertExpression('`blog`', ${'blog17_argument'})
,new InsertExpression('`birthday`', ${'birthday18_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing19_argument'})
,new InsertExpression('`allow_message`', ${'allow_message20_argument'})
,new InsertExpression('`denied`', ${'denied21_argument'})
,new InsertExpression('`limit_date`', ${'limit_date22_argument'})
,new InsertExpression('`regdate`', ${'regdate23_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date24_argument'})
,new InsertExpression('`last_login`', ${'last_login25_argument'})
,new InsertExpression('`is_admin`', ${'is_admin26_argument'})
,new InsertExpression('`description`', ${'description27_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars28_argument'})
,new InsertExpression('`list_order`', ${'list_order29_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>