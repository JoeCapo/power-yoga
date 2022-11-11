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
    

        {{-- contact form --}}
        <form class="w-50">
            <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Contact Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea type="textarea" class="form-control" id="message" rows="4" cols="50">
                    Type Message Here
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>  
@endsection