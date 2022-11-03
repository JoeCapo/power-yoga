<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
    <title>Some Like It Hot Power Yoga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700" rel="stylesheet" type="text/css">
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
    <div class="header">
	<h2 class="logo">Some Like It Hot</h2>
		<input type="checkbox" id="chk">
	    	<label for="chk" class="show-menu-btn">
	      		<i class="fas fa-ellipsis-h"></i>
	    	</label>
	    	<ul class="menu">
		      <a href="{{ route('index') }}">Home</a>
		      <a href="https://mindbody.io/fitness/studios/some-like-it-hot-power-yoga" "="">Class Registration</a>
		      <a href="{{ route('gallery') }}"">Gallery</a>
		      <a href="{{ route('contact') }}">Contact</a>
		      <label for="chk" class="hide-menu-btn">
		        <i class="fas fa-times"></i>
		      </label>
    		</ul>
  	</div>
  	
    @yield('content')

    <div id="contact">
    <div class="line7">
        <div class="container">
            <div class="row" style="margin-top: 190px;">
                <div class="col-md-12">
                    <h3 style="color: #fff;">Find us on Social Media!</h3>
                </div>
                <div class="soc col-md-12">
                    <ul>
                        <li class="soc2">
                            <a href="https://www.facebook.com/Some-Like-it-Hot-Power-Yoga-Hamden-116209346420712/"></a>
                        </li>
                        <li class="soc3">
                            <a href="https://www.instagram.com/hamdenpoweryoga/"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="lineBlack">
        <div class="container">
            <div class="row downLine">
                <div class="col-md-6 text-left copy">
                    <p>Copyright © 2019 Some Like It Hot Power Yoga. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-right dm">
                    <ul id="downMenu">
                        <li class="active"><a href="http://somelikeithotpoweryoga.com/">Home</a></li>
                        <li><a href="https://mindbody.io/fitness/studios/some-like-it-hot-power-yoga">Class Registration</a></li>
                        <!-- <li><a href="http://somelikeithotpoweryoga.com/photo_gallery.html">Gallery</a></li> -->
                        <li><a href="http://somelikeithotpoweryoga.com/contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>