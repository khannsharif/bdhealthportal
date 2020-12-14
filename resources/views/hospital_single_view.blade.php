@extends('layouts.master_dashboard')
@section('page-css')
   
@endsection
@section('page-title')
<h2><b> <i class="nav-icon fas"></i> Hospital</b></h2><h5><b> Hospital Details </b></h5>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                  <a class="btn btn-primary" href="<?= route('hospital.list'); ?>"> <i class="fa fa-list"></i>  Hospital List </a>  
                </div>
          </div>
        </div>
        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">     
            <div class="col-md-9 col-sm-12">
             <h1>{{$hospital->bmdc_registered_number}}</h1>
             <p>{{$hospital->hospital_name}}</p>
             <p>
              @foreach ($hospital->departments as $dep)
                  {{$dep->department_name}} ,
              @endforeach
             </p>
            </div>
         </div>
        </div>
        <!-- /.card-body -->
      </div> 
    </div>
  </div>
</div>
@endsection

@section('page-js')

@endsection
