<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1.2rem;
            color: #333;
        }

        input[type="date"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1.2rem;
            color: #333;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/></svg>");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
            padding-right: 30px;
        }

        .submit-btn {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #444;
        }
    </style>
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
                            <div class="container">
        <h1 class="title">New Appointment</h1>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <form class="form" action="/store" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="course">Course/Track</label>
                <input type="text" id="course" name="course" required>
            </div>
            <div class="form-group">
                <label for="mode">Preferred Mode of Counsel</label>
                <select id="mode" name="mode" required>
                    <option value="">Select Mode</option>
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Preferred Gender of Counselor</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Preferred Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Appointment Schedule</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Select Time</label>
                <select id="time" name="time" required>
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
            <button type="submit" class="submit-btn">Make Appointment</button>
        </form>
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