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
    .hori{font-size: 150%}
    .vert{font-size: 150%}
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
                    <th scope="col" class="hori">
                        Status
                    </th>
                    <th scope="col" class="hori">
                        Room
                    </th>
                    <th scope="col" class="hori">

                    </th>
                    <th scope="col" class="hori">
                        Created
                    </th>
                    <th scope="col" class="hori">
                        Updated
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
                    
                    <form action="{{ route('appointments.update', $appointment->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <td class="vert">
                    <select id="status" name="status" required>
                    <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : ''}}>Pending</option>
                    <option value="Waiting" {{ $appointment->status == 'Waiting' ? 'selected' : ''}}>Waiting</option>
                    <option value="Ready" {{ $appointment->status == 'Ready' ? 'selected' : ''}}>Ready</option>
                    <option value="Done" {{ $appointment->status == 'Done' ? 'selected' : ''}}>Done</option>
                    </select>
                    
                    <td class="vert">
                    <input type="text" id="room" name="room"
                    value="{{ $appointment->room }}">
                    </td>
                    <td class="vert">
                    <button type="submit" class="btn mt-3 btn-primary">Edit Appointments</button>
                    </td>
                    <td class="vert">
                        {{ $appointment->created_at }}
                    </td>
                    <td class="vert">
                        {{ $appointment->updated_at }}
                    </td>
                    
                    </form>
                    
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