@include('layouts.master_dashboard_partials.partial_header')
@include('layouts.master_dashboard_partials.partial_navbar')
@include('layouts.master_dashboard_partials.partial_sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @yield('page-title')
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @yield('page-content')
        </div>
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->
@include('layouts.master_dashboard_partials.partial_footer')
