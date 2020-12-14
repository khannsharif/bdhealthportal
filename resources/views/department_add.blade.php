@extends('layouts.master_dashboard')
@section('page-css')
   
@endsection
@section('page-title')
<h2><b>Department</b></h2><h6><b>
     @isset($department)
     Edit 
     @else 
     Add  new 
     @endisset 
     Department </b></h6>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?= route('department.list'); ?>"> <i class="fa fa-list"></i>  Department List </a>  
                </div>
          </div>
        </div>
        
        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">     
            <div class="col-md-9 col-sm-12">
                
              <form method="POST" action="@isset($department){{route('department.edit')}}@else{{route('department.create')}}@endisset ">
                @csrf
                @isset($department)
                    <input type="hidden" name="dep_id" value="{{$department->id}}">
                @endisset 
                   
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Department Name <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name" placeholder="" value="@isset($department->department_name){{$department->department_name}}@endisset">
                            @error('department_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Description <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"  placeholder="" rows="4">@isset($department->description){{$department->description}}@endisset</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-8">
                            @isset($department)
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
