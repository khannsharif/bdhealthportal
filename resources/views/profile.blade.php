@extends('layouts.master_dashboard')
@section('page-css')

@endsection
@section('page-title')
    <h2><b>{{ Auth::user()->full_name }}</b></h2><h5><b> Profile </b></h5>
@endsection
@section('page-content')

    <div class="row">
        <div class="col-12">
            @include('layouts.master_dashboard_partials.alert-message')
            <div class="card">
                <div class="card-header">
                    <div class="panel-heading no-print">
                        <div class="btn-group">

                        </div>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="panel-body panel-form">
                        <div class="col-12">
                            <form action="{{ url('/profile', ['id'=>Auth::id()]) }}" method="post" class="row" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="col-12 mb-2">
                                    <img src="{{ asset('images/profile/') .'/'.Auth::user()->picture }}" alt="" class="img-responsive img-rounded" height="100" width="100" id="imgPreview">

                                    <input type="file" value="Upload Imgae" name="image_upload" class="mt-3 mb-2" id="photo" class="displayBlock" style="display:none;">

                                    <button type="button" class="ml-4 btn btn-primary" id="EditButton" onclick="editable()">Edit Profile</button>
                                </div>
                                <br>
                                <br>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-control bg-gray">
                                        Name: <strong>{{ Auth::user()->full_name }}</strong>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-control bg-gray">
                                        Email: <strong>{{ Auth::user()->email }}</strong>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-control bg-gray">
                                        Contact number: <strong>{{ Auth::user()->contact_number }}</strong>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-control bg-gray">
                                        Gender: <strong>{{ Auth::user()->gender }}</strong>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-control bg-gray">
                                        Nid: <strong>{{ Auth::user()->nid_dob }}</strong>
                                    </div>
                                </div>

                                <div class="col-12"></div>

                                @hasanyrole('patient')
                                <div class="form-group col-lg-6 col-12">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" class="form-control editable" id="address" disabled value="{{ Auth::user()->patient->address }}">
                                </div>
                                @endhasanyrole

                                @hasanyrole('doctor')
                                <div class="form-group col-lg-6 col-12">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" class="form-control editable" id="address" disabled value="{{ Auth::user()->doctor->address }}">
                                </div>

                                <div class="form-group col-lg-6 col-12">
                                    <label for="address">Short Biography:</label>
                                    <textarea type="text" name="short_biography" class="form-control editable" id="short_biography" disabled>
                                {{ trim(Auth::user()->doctor->short_biography) }}
                            </textarea>
                                </div>

                                <div class="form-group col-lg-6 col-12">
                                    <label for="address">Education:</label>
                                    <input type="text" name="education" class="form-control editable" id="education" disabled
                                           value="{{ Auth::user()->doctor->education }}">
                                </div>
                                @endhasanyrole

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary displayBlock" style="display:none;" onclick="editable()">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection

@section('page-js')
    <script>
        $(document).ready(() => {
            $("#photo").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        function editable() {
            const editableContent = document.querySelectorAll('.editable');
            document.getElementById('EditButton').style.display = "none";
            document.getElementById('photo').style.display = "block";

            editableContent.forEach(function (el) {
                el.disabled = false;
                el.style.display = "block";
            });

            document.querySelectorAll('.displayBlock').forEach(function (el) {
                el.style.display = "block";
            })
        }
    </script>
@endsection
