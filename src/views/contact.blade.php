<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Contact Form Package For Laravel</title>
		
		
		{{--<link href="{{ url('css/contact.css') }}" rel="stylesheet">--}}
		<link rel="stylesheet" href="{{url('css/contact/css/contact.css')}}">
	</head>
    <body>
		<div class="container">
			<h1>Contact Form Package For Laravel</h1>
			
			<form action="{{route('contact')}}" method="post" autocomplete="off">
			
				@csrf
				<input type="text" name="name" placeholder="Your Name" ><br />
				<input type="text" name="email" placeholder="Your Email" ><br />
				<textarea name="message" cols="15" rows="10" placeholder="Your Query"></textarea><br />
				<input type="submit" value="submit">
			</form>
		</div>
    </body>
</html>
