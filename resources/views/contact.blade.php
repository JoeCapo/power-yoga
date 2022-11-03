@extends('layouts.app')

@section('content')
<div style="height: 100%;" class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wwa">					
                    <span name="about" ></span>
                    <div>
                        <img style="position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);max-width: 100%;max-height: 100%;" src="images/bizPic.jpg">
                    </div>
            </div>
        </div>
        <div class="row">
                <h1 class="contactus">
                        <b>Our studio is located in:</b>
                        <br>
                        <br>
                        <b>3588 Whitney Ave Hamden, Connecticut</b>
                </h1>
        </div>
    </div> 
    <div class="container">
        <img style="margin-bottom:25px" src="images/Parking.JPG">
    </div>
    <div class="container">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1572106238187!6m8!1m7!1skq9Bci0w4lFFSJjp-oUZVQ!2m2!1d41.42436863693886!2d-72.90582008398384!3f255.97378785019484!4f3.735479428912896!5f0.7820865974627469" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 hr1">
                <hr/>
            </div>
        </div>
    </div>  
</div>  
@endsection