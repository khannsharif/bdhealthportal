@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h2><b> <i class="nav-icon"></i> Patient </b></h2><h5><b>Patient Registration</b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= url('patient_list'); ?>"> <i class="fa fa-list"></i> Patient List </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                @if (Session::has('message'))
                                    @php
                                        $messages = Session::get('message');
                                    @endphp
                                    <div class="col-md-11 alert alert-{{ $messages['type'] }}" id="msg">
                                        <b>{{ $messages['value'] }}</b>
                                    </div>
                                @endif
                                <form method="POST" action="@isset($patient){{route('patient.edit', ['id'=>$patient->user->id])}}@else{{route('patient.create')}}@endisset" enctype="multipart/form-data">
                                    @csrf
                                    @isset($patient)
                                        <input type="hidden" name="dep_id" value="{{$patient->id}}">
                                    @endisset
                                    <div class="form-group row">
                                        <label for="nid_dob" class="col-sm-3 control-label">NID/DOB Number</label>
                                        <div class="col-sm-8">
                                            <input name="nid_dob" type="number" id="nid_dob" placeholder=" " value="{{ old('nid_dob', $patient->user->nid_dob ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="full_name" class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-8">
                                            <input name="full_name" type="text" id="full_name" placeholder=" " value="{{ old('full_name', $patient->user->full_name ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Email Address</label>
                                        <div class="col-sm-8">
                                            <input name="email" type="text" id="" placeholder=" " value="{{ old('email', $patient->user->email ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    @isset($patient)
                                    @else
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input name="password" type="password" id="" placeholder=" " value="{{ old('password', $patient->user->password ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    @endisset
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input name="address" type="text" id="" placeholder=" " value="{{ old('address', $patient->address ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Contact Number</label>
                                        <div class="col-sm-8">
                                            <input name="contact_number" type="text" id="" placeholder=" " value="{{ old('contact_number', $patient->user->contact_number ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Picture</label>
                                        <div class="col-sm-8">
                                            <input name="picture" type="file" id="" placeholder=" " value="{{ old('picture', $patient->user->picture ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Date of Birth</label>
                                        <div class="col-sm-8">
                                            <input name="date_of_birth" type="text" id="" placeholder=" " value="{{ old('date_of_birth', $patient->date_of_birth ?? '') }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-8">
                                            <select name="gender" class="form-control" id="gender">
                                                <option selected="selected" value="">Select Gender</option>
                                                <option value="male" @if(old('gender', $patient->user->gender ?? '') == 'male') selected="selected" @endif>Male</option>
                                                <option value="female" @if(old('gender', $patient->user->gender ?? '') == 'female') selected="selected" @endif>Female</option>
                                                <option value="others" @if(old('gender', $patient->user->gender ?? '') == 'others') selected="selected" @endif>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood_group" class="col-sm-3 control-label">Blood Group</label>
                                        <div class="col-sm-8">
                                            <select name="blood_group" class="form-control" id="blood_group">
                                                <option selected="selected" value="">Select Blood Group</option>
                                                <option value="A+" @if(old('blood_group', $patient->blood_group ?? '') == 'A+') selected="selected" @endif>A+</option>
                                                <option value="A-" @if(old('blood_group', $patient->blood_group ?? '') == 'A-') selected="selected" @endif>A-</option>
                                                <option value="B+" @if(old('blood_group', $patient->blood_group ?? '') == 'B+') selected="selected" @endif>B+</option>
                                                <option value="B-" @if(old('blood_group', $patient->blood_group ?? '') == 'B-') selected="selected" @endif>B-</option>
                                                <option value="O+" @if(old('blood_group', $patient->blood_group ?? '') == 'O+') selected="selected" @endif>O+</option>
                                                <option value="O-" @if(old('blood_group', $patient->blood_group ?? '') == 'O-') selected="selected" @endif>O-</option>
                                                <option value="AB+" @if(old('blood_group', $patient->blood_group ?? '') == 'AB+') selected="selected" @endif>AB+</option>
                                                <option value="AB-" @if(old('blood_group', $patient->blood_group ?? '') == 'AB-') selected="selected" @endif>AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label"> </label>
                                        <div class="col-sm-8">
                                            @isset($patient)
                                                <button type="submit" class="btn btn-primary mr-auto">Update</button>
                                            @else
                                                <button type="submit" class="btn btn-success mr-auto">Save</button>
                                            @endisset
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
