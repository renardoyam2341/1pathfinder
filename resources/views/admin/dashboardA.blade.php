<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')


    <!-- Preloader - style in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style in pages.scss -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('layouts.topbar')
        @include('layouts.sidebar')

        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i>Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">Page Views</h5>
                        <p class="card-text">32</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">Unique Visitors</h5>
                        <p class="card-text">2</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title">Appointments Made</h5>
                        <p class="card-text">
                        
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Appointment Statistics</h5>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Anxiety: 1
                        </li>
                        <li class="list-group-item">
                          Depression: 0
                        </li>
                        <li class="list-group-item">
                          Stress 0
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Preferred Mode Of Counseling</h5>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          Videochat: 1
                        </li>
                        <li class="list-group-item">
                          Chat: 0
                        </li>
                        <li class="list-group-item">
                          Offline: 0
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

        </div>

    </div>

    @include('layouts.footer')  
</html>