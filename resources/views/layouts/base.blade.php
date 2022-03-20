<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	@livewireStyles
	<title>CRUD</title>
  </head>

  <body>

  	@yield('content')

	<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
	@livewireScripts

  </body>
</html>