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

                    @foreach($patientblogs as $patientblog)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="blog-box">
                                <figure><img class="img-fluid pad" src="{{ asset('images/').'/'.$patientblog->picture }}" alt="Photo"
                                             height="240px" width="100%" style="height: 240px !important; object-fit: cover; object-position: center;">
                                    <span>{{ $patientblog->publish_date }}</span>
                                </figure>
                                <div class="travel">
                                    <span>Post  By :  {{$patientblog->author_name}}</span>
                                    <p><strong class="Comment"> 06 </strong> Comment</p>
                                    <p><strong class="like">05 </strong>Like</p>
                                </div>
                                <h3> {{$patientblog->title}}</h3>
                                {!!  $patientblog->description !!}
                            </div>
                            <div class="button_section"><a class="main_bt" href="{{ route('patientblog.readmore', ['id'=>$patientblog->id ])}}">Read More</a></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- end our blog -->
    </section>


@endsection
