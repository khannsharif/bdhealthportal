<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>BD Health Portal</title>
    <style>
        body {
            font-family: 'sans-serif';
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="d-flex justify-content-end" style="padding:  0 20px;">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    @if(Auth::user()->user_type == 'admin')
                        <a href="{{ url('/admin_dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
            </div>
        @endif
    </div>
    <div class="container">
        <br>
        <br>
        <div class="text-center">
            <h3>Welcome to</h3>
            <h1><span style="color:red;">B</span><span style="color:green;">D</span> <span class="text-info">Health</span> <span class="text-muted">portal</span></h1>
        </div>
        <br>

        <div>
            <a href="{{ url('/') }}" class="btn btn-primary btn-sm">Appointment</a>
            <a href="{{ url('/doctors') }}" class="btn btn-primary btn-sm">Doctor search</a>
            <a href="" class="btn btn-primary btn-sm">Blog</a>
        </div>

        <br>

        @yield('content')

        <br>

    </div>
</div>



<script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

@stack('page_lvl_script')

</body>
</html>
