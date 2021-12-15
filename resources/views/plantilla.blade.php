<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">

        <meta content="" name="description">
        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
          @yield('css')
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

        <!-- Bootstrap css -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link href="{{URL::asset("lib/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css")}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Libraries CSS Files -->
        <link href="{{URL::asset("lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
        <link href="{{URL::asset("lib/owlcarousel/assets/owl.theme.default.min.css")}}" rel="stylesheet">
        <link href="{{URL::asset("lib/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
        <link href="{{URL::asset("lib/animate/animate.min.css")}}" rel="stylesheet">
        <link href="{{URL::asset("lib/modal-video/css/modal-video.min.css")}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{URL::asset("css/style.css")}}" rel="stylesheet">
@yield('scripts')

    </head>

    <body>

        <header id="header" class="header header-hide">
            <div class="container">

                <div id="logo" class="pull-left">
                    <h1><a href="/" class="scrollto">BLOG</a></h1>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/">Inicio</a></li>
                        <li class="menu-has-children"><a href="/api/posts">LISTADO DE ARTÍCULOS</a>
                        </li>


                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->



        @yield('contenido')




        <!--==========================
          Hero Section
        ============================-->
        <section id="hero" class="wow fadeIn">
            <div class="hero-container">
                <h5>Rodrigo Ordóñez López</h5>

            </div>
        </section><!-- #hero -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="{{URL::asset("lib/jquery/jquery.min.js")}}"></script>
        <script src="{{URL::asset("lib/jquery/jquery-migrate.min.js")}}"></script>
        <script src="{{URL::asset("lib/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{URL::asset("lib/superfish/hoverIntent.js")}}"></script>
        <script src="{{URL::asset("lib/superfish/superfish.min.js")}}"></script>
        <script src="{{URL::asset("lib/easing/easing.min.js")}}"></script>
        <script src="{{URL::asset("lib/modal-video/js/modal-video.js")}}"></script>
        <script src="{{URL::asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>
        <script src="{{URL::asset("lib/wow/wow.min.js")}}"></script>
        <script src="{{URL::asset("contactform/contactform.js")}}"></script>

  <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>

</body>
</html>
