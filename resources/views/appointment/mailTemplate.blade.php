{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>New Appointment Created</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div style="font-family: Arial, sans-serif;">--}}
{{--    <h2 style="color: #333;">New Contact Details</h2>--}}

{{--    <p><strong>Appointment Details:</strong></p>--}}
{{--    <ul>--}}
{{--        <li><strong>Name:</strong> {{ $appointment->name }}</li>--}}
{{--        <li><strong>Email:</strong> {{ $appointment->email }}</li>--}}
{{--        <li><strong>Service:</strong> {{ $appointment->service }}</li>--}}
{{--        <li><strong>Email:</strong> {{ $appointment->number }}</li>--}}
{{--        <li><strong>Phone Number:</strong> {{ $appointment->number }}</li>--}}
{{--        <li><strong>Phone Number:</strong> {!! $appointment->msg !!}</li>--}}
{{--        <li><strong>Date:</strong> {{ $appointment->date ? $appointment->date->format('Y-m-d') : 'Not specified' }}</li>--}}
{{--        <li><strong>Time:</strong> {{ $appointment->time ?? 'Not specified' }}</li>--}}
{{--    </ul>--}}

{{--    <p style="color: #888;">This is an automated notification. Please do not reply to this email.</p>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



    <!DOCTYPE html>
<html>
<head>
    <title>Appointment Created</title>
</head>
<body>
<h1>Appointment Confirmation</h1>
<p>Dear {{ $appointment->name }},</p>
<p>Your appointment has been successfully created.</p>
<p><strong>Details:</strong></p>
<ul>
    <li>Name: {{ $appointment->name }}</li>
    <li>Email: {{ $appointment->email }}</li>
    <li>Phone Number: {{ $appointment->number }}</li>
    <li>Message: {{ $appointment->msg }}</li>
    <li>Car Name: {{ $appointment->car_name }}</li>
    <li>Car Model: {{ $appointment->car_model }}</li>
</ul>
<p>Thank you for booking with us.</p>
</body>
</html>
