@extends('layouts.app')

@section('content')

<div class="container">	
    <div class="d-flex flex-column align-items-center my-4">
        <h1>Power Yoga Studio</h1>		

        <div class="pswp-gallery pswp-gallery--single-column" id="studio-gallery">
            <a href="{{ Vite::asset('resources/images/gallery/studio.jpg') }}" 
                data-pswp-width="1669" 
                data-pswp-height="2500" 
                target="_blank">
                <img src="{{ Vite::asset('resources/images/gallery/studio.jpg') }}" class="img-fluid" alt="Studio Image 1" />
            </a>
            <a href="{{ Vite::asset('resources/images/gallery/studio11.jpg') }}" 
                data-pswp-width="1669" 
                data-pswp-height="2500" 
                target="_blank">
                <img src="{{ Vite::asset('resources/images/gallery/studio11.jpg') }}" class="img-fluid" alt="Studio Image 2" />
            </a>
            <a href="{{ Vite::asset('resources/images/gallery/studio3.jpg') }}" 
                data-pswp-width="1669" 
                data-pswp-height="2500" 
                target="_blank">
                <img src="{{ Vite::asset('resources/images/gallery/studio3.jpg') }}" class="img-fluid" alt="Studio Image 3" />
            </a>
        </div>
    </div>
</div>

@endsection