<nav x-data="{ open: false }" class="sticky top-0 z-50 shadow-md flex flex-col md:flex-row" id="navbar-sticky">
    <div class="w-full mx-auto px-6">
        <div class="flex justify-between items-center h-16 mt-4 md:mt-0">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-4xl font-bold text-white">
                    <img src="/images/logos/the_vein_logo.png" alt="" id="vein-logo">
                </a>
            </div>

            <!-- Desktop Links -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Home
                </a>
                <a href="{{ route('dynamic') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Education
                </a>
                <a href="{{ route('dynamic') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Health
                </a>
                <a href="{{ route('dynamic') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Livelihood
                </a>
                <a href="{{ route('dynamic') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Programs
                </a>
                <a href="{{ route('dynamic') }}" class="text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
                    Special
                </a>
            </div>

            <!-- Other Logo -->
            <div class="hidden md:flex items-center">
                <a href="{{ url('/') }}" class="text-4xl font-bold text-white">
                    <img src="/images/logos/pmc-trio-logo.png" alt="" id="trio-logo">
                </a>
            </div>

            <!-- Hamburger -->
            <button @click="open = !open" class="md:hidden text-white cursor-pointer hover:scale-110 hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-transition
         class="md:hidden px-6 pb-6 space-y-3 w-full mt-4">

        <a href="{{ route('home') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Home
        </a>

        <a href="{{ route('dynamic') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Education
        </a>

        <a href="{{ route('dynamic') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Health
        </a>

        <a href="{{ route('dynamic') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Livelihood
        </a>

        <a href="{{ route('dynamic') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Programs
        </a>

        <a href="{{ route('dynamic') }}" class="block text-xl font-semibold text-white opacity-80 hover:opacity-100 transition">
            Special
        </a>

    </div>
</nav>