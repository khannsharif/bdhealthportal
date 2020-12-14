</div>
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Support US
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">BDHealthPortal</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<script>
  $('#msg').delay(1500).fadeOut('slow');
</script>

@stack('page_lvl_script')
@yield('page-js')
</body>
</html>
