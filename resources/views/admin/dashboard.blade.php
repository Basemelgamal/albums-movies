@extends('admin.layouts.app')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Dashboard</h4>
                    <p class="text-muted page-title-alt">Welcome to Ablum movies admin panel !</p>
                </div>
            </div>

            <!-- Page-Title -->
            <div class="row">

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-purple pull-left">
                            <i class="md md-equalizer text-purple"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{ $users }}</b></h3>
                            <p class="text-secondary">Users</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-purple pull-left">
                            <i class="md md-equalizer text-purple"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{ $admins }}</b></h3>
                            <p class="text-secondary">Admins</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-purple pull-left">
                            <i class="md md-equalizer text-purple"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{ $roles }}</b></h3>
                            <p class="text-secondary">Roles</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-purple pull-left">
                            <i class="md md-equalizer text-purple"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{ $albums }}</b></h3>
                            <p class="text-secondary">Albums</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div><!-- row -->
            <!-- end Page-Title -->
        </div> <!-- container -->
    </div> <!-- content -->

@endsection

