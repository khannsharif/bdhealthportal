@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h2><b> <i class="nav-icon fas"></i>Prescription</b></h2><h5><b> Your Prescription </b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= route('prescription_list'); ?>"> <i class="fa fa-list"></i> Prescription List </a>
                            <button type="button" onclick="printDiv('printableArea')" class="btn btn-danger" value="Print"/>
                            PRINT<i class="fa fa-print"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body-12">
                    <div class="row">
                        <div class="col-md-2">
                            <!-- Widget: user widget style 2 -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8" id="printableArea">

                            <div class="card card-widget">
                                <div class="card-header">
                                    <h2 class="text-center">Prescription</h2>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <h3><b>Patient Name: </b> {{ $prescription->patient->full_name }}</h3>
                                    <p><b>Serial no: </b>{{ $prescription->appointment->serial_no }}</p>
                                    <p><b>Hospital: </b>{{ $prescription->appointment->hospital->hospital_name }}</p>
                                    <p><b>Complain: </b> {{ $prescription->cheif_complain }}</p>
                                    <div>{!! $prescription->medicine_description !!} </div>
                                    <p><b>Publish Date: </b> {{  $prescription->created_at }}</p>
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
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
