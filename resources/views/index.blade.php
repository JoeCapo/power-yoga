@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 d-flex justify-content-center">
        <img src="{{ Vite::asset('resources/images/bizPic2.jpg') }}" class="img-fluid w-50">
    </div>
</div>

<!--about start-->

<div id="about">
    <div class="accessory-hr my-5"></div>
    
    <div class="container text-center">
        <div class="col-12">
            <h4>Never miss a class using the MINDBODY app click Get MINDBODY button below!</h4>
            <div class="my-4">
                <iframe id="getOurApp" scrolling="no" allowtransparency="true" src="https://clients.mindbodyonline.com/connect/appbutton?siteID=881197" style="border: none; width: 200px; height: 48px;"></iframe>
            </div>
        </div>

        <div class="col-md-12 accessory-hr1"></div>
    </div>

    <div class="container text-center">
        <div class="row team">
            <div class="col-12">
                <span name="about"></span>
                <h4><b>What is hot yoga?</b></h4>
                <p>Unlike other styles of yoga vinyasa is connecting breath with movement creating a flow to the poses during the class. The studio is heated 95 degree F with approximately 50% humidity. The heat adds to create space in the body in order to ease the body into the poses. Power yoga is a dynamic, energizing form of exercise that tones every muscle while calming the mind. Power Yoga chisels away at the excess baggage in your brain. Don't let Power You INTIMIDATE you! Anyone can modify to safely benefit from this practice. Power yoga is different from other forms of yoga. It's purposefully challenging. You get a lot from what you put into it, on and off your mat. Everyone has the ability to just START. After you start, the sky's the limit.</p>
                <h4><b>About</b></h4>
                <p> 
                Some Like It Hot Power Yoga is a heated studio located in Hamden Connecticut. We feature Hot Vinyasa style yoga, with an emphasis on Power. Each class is challenging, but anyone with a basic knowledge of yoga can comfortably attend leaving out anything that might not be in their practice. Each teacher brings their own style to the practice. You don’t have to be flexible or a “yogi” to practice here. All levels are welcome and encouraged to join us. We are here to teach what you need to be taught and more important, anything is just a “suggestion.” Feel free to take out or add what you might need each day on your mat. This is a welcoming studio for all who would like to participate. If you do not know the basics, introduction classes are offered once monthly. We strive for all participants to reach their greatest potential. See you on your mat!                               
                </p>
            </div>
        </div>
    </div>
    <div class="container text-center">                    
        <div class="row team">                        
            <div class="col-12"> 
                <img class="img-fluid" src="{{ Vite::asset('resources/images/debv.jpg') }}">                           
                <h4>Debra Vieira</h4>
                <h5>Yoga Instructor</h5>
                <p>My name is Debra Vieria and I am someone who you might describe as an all-around athlete. Not a fantastic one, but someone who truly just loves the competition regardless. I have participated in endurance events such as marathons and IronMan Triathlons. I love all kinds of strength training including Crossfit. I actually taught myself long distance swimming to be able to participate in triathlons. I have participated and competed in it all. Over the years I practiced in a few types of yoga. I never felt that "connection" others spoke about. One day I was asked to meet for a power yoga class. Well the rest is history! After the first class I was hooked! I realized after that first class that I found what I was missing in other aspects of my training-the immediate connection between breath and athletic movements. From that point on, I was hooked on the satisfaction of getting stronger both mentally and physically, without a finish line in sight. After practicing yoga consistently, I decided to learn more and understand how the practice can be a guide for myself and my life. I discovered that what you learn on the mat, transfers off! How the connection between mind and body can be fostered and developed. I am a registered yoga teacher with my 200 hour yoga certification. I am continuing toward my 500 hour certification over the next year. In my teaching, I want to show others that it doesn't matter how strong, capable or trained you are -- yoga is all about what you put in and take out. I hope to inspire others to explore themselves, their mind, and body, in a way they haven't before.</p>
            </div>
            <div class="col-12"> 
                <img class="img-fluid" src="{{ Vite::asset('resources/images/josh.jpg') }}">                           
                <h4>Josh Kane</h4>
                <h5>Yoga Instructor</h5>
                <p>Josh Kane has been practicing yoga since 2002 and teaching since 2015. He received his 300hr Bhakti Yoga teacher training from Raghunath Cappo at ‘Supersoul Farm’ in Chatham, NY in 2018. He has also done several months of study at ‘The Esalen Institute’ in Big Sur, CA and used to play drums in a band called “Uh Huh Her”. You can follow him on IG @thedrumyogi</p>
            </div>                       
            
        </div>
    </div>
</div>
@endsection