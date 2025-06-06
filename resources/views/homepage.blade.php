<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />

    <div>
        <h1>All Available Packages</h1>

        @if ($packages->count() === 0)
            <p>No packages found at the moment.</p>
        @else
            <div class="packages-container">
                @foreach ($packages as $package)
                    <div class="package-card">
                        <h2>{{ $package->package_name }}</h2>
                        <p>Description: {{ $package->description }}</p>
                        <p>Duration: {{ $package->duration }}</p>

                        @if ($package->destination)
                            <p>Destination: {{ $package->destination->country }}</p>
                            <p>Location: {{ $package->destination->city }}</p>
                        @else
                            <p>Destination: Not available</p>
                        @endif

                        <p>Departure Date: {{ \Carbon\Carbon::parse($package->departure_date)->format('M d, Y') }}</p>
                        <p>Return Date: {{ \Carbon\Carbon::parse($package->return_date)->format('M d, Y') }}</p>

                        @if ($package->is_featured)
                            <span class="badge featured">Featured</span>
                        @endif
                        @if ($package->is_popular)
                            <span class="badge popular">Popular</span>
                        @endif
                        @if ($package->is_discounted)
                            <span class="badge discounted">Discounted!</span>
                        @endif

                        <a href="{{ route('package.show', $package->package_id) }}" class="text-red-500">View Details</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>

</html>