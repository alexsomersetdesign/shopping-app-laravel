<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping List Application</title>
	@vite(['resources/css/app.css', 'resources/css/tailwind-output.css', 'resources/js/app.js'])
	

</head>
<body>
	<main class="main">
		@include('components.header')
		@yield('content')

		@include('components.footer')
	</main>
</body>

</html>