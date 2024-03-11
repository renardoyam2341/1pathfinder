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

        <div class="page-wrapper">

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

            <div class="container-fluid d-flex justify-content-evenly">

                <div class="card text-white bg-dark mb-3" style="width: 18rem; border-radius:20px;">
                    <img class="card-img-top" src="https://i.ibb.co/Lt8NNQr/Pngtree-man-listen-to-hidden-information-8785847.png" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Counseling Informed Consent Form</h5>
                      <p class="card-text">Counseling is a confidential process aimed at empowering individuals to navigate their lives, but it involves sharing personal information, ensuring confidentiality with exceptions such as potential harm reporting, and maintaining data privacy in online interactions, allowing the transfer of information to a new counselor if desired.</p>
                      <a href="https://forms.office.com/pages/responsepage.aspx?id=xOcVpfeMl0-yO5ZJFkX38J0LtyD20adMg7bAnvMjPUxUMUpUQUFONU5XVk5XR09MVjMzOEhGWDI1Vi4u" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Complete Form</a>
                    </div>
                 </div>

                 <div class="card text-white bg-dark mb-3" style="width: 18rem; border-radius:20px;">
                    <img class="card-img-top" src="https://i.ibb.co/n0bh9VZ/Lovepik-com-450070359-counselling-in-flat-illustration-vector.png" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Counseling Intake Form</h5>
                      <p class="card-text mb-2 p-1">The information provided on this form will substantially assist us to better understand your situation as well as to come up with potential interventions in helping you get empowered. Please note, this information is strictly confidential – exclusively for our use, will not be released to anyone without your written permission, and will be stored in a secured location.</p>
                      <a href="https://forms.office.com/pages/responsepage.aspx?id=xOcVpfeMl0-yO5ZJFkX38J0LtyD20adMg7bAnvMjPUxUMEs1VE5BSEExQ1JZODAxMVAwUDlaR1U0Ry4u" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Complete Form</a>
                    </div>
                 </div>

            </div>

    </div>

    @include('layouts.footer')  
</html>