<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts.header')


<body>
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
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-calendar-multiple-check"></i> Appointment Reservation List</h4>
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
<style>
    .hori{font-size: 200%}
    .vert{font-size: 200%}
    i,a{font-size: 100%}
</style>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                        <table id="example" class="table table-dark">
                                    <thead">
                                        <tr>
                                        <th scope="col" class="hori">
                        Name
                    </th>
                    <th scope="col" class="hori">
                        Course/Track
                    </th>
                    <th scope="col" class="hori">
                        Mode of Counsel
                    </th>
                    <th scope="col" class="hori">
                        Preferred Counselor Gender
                    </th>
                    <th scope="col" class="hori">
                        Appointment Date
                    </th>
                    <th scope="col" class="hori">
                        Time
                    </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($appointments as $appointment)
                <tr class="bg-gray-100 border-b">
                    <td class="vert">
                        {{ $appointment->name }}
                    </td>
                    <td class="vert">
                        {{ $appointment->course }}
                    </td>
                    <td class="vert">
                        {{ $appointment->mode }}
                    </td>
                    <td class="vert">
                        {{ $appointment->gender }}
                    </td>
                    <td class="vert">
                        {{ $appointment->date }}
                    </td>
                    <td class="vert">
                        {{ $appointment->time }}
                    </td>
                </tr>
                @endforeach
                                    
                                    
                                        
                                     
                                            <
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