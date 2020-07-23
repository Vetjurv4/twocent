@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<section class="site-section block__18514" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>View a Story</h1>
                <div class="mx-auto w-75">
                    <p>Listen!</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8">
                <span class="text-primary d-block mb-5"><span class="icon-line-tools display-1"></span></span>

                @if(!App\ProjectUser::where('user_id', Auth::id())->where('project_id',$project->id)->exists())
                <form method="POST" action="/projectusers" class="">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="hidden"value="{{$project->id}}" name="project"/>
                            <input type="submit" value="follow story" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>
                </form>
                @endif
                <h2 class="mb-4"> {{ $project->name }}</h2>
                <small>Participants : {{count($project->users)}}</small>
                <p>{{$project->description}}</p>
                @auth
                @if(App\ProjectUser::where('user_id', Auth::id())->where('project_id',$project->id)->exists())
                <p><a href="/projects/{{$project->id}}/edit" class="btn btn-sm btn-primary btn-md mt-4">Edit Project</a></p>
                @endif
                @endauth
                <div class="row pb-0 border-top pt-5 block__19738 section-counter  justify-content-center">
                    <a href="#" >
                        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <span class="icon-line-mobile mr-3"></span>
                                <strong class="number" data-number="5">0</strong>
                            </div>
                            <span class="caption">Videos</span>
                        </div>
                    </a> 
                    <a href="#" >
                        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <span class="icon-line-mobile mr-3"></span>
                                <strong class="number" data-number="8">0</strong>
                            </div>
                            <span class="caption">Textbooks</span>
                        </div>
                    </a> 
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
