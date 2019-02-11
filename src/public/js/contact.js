$(function(){
	var route = $("#contact-form").data('route');

	$("#contact-form").submit(function(e) {
		$('.message').remove();
		var form_data = $(this);
		$.ajax({
			   type: 'POST',
			   url: route,
			   data: form_data.serialize(), 
			   success: function(response)
			   {
				   if(response.name){
					   $('#messages').append('<div class="message error" role="alert">'+response.name+'</div>');
				   }
				   if(response.email){
					   $('#messages').append('<div class="message error" role="alert">'+response.email+'</div>');
				   }
				   if(response.message){
					   $('#messages').append('<div class="message error" role="alert">'+response.message+'</div>');
				   }
				   if(response.success){
					   $('#messages').append('<div class="message success" role="alert">'+response.success+'</div>');
				   }
			   }
			 });
		e.preventDefault(); 
	});
});
