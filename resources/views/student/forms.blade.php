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
        @include('layouts.studentsidebar')

        <div class="page-wrapper mh-100 overflow-auto">
            
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i>Form Completion</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Counsel Forms</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-dark alert-warning alert-dismissible fade show" role="alert">
                <strong>Before you get started, please first accomplish these pre-counselling forms.</strong>
            </div>

            <div class="container d-flex justify-content-around align-items-center text-center">
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-dark align-items-center" style="width: 25rem; height:28rem; border-radius:20px;">
                            <img class="card-img-top" style="width:350px; height:350px;" src="https://i.ibb.co/Lt8NNQr/Pngtree-man-listen-to-hidden-information-8785847.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Counseling Informed Consent Form</h5>
                              <a href="https://forms.office.com/pages/responsepage.aspx?id=xOcVpfeMl0-yO5ZJFkX38J0LtyD20adMg7bAnvMjPUxUMUpUQUFONU5XVk5XR09MVjMzOEhGWDI1Vi4u" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Complete Form</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-white bg-dark align-items-center" style="width: 25rem; height:28rem; border-radius:20px;">
                            <img class="card-img-top" style="width:350px; height:350px;" src="https://i.ibb.co/n0bh9VZ/Lovepik-com-450070359-counselling-in-flat-illustration-vector.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Counseling Intake Form</h5>
                              <a href="https://forms.office.com/pages/responsepage.aspx?id=xOcVpfeMl0-yO5ZJFkX38J0LtyD20adMg7bAnvMjPUxUMEs1VE5BSEExQ1JZODAxMVAwUDlaR1U0Ry4u" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Complete Form</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                <div class="container text-center mb-3">
                    <a href="/student/newappointment">
                        <button type="button" style="width: 10rem; height:3rem; border-radius:20px;" class="btn btn-dark">
                            <i class="bi bi-arrow-right"></i>Get Started
                        </button>
                    </a>
                </div>

            </div>        
        </div>
    </div>

</div>

    @include('layouts.footer')  
</html>