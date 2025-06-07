<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navigation />

    <header class="hero">
        <div class="overlay">
            <h1>Live a life to the
                fullest, make your
                memories with us -
                Book now!</h1>
            <button>Find out more</button>
        </div>
    </header>

    <section class="services">
        <h2>We Offer Best Services</h2>
        <div class="service-cards">
            <div class="card">
                <img src="../images/weather.png" class="img-weather" alt="Image Not Available" />
                </img>
                <h3>Calculated Weather</h3>
                <p>Get accurate, location-based weather forecasts.</p>
            </div>
            <div class="card">
                <img src="../images/plane.png" class="img-plane" alt="Image Not Available" />
                </img>
                <h3>Affordable Flights</h3>
                <p>Find and book budget-friendly flights to your chosen destination.</p>
            </div>
            <div class="card">
                <img src="../images/microphone.png" class="img-microphone" alt="Image Not Available" />
                </img>
                <h3>Cultural Experience</h3>
                <p>Explore rich traditions and cultures of each place.</p>
            </div>
            <div class="card">
                <img src="../images/customize.png" class="img-customize" alt="Image Not Available" />
                </img>
                <h3>Custom Travel Package</h3>
                <p>We design trips tailored to your needs.</p>
            </div>
        </div>
    </section>

    <!-- To be populated -->

    <section class="destinations">
        <h2>Our Top Destinations</h2>

        @if ($packages->count() === 0)
            <p class="text-center text-lg text-gray-600">No packages found at the moment. Please check back later!</p>
        @else

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($packages as $package)

                    <a href="{{ route('package.show', $package->package_id) }}">
                        <div class="bg-white  overflow-hidden transform transition-all duration-300 hover:shadow-2xl">

                            <img src="{{ asset('path/to/your/package/image.jpg') }}" alt="{{ $package->package_name }}"
                                class="w-full h-48 object-cover">

                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $package->package_name }}</h2>
                                <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                    {{ Str::limit($package->description, 120) }}
                                </p>

                                <p class="text-md text-gray-700 mb-2">{{ $package->duration }} days trip
                                </p>

                                @if ($package->destination)
                                    <p class="text-md text-gray-700 mb-1">
                                        {{ $package->destination->country }}, {{ $package->destination->city }}
                                    </p>

                                @else
                                    <p class="text-md text-gray-700 mb-4">Destination: <span class="text-red-500">Not
                                            available</span>
                                    </p>
                                @endif

                                <div class="flex flex-wrap gap-2 mb-4">
                                    @if ($package->is_discounted)
                                        <span
                                            class="bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Discounted!</span>
                                    @endif
                                </div>


                            </div>
                        </div>

                    </a>

                @endforeach
            </div>
        @endif

        <div class="destination-cards">
            <div class="destination">
                <img src="https://assets.vogue.in/photos/667922097830445356ea2be9/3:4/w_2560%2Cc_limit/Paris.jpg"
                    alt="Paris" />
                <div class="info">
                    <h3>Paris</h3>
                    <p>₱ 22,999 - 5 Days Trip</p>
                </div>
            </div>
        </div>


                            </div>
                        </div>

                    </a>

                @endforeach
            </div>
        @endif
    </section>

    <x-footer />
</body>

</html>
