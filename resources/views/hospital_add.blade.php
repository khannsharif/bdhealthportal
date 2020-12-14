@extends('layouts.master_dashboard')
@section('page-css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
@endsection
@section('page-title')
    <h2><b>Hospital</b></h2><h6><b>
            @isset($hospital)
                Edit
            @else
                Add  new
            @endisset
            Hospital </b></h6>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= route('hospital.list'); ?>"> <i class="fa fa-plus"></i> Hospital List</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <form method="POST" action="@isset($hospital){{route('hospital.edit', ['id'=>$hospital->id])}}@else{{route('hospital.create')}}@endisset " enctype="multipart/form-data">
                                    @csrf
                                    @isset($hospital)
                                        <input type="hidden" name="hospit_id" value="{{$hospital->id}}">
                                    @endisset

                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">BMDC Registered Number</label>
                                        <div class="col-sm-8">
                                            <input name="register_number" type="text" id="" placeholder=" " value=" {{ old('register_number', $hospital->bmdc_registered_number ?? '') }}"
                                                   class="form-control @error('register_number') is-invalid @enderror">
                                            @error('register_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Hospital Name</label>
                                        <div class="col-sm-8">
                                            <input name="hospital_name" type="text" id="" placeholder=" " value="{{old('hospital_name', $hospital->hospital_name ?? '') }}"
                                                   class="form-control @error('hospital_name') is-invalid @enderror">
                                            @error('hospital_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Department </label>
                                        <div class="col-sm-8">
                                            <select name="departments[]" class="form-control selectpicker @error('departments') is-invalid @enderror" multiple data-live-search="true">
                                                @foreach($depts as $dept)
                                                    <option value="{{$dept->id}}" @isset($arr){{ collect($arr)->contains($dept->id) ? "selected" :"" }}@endisset>{{$dept->department_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('departments')
                                            <span class="invalid-feedsback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hospital_address" class="col-sm-3 control-label">Hospital Address </label>
                                        <div class="col-sm-8">
                                            <textarea name="hospital_address" class="form-control @error('hospital_address') is-invalid @enderror" placeholder="" rows="2">
                                                {{ old('hospital_address', $hospital->address ?? '' ) }}
                                            </textarea>
                                        @error('hospital_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="contact_number" class="col-sm-3 control-label">Contact Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="contact_number" id="firstName" placeholder=" " value="{{ old('hospital_name', $hospital->hospital_name ?? '') }}"
                                                   class="form-control @error('contact_number') is-invalid @enderror" autofocus>
                                        @error('contact_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" placeholder="Enter email" value="{{ old('email',  $hospital->email ?? '') }}"
                                                   class="form-control @error('email') is-invalid @enderror" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="logo" class="col-sm-3 control-label">Hospital Logo</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="logo" id="logo" class="custom-file-input @error('logo') is-invalid @enderror" value="@isset($hospital->logo){{$hospital->logo}}@endisset">
                                            <label class="custom-file-label" for="customFile">@isset($hospital->logo){{$hospital->logo}}@else Choose file @endisset </label>
                                            @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label"> </label>
                                        <div class="col-sm-8">
                                            @if(isset($hospital))
                                                <button type="submit" class="btn btn-info mr-auto">Update</button>
                                            @else
                                                <button type="submit" class="btn btn-success mr-auto">Save</button>
                                            @endif
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        $('#logo').on('change', function () {
            //get the file name
            var fileName = this.files[0]['name'];
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

@endsection
