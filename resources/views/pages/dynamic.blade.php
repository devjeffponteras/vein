@extends('layouts.app')

@section('content')

<section class="featured-section row max-w-7xl mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8 mt-6">
        <div class="w-full md:w-3/12">

            <div class="search-bar-container relative">
                <input 
                    type="text"
                    class="p-3 pr-10 rounded-2xl border border-gray-200 shadow w-full bg-white"
                    placeholder="Search.."
                >

                <!-- Magnifying Glass Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-5 h-5 text-gray-600 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"/>
                </svg>
            </div>

            <br />

            <div class="filter-container my-5">
                <h3 class="font-bold text-lg mb-2">Filter by Year</h3>
                
                <div x-data="{ open: false }" class="px-4 py-5">

                    <h3 class="-mx-2 -my-3 flow-root">
                        <button 
                            @click="open = !open"
                            class="flex w-full items-center justify-between bg-white px-4 py-3 rounded-full shadow text-gray-400 hover:text-gray-500 cursor-pointer border border-gray-200"
                        >
                            <span class="font-medium text-gray-900">2025 (3)</span>

                            <span class="ml-6 flex items-center">

                                <!-- PLUS ICON -->
                                <svg x-show="!open" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/>
                                </svg>

                                <!-- MINUS ICON -->
                                <svg x-show="open" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"/>
                                </svg>

                            </span>
                        </button>
                    </h3>

                    <!-- DROPDOWN ITEMS -->
                    <ul x-show="open" x-transition class="dp-items mt-4 space-y-2 bg-white p-2 rounded-lg shadow">
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">July (1)</a></li>
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">September (1)</a></li>
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">December (1)</a></li>
                    </ul>

                </div>

                <div x-data="{ open: false }" class="px-4 py-5">

                    <h3 class="-mx-2 -my-3 flow-root">
                        <button 
                            @click="open = !open"
                            class="flex w-full items-center justify-between bg-white px-4 py-3 shadow rounded-full text-gray-400 hover:text-gray-500 cursor-pointer border border-gray-200"
                        >
                            <span class="font-medium text-gray-900">2026 (3)</span>

                            <span class="ml-6 flex items-center">

                                <!-- PLUS ICON -->
                                <svg x-show="!open" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/>
                                </svg>

                                <!-- MINUS ICON -->
                                <svg x-show="open" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"/>
                                </svg>

                            </span>
                        </button>
                    </h3>

                    <!-- DROPDOWN ITEMS -->
                    <ul x-show="open" x-transition class="dp-items mt-4 space-y-2 bg-white p-2 rounded-lg shadow">
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">July (1)</a></li>
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">September (1)</a></li>
                        <li><a href="#" class="block text-gray-600 hover:text-black hover:bg-gray-100 p-2 rounded">December (1)</a></li>
                    </ul>

                </div>

            </div>

        </div>
        <div class="w-full md:w-9/12 relative">

            <div class="flex flex-col gap-4">

                <!-- news article item -->
                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-full flex flex-col">
                            <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n3.png') }}" alt="" class="rounded-lg"></a>
                            <!-- Gallery -->
                            <div class="grid grid-cols-4 gap-2 my-4">
                                <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n6.png') }}" class="h-20 w-full object-cover rounded"></a>
                                <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n5.jpg') }}" class="h-20 w-full object-cover rounded"></a>
                                <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n1.png') }}" class="h-20 w-full object-cover rounded"></a>
                                <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n4.png') }}" class="h-20 w-full object-cover rounded"></a>
                            </div>
                            <a href="{{ route('single-news') }}" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <div class="w-full flex flex-row items-center justify-start gap-3 my-2">
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.userheadset></x-icons.userheadset>
                                    Jessica Alba
                                </small>
                                |
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.calendar></x-icons.calendar>
                                    July 23, 2025
                                </small>
                            </div>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- news article item -->
                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-full flex flex-col">
                            <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n1.png') }}" alt="" class="rounded-lg mb-4"></a>
                            <a href="{{ route('single-news') }}" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <div class="w-full flex flex-row items-center justify-start gap-3 my-2">
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.userheadset></x-icons.userheadset>
                                    Jessica Alba
                                </small>
                                |
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.calendar></x-icons.calendar>
                                    July 23, 2025
                                </small>
                            </div>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- news article item -->
                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-full flex flex-col">
                            <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n4.png') }}" alt="" class="rounded-lg mb-4"></a>
                            <a href="{{ route('single-news') }}" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <div class="w-full flex flex-row items-center justify-start gap-3 my-2">
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.userheadset></x-icons.userheadset>
                                    Jessica Alba
                                </small>
                                |
                                <small class="flex flex-row items-center gap-1 text-gray-700">
                                    <x-icons.calendar></x-icons.calendar>
                                    July 23, 2025
                                </small>
                            </div>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC).
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection