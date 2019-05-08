<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='{{ asset("css/app.css") }}' >
        <title>Articles</title>
    </head>
    <body>
        <main>
            <div class='container text-center' style='padding-top:30px;'>
                @yield('content')
            </div>
        </main>
    </body>
</html>
