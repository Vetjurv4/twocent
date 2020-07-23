@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<section class="site-section block__18514" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <div class="mx-auto w-75">
                    <p>You can Join or Add a new story under this topic</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <span class="text-primary d-block mb-5"><span class="icon-line-tools display-1"></span></span>
                <h2 class="mb-4"> {{ $program->name }}</h2>
                <small>created by: {{$program->user->name}} {{$program->user->surname}}</small>
                <p>{{$program->description}}</p>
                @auth
                @if(Auth::id() === $program->user->id)
                <p><a href="/program/{{$program->id}}/edit" class="btn btn-sm btn-primary btn-md mt-4">Edit</a></p>
                @endif
                @endauth
                <div class="row pb-0 border-top pt-5 block__19738 section-counter">
                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <a href="/program/{{$program->id}}/projects" >
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <span class="icon-line-mobile mr-3"></span>
                                <strong class="number" data-number="{{count($program->projects)}}">0</strong>
                            </div>
                            <span class="caption">View All Stories</span>
                        </a> 
                    </div>
                </div>
                
                @if(count($program->projects) > 0)
                <ul class="ul-check success mt-5 list-unstyled mb-0">
                     <bold>Stories</bold>
                    @foreach($program->projects as $project)
                    <a href="/projects/{{$project->id}}"><li>{{$project->name}}</li></a>
                     @endforeach
                </ul>
                @endif

                @auth
                <p><a href="/program/{{$program->id}}/projects/create" class="btn btn-primary btn-md mt-4">Add New Story</a></p>
                @endauth
            </div>
        </div>
    </div>
</section>

@endsection
