@extends('layouts.main')
@section('title', 'Permissions')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-layers bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('PermissionExample ')}}</h5>
                            <span>{{ __('Some examples of predefined roles and permissions')}} </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Permission')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Example')}} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Instruction start -->
            <div class="col-md-12">
                <div class="card table-card proj-t-card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 p-3">
                                    {{ __('For user management: permission and roles we use')}}  <code>larave-permissions</code> {{ __('packge. This package allows for users to be associated with permissions and roles. Every role is associated with multiple permissions. A ')}} <code>Role</code> {{ __('and a')}}  <code>Permission</code> {{ __('are regular Eloquent models.')}} <br><br>

                                    {{ __('Directive use:')}}  <br>
                                    <img src="{{ asset('img/blade-syntax.JPG')}}" alt="" class="img-fluid"> <br><br>
                                </div>
                            </div>
                        <h6 class="pt-badge bg-red">{{ __('Spaite')}} </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
