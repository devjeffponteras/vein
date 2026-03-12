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

            <br/>
            
            <div class="filter-container my-5">
                <h3 class="font-bold text-lg mb-4">Related Articles</h3>

                @for($i=1; $i < 4; $i++)
                <div class="flex flex-col gap-3 mb-4">
                    <a href="#">
                        <div class="articles-mini-card-item rounded-xl border border-gray-300 shadow bg-white flex flex-row gap-2 hover:scale-102 transition-all">
                            <img class="w-24 h-20 rounded-s-xl" src="{{ asset('/images/news/n' . $i . '.png') }}" alt="">
                            <div class="flex flex-col py-2 truncate">
                                <h4 class="truncate font-semibold">The Mindanao Mineral Processing and Refining Corporation (MMPRC)</h4>
                                <small class="inline-flex text-gray-500"><x-icons.calendar></x-icons.calendar>July 25, 2025</small>
                                <small class="text-gray-500">By: Will Smith</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endfor
                
            </div>

        </div>
        <div class="w-full md:w-9/12 relative">

            <div class="flex flex-col gap-4">

                <div class="news-card-item transition-all">
                    <div class="flex flex-col md:flex-row gap-6 border border-gray-200 shadow rounded-2xl bg-white">
                        <div class="w-full flex flex-col">
                            <a href="#"><img src="{{ asset('/images/news/n5.jpg') }}" alt="" class="rounded-t-2xl w-full hover:scale-102"></a>
                            <div class="solo-news-card-content p-5 flex flex-col">
                                <small class="w-full flex flex-row items-center text-gray-500">
                                    <span class="w-full flex flex-row items-center">
                                        <x-icons.calendar></x-icons.calendar>
                                        July 23, 2025
                                    </span>
                                    <span class="float-right text-nowrap">By: Jessica Alba</span>
                                </small>
                                <a href="#" class="news-card-title font-bold text-2xl text-gray-700 hover:text-green-800 py-5">
                                    MMPRC Conducts Semestral Assessment for DHNC and DMTG Scholars
                                </a>
                                <p class="text-base text-gray-600">
                                    ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC), through its Social Development and Management Program (SDMP), successfully conducted the Semestral Assessment for scholars under the Development of Host and Neighboring Communities (DHNC) and Development of Mining Technology and Geosciences (DMTG) components on July 29, 2025, held at the Community Information Center to assess the academic performance, personal development, and overall engagement of scholars for the first semester of 2025.
                                    <br />
                                    <br />
                                    ROSARIO, AGUSAN DEL SUR - The Mindanao Mineral Processing and Refining Corporation (MMPRC), through its Social Development and Management Program (SDMP), successfully conducted the Semestral Assessment for scholars under the Development of Host and Neighboring Communities (DHNC) and Development of Mining Technology and Geosciences (DMTG) components on July 29, 2025, held at the Community Information Center to assess the academic performance, personal development, and overall engagement of scholars for the first semester of 2025.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection