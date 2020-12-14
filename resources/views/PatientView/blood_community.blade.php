@extends('layouts.patient_master')


@section('content')

    <section id="demos">
        <!-- our blog -->
        <div id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <div class="button_section"> <a class="main_bt" href="<?= route('blood_community_post'); ?>"> Post for Blood </a>  </div>

                            <h2></h2>
                            <span>Give BlOOD Save LIFE</span>
                            <h2></h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <h3>London Amazing Tour</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="travel">
                                <span>Post  By :  Travel  Agency</span>
                                <p><strong class="Comment"> 06 </strong>  Comment</p>
                                <p><strong class="like">05 </strong>Like</p>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12 >
                            <h3>Comment Section:</h3>
                            <form action="#" method="">
                        <div class="input-group">
                            <input type="textarea" name="message" placeholder="Type comment ..." class="form-control">
                            <span class="input-group-append">
                                      <button type="submit" class="btn btn-primary">Send</button>
                                    </span>
                        </div>
                        </form>
                    </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">

                            <h3>London Amazing Tour</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="travel">
                                <span>Post  By :  Travel  Agency</span>
                                <p><strong class="Comment"> 06 </strong>  Comment</p>
                                <p><strong class="like">05 </strong>Like</p>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12 >
                            <h3>Comment Section:</h3>
                            <form action="#" method="">
                        <div class="input-group">
                            <input type="textarea" name="message" placeholder="Type comment ..." class="form-control">
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
        <!-- end our blog -->
    </section>


@endsection
