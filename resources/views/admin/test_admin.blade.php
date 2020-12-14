
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | BDHP</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://bdhealthportal.test/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://bdhealthportal.test/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="http://bdhealthportal.test/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://bdhealthportal.test/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="http://bdhealthportal.test/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">   
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper"><!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
       <!-- logout Settings Dropdown Menu -->
      <li class="dropdown dropdown-user">
        <a class="nav-link"href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-sign-out-alt"></i></a>
        <ul class="dropdown-menu">
          <div class="dropdown"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-alt mr-2"></i>Profile
          </a>
          <a href="#" class="dropdown-item">
            <i class="fa fa-edit mr-2"></i>Edit Profile
          </a>
          <a href="#" class="dropdown-item">
            <i class="fa fa-key mr-2"></i>Update Password
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt  mr-2"></i>Log Out
          </a>
            
        </ul>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <h3>BD Health Portal</h3>
    <img src="#" alt="" class=""
         style="opacity: .8">
    <span class="brand-text font-weight-light"></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item">
              <a href="http://bdhealthportal.test/admin_dashboard" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>    
        <!-- Start Departmenet-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
              Department
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/department_add"class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/department_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Department List</p>
              </a>
            </li>
          </ul>
        </li> 
        <!-- //End Departmenet-sidebar section-->

        <!-- Start Hospital-sidebar section-->
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-hospital-symbol"></i>
              <p>
                Hospital
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://bdhealthportal.test/hospital_add" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Hospital</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://bdhealthportal.test/hospital_list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hospital List</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- //End Hospital-sidebar section-->

      <!-- Start Doctor-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Doctor
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/doctor_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/doctor_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Doctor List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Schedule
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/doctor_schedule_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Schedule</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/doctor_schedule_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Schedule List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- //End Doctor-sidebar section-->

        <!-- Start Appointment-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Appointment
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/appointment_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/appointment_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Appointment List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- //End Appointment-sidebar section-->

        <!-- Start Prescription-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-file-prescription"></i>
            <p>
              Prescription
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/prescription_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Prescription</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/prescription_list" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Prescription List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- //End Prescription-sidebar section-->

        <!-- Start Noticedboard-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              Noticeboard
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/noticeboard_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Notice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/noticeboard_list" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Notice List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- //End Noticedboard-sidebar section-->

        <!-- Start Patient Community Blog-sidebar section-->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-blog"></i>
            <p>
              Patient Blog
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="http://bdhealthportal.test/patient_community_blog_add" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://bdhealthportal.test/patient_community_blog_list" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- //End Noticedboard-sidebar section-->
        <li class="nav-item">
          <a href="http://bdhealthportal.test/blood_community_join"  class="nav-link">
            <i class="nav-icon fas fa-tint"></i>
            <p>
             Join Blood Community
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="http://bdhealthportal.test/blood_community_list" class="nav-link">
            <i class="nav-icon fas fa-tint"></i>
            <p>
              Blood Community list
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside> <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h2><b>Hospital</b></h2><h5><b>Hospital List</b></h5>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
          <div class="btn-group"> 
            <a class="btn btn-success" href="http://bdhealthportal.test/hospital_add"> <i class="fa fa-plus"></i>  Add Hospital  </a>  
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL.No</th>
              <th>BMDC Registered Number</th>
              <th>Hospital Name</th>
              <th>Department Name</th>
              <th>Address</th>
              <th>Contact Number</th>
              <th>Email address</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>01</td>
              <td>Internet</td>
              <td>Win 95+</td>
              <td>Internet</td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>Win 95+</td>
              <td> Active</td>
              <td class="center">
                <a href="" class="btn btn-xs  btn-success"><i class="fas fa-eye"></i></a> 
                <a href="" class="btn btn-xs  btn-primary"><i class="fas fa-edit"></i></a> 
                <a href="" onclick="" class="btn btn-xs  btn-danger"><i class="fas fa-trash"></i></a> 
              </td>
            </tr>
            </tbody>
            <tfoot>
              <th>SL.No</th>
              <th>BMDC Registered Number</th>
              <th>Hospital Name</th>
              <th>Department Name</th>
              <th>Address</th>
              <th>Contact Number</th>
              <th>Email address</th>
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
      </div>
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
 </div>
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="#">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="http://bdhealthportal.test/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://bdhealthportal.test/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://bdhealthportal.test/assets/dist/js/adminlte.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/jszip/jszip.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="http://bdhealthportal.test/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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
</body>
</html>