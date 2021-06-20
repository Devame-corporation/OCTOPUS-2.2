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
                                    {{ __('Select your language') }}
                                </div>
                            </div>
                            <table class="table card-table ">
                                <tbody>
                                    <tr class="border-bottom">
                                        <td class="border-top-0"><a href="{{ route('selectLanguage', 'en') }}">English</a></td>
                                        <td class="border-top-0">
                                            <i class="flag flag-gb" data-toggle="tooltip" title="" data-original-title="flag flag-gb"></i>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td><a href="{{ route('selectLanguage', 'fr') }}">Français</a></td>
                                        <td>
                                            <i class="flag flag-fr" data-toggle="tooltip" title="" data-original-title="flag flag-fr"></i>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td><a href="{{ route('selectLanguage', 'ar') }}">العربية</a></td>
                                        <td>
                                            <i class="flag flag-sa" data-toggle="tooltip" title="" data-original-title="flag flag-sa"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
