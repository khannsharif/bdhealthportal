@extends('layouts.master_dashboard')
@section('page-css')
   
@endsection
@section('page-title')
<h2><b> <i class="nav-icon fas fa-user-md"></i> Doctor</b></h2><h5><b>Add Schedule </b></h5>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?= url('doctor_schedule_list'); ?>"> <i class="fa fa-list"></i>  Check Schedule list </a>  
                </div>
          </div>
        </div>
        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">     
            <div class="col-md-9 col-sm-12">
              <form role="form" method="" action="">
                    <input type="hidden" name="" value="">
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Department Name</label>
                        <div class="col-sm-8">
                            <select name="" class="form-control" id="">
                                <option value="" selected="selected">Select option</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Hospital Name</label>
                        <div class="col-sm-8">
                            <select name="" class="form-control" id="">
                                <option value="" selected="selected">Select option</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Available Days</label>
                        <div class="col-sm-8">
                            <select name="" class="form-control" id="">
                                <option value="" selected="selected">Select option</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Available Time</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="" class="timepicker form-control" type="text" placeholder="Start Time" value="">
                                </div>
                                <div class="col-sm-6">
                                    <input name="" class="timepicker form-control" type="text" placeholder="End Time"  value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Per Patient Time</label>
                        <div class="col-sm-8">
                            <input type="date" id="firstName" placeholder=" " class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Serial Visibility </label>
                        <div class="col-sm-8">
                            <input type="text" id="firstName" placeholder=" " class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Status </label>
                        <div class="col-sm-8">
                            <label class="radio-inline"><input type="radio" name="status" value="1" checked> Active</label>	&nbsp;
                            <label class="radio-inline"><input type="radio" name="status" value="0"> Inactive</label></div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Reset</button>	&nbsp;
                            <button type="submit" class="btn btn-success mr-auto">Save</button>
                        </div>
                    </div>
              </form>
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
