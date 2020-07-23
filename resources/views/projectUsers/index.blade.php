@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>My Projects</h1>
                <div class="mx-auto w-75">
                    <p>These are the projects you are involved in Motase</p>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="video-container">
        <video autoplay loop="true">
            <source type="video/mp4" src="videos/video.mp4">
        </video>
    </div>

    <a href="#next-section" class="smoothscroll scroll-button">
        <span class=" icon-keyboard_arrow_down"></span>
    </a>

</section>

<!-- SERVICES -->
<section class="site-section services-section bg-light block__62849" id="services-section">

    <div class="container">
        @if(count($projects) > 0)
        @foreach($projects as $project)
        <div class="row">
            <div class="col-12 mb-lg-5">
                <a href="/projects/{{$project->id}}" class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                    <h3> {{ $project->name }}</h3>
                    <small>{{$project->responsibility}}</small>
                    <p> {{ $project->description }} </p>
                </a>       
            </div>
        </div>
        @endforeach
        @else
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>You are not following any story yet.</h1>
                <div class="col-12 text-center">
                    <a href="/program/" class="btn btn-primary btn-md">check out interesting topics and stories</a>
                </div>
            </div>
        </div>
    </div>
    @endif


</div>
</section>


@endsection
