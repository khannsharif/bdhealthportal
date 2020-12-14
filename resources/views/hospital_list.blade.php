@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('page-title')
    <h2><b>Hospital</b></h2><h5><b>Hospital List</b></h5>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group">
                        <a class="btn btn-success" href="<?= route('hospital.add'); ?>"> <i class="fa fa-plus"></i> Add Hospital</a>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('layouts.master_dashboard_partials.alert-message')

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL.No</th>
                            <th>BMDC Registered Number</th>
                            <th>Hospital Logo</th>
                            <th>Hospital Name</th>
                            <th>Department Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($hospitals as $key=>$hospital)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$hospital->bmdc_registered_number}}</td>
                                <td valign="middle" align="center"><img src="{{asset('images/hospital_images/'.$hospital->logo)}}" width="80"></td>
                                <td>{{$hospital->hospital_name}}</td>
                                <td>
                                    @foreach ($hospital->departments as $dep)
                                        {{$dep->department_name}} ,
                                    @endforeach
                                </td>
                                <td>{{$hospital->address}}</td>
                                <td>{{$hospital->contact_number}}</td>
                                <td>{{$hospital->email}}</td>
                                <td>
                                    <a href="{{route('hospital.singleHos',$hospital->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('hospital.singleHosEdit',$hospital->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <th>SL.No</th>
                        <th>BMDC Registered Number</th>
                        <th>Hospital Logo</th>
                        <th>Hospital Name</th>
                        <th>Department Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Email address</th>
                        <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        <!-- "colvis" -->
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
