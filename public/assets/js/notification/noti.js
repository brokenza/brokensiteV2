var MsgSuccess = function(title,detail) {
	$.notification({
		title: title,
		content: detail,
		icon: 'fa fa-check',
        iconClass: 'bg-success text-white',
        autoclose:true,
        autocloseTime:4000,
	});
};
var MsgError = function(title,detail) {
	$.notification({
		title: title,
		content: detail,
		icon: 'fa fa-exclamation',
        iconClass: 'bg-danger text-white',
        autoclose:true,
        autocloseTime:4000,
	});
};
var MsgSuccess = function(title,detail) {
	$.notification({
		title: title,
		content: detail,
		icon: 'fa fa-check',
        iconClass: 'bg-success text-white',
        autoclose:true,
        autocloseTime:4000,
	});
};

//controller
$(document).ready(function() {
    MsgSuccess('Success','Insert data completed');
    MsgError('Error','Error save data!!');
});