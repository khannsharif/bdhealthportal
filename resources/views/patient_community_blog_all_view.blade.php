@extends('layouts.master_dashboard')
@section('page-css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <style>
        #form {
            margin: 0;
            padding: 0;
        }
    </style>
@endsection
@section('page-title')
    <h1><b>All Blogs</b></h1>
    <h6><b>
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
                                <div class="row">
                                    @foreach($patientblogs as $patientblog)
                                        <div class="col-md-6">
                                            <!-- Box Comment -->
                                            <div class="card card-widget">
                                                <div class="card-header">
                                                    <div class="user-block">
                                                        <span class="username"><a href="#">{{$patientblog->author_name}}</a></span>
                                                        <span class="description">{{$patientblog->publish_date}}</span>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <h3 class="username"><a href="#">{{$patientblog->title}}</a></h3>
                                                    <img class="img-fluid pad" src="{{ asset('images/').'/'.$patientblog->picture }}" alt="Photo"
                                                         height="240px" width="100%" style="height: 240px !important; object-fit: cover; object-position: center;">
                                                    <p>{!!  $patientblog->description !!}</p>
                                                    <a href="{{ route('patientblog.singleBlogReadmore', ['id'=>$patientblog->id]) }}" class="btn btn-xs btn-success"><i class="fas fa-book-reader"></i> Read more</a>
                                                    <span class="float-right text-muted">
                <a href="{{route('patientblog.singleBlogEdit', ['id'=> $patientblog->id])}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>


                   <a href="javascript:;" class="btn btn-xs btn-danger delete-confirm"><i class="fa fa-trash"></i> Delete</a>

              </span>
                                                    <form id="form" action="{{route('blog.delete',$patientblog->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </div>
                                                <div class="card-body">
                                                    <span class="float-left text-muted">10&nbsp; <i class="fa fa-comments" aria-hidden="true"></i> Commnets  &nbsp; &nbsp;&nbsp;</span>
                                                    <span class="float-left text-muted">300 <i class="fa fa-eye"></i> Views</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endsection

            @section('page-js')
                <script>
                    <!-- "colvis" -->
                    $(function () {
                        $('.delete-confirm').click(function (event) {
                            event.preventDefault();
                            swal({
                                title: `Are you sure you want to delete ?`,
                                text: "If you delete this, it will be gone forever.",
                                icon: "error",
                                buttons: true,
                                dangerMode: true,
                            })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        $('#form').submit();
                                    }
                                });
                        });
                    });
                </script>

@endsection
