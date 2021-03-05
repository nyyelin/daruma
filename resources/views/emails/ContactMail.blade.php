<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sclae=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Form</title>
</head>
<body>
<h1>Contact Messages</h1>
<p>Name : {{ $dataReceived['name'] }}</p>
<p>Email : {{ $dataReceived['email'] }}</p>
<p>Subject : {{ $dataReceived['subject'] }}</p>
<p>Message : {{ $dataReceived['message'] }}</p>
</body>
</html>