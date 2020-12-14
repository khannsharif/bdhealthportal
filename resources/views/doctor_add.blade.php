@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')

    <h2><b>Doctor</b></h2>
    <h6>
        <b>
            @isset($doctor)
                Edit
            @else
                Add  new
            @endisset
            Doctor
        </b>
    </h6>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= route('doctor.list'); ?>"> <i class="fa fa-list"></i> Doctor List </a>
                        </div>
                    </div>
                </div>
            @include('layouts.master_dashboard_partials.alert-message')
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <form method="POST" action="@isset($doctor){{route('doctor.edit', ['id'=> $doctor->user->id])}}@else{{route('doctor.create')}}@endisset " enctype="multipart/form-data">
                                    @csrf
                                    @isset($doctor)
                                        <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                                    @endisset
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Hospital Name</label>
                                        <div class="col-sm-8">
                                            <select name="hospitals" class="form-control selectpicker" data-live-search="true">
                                                @foreach($hospitals as $hospital)
                                                    <option value="{{$hospital->id}}">{{$hospital->hospital_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Department Name</label>
                                        <div class="col-sm-8">
                                            <select name="departments" class="form-control selectpicker" data-live-search="true">
                                                @foreach($depts as $dept)
                                                    <option value="{{$dept->id}}">{{$dept->department_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">BMDC Registered Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('bmdc_registered_number') is-invalid @enderror" name="bmdc_registered_number" placeholder="" value="@isset($doctor->bmdc_registered_number){{$doctor->bmdc_registered_number}}@endisset">
                                            @error('bmdc_registered_number')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nid_dob" class="col-sm-3 control-label">NID</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nid_dob') is-invalid @enderror" name="nid_dob" placeholder="" value="@isset($doctor->user->nid_dob){{$doctor->user->nid_dob}}@endisset">
                                            @error('nid_dob')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" placeholder="" value="@isset($doctor->user->full_name){{$doctor->user->full_name}}@endisset">
                                            @error('full_name')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="" value="@isset($doctor->user->email){{$doctor->user->email}}@endisset">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="" value="@isset($doctor->address){{$doctor->address}}@endisset">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Contact Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" placeholder="" value="@isset($doctor->user->contact_number){{$doctor->user->contact_number}}@endisset">
                                            @error('contact_number')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Picture</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="picture" class="@error('picture') is-invalid @enderror" value="@isset($doctor->user->picture){{$doctor->user->picture}}@endisset">
                                            @error('picture')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Designation</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" placeholder="" value="@isset($doctor->designation){{$doctor->designation}}@endisset">
                                            @error('designation')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Short Biography</label>
                                        <div class="col-sm-8">
                                            <textarea name="short_biography" class="form-control  @error('short_biography') is-invalid @enderror" placeholder="" rows="4">@isset($doctor->short_biography){{$doctor->short_biography}}@endisset</textarea>
                                            @error('short_biography')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Specialist</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('specialist') is-invalid @enderror" name="specialist" placeholder="" value="@isset($doctor->specialist){{$doctor->specialist}}@endisset">
                                            @error('specialist')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Date of Birth</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" placeholder="" value="@isset($doctor->date_of_birth){{$doctor->date_of_birth}}@endisset">
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-8">
                                            <select name="gender" class="form-control" selected="selected">Select Bloog group>
                                                <option value="" selected="selected">Select Gender</option>
                                                <option value="male" @if(old('gender', $doctor->user->gender ?? '') == 'Male') selected="selected" @endif>Male</option>
                                                <option value="female" @if(old('gender', $doctor->user->gender ?? '') == 'Female') selected="selected" @endif>Female</option>
                                                <option value="others" @if(old('gender', $doctor->user->gender ?? '') == 'Others') selected="selected" @endif>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Blood Group</label>
                                        <div class="col-sm-8">
                                            <select name="blood_group" class="form-control" selected="selected">Select Bloog group>
                                                <option value="" selected="selected">Select Blood group</option>
                                                <option value="A+" @if(old('blood_group', $doctor->blood_group ?? '') == 'A+') selected="selected" @endif>A+</option>
                                                <option value="A-" @if(old('blood_group', $doctor->blood_group ?? '') == 'A-') selected="selected" @endif>A-</option>
                                                <option value="B+" @if(old('blood_group', $doctor->blood_group ?? '') == 'B+') selected="selected" @endif>B+</option>
                                                <option value="B-" @if(old('blood_group', $doctor->blood_group ?? '') == 'B-') selected="selected" @endif>B-</option>
                                                <option value="O+" @if(old('blood_group', $doctor->blood_group ?? '') == 'O+') selected="selected" @endif>O+</option>
                                                <option value="O-" @if(old('blood_group', $doctor->blood_group ?? '') == 'O-') selected="selected" @endif>O-</option>
                                                <option value="AB+" @if(old('blood_group', $doctor->blood_group ?? '') == 'AB+') selected="selected" @endif>AB+</option>
                                                <option value="AB-" @if(old('blood_group', $doctor->blood_group ?? '') == 'AB-') selected="selected" @endif>AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Education/Degree</label>
                                        <div class="col-sm-8">
                                            <textarea name="education" class="form-control  @error('education') is-invalid @enderror" placeholder="" rows="4">@isset($doctor->education){{$doctor->education}}@endisset</textarea>
                                            @error('education')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label"> </label>
                                        <div class="col-sm-8">
                                            @isset($doctor)
                                                <button type="submit" class="btn btn-primary mr-auto">Edit</button>
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


@endsection
