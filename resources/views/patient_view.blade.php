@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
<h2><b> <i class="nav-icon fas"></i> Patient</b></h2><h5><b> Patient Details </b></h5>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="panel-heading no-print">
                <div class="btn-group">
                   <a class="btn btn-primary" href="<?= url('patient_list'); ?>"> <i class="fa fa-list"></i>  Patient List </a>
                </div>
          </div>
        </div>
        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">
            <div class="col-md-9 col-sm-12">
              <h1>{{$patient->nid_dob}}</h1>
              <p>{{$patient->email}}</p>
              <p>{{$patient->address}}</p>
              <p>{{$patient->contact_number}}</p>
              <p><img src="{{ asset('images/profile/').'/'. $patient->picture}}" alt=""></p>
              <p>{{$patient->gender}}</p>
              <p>{{$patient->blood_group}}</p>
             </div>
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
