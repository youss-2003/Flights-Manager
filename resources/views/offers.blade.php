<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{env('APP_NAME','XAIRLINES')}}</title>
        <link rel="icon" type="image/x-icon" href="https://seeklogo.com/images/H/hong-kong-airlines-logo-B5E8D635C9-seeklogo.com.png">
        @vite('resources/css/app.css')
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </head>
</head>
<body>
    @include('partials.header')
    <div class="flex justify-center items-center h-screen bg-gray-50">
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 mt-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @foreach($flights as $flight)
               @if ($flight->is_offer===1)
                <!-- CARD -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <!-- Card Image -->
<div class="relative">
    <img class="w-full h-48 object-cover"
        src="{{ $flight->cityimg }}"
        alt="Destination">
    <div class="absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
    <div class="absolute top-0 right-0 bg-[#FC0000] px-4 py-2 text-white mt-3 mr-3 text-xs">
        -{{ $flight->percentage }}%
    </div>
</div>

                    <!-- Card Body -->
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-lg font-medium">{{ $flight->from_city }} to {{ $flight->to_city }}</h3>
                            <img src="{{ $flight->imageAirline }}" alt="Airline Logo" class="h-8 w-8 rounded-full">
                        </div>
                        <p class="text-gray-500 text-sm">Departure: 10:00 AM | Arrival: 12:00 PM</p>
                        <p class="text-gray-500 text-sm line-through">{{ number_format($flight->oldprice, 2) }} MAD</p>
                        <p class="text-red-500 text-sm font-semibold">{{ number_format($flight->newprice, 2) }} MAD</p>
                    </div>
                    <!-- Card Footer -->
                    <div class="px-6 py-3 bg-gray-100 flex justify-between items-center">
                        <div class="text-gray-600 text-sm flex items-center">
                            <svg class="w-5 h-5 me-1 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            {{ $flight->duration }}
                        </div>
                        <div class="flex space-x-4">
                            @if ($flight->has_wifi==1)
                            <!-- wifi svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wifi" viewBox="0 0 16 16">
                                <path
                                    d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049" />
                                <path
                                    d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                            </svg>
                            @else
                            <!-- wifi off svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wifi-off" viewBox="0 0 16 16">
                                <path
                                    d="M10.706 3.294A12.6 12.6 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4q.946 0 1.852.148zM8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065 8.45 8.45 0 0 1 3.51-1.27zm2.596 1.404.785-.785q.947.362 1.785.907a.482.482 0 0 1 .063.745.525.525 0 0 1-.652.065 8.5 8.5 0 0 0-1.98-.932zM8 10l.933-.933a6.5 6.5 0 0 1 2.013.637c.285.145.326.524.1.75l-.015.015a.53.53 0 0 1-.611.09A5.5 5.5 0 0 0 8 10m4.905-4.905.747-.747q.886.451 1.685 1.03a.485.485 0 0 1 .047.737.52.52 0 0 1-.668.05 11.5 11.5 0 0 0-1.811-1.07M9.02 11.78c.238.14.236.464.04.66l-.707.706a.5.5 0 0 1-.707 0l-.707-.707c-.195-.195-.197-.518.04-.66A2 2 0 0 1 8 11.5c.374 0 .723.102 1.021.28zm4.355-9.905a.53.53 0 0 1 .75.75l-10.75 10.75a.53.53 0 0 1-.75-.75z" />
                            </svg>
                            @endif
                            @if ($flight->is_direct==0)
                            <!-- plane stop over img icon -->
                            <img src="https://cdn0.iconfinder.com/data/icons/travel-and-destination-1/64/flying-airplane-airport-stopover-travel-transportation-512.png"
                                alt="plan img" class="h-5 w-5">
                            @else
                            <!-- plane fly img icon  -->
                            <img src="https://static.thenounproject.com/png/993451-200.png" alt="plan img" class="h-5 w-5">
                            @endif
                        </div>
                    </div>
                </div>
               @endif
                @endforeach
            </div>
        </div>
    </div>

@include('partials.footer')
</body>
</html>
