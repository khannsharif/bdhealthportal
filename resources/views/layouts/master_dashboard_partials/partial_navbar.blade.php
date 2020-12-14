<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= route('index'); ?>" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        <!-- logout Settings Dropdown Menu -->
        <li class="dropdown dropdown-user">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-sign-out-alt"></i></a>
            <ul class="dropdown-menu">
                <div class="dropdown"></div>
                <a href="{{ url('/profile') }}" class="dropdown-item">
                    <i class="fas fa-user-alt mr-2"></i>Profile
                </a>
                <a href="{{ route('change_password') }}" class="dropdown-item">
                    <i class="fa fa-key mr-2"></i>Update Password
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt  mr-2"></i> {{ __('Logout') }}
                </a>
            </ul>
        </li>
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!-- /.navbar -->
