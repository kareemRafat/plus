

$(".showMessBtn").click(function(){

	// $('.view').text('read');
	$(this).parent().prev().text('read');

	// get row id 
	var id = $(this).attr('data-id');

	// update view database
	var url = 'functions/messages/update.php';
	$.post(url , {id} , function(res){

		console.log(res);

	})

})