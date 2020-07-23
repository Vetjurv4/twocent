@extends('layouts.app')

@section('content')


@include('../templates/AppNav')

<section class="site-section" id="next-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                @include('../templates/feedback')
                <h1>Register</h1>
                <div class="mx-auto w-75">
                    <p>Just register motase, you already here</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-lg-6 mb-5 mb-lg-0">
                <form method="POST" action="{{ route('register') }}" class="">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="name">Name</label> 
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="surname">Surname</label> 
                            <input type="text" id="surname" class="form-control"name="surname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="gender">Gender</label> 
                            <input type="text" id="gender" class="form-control" name="gender">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="cellphone">Cellphone</label> 
                            <input type="text" id="cellnumber" class="form-control" name="cellnumber">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label> 
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="address1">Address Line 1</label> 
                            <input type="text" id="address1" class="form-control" name="address1">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="address2">Address Line 2</label> 
                            <input type="text" id="address2" class="form-control" name="address2">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="zip_code">Zip Code</label> 
                            <input type="text" id="zip_code" class="form-control" name="zip_code">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="password">Password</label> 
                            <input type="password" id="subject" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Verify Password</label> 
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-md text-white">

                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>


@endsection
