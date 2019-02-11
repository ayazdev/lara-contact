$(function(){
	
	$("#contact-form").submit(function(e) {


		var form = $(this);

		$.ajax({
			   type: "POST",
			   url: "{{ route('contact') }}",
			   data: form.serialize(), 
			   success: function(data)
			   {
				   alert(data); 
			   }
			 });

		e.preventDefault(); 
	});
	
});
