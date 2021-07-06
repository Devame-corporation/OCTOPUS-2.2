@extends("layouts.index")
@section("title", "Login")
@section('content')
    <div class="container text-center text-dark">
        <div class="row">
            <div class="col-lg-4 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-md-12">
                        <div class="card" dir="auto">
                            <div class="card-header">
                                <div class="card-title">
                                    {{ __('Sign In to your account') }}
                                </div>
                            </div>
                            <form method="POST" action="/login">
                                @csrf
                                <div class="card-body">
                                    <div class="text-center mb-6">
                                        <img height="70" src="{{ asset('assets/images/brand/horizontal-logo.svg') }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{__("Username") }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ __($message) }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon "><i class="fa fa-unlock-alt"></i></span>
                                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__("Password") }}">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ __($message) }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <a href="{{ route("passwordforgot", app()->getLocale()) }}" class="btn btn-link box-shadow-0 px-0">{{ __('Forgot password ?') }}</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-11 text-muted">&copy; {{ __("All rights reserved OCTOPUS HYPERVISOR") }}-{{ env("APP_VERSION") }}</div>
                                    <div class="col-1"><a href="{{ route("settings.languages", app()->getLocale()) }}"><span class="fa fa-language" style="font-size: 18px"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>
