@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection
@section('page-title')
    <h2><b> <i class="nav-icon fas"></i> Patient</b></h2><h5><b> Patient List </b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-success" href="<?= url('patient_registration'); ?>"> <i class="fa fa-plus"></i> Add Patient</a>

                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL.No</th>
                            <th>NID/dob</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Picture</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($patients as $key=>$patient)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$patient->user->nid_dob}}</td>
                                <td>{{$patient->user->full_name}}</td>
                                <td>{{$patient->user->email}}</td>
                                <td>{{$patient->address}}</td>
                                <td>{{$patient->user->contact_number}}</td>
                                <td><img src="{{ asset('images/profile/'.$patient->user->picture) }}" alt="{{ $patient->user->picture }}" width="80"></td>
                                <td>{{$patient->date_of_birth}}</td>
                                <td>{{$patient->user->gender}}</td>
                                <td>{{$patient->blood_group}}</td>
                                <td class="center">
                                    <a href="{{url('/view-patient',$patient->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{url('/edit-patient',$patient->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL.No</th>
                            <th>NID/dob</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Picture</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
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
