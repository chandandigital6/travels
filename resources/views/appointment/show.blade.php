@extends('layouts.aap')

@section('content')

    <div class="container mx-auto py-12">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Appointment Details</h2>

            <div class="mb-4">
                <label class="font-bold">Name:</label>
                <p>{{ $appointment->name }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Email:</label>
                <p>{{ $appointment->email ?? 'N/A' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Number:</label>
                <p>{{ $appointment->number }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Message:</label>
                <p>{{ $appointment->msg ?? 'N/A' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Car Name:</label>
                <p>{{ $appointment->car_name ?? 'N/A' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Car Model:</label>
                <p>{{ $appointment->car_model ?? 'N/A' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-bold">Car Image:</label>
                @if (is_string($appointment->car_image) && !empty($appointment->car_image))
                    @php
                        $car_imagePaths = explode(',', $appointment->car_image);
                    @endphp
                    @foreach ($car_imagePaths as $car_imagePath)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $car_imagePath) }}" alt="Car Image"
                                class="w-full max-w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-auto mx-auto rounded-lg shadow-md">
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="mb-4">
                <label class="font-bold">Created At:</label>
                <p>{{ $appointment->created_at->format('d-m-Y H:i') }}</p>
            </div>

            <a href="{{ route('appointment.index') }}"
                class="text-white bg-blue-500 px-6 py-2 font-bold rounded-md border-[1px] border-blue-500 hover:bg-white hover:text-blue-500 transition ease-in duration-200">Back
                to Appointments</a>
        </div>
    </div>

@endsection
