<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
		<h1>Contact Form</h1>
		
		<form action="{{route('contact')}}" method="post">
		
			@csrf
			
			<input type="text" name="name" placeholder="Your Name" >
			<input type="text" name="email" placeholder="Your Email" >
			<textarea name="message" cols="15" rows="10" placeholder="Your Query"></textarea>
			<input type="submit" value="submit">
		</form>
		
       
    </body>
</html>
