<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>
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
</head>
<body>
    <div class="container">
        <h1 class="title">New Appointment</h1>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <form class="form" action="{{ route('appointments.store') }}" method="post">
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
                    <option value="">Select Time</option>
                    <option value="8:00">8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="1:00">1:00</option>
                    <option value="2:00">2:00</option>
                    <option value="3:00">3:00</option>
                    <option value="4:00">4:00</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Make Appointment</button>
        </form>
    </div>
</body>
</html>