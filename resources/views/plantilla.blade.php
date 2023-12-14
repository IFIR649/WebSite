<!-- inicio de la pagina web y modal -->
<!DOCTYPE html>
<html data-bs-theme="light">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pikaday.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Cs/styles_modal.css')}}">
</head>



<body>

     <!-- Inicio del Nav -->
     <nav id="navbar">
        <div class="logo">
            <!-- <img src="IMG/Yo_cv.jpg" alt="user" /> -->
        </div>
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="cv">CV</a></li>
            <li><a href="all">Projects</a></li>
            <li><a href="lastProyect">My Last Project</a></li>
            <li><a href="contact">Contact Me</a></li>
        </ul>
    </nav>
    <button class="toggle" id="toggle">
        <i class="fa fa-bars fa-2x"></i>
    </button>

    @yield('content')

    <footer class="page-footer py-3 border-top">
        <div class="container my-4">
            <div class="links"><a href="index">About me</a><a href="contact">Contact me</a><a href="all">Projects</a></div>
            <div class="social-icons"><a class="me-3" href="https://www.facebook.com/alexis.guzmanroldan"><i class="icon ion-social-facebook"></i></a><a class="me-3" href="https://www.instagram.com/graalex649/"><i class="icon ion-social-instagram-outline"></i></a><a class="me-3" href="https://github.com/IFIR649"><i class="icon ion-social-github" style="font-size: 24px;"></i></a></div>
        </div>

    </footer>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/pikaday.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>
    <script src="{{ asset('fuctions_modal.js')}}"></script>
</body>

</html>