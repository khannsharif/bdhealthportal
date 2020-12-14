@extends('layouts.master_dashboard')
@section('page-css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- CKEditor CDN --}}
    <script src="//cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('page-title')
    <h2><b>Prescription</b></h2>
    @isset($editing)
        <h6><b>Edit Prescription </b></h6>
    @else
        <h6><b>Add new Prescription </b></h6>
    @endisset
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= url('prescription_list'); ?>"> <i class="fa fa-list"></i> Check Prescription List </a>
                        </div>
                    </div>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif
            <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <form role="form" method="POST" @isset($editing) action="{{ route('prescription_update', ['prescription_id'=>$prescription->id]) }}" @else action="{{ route('store_prescription', ['id'=>$id, 'serial_no'=>$serial_no]) }}" @endisset>
                                    @csrf
                                    <div class="form-group row">
                                        <label for="patient_id" class="col-sm-3 control-label">Patient ID </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="patient_id" id="patient_id" placeholder="" class="form-control" autofocus readonly value="{{ old('patient_id', $appointment->id) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="serial_no" class="col-sm-3 control-label">Serial No </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="serial_no" id="serial_no" placeholder="" class="form-control" autofocus readonly value="{{ old('serial_no', $appointment->serial_no) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 control-label">Chief Complain</label>
                                        <div class="col-sm-8">
                                            <textarea name="description" id="description" class="form-control" placeholder="" rows="3"> {{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-11">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th width="160">Medicine Name</th>
                                                    <th width="160">Medicine Type</th>
                                                    <th>Instruction</th>
                                                    <th width="80">Days</th>
                                                    <th width="100">Add / Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody id="medicine">
                                                <tr>
                                                    <td><input type="text" name="medicine_name" class="medicine form-control" placeholder="Medicine Name"  value="{{ old('medicine_name') }}"></td>
                                                    <td><input type="text" name="medicine_type"  class="form-control" placeholder="Medicine Type"  value="{{ old('medicine_type') }}"></td>
                                                    <td><textarea name="medicine_instruction" class="form-control" placeholder="Instruction"> {{ old('medicine_instruction') }}</textarea></td>
                                                    <td><input type="number" name="medicine_days"  class="form-control" placeholder="Days"   value="{{ old('medicine_days') }}"></td>
                                                    <td>
                                                    {{--<div class="btn btn-group">
                                                        <button type="button" class="btn btn-sm btn-primary MedAddBtn">Add</button>
                                                        <button type="button" class="btn btn-sm btn-danger MedRemoveBtn">Remove</button>
                                                    </div>--}}
                                    {{-- </td>
                                </tr>
                            </tbody>
                        </table>
                     </div> --}}
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Description </label>
                                        <div class="col-sm-8">
                            <textarea name="medicine_description" id="descriptionck" class="ckeditor form-control  @error('medicine_type') is-invalid @enderror" placeholder="" rows="8" required>
                                {{--@isset($notice->description){{$notice->description}}@endisset--}}
                                <h6>Medicine List</h6>
                                <ul>
                                    <li><strong>Medicine Name: </strong> ___________ </li>
                                    <li><strong>Interval: </strong>day, night</li>
                                    <li><strong>Duration: </strong>__ month</li>
                                </ul>
                                ----------------------------
                                <ul>
                                    <li><strong>Medicine Name: </strong> ___________ </li>
                                    <li><strong>Interval: </strong>day, night</li>
                                    <li><strong>Duration: </strong>__ month</li>
                                </ul>
                            </textarea>
                                            @error('medicine_type')
                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="note" class="col-sm-3 control-label">Notes</label>
                                        <div class="col-sm-8">
                                            <textarea name="note" id="note" class="form-control" placeholder="" rows="2"> {{ old('note') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-3 control-label">Type </label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" name="type" value="1" checked> New</label> &nbsp;
                                            <label class="radio-inline"><input type="radio" name="type" value="0"> Old</label></div>
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
        ClassicEditor
            .create(document.querySelector('#descriptionck'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
