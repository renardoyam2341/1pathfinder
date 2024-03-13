<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header') 

</body>
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
        @include('layouts.studentsidebar')

        <div class="page-wrapper vh-100 overflow-auto">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i>Home</h4>
                </div>
            </div> 

            <hr>

            <section id="welcome" class="flex-grow-1">

                <div id="welcomeMessage" class="container">
                  <div class="row text-light bg-secondary px-5 py-5" style="border-radius:30px;">
                    <div class="col-md-6 col-12 text-center">
                      <div class="d-flex align-items-center h-100">
                        <div>
                          <h1 class="display-4" style="font-family: 'Poppins', sans-serif; font-weight: bold;">
                            Welcome to PathFinder!
                          </h1>
                          <h4>PathFinder is an application designed to help you seamlessly connect with our counselors.
                          </h4>
                          <a href="/new"><button type="button" class="btn btn-light mt-4 mb-4" style="border-radius:20px;"><b>Make Appointment</b></button></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <img
                        src="assets\images\counselinganimation.gif"
                        alt="PathFinder Logo"
                        class="img-fluid"
                        style="border-radius: 20px;"
                      />
                    </div>
                  </div>
                </div>

                <hr>

                <div class="col-md-12 col-12 text-center">
                    <h2>Our Counselors</h2>
                    <img
                    src="assets\images\counselorspng.png"
                    alt="PathFinder Logo"
                    class="img-fluid"
                    width="40%"
                    />
                </div>

              </section>

            
        </div>

</div>

    @include('layouts.footer')  
</html>