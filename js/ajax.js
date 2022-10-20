

$('.leave-comment').submit(function(event){

	// 1- stop default form behavior
	event.preventDefault();

	// 2- get form data
	let name = $('input[name="name"]').val();
	let phone = $('input[name="phone"]').val();
	let email = $('input[name="email"]').val();
	let message = $('textarea').val();

	// 3- send data to the server
	$.post('functions/addNewMessage.php' , {
		Name : name ,
		Phone : phone ,
		Email : email ,
		Message : message
		
	} , function(data){
		$('.res').html(data);
	})


})