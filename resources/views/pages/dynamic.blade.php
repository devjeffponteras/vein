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

                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-1/4 image-container">
                            <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n3.png') }}" alt="" class="rounded"></a>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <small class="w-full flex flex-row items-center text-gray-500">
                                <span class="w-full flex flex-row items-center">
                                    <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                    </svg>
                                    July 23, 2025
                                </span>
                                <span class="float-right text-nowrap">By: Jessica Alba</span>
                            </small>
                            <a href="{{ route('single-news') }}" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800 my-3">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC), through its Social Development and Management Program (SDMP), successfully conducted the Semestral Assessment for scholars under the Development of Host and Neighboring Communities (DHNC) and Development of Mining Technology and Geosciences (DMTG) components on July 29, 2025, held at the Community Information Center to assess the academic performance, personal development, and overall engagement of scholars for the first semester of 2025.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-1/4 image-container">
                            <a href="{{ route('single-news') }}"><img src="{{ asset('/images/news/n5.jpg') }}" alt="" class="rounded"></a>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <small class="w-full flex flex-row items-center text-gray-500">
                                <span class="w-full flex flex-row items-center">
                                    <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                    </svg>
                                    July 23, 2025
                                </span>
                                <span class="float-right text-nowrap">By: Jessica Alba</span>
                            </small>
                            <a href="{{ route('single-news') }}" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800 my-3">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC), through its Social Development and Management Program (SDMP), successfully conducted the Semestral Assessment for scholars under the Development of Host and Neighboring Communities (DHNC) and Development of Mining Technology and Geosciences (DMTG) components on July 29, 2025, held at the Community Information Center to assess the academic performance, personal development, and overall engagement of scholars for the first semester of 2025.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="news-card-item hover:scale-102 transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white p-4">
                        <div class="w-1/4 image-container">
                            <a href="#"><img src="{{ asset('/images/news/n4.png') }}" alt="" class="rounded"></a>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <small class="w-full flex flex-row items-center text-gray-500">
                                <span class="w-full flex flex-row items-center">
                                    <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                    </svg>
                                    July 23, 2025
                                </span>
                                <span class="float-right text-nowrap">By: Jessica Alba</span>
                            </small>
                            <a href="#" class="news-card-title font-bold text-lg text-gray-700 hover:text-green-800 my-3">
                                MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                            </a>
                            <p class="text-base text-gray-600">
                                ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC), through its Social Development and Management Program (SDMP), successfully conducted the Semestral Assessment for scholars under the Development of Host and Neighboring Communities (DHNC) and Development of Mining Technology and Geosciences (DMTG) components on July 29, 2025, held at the Community Information Center to assess the academic performance, personal development, and overall engagement of scholars for the first semester of 2025.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection