<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')

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
        @include('layouts.studentsidebar')

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i> New Appointment</h4>
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

                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="insertappointment.php" method="post" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id ="name" name="studentName" placeholder="Enter Name"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Course/Track</label>
                                        <div class="col-md-12">
                                            <input id="course" type="text" name="courseName" class="form-control form-control-line" placeholder="Information Technology - Web Technology"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Preferred Mode of Counsel</label>
                                            <Select name="counselMode" id="mode" type="text" class="form-control"> 
                                                <option>Select Mode</option> 
                                                <option value="Video Conference">Video Conference</option>  
                                                <option value="Chat">Chat</option> 
                                                <option value="Face-to-Face">Face-to-face</option> 
                                            </Select>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-md-12">Preferred Gender of Counselor</label>
                                            <Select name="counselGender" id="gender" type="text" class="form-control"> 
                                                <option>Select Preferred Gender</option> 
                                                <option value="Male">Male</option>  
                                                <option value="Female">Female</option> 
                                                <option value="Both">Both</option> 
                                            </Select>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-md-12">Appointment Schedule</label>
                                        <div class="col-md-12">
                                            <input type="date" name="appointmentDate"
                                                class="form-control form-control-line">
                                            <select name="appointmentTime" id="time" class="form-control">
                                                <option>Select Time</option>
                                                <option value="7:30">7:30 - 8:30AM</option>
                                                <option value="8:30">8:30 - 9:30AM</option>
                                                <option value="9:30">9:30 - 10:30AM</option>
                                                <option value="10:30">10:30 - 11:30AM</option>
                                                <option value="13:30">1:30 - 2:30PM</option>
                                                <option value="14:30">2:30 - 3:30PM</option>
                                                <option value="15:30">3:30 - 4:30PM</option>
                                                <option value="16:30">4:30 - 5:30PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="addAppointment" class="btn btn-success text-white" value="Make Appointment">
                                            
                                        </div>
                                    </div>
                                </form>
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