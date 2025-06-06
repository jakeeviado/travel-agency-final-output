<?php

?>

<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="text-sm text-gray-500">
            <a href="/" class="text-blue-600 hover:underline">HOME</a>
            <span class="mx-2">/</span>
            @if($package->destination)
                <a href="#" class="text-blue-600 hover:underline">{{ $package->destination->country }}</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900">{{ $package->destination->city }}</span>
            @else
                <span class="text-gray-900">{{ $package->package_name }}</span>
            @endif
        </nav>
    </div>
</div>