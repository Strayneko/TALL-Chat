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

    <div class="lg:container h-screen bg-white lg:py-4 ">
        {{ $slot }}
    </div>

    <!-- livewire scripts -->
    @livewireScripts
</body>

</html>