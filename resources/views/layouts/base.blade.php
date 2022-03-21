<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/datatables.min.css') }}" rel="stylesheet">
	
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/datatables.min.js') }}"></script>
	<script src="{{ url('js/jquery.min.js') }}"></script>

	<title>CRUD</title>
  </head>

  <body>

  	@yield('content')

  </body>
</html>