@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column align-items-center">
        <h1 class="text-slih-black text-center mt-5 mb-3">
            <b>Our studio is located in:
            <br>
            <br>
            3588 Whitney Ave Hamden, Connecticut</b>
        </h1>

        <div class="about my-4">
            <img src="{{ Vite::asset('resources/images/Parking.jpg') }}">
        </div>

        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1572106238187!6m8!1m7!1skq9Bci0w4lFFSJjp-oUZVQ!2m2!1d41.42436863693886!2d-72.90582008398384!3f255.97378785019484!4f3.735479428912896!5f0.7820865974627469" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <div class="accessory-hr my-5"></div>
    </div>
</div>  
@endsection