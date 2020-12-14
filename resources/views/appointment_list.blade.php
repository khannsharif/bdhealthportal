@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('page-title')
    <h2><b>Appointment</b></h2><h5><b>Appointment List</b></h5>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @hasanyrole('admin')
                    <div class="btn-group">
                        <a class="btn btn-success" href="<?= url('appointment_add'); ?>"> <i class="fa fa-plus"></i> Add Appointment </a>
                    </div>
                    @endhasanyrole
                </div>

                @if(session()->has('success'))
                    <div id="msg" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div id="msg" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif
            <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL.No</th>
                            <th>Patient name</th>
                            <th>Hospital Name</th>
                            <th>Department Name</th>
                            <th>Date and time</th>
                            <th>Problem</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($apps as $app)
                            <tr>
                                <th scope="row">{{ $app->serial_no }}</th>
                                <th>{{$app->users->full_name }}</th>
                                <td>{{ $app->hospital->hospital_name }}</td>
                                <td>{{ $app->department->department_name }}</td>
                                <td>{{ $app->appointment_date }} | {{  \Carbon\Carbon::parse($app->appointment_time)->format('H:i:s') }}</td>
                                <td>
                                    {{ $app->problem }}
                                </td>
                                <td class="text-center">
                                    @if($app->status == 'pending')
                                        <div class="alert text-info text-center">
                                            {{ $app->status }}
                                        </div>
                                    @endif
                                    @if($app->status == 'canceled')
                                        <div class="alert text-danger text-center">
                                            {{ $app->status }}
                                        </div>
                                    @endif
                                    @if($app->status == 'active')
                                        <div class="alert text-success text-center">
                                            {{ $app->status }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="">
                                        @hasanyrole('admin|doctor')
                                        @if($app->status == 'pending')
                                            <a href="{{ route('update_appointment_status', ['id'=> $app->id]) }}" class="btn btn-primary btn-sm">Active</a>
                                        @endif
                                        @if($app->status == 'active')
                                            <a href="{{ route('update_appointment_status', ['id'=> $app->id]) }}" class="btn btn-outline-danger btn-sm">Cancel</a>
                                        @endif
                                        <a href="{{ route('edit_appointment', ['id'=> $app->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('delete_appointment', ['id'=> $app->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                        @endhasanyrole

                                        @hasanyrole('doctor')
                                        <a href="{{ route('add_prescription', ['id'=> $app->id, 'serial_no'=>$app->serial_no]) }}" class="btn btn-info btn-sm">Add Prescription</a>
                                        @endhasanyrole
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL.No</th>
                            <th>Patient name</th>
                            <th>Hospital Name</th>
                            <th>Department Name</th>
                            <th>Date and time</th>
                            <th>Problem</th>
                            <th>status</th>
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

@section('page-js')
    <script>
        $('#msg').delay(1500).fadeOut('slow');
    </script>
@endsection
