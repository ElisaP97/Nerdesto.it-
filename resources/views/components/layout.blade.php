<div>
    <!DOCTYPE html>
    <html lang="{{ __('ui.html') }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <title>Nerdesto</title>
    </head>

    <body>
        <x-navbar />

        <x-modal-request-revisor />
        <div class="min-vh-100">
            {{ $slot }}
        </div>
        <x-footer />
        @livewireScripts
    </body>

    </html>
</div>
