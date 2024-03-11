<!DOCTYPE html>
<html>
<head>
    <title>Appointments</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        *{font-size:30px}
    </style>
</head>
<body>
    @include('layouts.header')

    <section>
        <div >
            <table >
                <thead >
                    <tr>
                        <th >
                            Name
                        </th>
                        <th >
                            Course/Track
                        </th>
                        <th >
                            Mode of Counsel
                        </th>
                        <th >
                            Preferred Counselor Gender
                        </th>
                        <th >
                            Appointment Date
                        </th>
                        <th >
                            Time
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                    <tr >
                        <td >
                            {{ $appointment->name }}
                        </td>
                        <td >
                            {{ $appointment->course }}
                        </td>
                        <td >
                            {{ $appointment->mode }}
                        </td>
                        <td >
                            {{ $appointment->gender }}
                        </td>
                        <td >
                            {{ $appointment->date }}
                        </td>
                        <td >
                            {{ $appointment->time }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>