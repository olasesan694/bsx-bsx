<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
      
        <title>Jobs in e-commerce | Brisebox </title>

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        <!-- Bootstrap -->
        <!--<link href="/static/css/manual/careers/bootstrap.min.css?v=0.4" rel="stylesheet">-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
        <link rel="preload" as="style" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'">

        <link href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="/static/css/manual/careers/owl.carousel.css" rel="stylesheet">
        <link href="/static/css/manual/careers/owl.theme.css" rel="stylesheet">
        <link href="/static/css/careers-edit.css?v=0.3" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/static/css/manual/careers/style.min.css?v=0.2">

        <link href="{{ asset('css/jobs.css') }}" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="/static/js/manual/careers/navigation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/static/js/manual/careers/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="/static/js/manual/careers/plugins/owl.carousel.min.js"></script>
    <script src="/static/js/manual/careers/restaurant.min.js"></script>

  
  <script>
    if(localStorage.getItem('rf-cookie-consent-received')) {
        $('#cookie-consent-banner-container').hide();
    }
    $('#cookie-consent-confirm-btn').click(function(e) {
        localStorage.setItem('rf-cookie-consent-received', true);
        $('#cookie-consent-banner-container').hide();
    });
  </script>
  <script src="/static/js/selectize.min.js?v=0.1"></script>
  <script src="/static/js/manual/careers/careers.js?v=0.4"></script>

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