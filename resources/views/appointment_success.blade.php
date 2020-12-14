@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h2><b>Appointment</b></h2><h6><b>Your Appointments </b></h6>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                @hasanyrole('admin')
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="<?= url('appointment_list'); ?>">
                                <i class="fa fa-list"></i>  Check Appointment List </a>
                        </div>
                    </div>
                </div>
                @endhasanyrole

                <div>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Department</th>
                                <th scope="col">Contact number</th>
                                <th scope="col">Date and time</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                    @foreach($apps as $app)
                        <tr>
                            <th scope="row">{{ $app->serial_no }}</th>
                            <th >{{$app->users->full_name }}</th>
                            <td>{{ $app->hospital->hospital_name }}</td>
                            <td>{{ $app->department->department_name }}</td>
                            <td>{{ $app->contact_number }}</td>
                            <td>{{ $app->appointment_date }} | {{  \Carbon\Carbon::parse($app->appointment_time)->format('H:i:s') }}</td>
                            <td class="text-center">
                                @if($app->status == 'pending')
                                    <div class="alert alert-warning text-center">
                                        {{ $app->status }}
                                    </div>
                                @endif
                                    @if($app->status == 'canceled')
                                    <div class="alert alert-danger text-center">
                                        {{ $app->status }}
                                    </div>
                                @endif
                                @if($app->status == 'active')
                                    <div class="alert alert-success text-center">
                                        {{ $app->status }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('page-js')

@endsection
