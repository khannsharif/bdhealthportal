@extends('layouts.patient_master')


@section('content')
    <!-- end header -->
    <section >
        <div class="banner-main">
            <img src="{{asset('patientfrontend/images/banner.jpg')}}" alt="#"/>

            <div class="container">
                <div class="text-bg">
                    <h1>Bangladesh<br><strong class="white">Health service</strong></h1>



            </div>
        </div>
    </section>
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About  our Services</h2>
                        <span> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="about-box">
                            <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure thereThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span></p>
                            <div class="palne-img-area">
{{--                                <img src="{{asset('patientfrontend/images/plane-img.png')}}" alt="images">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#">Read More</a>
        </div>
    </div>
    <!-- end about -->
    <!-- traveling -->

    <!-- end traveling -->
    <!--London -->

    <!-- end London -->
    <!--Tours -->
{{--     end Tours -->--}}
    <!-- Amazing -->
    <!-- end Amazing -->
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
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{asset('patientfrontend/images/blog-image0.jpg')}}" alt="#"/>
                            <span>4 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post  By :  Travel  Agency</span>
                            <p><strong class="Comment"> 06 </strong>  Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{asset('patientfrontend/images/blog-image.jpg')}}" alt="#"/>
                            <span>10 Feb 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post  By :  Travel  Agency</span>
                            <p><strong class="Comment"> 06 </strong>  Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our blog -->

@endsection
