function insert(form){ return legacy_filter('insert', form, 'board', 'procBoardInsertDocument', completeDocumentInserted, ['error','message','mid','document_srl','category_srl'], 'Request?', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert", {'user_name': {required:true,maxlength:20},'password': {required:true},'email_address': {required:true,maxlength:250,rule:'email'},'number1': {required:true,maxlength:50},'number2': {required:true,maxlength:50},'number3': {required:true,maxlength:50},'homepage': {maxlength:250},'title': {required:true,minlength:1,maxlength:250},'content': {required:true,minlength:1},'inquiry': {required:true,minlength:1},'category_srl': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['user_name','User Name']);
	v.cast('ADD_MESSAGE',['password','Password']);
	v.cast('ADD_MESSAGE',['email_address','Email']);
	v.cast('ADD_MESSAGE',['number1','number1']);
	v.cast('ADD_MESSAGE',['number2','number2']);
	v.cast('ADD_MESSAGE',['number3','number3']);
	v.cast('ADD_MESSAGE',['homepage','Homepage']);
	v.cast('ADD_MESSAGE',['title','Subject']);
	v.cast('ADD_MESSAGE',['content','Content']);
	v.cast('ADD_MESSAGE',['inquiry','Message']);
	v.cast('ADD_MESSAGE',['category_srl','Category']);
	v.cast('ADD_MESSAGE',['isnull','Please enter a value for %s']);
	v.cast('ADD_MESSAGE',['outofrange','Please try to keep the text length of %s.']);
	v.cast('ADD_MESSAGE',['equalto','The value of %s is invalid']);
	v.cast('ADD_MESSAGE',['invalid','The value of %s is invalid.']);
	v.cast('ADD_MESSAGE',['invalid_email','%s is NOT a valid email address.']);
	v.cast('ADD_MESSAGE',['invalid_userid','The %s field allows only alphabets, numbers and underscore(_). The first letter should be an alaphabet.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','The %s field allows only alphabets, numbers and underscore(_). The first letter should be an alaphabet.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','The format of %s is invalid. e.g.) http://xpressengine.com/']);
	v.cast('ADD_MESSAGE',['invalid_url','The format of %s is invalid. e.g.) http://xpressengine.com/']);
	v.cast('ADD_MESSAGE',['invalid_korean','The format of %s is invalid. Please enter Korean letters only.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','The format of %s is invalid. Please enter Korean letters and numbers only.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','The format of %s is invalid. Please enter English alphabets only.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','The format of %s is invalid. Please enter English alphabets and numbers only.']);
	v.cast('ADD_MESSAGE',['invalid_mid','The format of %s is invalid. Module ID should be begun with a letter. Subsequent characters may be letters, digits or underscore characters.']);
	v.cast('ADD_MESSAGE',['invalid_number','The format of %s is invalid. Please enter numbers only.']);
})(jQuery);