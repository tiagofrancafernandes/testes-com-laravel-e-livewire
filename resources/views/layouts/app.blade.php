<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/auto-dark-mode.css') }}">

    <title>@hasSection ('title') @yield('title') @else Bootstrap 5 @endif</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    @stack('styles')
    <livewire:styles />
</head>

<body class="antialiased">
    <div class="container">
        {{ $slot }}
    </div>
    @stack('scripts')

    @env('local')
    <script>
        window.addEventListener("livewire-debug", e => console.log(e.detail));

    </script>
    @endenv

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <livewire:scripts />
</body>

</html>
