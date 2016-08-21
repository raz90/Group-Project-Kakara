$("form.ajax").on('submit', function(){
	var that = $(this),
	url = that.attr('actio'),
	type = that.attr('method'),
	data = {};
	
	that.find('[name]').each(function(index, value) {
		var that = $(this),
		name = that.attr('name'),
		value = that.value;
	});
	
	$.ajax({
		url:url,
		type: type,
		data: data,
		sucess: function(response) {
			console.log(response);
		}
	});
	return false;
});