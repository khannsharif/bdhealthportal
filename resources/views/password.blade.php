@extends('layouts.master_dashboard')
@section('page-css')

@endsection

@section('page-title')
    <h2><b>Password</b></h2><h6><b>
            @isset($notice)
                Edit
            @else
                Update your
            @endisset
                Password </b></h6>
@endsection

@section('page-content')

    <div class="row">
        <div class="col-12 col-lg-6 m-auto">
                @include('layouts.master_dashboard_partials.alert-message')
            <div class="card">
                <div class="card-header">
                    <h3>Change Password</h3>
                </div>
                <form action="{{ route('update_password') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="col-12">
                            <label for="old_password">Old Password: </label>
                            <input type="password" name="old_password" id="old_password" value="" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="new_password">New Password: </label>
                            <input type="password" name="new_password" id="new_password" value="" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="new_password-confirm">Confirm Password: </label>
                            <input id="new_password-confirm" type="password" class="form-control" name="new_password_confirmation"
                                   placeholder="Retype Password" autocomplete="new-password">
                            {{--<input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control">--}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-js')

@endsection
