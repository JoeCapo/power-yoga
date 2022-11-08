<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
    <title>Some Like It Hot Power Yoga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.min.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script src="js/sorting.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.js" type="text/javascript"></script>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!--home start-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Some Like It Hot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="https://mindbody.io/fitness/studios/some-like-it-hot-power-yoga" class="nav-link">Class Registration</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
  	
    @yield('content')

    <footer>
        <div class="container">
            <div class="d-flex flex-column">
                <div class="pt-5">
                    <div class="">
                        <h3 class="text-white">Find us on Social Media!</h3>
                    </div>
                    <div class="soc">
                        <div class="soc-icons d-flex justify-content-center">
                            <div class="soc-icon soc2">
                                <a href="https://www.facebook.com/Some-Like-it-Hot-Power-Yoga-Hamden-116209346420712/"></a>
                            </div>
                            <div class="soc-icon soc3">
                                <a href="https://www.instagram.com/hamdenpoweryoga/"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
                <div class="text-white">
                    <div>Copyright © 2019 Some Like It Hot Power Yoga. All Rights Reserved.</div>
                </div>
                <div class="footer-links">
                    <ul class="d-flex">
                        <li class="active"><a href="http://somelikeithotpoweryoga.com/">Home</a></li>
                        <li><a href="https://mindbody.io/fitness/studios/some-like-it-hot-power-yoga">Class Registration</a></li>
                        <!-- <li><a href="http://somelikeithotpoweryoga.com/photo_gallery.html">Gallery</a></li> -->
                        <li><a href="http://somelikeithotpoweryoga.com/contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>