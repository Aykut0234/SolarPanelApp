<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solar Panel Management</title>
        @livewireStyles
        <!-- Fonts and Icons -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/font-awesome@5.15.2/css/all.min.css" rel="stylesheet">
        <!-- Color Palette -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
        <!-- Add your custom stylesheet link here if needed -->
        <style>
            /* Custom Styles */
            body {
                font-family: 'Roboto', sans-serif;
                background: #ecf0f3;
            }

            .container {
                background: #ffffff;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                padding: 20px;
                margin-top: 20px;
            }

            h1, h2, h3 {
                color: #3498db;
            }

            .customer-data p {
                margin: 8px 0;
            }
        </style>
    </head>
    <body>
        <div class="container mx-auto">
            <h1 class="text-4xl font-extrabold text-center text-indigo-700 mb-4">
                🌞 Solar Panel Management 🌞
            </h1>
            <h2 class="text-2xl font-semibold text-indigo-600 mb-4">
                Subscription Details - {{ $subscription->customer->name }}
            </h2>
            <div class="customer-data border-b-2 pb-4 mb-4 text-gray-700">
                <p><i class="far fa-user"></i> <strong>Name:</strong> {{ $subscription->customer->name }}</p>
                <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> {{ $subscription->customer->address }}</p>
                <p><i class="fas fa-envelope"></i> <strong>Email:</strong> {{ $subscription->customer->email }}</p>
                <p><i class="fas fa-phone-alt"></i> <strong>Phone:</strong> {{ $subscription->customer->phone }}</p>
                <p><i class="fas fa-solar-panel"></i> <strong>Solar System:</strong> {{ $subscription->solarPanelSystem->name }}</p>
            </div>
            <h3 class="text-2xl font-semibold mb-4 text-indigo-600">Solar Panels</h3>
            @livewire('panel-switcher', ['subscription' => $subscription])
        </div>

        @livewireScripts
    </body>
</x-app-layout>
</html>
