@extends('layouts.home')
@section('title', 'Users')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
    @endpush

    <div class="page-header">
        <ol class="breadcrumb">
            <!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="#">{{ __('Settings') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Users') }}</li>
        </ol><!-- End breadcrumb -->
        <div class="ml-auto">
            <div class="input-group">
                <a href="{{ route("create-user", app()->getLocale()) }}" class="btn btn-secondary text-white" data-toggle="tooltip" title="" data-placement="bottom"
                    data-original-title="Add user">
                    <span>
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- start message area-->
        @include('includes.message')
        <!-- end message area-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Users') }}</h3>
                </div>
                <div class="card-body">
                    <table id="user_table" class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Permissions') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <!--server side users table script-->
        <script src="{{ asset('js/custom.js') }}"></script>
    @endpush
@endsection
