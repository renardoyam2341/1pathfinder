<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>


<?php include 'includes/footer.php'?>

</body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

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

            <div class="container-fluid d-flex justify-content-evenly">

                <div class="card text-white bg-dark mb-3" style="max-width: 20rem; border-radius:20px; max-height:25rem">
                    <img class="card-img-top img-fluid mx-auto pt-3" style="height:70%; width:70%;" src="https://mindnation.com/images/logo/mindnation-logo.png" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">MindNation</h5>
                      <p class="card-text">In need of someone to talk to? try using MindNation's support chat in their Facebook page!</p>
                      <a href="https://www.facebook.com/mindnation/" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Go</a>
                    </div>
                 </div>

                <div class="card text-white bg-dark d-flex" style="max-width: 20rem; border-radius:20px; max-height:50rem">
                    <img class="card-img-top img-fluid mx-auto pt-3" style="height:70%; width:70%; border-radius:40px;" src="https://in-touch.org/wp-content/uploads/2023/02/cropped-intouchlogo1-2.png" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">In Touch Community</h5>
                      <p class="card-text">In Touch Community’s Crisis Line Landline: +63 2 8893 1893
                                    <br>Globe: 0917-863-1136
                                    <br>Sun: 0956-053-4257
                                    <br>Email address: intouch@in-touch.org
                                    <br>www.in-touch.org</p>
                      <a href="www.in-touch.org" class="btn btn-light d-flex justify-content-center" style="border-radius:10px;">Go</a>
                    </div>
                </div>

            </div>

    </div>

    <?php include 'includes/footer.php'?>  
</html>