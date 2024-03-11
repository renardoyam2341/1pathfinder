<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')
<?php include('conn.php');?>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('layouts.topbar')
        @include('layouts.sidebar')

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Appointment Status</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                        <table id="example" class="table table-dark">
                                    <thead">
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Appointment Status</th>
                                            <th scope="col">Room Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $query = "SELECT * FROM appointments";

                                        $result = mysqli_query($conn, $query);

                                        if(!$result){
                                            die("Query Failed!".mysqli_error());
                                        }else{
                                            while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    
                                    
                                        <tr>
                                            <td><?php echo $row['studentName']; ?></td>
                                            <td><?php echo $row['appointmentStatus']; ?></td>
                                            <td><?php echo $row['roomName']; ?></td>
                                        </tr> 
                                     
                                            <?php
                                        }
                                    }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('layouts.footer')

</body>

</html>