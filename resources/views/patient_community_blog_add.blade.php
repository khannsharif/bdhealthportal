@extends('layouts.master_dashboard')
@section('page-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('page-title')
<h2><b>Patient Community Blog</b></h2><h6><b>
    @isset($blog)
    Edit
    @else
    Post a new
    @endisset
    Blog </b></h6>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="panel-heading no-print">
                <div class="btn-group">
                    <a class="btn btn-primary" href="<?= route('patientblog.list'); ?>"> <i class="fa fa-list"></i> Blog List </a>
                </div>
          </div>
        </div>

        <!-- /.card-header -->
    <div class="card-body">
     <div class="panel-body panel-form">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <form method="POST" action="@isset($blog){{route('patientblog.edit')}}@else{{route('patientblog.create')}}@endisset " enctype="multipart/form-data">
                    @csrf
                    @isset($blog->id)
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                    @endisset
                    @isset($blog->picture)
                        <input type="hidden" name="pic_id" value="{{$blog->picture}}">
                    @endisset
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Blog Title</label>
                        <div class="col-sm-8">
                            {{-- <input name="title" type="text" placeholder=" " value="@isset($blog->title){{$blog->title}}@endisset" class="form-control"> --}}
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" value="@isset($blog->title){{$blog->title}}@endisset">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Author Name</label>
                        <div class="col-sm-8">
                            {{-- <input name="title" type="text" placeholder=" " value="@isset($blog->title){{$blog->title}}@endisset" class="form-control"> --}}
                            <input type="text" class="form-control @error('author_name') is-invalid @enderror" name="author_name" placeholder="" value="@isset($blog->author_name){{$blog->author_name}}@endisset">
                            @error('author_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="picture" class="col-sm-3 control-label">Blog Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="picture" id="picture" class="custom-file-input @error('picture') is-invalid @enderror" value="@isset($blog->picture){{$blog->picture}}@endisset">
                            <label class="custom-file-label" for="customFile">@isset($blog->picture){{$blog->picture}}@else Choose file @endisset </label>
                            @error('picture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Blog Description </label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control  @error('description') is-invalid @enderror"  placeholder="" rows="4">@isset($blog->description){{$blog->description}}@endisset</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-3 control-label">Blog Description </label>
                        <div class="col-sm-8">
                            <textarea name="description" id="descriptionck" class="ckeditor form-control  @error('description') is-invalid @enderror"  placeholder="" rows="8">
                                @isset($blog->description){{$blog->description}}@endisset
                            </textarea>
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
                            <input type="date" class="form-control @error('publish_date') is-invalid @enderror" name="publish_date" placeholder="" value="@isset($blog->publish_date){{$blog->publish_date}}@endisset">
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
                            @isset($blog)
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

<script>
    $('#picture').on('change',function(){
        //get the file name
        var fileName = this.files[0]['name'];
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endsection
