@extends('layouts.home')
@section('title', 'Documentation - API')
@section('content')

    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('Documentation') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">API</li>
        </ol>
    </div>

    <div class="row">
        <!-- Instruction start -->
        <div class="col-md-12">
            <div class="card table-card proj-t-card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('About') }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 p-3">
                            {{ __('The OCTOPUS Light is a low-level HTTP-based API for clients that you can use to') }}
                            <code>create/edit/update</code>
                            <br>
                            {{ __('Full documentation and API endpoints:') }} <a
                                href="https://www.postman.com/Amineelkhal/workspace/octopus/"
                                target="_blank">{{ __('Documentation link') }}</a>
                            <br><br>
                            {{ __('Example:') }} <br>
                            <img src="{{ asset('assets/images/thumbs/api.JPG') }}" alt="" class="img-fluid"> <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card table-card proj-t-card">
                <div class="card-header">
                    <h3>{{ __('Basic Usage') }}</h3>
                </div>
                <div class="card-body">
                    <p>After successful login, an <code>access_token</code> will be provided to user. This token will be
                        used for further requests</p> <code>access_token</code> will be like,
                    <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd29ya3N1aXRlLmRldlwvYXBpXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1ODAyODA3MjksImV4cCI6MTYxMTkwMzEyOCwibmJmIjoxNTgwMjgwNzI5LCJqdGkiOiJBYXE1QkdnT0p1dG1ycUdIIiwic3ViIjoxLCJwcnYiOiI4MThmNWM5OGFjZTIzNzUzMmQ5ZDQ5NDNmZDhlZmI1NDBiODU1YjQyIiwicmVtZW1iZXIiOjEsInR5cGUiOjF9.wK4OhcwUWa9uwFboqkZCOznjnRnjU19yzoCGCKIZUY0</code>
                    <br>
                    User must set request header with this data
                    <pre>
                    <code>
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd29ya3N1aXRlLmRldlwvYXBpXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1ODAyODA3MjksImV4cCI6MTYxMTkwMzEyOCwibmJmIjoxNTgwMjgwNzI5LCJqdGkiOiJBYXE1QkdnT0p1dG1ycUdIIiwic3ViIjoxLCJwcnYiOiI4MThmNWM5OGFjZTIzNzUzMmQ5ZDQ5NDNmZDhlZmI1NDBiODU1YjQyIiwicmVtZW1iZXIiOjEsInR5cGUiOjF9.wK4OhcwUWa9uwFboqkZCOznjnRnjU19yzoCGCKIZUY0',
                    ],
                    </code>
                    </pre>
                    <span class="text-muted">Part after "Bearer" is the access token</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card table-card proj-t-card">
                <div class="card-header">
                    <h3>{{ __('Available Api Endpoints') }}</h3>
                </div>
                <div class="card-body">
                    <table id="permission_table" class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Method') }}</th>
                                <th>{{ __('URl') }}</th>
                                <th>{{ __('Parameters') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/login</td>
                                <td><code>{email, password}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/profile</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/change-password</td>
                                <td><code>{old_password, password, password_confirmation}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/update-profile</td>
                                <td><code>{name, email}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/logout</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/users</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/create_user</td>
                                <td><code>{name, email, password, password_confirmation, role[]}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/user/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/user/delete/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/user/change-role/<span class="text-red">1</span></td>
                                <td><code>{role[]}</code><span class="text-muted">Note:1 is id, you can replace it with
                                        any id</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/roles</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/role/create</td>
                                <td><code>{role, permissions[]}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/role/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/role/delete/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/role/change-permission/<span class="text-red">1</span></td>
                                <td><code>{permissions[]}</code><span class="text-muted">Note:1 is id, you can replace
                                        it with any id</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/permissions</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-warning">POST</strong></td>
                                <td>/api/v1/permission/create</td>
                                <td><code>{permission}</code></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/permission/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                            <tr>
                                <td><strong class="text-green">GET</strong></td>
                                <td>/api/v1/permission/delete/<span class="text-red">1</span></td>
                                <td><span class="text-muted">Note:1 is id, you can replace it with any id</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
