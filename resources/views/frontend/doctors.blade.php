@extends('layouts.patient_master')

@section('page-title')
    <h1>Search Doctors</h1>
@endsection

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h3>Browse Doctors</h3>
            </div>
            <div class="card-body">
                <form action="" class="form">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="selectHospital">Select Hospital</label>
                            <select name="hospital" id="selectHospital" class="form-control" style="visibility: hidden;">
                                <option value="0" selected>All Hospital</option>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->hospital_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6">
                            <label for="selectDepartment">Select Department</label>
                            <select name="department" id="selectDepartment" class="form-control hide" style="visibility: hidden;">
                                <option value="0" selected>All Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="container">
                        <div class="row" id="DoctorList">
hello
                            <!-- Doctor list from backend -->

                        </div>
                    </div>


                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@endsection



@push('page_lvl_script')
    <script>
        $(document).ready(function () {
            let hospital = $('#selectHospital');
            let department = $('#selectDepartment');

            function getDoctors(data = {}) {
                $.ajax({
                    type: 'GET',
                    method: 'GET',
                    url: "{{ url('/search-doctors') }}",
                    data: data
                }).done(function (result) {
                    if (result.error === false) {
                        $('#DoctorList').html(result);
                    } else {
                        $('#DoctorList').html(result);
                    }
                });
            }

            getDoctors();

            department.change(function () {
                let dep_id = department.val();
                let hosp_id = hospital.val();
                if (department.val() != 0 && hospital.val() != 0) {
                    getDoctors({"department_id": dep_id, "hospital_id": hosp_id});
                } else if (department.val() == 0 && hospital.val() != 0) {
                    getDoctors({"hospital_id": hosp_id});
                } else {
                    getDoctors({"department_id": dep_id});
                }
                if (department.val() == 0 && hospital.val() == 0) {
                    getDoctors();
                }
            });
            hospital.change(function () {
                let dep_id = department.val();
                let hosp_id = hospital.val();
                if (department.val() != 0 && hospital.val() != 0) {
                    getDoctors({"department_id": dep_id, "hospital_id": hosp_id});
                } else if (department.val() != 0 && hospital.val() == 0) {
                    getDoctors({"department_id": dep_id});
                } else {
                    getDoctors({"hospital_id": hosp_id});
                }
                if (department.val() == 0 && hospital.val() == 0) {
                    getDoctors();
                }
            });


            /*if(department.val() == 0){ // If departments is 0 show doctors from all department ...
                $.ajax({
                    type: 'GET',
                    method: 'GET',
                    url: "{{ urlencode('search-doctors') }}",
                data: {"department_id" : department.val()}
            }).done(function(result){
                if (result.error === false){
                    $('#DoctorList').html(result);
                }else{
                    $('#DoctorList').html(result);
                }
            });
        }
        else if(department.val() != 0){ // if department not equal to 0 the show doctor from specific department ...
            $.ajax({
                type: 'GET',
                method: 'GET',
                url: "{{ urlencode('search-doctors') }}",
                data: {"department_id" : department.val()}
            }).done(function(result){
                if (result.error === false){
                    $('#DoctorList').html(result);
                }else{
                    $('#DoctorList').html(result);
                }
            });
        }



        department.change(function(department) {
            let dep_id = $(this).val();
            $.ajax({
                type: 'GET',
                method: 'GET',
                url: "{{ urlencode('search-doctors') }}",
                data: {"department_id" : dep_id}
            }).done(function(result){
                if (result.error === false){
                    $('#DoctorList').html(result);
                }else{
                    $('#DoctorList').html(result);
                }
            });
        });
*/

        });
    </script>


@endpush

