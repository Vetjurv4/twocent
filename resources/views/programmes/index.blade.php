@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<!-- SERVICES -->
<section class="site-section services-section bg-light block__62849" id="services-section">
    <div class="container">

        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>Categories or Topics</h1>
                <div class="mx-auto w-75">
                    <p>This is what we offer, you can chose a topic of your interest or login to add yours</p>
                </div>
            </div>
        </div>

        @foreach($programmes as $program)
        @if(count($programmes) > 0)
        <div class="row">
            <div class="col-12 mb-lg-5">
                <a href="/program/{{$program->id}}" class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                    <h3> {{ $program->name }}</h3>
                    <p> {{ $program->description }} </p>
                </a>       
            </div>
        </div>
        @endif
        @endforeach
        
        @auth
        <div class="row">
            <div class="col-12 text-center">
                <a href="/program/create" class="btn btn-primary btn-md">Add Topic</a>
            </div>
        </div>
        @endauth
    </div>
</section>

@endsection
