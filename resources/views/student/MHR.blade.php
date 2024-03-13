<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')

</body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('layouts.topbar')
        @include('layouts.studentsidebar')

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i>Mental Health Resources</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mental Health Resources</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <section id="welcome" class="flex-grow-1">

                <div id="welcomeMessage" class="container">
                  <div class="row text-light bg-secondary px-5 py-5" style="border-radius:30px;">
                    <div class="col text-center">
                      <div class="d-flex align-items-center h-100">
                        <div>
                          <h1 class="display-5" style="font-family: 'Poppins', sans-serif; font-weight: bold;">
                            Check out these Mental Health Resources provided by the Department of Health!
                          </h1>
                          <h4>source: facebook.com/DOHhealthypilipinas
                          </h4>
                          <hr>
                          <p><a href="https://bit.ly/DOHselfcarevol1?fbclid=IwAR2W2MX5U54wE8JkuJPvjblrD-v6yXXXq6jurQp4dl40DPSUnzSkGoMghK0" class="link-light">
                            <b>Self-Care Kit Volume 1</b>
                          </a></p>
                          <p><a href="https://bit.ly/DOHselfcarevol2?fbclid=IwAR1YNsb3IyFEjO5McLyG1yl1DYSzpQKQPjk8jE3iOIl_ALRd3QuOMUqX5sM" class="link-light">
                            <b>Self-Care Kit Volume 2</b>
                          </a></p>
                          <p><a href="https://bit.ly/DOHmhbookletENG?fbclid=IwAR1wlrHB8ew2ILsX7sLPzaZQJuUKuyj7HOsEsC0KUujMhJOVI-aBYM0OaOQ" class="link-light">
                            <b>Mental Health, Mind, and Body Booklet English Ver.</b>
                          </a></p>
                          <p><a href="https://bit.ly/DOHmhbookletFIL?fbclid=IwAR1I3IFtTOHB5F3BXqnMysB3e83OZqzsGVV_tDMMzW2Jc1FkZUxuDz661d0" class="link-light">
                            <b>Mental Health, Mind, and Body Booklet Filipino Ver.</b>
                          </a></p>
                          <p><a href="https://bit.ly/DOHmhbookletBIS?fbclid=IwAR36RHqkKE24JEtdQFnuZdpSXL0lMxal5SfSICdzTfQVsiMcOUcx4KpZSg8" class="link-light">
                            <b>Mental Health, Mind, and Body Booklet Bisaya Ver.</b>
                          </a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <img
                        src="\assets\images\mhr.gif"
                        alt="Mental Health GIF"
                        class="img-fluid"
                        style="border-radius: 20px;"
                      />
                    </div>
                  </div>
                </div>

        </div>

    @include('layouts.footer')  
</html>