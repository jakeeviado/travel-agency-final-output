<?php
?>
<header class="w-full bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between max-w-7xl mx-auto">
        <div class="flex items-center">
            <a href="/" class="flex items-center space-x-2">
                <div class="text-2xl font-bold text-gray-800">
                    PAVA
                </div>
                <div class="text-sm text-gray-600 font-medium">
                    Travel Co.
                </div>
            </a>
        </div>

        <nav class="hidden md:flex items-center space-x-8">
            <a href="/destinations"
                class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                Destinations
            </a>
            <a href="/hotels" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                Hotels
            </a>
            <a href="/bookings" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                Bookings
            </a>
            <a href="/login" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">
                Login
            </a>
            <a href="/signup"
                class="px-4 py-2 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium transition-colors duration-200">
                Sign up
            </a>

            <div class="relative">
                <select
                    class="appearance-none bg-white border border-gray-300 rounded-md px-3 py-2 pr-8 text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="en">EN</option>
                    <option value="es">ES</option>
                    <option value="fr">FR</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </nav>

        <button
            class="md:hidden flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-700 hover:border-gray-700">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
</header>