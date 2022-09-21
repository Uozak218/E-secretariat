<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <h4>{{ __('E-secretatriat') }}</h4>
                </x-nav-link>
            </div>
      
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <h4>Connection</h4>
            </div>
        </div>
      
    </div>
</nav>
