<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <h4>{{ __('E-secretatriat') }}</h4>
                </x-nav-link>
            </div>
      
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div align="right" width="48">
                    <div class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <h4>Connection</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
