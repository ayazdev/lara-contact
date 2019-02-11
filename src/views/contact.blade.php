<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Contact Form Package For Laravel</title>
		
		<!-- Style For Form -->
		<link rel="stylesheet" href="{{url('css/contact/contact.css')}}">
	</head>
    <body>
		<div class="main-container">
			<h3>Contact Form Package For Laravel</h3>
			<div class="messages"></div>
			<form id="contact-form" action="{{route('contact')}}" method="post" autocomplete="off">
				@csrf
				<input type="text" name="name" placeholder="Your Name" ><br />
				<input type="text" name="email" placeholder="Your Email" ><br />
				<textarea name="message" cols="15" rows="10" placeholder="Your Query"></textarea><br />
				<button type="submit" value="submit">Send</button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="{{url('js/contact/contact.js')}}"></script>
    </body>
</html>
