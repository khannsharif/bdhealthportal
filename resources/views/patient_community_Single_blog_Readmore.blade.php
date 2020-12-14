@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h1><b>Read Blog</b></h1>
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
                            <div class="card-body-12">
                                <div class="row">

                                    <div class="col-md-2">
                                        <!-- Widget: user widget style 2 -->

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-8">

                                        <div class="card card-widget">
                                            <div class="card-header">
                                                <div class="user-block">
                                                    <span class="username"><a href="#">{{$blog->author_name}}</a></span>
                                                    <span class="description">{{$blog->publish_date}}</span>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <img class="img-fluid pad" src="{{ asset('images/').'/'.$blog->picture }}" alt="Photo"
                                                     height="240px" width="100%" style="height: 240px !important; object-fit: cover; object-position: center;">
                                                <h2>{{$blog->title}}</h2>
                                                <span class="float-left text-muted">10&nbsp; <i class="fa fa-comments" aria-hidden="true"></i> Commnets  &nbsp; &nbsp;&nbsp;</span>
                                                <span class="float-left text-muted">300 <i class="fa fa-eye"></i> Views</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-footer">
                                                    {!! $blog->description !!}
                                                    <hr>
                                                    <div>
                                                        <h3>Comment Section:</h3>
                                                        <form action="#" method="">
                                                            <div class="input-group">
                                                                <input type="text" name="message" placeholder="Type comment ..." class="form-control">
                                                                <span class="input-group-append">
                          <button type="submit" class="btn btn-primary">Send</button>
                        </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection

@section('page-js')

@endsection
