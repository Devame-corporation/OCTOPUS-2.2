@extends("layouts.index")
@section("content")
<div class="container text-center text-dark">
    <div class="row">
        <div class="col-lg-4 d-block mx-auto">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-6">
                                <img height="70" src="{{asset("assets/images/brand/horizontal-logo.svg") }}">
                            </div>
                            <h3>{{ __("Login") }}</h3>
                            <p class="text-muted">{{ __("Sign In to your account") }}</p>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon "><i class="fa fa-unlock-alt"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary btn-block">{{ __("Login") }}</button>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="btn btn-link box-shadow-0 px-0">{{ __("Forgot password ?") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection