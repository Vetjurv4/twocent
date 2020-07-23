@extends('layouts.app')

@section('content')

@include('../templates/AppNav')

<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center newNav">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>Edit Category/Topic</h1>
                <div class="mx-auto w-75">
                    <p><p>Change! Do you know change? This is it!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-lg-6 mb-5 mb-lg-0">
                <form method="POST" action="/program/{{$program->id}}" class="">
                     @method('PATCH')
                    @csrf
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="name">Title</label> 
                            <input type="text" id="name" class="form-control" value="{{ $program->name }}" name="name" placeholder="title">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="description">Description</label> 
                            <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="What is it about motase?">{{ $program->description }}</textarea>
                        </div>
                    </div>

             

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Update" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>


@endsection
