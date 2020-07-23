@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<!-- SERVICES -->
<section class="site-section services-section bg-light block__62849" id="services-section">

    <div class="container">
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>View Stories</h1>
                <div class="mx-auto w-75">
                    <p>Jonga! Yeah that's all you need to do</p>
                </div>
            </div>
        </div>
        @if(count($program->projects) > 0)
        @foreach($program->projects as $project)
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
        @endif

        <div class="row">
            <div class="col-12 text-center">
                <a href="/program/{{$program->id}}/projects/create" class="btn btn-primary btn-md">Add New Story</a>
            </div>
        </div>
    </div>
</section>


@endsection
