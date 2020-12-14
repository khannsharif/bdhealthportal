@extends('layouts.patient_master')


@section('content')

    <section id="demos">
        <!-- our blog -->
        <div id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Our Blog</h2>
                            <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="blog-box">
                            <figure><img class="img-fluid pad" src="{{ asset('images/').'/'.$patientblog->picture }}" alt="Photo" style="object-fit: cover; object-position: center;">
                                <span>{{ $patientblog->publish_date }}</span>
                            </figure>
                            <div class="travel">
                                <span>Post  By :  {{ $patientblog->author_name }}</span>
                                <p><strong class="Comment"> 06 </strong> Comment</p>
                                <p><strong class="like">05 </strong>Like</p>
                            </div>
                            <h3>{{ $patientblog->title }}</h3>
                            {!! $patientblog->description !!}
                        </div>
                        <hr>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12 ">
                            <h3>Comment Section:</h3>
                            <form action="https://www.google.com" method="post">
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
