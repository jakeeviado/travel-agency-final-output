<!DOCTYPE html>
<html>
<head>
  <title>Destinations</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Jacques+Francois&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Joan&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Google+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Irish+Grover&display=swap" rel="stylesheet" />
  @vite(['resources/css/productspage.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <x-navigation />

  <section class="destinations">
    @if ($packages->count() === 0)
      <p class="text-center text-lg text-gray-600">No packages found at the moment. Please check back later!</p>
    @else
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($packages as $package)
          <a href="{{ route('package.show', $package->package_id) }}">
            <div class="bg-white overflow-hidden transform transition-all duration-300 hover:shadow-2xl">
              <img src="{{ asset($package->image_url) }}" 
                   alt="{{ $package->destination->country ?? 'Unknown Country' }}" 
                   class="w-full h-48 object-cover">

              <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">
                  {{ $package->destination->country ?? 'Unknown Country' }}
                </h2>

                <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                  {{ Str::limit($package->description, 120) }}
                </p>

                <p class="text-md text-gray-700 mb-2">{{ $package->duration }} days trip</p>

                @if ($package->destination)
                  <p class="text-md text-gray-700 mb-1">
                    {{ $package->destination->country }}, {{ $package->destination->city }}
                  </p>
                @else
                  <p class="text-md text-gray-700 mb-4">
                    Destination: <span class="text-red-500">Not available</span>
                  </p>
                @endif

                <div class="flex flex-wrap gap-2 mb-4">
                  @if ($package->is_discounted)
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                      Discounted!
                    </span>
                  @endif
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    @endif
  </section>
</body>
</html>
