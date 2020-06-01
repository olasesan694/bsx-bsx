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

        <meta property="og:image" content="https://recruiterflow.com/api/careers/social/image?for=facebook&amp;company=Brisebox"/>
        <meta name="description" content="Brisebox is hiring! Apply now."/>
        <meta property="og:title" content="Brisebox is hiring! Apply now."/>
        <meta property="og:url" content="https://recruiterflow.com/Brisebox/jobs"/>
        <meta property="og:description" content="Brisebox is hiring!"/>
        <meta property="og:type" content="website"/>
      
        <meta name="twitter:title" content="Brisebox is hiring! Apply now."/>
        <meta name="twitter:description" content="Brisebox is hiring!"/>
        <meta name="twitter:image" content="https://recruiterflow.com/api/careers/social/image?for=facebook&amp;company=Brisebox"/>
        <meta name="twitter:site" content="@recruiterflow"/>
        <meta name="twitter:label2" content="Company"/>
        <meta name="twitter:data2" content="Brisebox"/>
        <meta name="twitter:label1" content="Location">
        <meta name="twitter:data" content="">

        <title>Jobs in E-ecommerce | Brisebox</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/faq.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/jobs.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/plugins/html5shiv.min.js"></script>
      <script src="assets/plugins/respond.min.js"></script>

    <![endif]-->
    
    </head>
    
    <body>
        <div id="app">
            <main class="py-0">
                @yield('content')
            </main>
        </div>
    </body>
</html>
