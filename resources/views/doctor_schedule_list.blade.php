@extends('layouts.master_dashboard')
@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">   
@endsection
@section('page-title')
<h2><b> <i class="nav-icon fas fa-user-md"></i> Doctor</b></h2><h5><b>Schedule </b></h5>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
              <div class="btn-group"> 
                <a class="btn btn-success" href="<?= url('doctor_schedule_add'); ?>"> <i class="fa fa-plus"></i>  Add Schedule </a>  
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.No</th>
              <th>Department</th>
              <th>Hospital Name </th>
              <th>Avaiable Days</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Per Patient Time</th>
              <th>Serial Visibility</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>01</td>
              <td>InternetExplorer</td>
              <td>01</td>
              <td>InternetExplorer</td>
              <td>01</td>
              <td>01</td>
              <td>01</td>
              <td>Win 95+</td>
              <td> 4</td>
              <td class="center">
                <a href="" class="btn btn-xs  btn-primary"><i class="fas fa-edit"></i></a> 
                <a href="" onclick="" class="btn btn-xs  btn-danger"><i class="fas fa-trash"></i></a> 
            </td>
            </tr>
            </tbody>
            <tfoot>
              <th>SL.No</th>
              <th>Department</th>
              <th>Hospital Name </th>
              <th>Avaiable Days</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Per Patient Time</th>
              <th>Serial Visibility</th>
              <th>Status</th>
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
