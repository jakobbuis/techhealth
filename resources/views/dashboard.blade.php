<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TechHealth</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">Tech Health</h1>
                    <h2 class="subtitle">
                        {{ \Carbon\Carbon::now()->formatLocalized('%e %B %Y %H:%M') }}
                    </h2>
                </div>
            </div>
        </section>

        <div id="app">
            <projects></projects>
        </div>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </body>
</html>
