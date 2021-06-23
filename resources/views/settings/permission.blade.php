@extends('layouts.home')
@section('title', 'Permissions')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    @endpush

    <div class="page-header" dir="auto">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('Settings') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Permissions') }}</li>
        </ol>
    </div>

    <div class="row clearfix">
        <!-- start message area-->
        @include('includes.message')
        <!-- end message area-->
        <!-- only those have manage_permission permission will get access -->
        @can('manage_permission')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" dir="auto">
                        <h3>{{ __('Add Permission') }}</h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ url( app()->getLocale() . '/permission/create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="permission">{{ __('Permission') }}<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="permission" name="permission"
                                            placeholder="{{ __('Permission Name') }}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">{{ __('Assigned to Role') }} </label>
                                        {!! Form::select('roles[]', $roles, null, ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-body">
                    <table id="permission_table" class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Permissions') }}</th>
                                <th>{{ __('Assigned to Role') }}</th>
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
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('plugins/DataTables/Cell-edit/dataTables.cellEdit.js') }}"></script>
        <!--server side permission table script-->
        <script src="{{ asset('js/permission.js') }}"></script>
    @endpush
@endsection
