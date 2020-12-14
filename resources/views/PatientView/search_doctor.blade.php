@extends('layouts.patient_master')


@section('content')
    <div class="Tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Search Doctors</h2>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="img-responsive" src="{{asset('patientfrontend/images/1.jpg')}}" alt="#" />
                                <h3>Holiday Tour</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('patientfrontend/images/2.jpg')}}" alt="#" />
                                <h3>New York</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('patientfrontend/images/3.jpg')}}" alt="#" />
                                <h3>London</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('patientfrontend/images/2.jpg')}}" alt="#" />
                                <h3>Holiday Tour</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection
