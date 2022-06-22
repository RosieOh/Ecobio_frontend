<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin29_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin29_argument'}->createConditionValue();
if(!${'is_admin29_argument'}->isValid()) return ${'is_admin29_argument'}->getErrorMessage();
} else
${'is_admin29_argument'} = NULL;if(${'is_admin29_argument'} !== null) ${'is_admin29_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied30_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied30_argument'}->createConditionValue();
if(!${'is_denied30_argument'}->isValid()) return ${'is_denied30_argument'}->getErrorMessage();
} else
${'is_denied30_argument'} = NULL;if(${'is_denied30_argument'} !== null) ${'is_denied30_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls31_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls31_argument'}->createConditionValue();
if(!${'member_srls31_argument'}->isValid()) return ${'member_srls31_argument'}->getErrorMessage();
} else
${'member_srls31_argument'} = NULL;if(${'member_srls31_argument'} !== null) ${'member_srls31_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id32_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id32_argument'}->createConditionValue();
if(!${'s_user_id32_argument'}->isValid()) return ${'s_user_id32_argument'}->getErrorMessage();
} else
${'s_user_id32_argument'} = NULL;if(${'s_user_id32_argument'} !== null) ${'s_user_id32_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name33_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name33_argument'}->createConditionValue();
if(!${'s_user_name33_argument'}->isValid()) return ${'s_user_name33_argument'}->getErrorMessage();
} else
${'s_user_name33_argument'} = NULL;if(${'s_user_name33_argument'} !== null) ${'s_user_name33_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name34_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name34_argument'}->createConditionValue();
if(!${'s_nick_name34_argument'}->isValid()) return ${'s_nick_name34_argument'}->getErrorMessage();
} else
${'s_nick_name34_argument'} = NULL;if(${'s_nick_name34_argument'} !== null) ${'s_nick_name34_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name35_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name35_argument'}->createConditionValue();
if(!${'html_nick_name35_argument'}->isValid()) return ${'html_nick_name35_argument'}->getErrorMessage();
} else
${'html_nick_name35_argument'} = NULL;if(${'html_nick_name35_argument'} !== null) ${'html_nick_name35_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address36_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address36_argument'}->createConditionValue();
if(!${'s_email_address36_argument'}->isValid()) return ${'s_email_address36_argument'}->getErrorMessage();
} else
${'s_email_address36_argument'} = NULL;if(${'s_email_address36_argument'} !== null) ${'s_email_address36_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday37_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday37_argument'}->createConditionValue();
if(!${'s_birthday37_argument'}->isValid()) return ${'s_birthday37_argument'}->getErrorMessage();
} else
${'s_birthday37_argument'} = NULL;if(${'s_birthday37_argument'} !== null) ${'s_birthday37_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars38_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars38_argument'}->createConditionValue();
if(!${'s_extra_vars38_argument'}->isValid()) return ${'s_extra_vars38_argument'}->getErrorMessage();
} else
${'s_extra_vars38_argument'} = NULL;if(${'s_extra_vars38_argument'} !== null) ${'s_extra_vars38_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate39_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate39_argument'}->createConditionValue();
if(!${'s_regdate39_argument'}->isValid()) return ${'s_regdate39_argument'}->getErrorMessage();
} else
${'s_regdate39_argument'} = NULL;if(${'s_regdate39_argument'} !== null) ${'s_regdate39_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login40_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login40_argument'}->createConditionValue();
if(!${'s_last_login40_argument'}->isValid()) return ${'s_last_login40_argument'}->getErrorMessage();
} else
${'s_last_login40_argument'} = NULL;if(${'s_last_login40_argument'} !== null) ${'s_last_login40_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more41_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more41_argument'}->createConditionValue();
if(!${'s_regdate_more41_argument'}->isValid()) return ${'s_regdate_more41_argument'}->getErrorMessage();
} else
${'s_regdate_more41_argument'} = NULL;if(${'s_regdate_more41_argument'} !== null) ${'s_regdate_more41_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less42_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less42_argument'}->createConditionValue();
if(!${'s_regdate_less42_argument'}->isValid()) return ${'s_regdate_less42_argument'}->getErrorMessage();
} else
${'s_regdate_less42_argument'} = NULL;if(${'s_regdate_less42_argument'} !== null) ${'s_regdate_less42_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more43_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more43_argument'}->createConditionValue();
if(!${'s_last_login_more43_argument'}->isValid()) return ${'s_last_login_more43_argument'}->getErrorMessage();
} else
${'s_last_login_more43_argument'} = NULL;if(${'s_last_login_more43_argument'} !== null) ${'s_last_login_more43_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less44_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less44_argument'}->createConditionValue();
if(!${'s_last_login_less44_argument'}->isValid()) return ${'s_last_login_less44_argument'}->getErrorMessage();
} else
${'s_last_login_less44_argument'} = NULL;if(${'s_last_login_less44_argument'} !== null) ${'s_last_login_less44_argument'}->setColumnType('date');

${'page47_argument'} = new Argument('page', $args->{'page'});
${'page47_argument'}->ensureDefaultValue('1');
if(!${'page47_argument'}->isValid()) return ${'page47_argument'}->getErrorMessage();

${'page_count48_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count48_argument'}->ensureDefaultValue('10');
if(!${'page_count48_argument'}->isValid()) return ${'page_count48_argument'}->getErrorMessage();

${'list_count49_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count49_argument'}->ensureDefaultValue('20');
if(!${'list_count49_argument'}->isValid()) return ${'list_count49_argument'}->getErrorMessage();

${'sort_index45_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index45_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index45_argument'}->isValid()) return ${'sort_index45_argument'}->getErrorMessage();

${'sort_order46_argument'} = new SortArgument('sort_order46', $args->sort_order);
${'sort_order46_argument'}->ensureDefaultValue('asc');
if(!${'sort_order46_argument'}->isValid()) return ${'sort_order46_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin29_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied30_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls31_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id32_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name33_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name34_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name35_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address36_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday37_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars38_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate39_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login40_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more41_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less42_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more43_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less44_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index45_argument'}, $sort_order46_argument)
));
$query->setLimit(new Limit(${'list_count49_argument'}, ${'page47_argument'}, ${'page_count48_argument'}));
return $query; ?>