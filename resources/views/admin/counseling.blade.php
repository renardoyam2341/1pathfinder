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

        <div class="page-wrapper" style="background-color:#DEF2F1">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row align-items-center" style="background-color:#DEF2F1">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i>Counseling</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counsel Modes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-flex justify-content-around align-items-center text-center">
                <div class="row">
                    <div class="col">
                        <div class="card text-white" style="width: 25rem; height:32rem; border-radius:20px; background-color:#17252a;">
                            <img class="card-img-top" style="width:400px; height:400px;" src="https://i.ibb.co/Bw1mX4V/transparent-interview-icon-video-conference-icon-606fd33004b335-8145544116179412960193.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Video Counseling</h5>
                              <a href="receiver.php" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Create Video Conference Room</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-white" style="width: 25rem; height:32rem; border-radius:20px; background-color:#17252a;">
                            <img class="card-img-top" style="width:400px; height:400px;" src="https://i.ibb.co/7kz9gwR/keyboard-hands-clipart-md.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Chat Counseling</h5>
                              <a href="http://localhost:5500/" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Start Chat Room</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>

    </div>

    @include('layouts.footer')  
</html>