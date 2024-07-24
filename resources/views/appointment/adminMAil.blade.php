<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h2 {
            color: #4CAF50;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            background-color: #f4f4f9;
            text-align: center;
            padding: 10px;
            color: #888888;
            font-size: 12px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>New Appointment Created</h1>
    </div>
    <div class="content">
        <h2>Appointment Details</h2>
        <p><strong>Name:</strong> {{ $appointment->name }}</p>
        <p><strong>Email:</strong> {{ $appointment->email }}</p>
        <p><strong>Number:</strong> {{ $appointment->number }}</p>
        <p><strong>Message:</strong> {{ $appointment->msg }}</p>
        <p><strong>Car Name:</strong> {{ $appointment->car_name }}</p>
        <p><strong>Car Model:</strong> {{ $appointment->car_model }}</p>
    </div>
    <div class="footer">
        <p>Thanks,</p>
        <p><a href="https://mobilesmashrepair.com/">MobileSmashRepair</a></p>
    </div>
</div>
</body>
</html>


