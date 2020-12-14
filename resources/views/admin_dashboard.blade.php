@extends('layouts.master_dashboard')
@section('page-css')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work',     11],
                ['Eat',      2],
                ['Commute',  2],
                ['Watch TV', 2],
                ['Sleep',    7]
            ]);

            var options = {
                title: 'My Daily Activities'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection
@section('page-title')
  <h1>Admin</h1>
@endsection

@section('page-content')
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>1200</h3>

                            <p>Patient</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-wheelchair"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>350</h3>

                            <p>Appointment</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-list-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>124</h3>

                            <p>Doctor</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>05</h3>

                            <p>Notices</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
{{--            Second Cards start --}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <!-- small box -->--}}
{{--                    <div class="small-box bg-indigo">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>70</h3>--}}

{{--                            <p>Blog Post</p>--}}
{{--                        </div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="fa fa-wheelchair"></i>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./col -->--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <!-- small box -->--}}
{{--                    <div class="small-box bg-secondary">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>350</h3>--}}

{{--                            <p>Blood Community</p>--}}
{{--                        </div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="fa fa-list-alt"></i>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./col -->--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <!-- small box -->--}}
{{--                    <div class="small-box bg-center">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>29</h3>--}}

{{--                            <p>Department</p>--}}
{{--                        </div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="fa fa-user-md"></i>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./col -->--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <!-- small box -->--}}
{{--                    <div class="small-box bg-gradient-navy">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>35</h3>--}}

{{--                            <p>Hospital</p>--}}
{{--                        </div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="fa fa-user"></i>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./col -->--}}
{{--            </div>--}}

            <!-- Chart row -->
            <div class="row ">
                <div class="col-lg-5 col-5">
                    <!-- small box -->
                    <div class="">
                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
                <div class="col-lg-7 col-5 bg-gradient-navy">
                    <!-- small box -->
                    <div>
                        <div id="chart_div"style="width: 950px; height: 500px;"></div>
                    </div>
                </div>
            </div>


{{--    test--}}

@endsection
@section('page-js')
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Motivation Level');

            data.addRows([
                [{v: [8, 0, 0], f: '8 am'}, 1],
                [{v: [9, 0, 0], f: '9 am'}, 2],
                [{v: [10, 0, 0], f:'10 am'}, 3],
                [{v: [11, 0, 0], f: '11 am'}, 4],
                [{v: [12, 0, 0], f: '12 pm'}, 5],
                [{v: [13, 0, 0], f: '1 pm'}, 6],
                [{v: [14, 0, 0], f: '2 pm'}, 7],
                [{v: [15, 0, 0], f: '3 pm'}, 8],
                [{v: [16, 0, 0], f: '4 pm'}, 9],
                [{v: [17, 0, 0], f: '5 pm'}, 10],
            ]);

            var options = {
                title: 'Motivation Level Throughout the Day',
                hAxis: {
                    title: 'Time of Day',
                    format: 'h:mm a',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: 'Rating (scale of 1-10)'
                }
            };

            var chart = new google.visualization.ColumnChart(
                document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
@endsection
