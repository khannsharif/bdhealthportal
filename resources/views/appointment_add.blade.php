@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
<h2><b>Appointment</b></h2>

@isset($editing)
<h6><b>Edit Appointment </b></h6>
@else
<h6><b>Add new Appointment </b></h6>
@endisset
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">
      <div class="card">
      @hasanyrole('admin')
        <div class="card-header">
            <div class="panel-heading no-print">
                <div class="btn-group">
                    <a class="btn btn-primary" href="<?= url('appointment_list'); ?>"> <i class="fa fa-list"></i>  Check Appointment List </a>
                </div>
          </div>
        </div>
      @endhasanyrole

        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">
            <div class="col-md-9 col-sm-12">
              <form role="form" method="POST" @isset($editing) action="{{ route('update_appointment', ['id'=>$app->id]) }}" @else action="{{ url('/appointment/add') }}" @endif>
                  @csrf
                    <input type="hidden" name="" value="">
                    <div class="form-group row">
                        <label for="patient_id" class="col-sm-3 control-label">Patient ID </label>
                        <div class="col-sm-8">
                            @hasanyrole('admin')
                            <input type="number" id="patient_id" name="patient_id" placeholder="" class="form-control" autofocus  required
                                   @isset($app) readonly @endisset
                                   value="{{ old('patient_id') }}" >
                            @endhasanyrole
                            @hasanyrole('patient')
                            <input type="number" name="patient_id" placeholder="" id="patient_id" class="form-control" value="{{ Auth::id() }}" readonly  required>
                            @endhasanyrole
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-sm-3 control-label">Department Name</label>
                        <div class="col-sm-8">
                            <select name="department_id" class="form-control" id="department" required>
                                <option value="0" selected="selected" disabled>Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" @if(old('department_id')) selected @endif>{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hospitals" class="col-sm-3 control-label">Hospital Name</label>
                        <div class="col-sm-8">
                            <select name="hospital_id" class="form-control" id="hospitals" required>
                                <option value="0" selected="selected" disabled>Select Hospital</option>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}" @if(old('hospital_id')) selected @endif>{{ $hospital->hospital_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="appointment_date" class="col-sm-3 control-label">Appointment Date</label>
                        <div class="col-sm-8">
                            <input type="date" id="appointment_date" name="appointment_date" class="form-control" autofocus required value="{{old('appointment_date')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time_slot" class="col-sm-3 control-label">Available time slot</label>
                        <div class="col-sm-8">
                            <input type="time" id="time_slot" name="time_slot" class="form-control" autofocus required value="{{old('time_slot')}}">
                        </div>
                    </div>
                    {{--<div class="form-group row">
                        <label for="serial_number" class="col-sm-3 control-label">Serial No </label>
                        <div class="col-sm-8">
                            <input type="number" name="serial_number" id="serial_number" class="form-control" autofocus readonly value="{{ $rand }}">
                        </div>
                    </div>--}}
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 control-label">Problem </label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control"  placeholder="" rows="4" id="description"> {{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-8">
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
    <script>
        $('#msg').delay(1500).fadeOut('slow');
    </script>
@endsection
