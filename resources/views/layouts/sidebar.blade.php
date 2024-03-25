
        <!-- Left Sidebar - style in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="../assets/images/users/2.jpg" alt="users"
                                        class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">{{Auth::user()->name}}<i
                                                class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">{{Auth::user()->email}}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" href ="/login" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                    {{-- this shit needs fixing bro. upon pressing logout, admins must be redirected to the login route again. i can't do this shit bro this some broken shi --}}
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin" aria-expanded="false"><i class="mdi mdi-information"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/AppointmentList" aria-expanded="false"><i class="mdi mdi-calendar-multiple-check"></i><span
                                    class="hide-menu">Appointment Reservations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin/counseling" aria-expanded="false"><i class="mdi mdi-account-switch"></i><span
                                    class="hide-menu">Counseling</span></a></li>
                    </ul>

                </nav>
            </div>
        </aside>