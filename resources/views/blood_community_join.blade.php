@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h2><b>Blood Community</b></h2><h6><b>
            @isset($blood)
                Edit
            @else
                Join
            @endisset
            Blood Community </b></h6>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= route('bloodcommunity.list'); ?>"> <i class="fa fa-list"></i> Blood Community list </a>
                        </div>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <form method="POST" action="@isset($blood){{route('bloodcommunity.edit')}}@else{{route('bloodcommunity.create')}}@endisset ">
                                    @csrf
                                    @isset($blood)
                                        <input type="hidden" name="blood_id" value="{{$blood->id}}">
                                    @endisset
                                    <input type="hidden" name="" value="">
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Blood Group</label>

                                        <div class="col-sm-6">
                                            <select name="blood_group" class="form-control" selected="selected">Select Bloog group>
                                                <option value="" selected="selected">Select Blood group</option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="picture" class="col-sm-3 control-label"> Blood need On (date)</label>
                                        <div class="col-sm-6">
                                            <input name="donation_date" type="date" placeholder=" " value="@isset($blood->donation_date){{$blood->donation_date}}@endisset" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Contact Person Name</label>
                                        <div class="col-sm-6">
                                            {{-- <input name="title" type="text" placeholder=" " value="@isset($blog->title){{$blog->title}}@endisset" class="form-control"> --}}
                                            <input type="text" class="form-control @error('contact_person_name') is-invalid @enderror" name="contact_person_name" placeholder="" value="@isset($blood->contact_person_name){{$blood->contact_person_name}}@endisset">
                                            @error('contact_person_name')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Phone Number</label>
                                        <div class="col-sm-6">
                                            {{-- <input name="title" type="text" placeholder=" " value="@isset($blog->title){{$blog->title}}@endisset" class="form-control"> --}}
                                            <input type="phone number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="" value="@isset($blood->phone_number){{$blood->phone_number}}@endisset">
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Location</label>
                                        <div class="col-sm-6">
                                            {{-- <input name="title" type="text" placeholder=" " value="@isset($blog->title){{$blog->title}}@endisset" class="form-control"> --}}
                                            <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="" value="@isset($blood->location){{$blood->location}}@endisset">
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label"> </label>
                                        <div class="col-sm-8">
                                            @isset($blood)
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
