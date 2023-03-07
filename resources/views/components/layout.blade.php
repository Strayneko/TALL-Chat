<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- css -->
	@vite('resources/css/app.css')
	<!-- livewire style -->
	@livewireStyles
</head>
<body>

	{{$slot}}

	<h1 class="text-red-500">A</h1>
<!-- livewire scripts -->
@livewireScripts
</body>
</html>