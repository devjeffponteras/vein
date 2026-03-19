<nav x-data="{ open: false }" class="sticky top-0 z-50 shadow-lg flex flex-col md:flex-row" id="navbar-sticky">
    <div class="w-full mx-auto px-6">
        <div class="flex justify-between items-center h-16 mt-4 md:mt-0">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-4xl font-bold text-green-800">
                    <img src="{{ asset('/images/logos/the_vein_logo.png') }}" alt="" id="vein-logo">
                </a>
            </div>

            <!-- Desktop Links -->
            <div class="hidden md:flex">
                <a href="{{ route('home') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transition">
                    HOME
                </a>
                <a href="{{ route('dynamic') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transition">
                    EDUCATION
                </a>
                <a href="{{ route('dynamic') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transition">
                    HEALTH
                </a>
                <a href="{{ route('dynamic') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transition">
                    LIVELIHOOD
                </a>
                <a href="{{ route('dynamic') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transitionn">
                    PROGRAMS
                </a>
                <a href="{{ route('dynamic') }}" class="text-base font-semibold px-4 py-2 border-b border-transparent hover:border-green-600 text-green-800 opacity-80 hover:opacity-100 transition">
                    SPECIAL
                </a>
            </div>

            <!-- Other Logo -->
            <div class="hidden md:flex items-center">
                <a href="{{ url('/') }}" class="text-4xl font-bold text-green-800">
                    <img src="{{ asset('/images/logos/pmc-trio-logo.png') }}" alt="" id="trio-logo">
                </a>
            </div>

            <!-- Hamburger -->
            <button @click="open = !open" class="md:hidden text-green-800 cursor-pointer hover:scale-110 hover:text-green-600">
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

        <a href="{{ route('home') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            HOME
        </a>

        <a href="{{ route('dynamic') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            EDUCATION
        </a>

        <a href="{{ route('dynamic') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            HEALTH
        </a>

        <a href="{{ route('dynamic') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            LIVELIHOOD
        </a>

        <a href="{{ route('dynamic') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            PROGRAMS
        </a>

        <a href="{{ route('dynamic') }}" class="block text-base font-semibold text-green-800 opacity-80 hover:opacity-100 transition">
            SPECIAL
        </a>

    </div>
</nav>