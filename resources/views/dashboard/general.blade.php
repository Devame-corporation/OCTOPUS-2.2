@extends('layouts.home')
@section('title', 'Dashboard')
@section('content')
    <div class="page-header" dir="auto">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __("General status") }}</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-bgimg br-7">
                <div class="row">
                    <div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0">
                        <div class="card-body text-center">
                            <h5 class="text-white">{{ __("Total users") }}</h5>
                            <h2 class="mb-2 mt-3 fs-2 text-white mainvalue">3</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card" dir="auto">
                <div class="card-header custom-header">
                    <div>
                        <h3 class="card-title">{{ __("Top actions") }}</h3>
                        <h6 class="card-subtitle">{{ __("Overview this day") }}</h6>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="list-group projects-list">
                        @foreach ($logs as $log)

                            <?php 
                            $icon = "fe-info"; 
                            $class = "info";
                            $message = explode(":", $log->message);
                            ?>
                            
                            @switch($log->level_name)
                                @case("ERROR") <?php $icon = "fe-alert-octagon"; $class = "danger"; ?> @break
                                @case("WARNING") <?php $icon = "fe-alert-triangle"; $class = "warning"; ?> @break
                            @endswitch

                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-sembold text-{{ $class }}"><i class="fe {{ $icon }} mr-1"></i> {{ __($log->level_name) }}</h6>
                                    <small class="text-{{ $class }}">{{ $log->created_at }}</small>
                                </div>
                                <p class="mb-0 text-dark">{{ __($message[1]) }}</p>
                                <small class="text-muted">{{ $message[0] }}</small>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
