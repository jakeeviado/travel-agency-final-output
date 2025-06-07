<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $package->package_name }} - Details</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <x-navigation />

    <x-breadcrumb :package="$package" />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <!-- Image Gallery -->
                <div class="grid grid-cols-2 gap-2 mb-8">
                    <div class="col-span-2 md:col-span-1">
                        @if($package->featured_image)
                            <img src="{{ asset('storage/' . $package->featured_image) }}" alt="{{ $package->package_name }}"
                                class="w-full h-80 object-cover rounded-lg shadow-md">
                        @else
                            <div class="w-full h-80 bg-gray-200 rounded-lg shadow-md flex items-center justify-center">
                                <span class="text-gray-500">No image available</span>
                            </div>
                        @endif
                    </div>
                    <div class="grid grid-cols-1 gap-2">
                        @if($package->gallery && count($package->gallery) > 0)
                            @foreach(array_slice($package->gallery, 0, 2) as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $package->package_name }}"
                                    class="w-full h-39 object-cover rounded-lg shadow-md">
                            @endforeach
                        @else
                            <div class="w-full h-39 bg-gray-200 rounded-lg shadow-md flex items-center justify-center">
                                <span class="text-gray-400 text-sm">Gallery Image</span>
                            </div>
                            <div class="w-full h-39 bg-gray-200 rounded-lg shadow-md flex items-center justify-center">
                                <span class="text-gray-400 text-sm">Gallery Image</span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Package Title -->
                <h1 class="text-3xl font-bold text-gray-900 mb-6">
                    {{ $package->package_name }}
                    @if($package->destination)
                        <span class="text-xl text-gray-600 font-normal">, {{ $package->destination->city }}</span>
                    @endif
                </h1>

                <!-- About Section -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">About:</h2>
                    <p class="text-gray-700 mb-4">
                        {{ $package->description }}
                    </p>
                </div>

                <!-- Details Section -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Package Details:</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <p class="text-gray-600">Duration: {{ $package->duration }}</p>
                            <p class="text-gray-600">Departure:
                                {{ \Carbon\Carbon::parse($package->departure_date)->format('M d, Y') }}
                            </p>
                            <p class="text-gray-600">Return:
                                {{ \Carbon\Carbon::parse($package->return_date)->format('M d, Y') }}
                            </p>
                        </div>
                        <div class="space-y-2">
                            @if($package->destination)
                                <p class="text-gray-600">Destination: {{ $package->destination->country }}</p>
                                <p class="text-gray-600">Location: {{ $package->destination->city }}</p>
                            @else
                                <p class="text-gray-600">Destination: Not available</p>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <button
                            class="px-4 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">Save</button>
                        <button
                            class="px-4 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">Share</button>
                        <button
                            class="px-4 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">Email</button>
                        <button
                            class="px-4 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">View Tour</button>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-gray rounded-lg shadow-sm p-6 sticky top-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Packages</h3>

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-6">
                            <div class="flex items-end mb-2">
                                @if($package->discounted_price && $package->discounted_price < $package->price)
                                    <span
                                        class="text-lg text-gray-500 line-through mr-2">${{ number_format($package->price, 0) }}</span>
                                    <span
                                        class="text-3xl font-bold text-red-600">${{ number_format($package->discounted_price, 0) }}</span>
                                @else
                                    <span
                                        class="text-3xl font-bold text-gray-900">${{ number_format($package->price ?? 450, 0) }}</span>
                                @endif
                            </div>

                            <button type="submit"
                                class="w-full bg-gray-800 text-white py-3 px-4 rounded-md font-medium hover:bg-gray-900 transition-colors">
                                BOOK NOW
                            </button>
                        </div>
                    </form>

                    <!-- badges -->
                    @if($package->is_featured || $package->is_popular || $package->is_discounted)
                        <div class="flex flex-wrap gap-2">
                            @if($package->is_featured)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Featured
                                </span>
                            @endif
                            @if($package->is_popular)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Popular
                                </span>
                            @endif
                            @if($package->is_discounted)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Discounted!
                                </span>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>