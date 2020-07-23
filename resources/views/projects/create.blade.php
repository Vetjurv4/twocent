@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>Add Story Details</h1>
                <div class="mx-auto w-75">
                    <p>Say it out loud</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-lg-6 mb-5 mb-lg-0">
                <form method="POST" action="/program/{{$id}}/projects" class="">
                    @csrf
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="name">Title</label> 
                            <input type="text" id="name" class="form-control" name="name" placeholder="title">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="responsibility">About</label> 
                            <input type="text" id="responsibility" class="form-control" name="responsibility" placeholder="about?">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="description">Description</label> 
                            <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Tell us more"></textarea>
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Start Story" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>


@endsection
