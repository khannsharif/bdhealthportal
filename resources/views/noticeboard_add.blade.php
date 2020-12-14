@extends('layouts.master_dashboard')
@section('page-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('page-title')
<h2><b>Noticeboard</b></h2><h6><b>
     @isset($notice)
     Edit 
     @else 
     Add  new 
     @endisset 
     Notice </b></h6>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?= route('noticeboard.list'); ?>"> <i class="fa fa-list"></i> Notice List </a>  
                </div>
          </div>
        </div>
        
        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">     
            <div class="col-md-9 col-sm-12">
                <form method="POST" action="@isset($notice){{route('noticeboard.edit')}}@else{{route('noticeboard.create')}}@endisset ">
                    @csrf
                    @isset($notice)
                        <input type="hidden" name="notice_id" value="{{$notice->id}}">
                    @endisset
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" value="@isset($notice->title){{$notice->title}}@endisset">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Description </label>
                        <div class="col-sm-8">
                            <textarea name="description" id="descriptionck" class="ckeditor form-control  @error('description') is-invalid @enderror"  placeholder="" rows="8">@isset($notice->description){{$notice->description}}@endisset</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Publish Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control @error('publish_date') is-invalid @enderror" name="publish_date" placeholder="" value="@isset($notice->publish_date){{$notice->publish_date}}@endisset">
                            @error('publish_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label"> </label>
                        <div class="col-sm-8">
                            @isset($notice)
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
<script>
    ClassicEditor
        .create( document.querySelector( '#descriptionck' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
