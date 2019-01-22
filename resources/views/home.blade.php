@extends('layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info">
                            <i class="ti-thumb-up"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">{{$totalVotings}}</h3>
                            <h5 class="text-muted m-b-0">Total Voting(s)</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-warning">
                            <i class="mdi mdi-bullseye"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-lgiht">{{$totalPositions}}</h3>
                            <h5 class="text-muted m-b-0">Total Positions</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-lgiht">{{$totalLevel}}</h3>
                            <h5 class="text-muted m-b-0">Total Level(s)</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-danger">
                            <i class="mdi mdi-bullseye"></i>
                        </div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-lgiht">{{$totalDepartment}}</h3>
                            <h5 class="text-muted m-b-0">Total Department(s)</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">{{$totalVoters}}</h2>
                        <h6 class="text-muted">Total Voters</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="50" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">{{$totalNominees}}</h2>
                        <h6 class="text-muted">Total Nominees</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">{{$totalCandidates}}</h2>
                        <h6 class="text-muted">Total Candidate</h6></div>
                    <!-- Column -->
                    <div class="col text-right ">
                        <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0">{{$totalVoteCasted}}</h2>
                        <h6 class="text-muted">Total Vote Casted</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sales Overview</h4>
                    <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                    <div class="amp-pxl" style="height: 300px;"></div>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li>
                                <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Ample</h6> </li>
                            <li>
                                <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Newsletter Campaign</h4>
                    <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                    <div class="campaign2 ct-charts" style="height: 300px;"></div>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li>
                                <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Open Rate</h6> </li>
                            <li>
                                <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Recurring</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Current Visitors</h4>
                    <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                    <div id="usa" style="height: 300px"></div>
                    <div class="text-center">
                        <ul class="list-inline">
                            <li>
                                <h6 class="text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Valley</h6> </li>
                            <li>
                                <h6 class="text-info"><i class="fa fa-circle font-10 m-r-10"></i>Newyork</h6> </li>
                            <li>
                                <h6 class="text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Kansas</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
@endsection