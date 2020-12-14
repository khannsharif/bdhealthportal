@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <style>
        #form {
            margin: 0;
            padding: 0;
        }
    </style>
@endsection
@section('page-title')
    <h2><b> <i class="nav-icon fas fa-user-md"></i> Doctor</b></h2><h5><b> Doctor List </b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-success" href="<?= route('doctor.add'); ?>"> <i class="fa fa-plus"></i> Add Doctor </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('layouts.master_dashboard_partials.alert-message')

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL.No</th>
                            <th>Hospital Name</th>
                            <th>Department Name</th>
                            <th>BMDC Registered Number</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            {{-- <th>Picture</th>
                            <th>Designation</th>
                            <th>Short Biography</th> --}}
                            <th>Specialist</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Education/Degree</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctors as $key=>$doctor)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td> {{$doctor->hospital->hospital_name}}</td>
                                <td>{{$doctor->department->department_name}}</td>
                                <td>{{$doctor->bmdc_registered_number}}</td>
                                <td><img src="{{asset('images/profile/'.$doctor->user->picture)}}" width="80"> {{$doctor->user->full_name}}</td>
                                <td>{{$doctor->user->email}}</td>
                                <td>{{$doctor->address}}</td>
                                <td>{{$doctor->user->contact_number}}</td>
                                {{-- <td>{{$doctor->picture}}</td>
                                <td>{{$doctor->designation}}</td>
                                <td>{{$doctor->short_biography}}</td> --}}
                                <td>{{$doctor->specialist}}</td>
                                <td>{{$doctor->date_of_birth}}</td>
                                <td>{{$doctor->user->gender}}</td>
                                <td>{{$doctor->blood_group}}</td>
                                <td>{{$doctor->education}}</td>
                                <form id="form" action="{{route('doctor.delete',$doctor->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <td>
                                        {{-- <a href="{{route('noticedboard.singleNotice',$notice->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>  --}}
                                        <a href="{{route('doctor.singleDoctorEdit',$doctor->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:;" class="btn btn-xs btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <th>SL.No</th>
                        <th>Hospital Name</th>
                        <th>Department Name</th>
                        <th>BMDC Registered Number</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        {{-- <th>Picture</th>
                        <th>Designation</th>
                        <th>Short Biography</th> --}}
                        <th>Specialist</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Education/Degree</th>
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
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('.delete-confirm').click(function (event) {
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete ?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "error",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('#form').submit();
                        }
                    });
            });
        });
    </script>
@endsection
