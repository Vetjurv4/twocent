@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1>I just hope</h1>
                <div class="mx-auto w-75">
                    <p>I hope you smart enought to find the login button</p>
                </div> 
                @if (Route::has('login'))
                <p class="mt-5"><a href="{{ route('login') }}" class="btn btn-outline-white btn-md ">Join us</a></p>
                @endif
            </div>
        </div>
    </div>

    

    <a href="#about-us-section" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
    </a>

</section>

<!-- ABOUT US -->
<section class="site-section about-us-section" id="about-us-section">
    <div class="container">

        <div class="row mb-5 pt-0 site-section">
            <div class="col-md-6 align-self-center">
                <h3 class="section-title-sub text-primary">About Us</h3>
                <h2 class="section-title mb-4">Who Are You Guys</h2>
                <p>
                   We created this website just to flex and show-off some of our skills because we are the best. We can write 
                   196745333 pages about us, but you couldn't even read the previous number so there's no needed. 
                   This is an application for people who have something to share, if you want to express your views, debate on
                   a topic, share knowledge or voice this is the App for you.
                </p>

                <p class="mt-4"><a href="{{ route('about') }}" class="spepcial_link">Read more about us</a></p>
            </div>
            <div class="col-md-5 ml-auto img-overlap">
                <div class="img-1"><img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow"></div>
                <div class="img-2"><img src="images/sq_img_10.jpg" alt="Image" class="img-fluid img-shadow"></div>
            </div>
        </div>
    </div>
</section>



<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                    <span class="play-icon"><span class="icon-play"></span></span>
                    <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                </a>
            </div>
            <div class="col-lg-5 ml-auto">
                <h3 class="section-title-sub text-primary">Watch the video</h3>
                <h2 class="section-title mb-3">More of what we do</h2>
                <p class="lead">
                    We believe that everyone young, old, black, white, educated or uneducated deserves to have a voice and that 
                    the world is a better place when we speak out, listen, teach, share and build community using the little something
                    we have.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
