@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('page-title')
    <h2><b>Prescription</b></h2><h5><b>Prescription List</b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group">
                        {{--<a class="btn btn-success" href="<?= url('prescription_add'); ?>"> <i class="fa fa-plus"></i>  Add Prescription  </a>--}}
                    </div>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif
            <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: auto!important;">
                        <thead>
                        <tr>
                            <th>SL.No</th>
                            <th>Patient Name</th>
                            <th>Doctor name</th>
                            <th>Hospital Name</th>
                            <th>Chief problem</th>
                            <th>medicine_description</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prescriptions as $prescription)
                            <tr>
                                <td>{{ $prescription->appointment->serial_no }}</td>
                                <td>{{ $prescription->patient->full_name }}</td>
                                <td>{{ $prescription->doctor->full_name }}</td>
                                <td>{{ $prescription->appointment->hospital->hospital_name }}</td>
                                <td>{{ $prescription->cheif_complain }}</td>
                                <td>{!! $prescription->medicine_description !!}</td>
                                {{--<td>{{ $prescription->medicine_type }}</td>
                                <td>{{ $prescription->medicine_days }}</td>
                                <td>{{ $prescription->instruction }}</td>--}}
                                <td>{{ $prescription->note }}</td>
                                <td class="center">
                                    <a href="{{route('prescription_show', ['prescription_id' => $prescription->id])}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('prescription_edit', ['prescription_id'=>$prescription->id]) }}" class="btn btn-xs  btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL.No</th>
                            <th>Patient Name</th>
                            <th>Doctor name</th>
                            <th>Hospital Name</th>
                            <th>Chief problem</th>
                            <th>medicine_description</th>
                            <th>Notes</th>
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
