@extends('layouts.master_dashboard')
@section('page-css')
   
@endsection
@section('page-title')
<h1><b>Read Blog</b></h1><h6><b>
@endsection
@section('page-content')

<div class="row">
    <div class="col-12">    
      <div class="card">
        <div class="card-header">  
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?= route('patientblog.list'); ?>"> <i class="fa fa-list"></i>  Blog List </a>  
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
        <div class="col-md-6">
           
            <div class="card card-widget col-md-12">
              <div class="card-header">
                <div>
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4 >I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <span class="float-left text-muted">10&nbsp; <i class="fa fa-comments" aria-hidden="true"></i> Commnets  &nbsp; &nbsp;&nbsp;</span>
                <span class="float-left text-muted">300 <i class="fa fa-eye"></i> Views</span>
              </div>
              <hr>
              <div class="card-body">
                  <div>
                    <h4>Comment Section:</h4>
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
            <div class="card card-widget col-md-12">
              <div class="card-header">
                <div>
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4 >I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <h4>I took </h4>
                <span class="float-left text-muted">10&nbsp; <i class="fa fa-comments" aria-hidden="true"></i> Commnets  &nbsp; &nbsp;&nbsp;</span>
                <span class="float-left text-muted">300 <i class="fa fa-eye"></i> Views</span>
              </div>
              <hr>
              <div class="card-body">
                  <div>
                    <h4>Comment Section:</h4>
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
        <div class="col-md-2">
        </div>
      </div>
    </div>
      </div> 
    </div>
 


@endsection

@section('page-js')

@endsection
