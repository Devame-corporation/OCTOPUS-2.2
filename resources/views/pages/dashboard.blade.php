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
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header custom-header">
                    <div>
                        <h3 class="card-title">Top Ongoing Projects</h3>
                        <h6 class="card-subtitle">Overview this Month</h6>
                    </div>
                    <div class="card-options">
                        <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-ellipsis-v"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
                            <li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
                            <li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
                            <li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="list-group projects-list">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 font-weight-sembold">PSD Projects</h5>
                                <small class="text-danger"><i class="fa fa-caret-down mr-1"></i>5 days ago</small>
                            </div>
                            <p class="mb-0 text-dark">Started:17-02-2019</p>
                            <small class="text-muted">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 font-weight-sembold">Wordpress Projects</h5>
                                <small class="text-success"><i class="fa fa-caret-up mr-1"></i>2 days ago</small>
                            </div>
                            <p class="mb-0 text-dark">Started:15-02-2019</p>
                            <small class="text-muted">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 font-weight-sembold">HTML &amp; CSS3 Projects</h5>
                                <small class="text-danger"><i class="fa fa-caret-down mr-1"></i>1 days ago</small>
                            </div>
                            <p class="mb-0 text-dark">Started:26-02-2019</p>
                            <small class="text-muted">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start br-br-7 br-bl-7">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 font-weight-sembold">Java Projects</h5>
                                <small class="text-success"><i class="fa fa-caret-up mr-1"></i>10 days ago</small>
                            </div>
                            <p class="mb-0">Started:06-02-2019</p>
                            <small>Donec id elit non mi porta gravida at eget metus.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header custom-header">
                    <div>
                        <h3 class="card-title">Acquisitions by Campaign</h3>
                        <h6 class="card-subtitle">Overview of all Campaign</h6>
                    </div>
                    <div class="card-options d-none d-sm-block">
                        <div class="btn-group btn-sm">
                            <button type="button" class="btn btn-light btn-sm">
                                <span class="">Today</span>
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                <span class="">Month</span>
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                <span class="">Year</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card-body">
                                <h4 class="mb-1 text-center">CPC Campaign</h4>
                                <div id="morrisBar8" class="chartsh chart-dropshadow"><svg height="256" version="1.1" width="344" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px; top: -0.78125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#1753fc" d="M171.828,206.66666666666669A78.66666666666667,78.66666666666667,0,1,0,148.09102684835224,52.999996333050774" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#1753fc" stroke="#293544" d="M171.828,209.66666666666669A81.66666666666667,81.66666666666667,0,1,0,147.1858032959589,50.13982670168407L137.73124619318392,20.266943885187345A113,113,0,1,1,171.828,241Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#9258f1" d="M148.09102684835224,52.999996333050774A78.66666666666667,78.66666666666667,0,0,0,102.47555507776327,165.13061846714334" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#9258f1" stroke="#293544" d="M147.1858032959589,50.13982670168407A81.66666666666667,81.66666666666667,0,0,0,99.8307584493729,166.54661662902592L72.20732699729555,181.335930764244A113,113,0,0,1,137.73124619318392,20.266943885187345Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#fdb901" d="M102.47555507776327,165.13061846714334A78.66666666666667,78.66666666666667,0,0,0,171.8032861381983,206.6666627846223" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#fdb901" stroke="#293544" d="M99.8307584493729,166.54661662902592A81.66666666666667,81.66666666666667,0,0,0,171.80234366041773,209.66666263657822L171.79092920729744,245.99999417693346A118,118,0,0,1,67.79933261664492,183.695927700715Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="171.828" y="118" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#d3d8e2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.5439,0,0,1.5439,-93.4487,-70.1567)" stroke-width="0.6477312853107343"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Campaign3</tspan></text><text x="171.828" y="138" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#d3d8e2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.6389,0,0,1.6389,-109.7791,-83.0556)" stroke-width="0.6101694915254237"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15%</tspan></text></svg></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="card-body">
                                <h4 class="mb-4 text-center">CTC Campaign</h4>
                                <div><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="lineChart1" class="chartjs-render-monitor" width="789" style="height: 250px; display: block; width: 789px;" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-5 mb-lg-0">
                                <h4 class="mb-4 d-block">
                                    <span class="fs-16">CPC Campagin 01</span>
                                    <span class="float-right font-weight-bold">50%</span>
                                </h4>
                                <div class="progress progress-md h-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-5 mb-lg-0">
                                <h4 class="mb-4 d-block">
                                    <span class="fs-16">CPC Campagin 02</span>
                                    <span class="float-right font-weight-bold">25%</span>
                                </h4>
                                <div class="progress progress-md h-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-25"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-0 mb-md-0">
                                <h4 class="mb-4 d-block">
                                    <span class="fs-16">CPC Campagin 03</span>
                                    <span class="float-right font-weight-bold">15%</span>
                                </h4>
                                <div class="progress progress-md h-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow w-15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
