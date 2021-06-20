@extends("layouts.index")
@section('title', 'Languages')
@section('content')
    <div class="container text-center text-dark">
        <div class="row">
            <div class="col-lg-4 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-md-12">
                        <div class="card" dir="auto">
                            <div class="card-header">
                                <div class="card-title">
                                    {{ __('Forgot password ?') }}
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-11 text-muted">&copy;
                                        {{ __('All rights reserved OCTOPUS HYPERVISOR') }}</div>
                                    <div class="col-1"><a href="{{ route('login', app()->getLocale()) }}"><span
                                                class="fa fa-user" style="font-size: 18px"></span></a></div>
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
