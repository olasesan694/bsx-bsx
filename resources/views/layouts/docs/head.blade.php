<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168065262-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        </script>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Brisebox Docs, access the docs and more"/>
        <meta property="og:title" content="Docs Brisebox."/>
        <meta property="og:url" content="https://retailers.brisebox.com"/>
        <meta property="og:description" content="Access the docs, Brisebox."/>
        <meta property="og:type" content="website"/>

        <title>Docs | Brisebox</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/docs.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
        <script src="/js/popup.js"></script>

    </head>
    
    <body>
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
