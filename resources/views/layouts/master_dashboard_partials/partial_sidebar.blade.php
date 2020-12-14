<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <h3>BD Health Portal</h3>
    </a>
    <span class="brand-text font-weight-light"></span>
    <div class="brand-link">

        <h4 class="text-white">
            <b>
                {{ Auth::user()->full_name }}
            </b>
        </h4>
    </div>

    <span class="brand-text font-weight-light"></span>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @hasanyrole('admin')
                <li class="nav-item">
                    <a href="<?= url('admin_dashboard') ?>" class="nav-link {{ (Request::is('admin_dashboard')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- Start Departmenet-sidebar section-->
                <li class="nav-item {{ (Request::is('department/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Department
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('department.add'); ?>" class="nav-link {{ (Request::routeIs('department.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('department.list'); ?>" class="nav-link {{ (Request::routeIs('department.list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Department List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Departmenet-sidebar section-->

                <!-- Start Hospital-sidebar section-->
                <li class="nav-item {{ (Request::is('hospital/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-hospital-symbol"></i>
                        <p>
                            Hospital
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('hospital.add'); ?>" class="nav-link {{ (Request::routeIs('hospital.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Hospital</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('hospital.list'); ?>" class="nav-link {{ (Request::routeIs('hospital.list')) ? 'active' : '' }}">

                                <i class="far fa-circle nav-icon"></i>
                                <p>Hospital List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Hospital-sidebar section-->

                <!-- Start Doctor-sidebar section-->
                <li class="nav-item {{ (Request::is('doctor/*')) ? 'menu-open' : '' }}">

                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Doctor
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('doctor.add'); ?>" class="nav-link {{ (Request::routeIs('doctor.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Doctor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('doctor.list'); ?>" class="nav-link {{ (Request::routeIs('doctor.list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doctor List</p>
                            </a>
                        </li>
                    </ul>
                </li>
            {{-- //End Doctor-sidebar section --}}

            {{-- <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                  Schedule
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= url('doctor_schedule_add'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= url('doctor_schedule_list'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Schedule List</p>
                  </a>
                </li>
              </ul>
            </li> --}}
            <!-- //-->

                <!-- Start Appointment-sidebar section-->
                <li class="nav-item {{ (Request::is('appointment/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Appointment
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{--<li class="nav-item">
                          <a href="<?= url('appointment/add') ?>"class="nav-link {{ (Request::is('appointment/add')) ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Appointment</p>
                          </a>
                        </li>--}}
                        <li class="nav-item">
                            <a href="<?= url('appointment/view') ?>" class="nav-link {{ (Request::is('appointment/view')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Appointment List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Appointment-sidebar section-->

                <!-- Start Noticedboard-sidebar section-->
                <li class="nav-item {{ (Request::is('noticeboard/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Noticeboard
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('noticeboard.add'); ?>" class="nav-link {{ (Request::routeIs('noticeboard.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Notice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('noticeboard.list'); ?>" class="nav-link {{ (Request::routeIs('noticeboard.list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Noticedboard-sidebar section-->

                <!-- Start Patient-sidebar section-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Patient
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= url('patient_registration'); ?>" class="nav-link {{ (Request::is('patient_registration')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add patient</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url('patient_list'); ?>" class="nav-link {{ (Request::is('patient_list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Patient List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Departmenet-sidebar section-->

                <!-- Start Patient Community Blog-sidebar section-->
                <li class="nav-item {{ (Request::is('patientblog/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Patient Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('patientblog.add'); ?>" class="nav-link {{ (Request::routeIs('patientblog.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('patientblog.list'); ?>" class="nav-link {{ (Request::routeIs('patientblog.list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('patientblog.viewallBlogs'); ?>" class="nav-link {{ (Request::routeIs('patientblog.viewallBlogs')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Patient-sidebar section-->

                <!-- Start Blood Community -sidebar section-->
                <li class="nav-item {{ (Request::is('bloodcommunity/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blood Community
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= route('bloodcommunity.add'); ?>" class="nav-link {{ (Request::routeIs('bloodcommunity.add')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Post on Blood Community</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('bloodcommunity.list'); ?>" class="nav-link {{ (Request::routeIs('bloodcommunity.list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Community List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= route('bloodcommunity.allPost'); ?>" class="nav-link {{ (Request::routeIs('bloodcommunity.allPost')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Post Show</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- //End Blood Community-sidebar section-->
                @endhasanyrole

                @hasanyrole('doctor')
                <!-- Start Prescription-sidebar section-->
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-file-prescription"></i>
                        <p>
                            Prescription
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                             <a href="<?= url('prescription_add'); ?>"class="nav-link {{ (Request::is('prescription_add')) ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add Prescription</p>
                             </a>
                         </li>--}}
                        <li class="nav-item">
                            <a href="<?= url('prescription_list'); ?>" class="nav-link {{ (Request::is('prescription_list')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Prescription List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= url('appointment/view') ?>" class="nav-link {{ (Request::is('appointment/view')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Appointment List</p>
                    </a>
                </li>
                <!-- //End Prescription-sidebar section-->


                <li class="nav-item">
                    <a href="<?= route('noticeboard.list'); ?>" class="nav-link {{ (Request::routeIs('noticeboard.list')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Notice List</p>
                    </a>
                </li>
                @endhasanyrole

                @hasanyrole('patient')
                <li class="nav-item">
                    <a href="{{ url('/search_doctor') }}" class="nav-link {{ (Request::is('/search_doctor')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Search Doctors
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= url('appointment/add') ?>" class="nav-link {{ (Request::is('appointment/add')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Appointment Booking</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url('appointment/list') ?>" class="nav-link {{ (Request::is('appointment/list')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>My Appointments</p>
                    </a>
                </li>
                @endhasanyrole

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
