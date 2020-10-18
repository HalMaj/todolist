<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Todolist</title>
	
	<link rel="stylesheet" href="/css/app.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
	@include('inc.navbar')
	<div class="container">
        @include('inc.messages')
		@yield('content')

	</div>

	<footer id="footer" class="text-center">
		<p> Copyright &copy; 2017 Todolist </p>
	</footer>
</body>

</html>