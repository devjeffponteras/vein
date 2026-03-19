@extends('layouts.app')

@section('content')

    <!-- Banner -->
    <x-banner></x-banner>

    <section class="featured-section row relative overflow-hidden">

        <div class="bg-img-silo w-full z-0 opacity-20 relative">
            <img src="{{ asset('/images/bgs/topped.jpg') }}" alt="" class="absolute" style="width: stretch">
        </div>

        <div class="max-w-7xl mx-auto px-4 py-8 z-20 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/2 z-20">
                    <div class="img-holder relative">
                        <!-- offset background -->
                        <div class="absolute top-3 left-3 w-full h-full bg-gray-300 rounded-xl"></div>
                        <img class="rounded-2xl shadow min-h-full z-30 relative" src="{{ asset('/images/news/n1.png') }}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <!-- offset background -->
                    <div class="absolute top-3 left-3 w-full h-full bg-gray-300 rounded-xl"></div>
                    <div class="rounded-2xl p-6 bg-linear-to-r from-green-950 to-green-700 text-white shadow min-h-full content-holder z-30 relative">
                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Asid</small>
                        <small class="float-right opacity-90"><i>November 18, 2025</i></small> 
                        <h4 class="text-3xl font-bold mt-4">Philsaga Mining Corporation Fire Prevention Month 2024 Kick-Off</h4>
                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                        <p class="text-base" style="max-height: 245px; min-height: 245px; overflow-y: hidden;">
                            BUNAWAN, AGUSAN DEL SUR – On March 2, 2024, the Philsaga Mining Corporation TIGERS joined the Kick-Off and Opening Ceremony for the Fire Prevention Month of the Bureau of Fire Protection in Bunawan Municipal Quadrangle. With the theme “Sa pag-iwas sa sunog, Di ka nag-iisa,” the celebration aims to promote a united and fire-free community. In relation to the fire prevention month spearheaded by SFO3 Benedicto C. Function Jr. PMC will also launch the company-wide celebration of fire prevention competitions with the active participation of the employees and personnel starting this March 8-21, 2024, organized by the Compliance and Emergency Management section.
                        </p>
                        <a href="#" class="bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                            Read More 
                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                <x-icons.arrowright></x-icons.arrowright>
                            </span>
                        </a>
                    </div>

                    <!-- custom design accesories -->
                    <div class="box-t-container">
                        <div class="box-t-inner relative">
                            <span class="box-t-full"></span>
                            <span class="box-t-half"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="news-latest-section row bg-gray-200">
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container mb-8">
                <h2 class="text-3xl font-bold text-gray-700">
                    Latest News & Updates
                    <a href="#" class="bg-green-700 hover:bg-green-900 text-white rounded-full py-2 px-4 w-fit float-right flex flex-row items-center text-base font-normal view-all-btn">
                        View All 
                        <span class="view-all-icon ms-2">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                            </svg>
                        </span>
                    </a>
                </h2>
            </div>
            
            <div class="relative">
    
                <!-- Prev Button -->
                <button onclick="prevNews()" class="absolute -left-8 top-1/2 -translate-y-1/2 bg-white shadow rounded-full py-2 px-3 z-10 cursor-pointer">
                    ◀
                </button>

                <!-- Next Button -->
                <button onclick="nextNews()" class="absolute -right-6 top-1/2 -translate-y-1/2 bg-white shadow rounded-full py-2 px-3 z-10 cursor-pointer">
                    ▶
                </button>

                <div class="overflow-hidden">
                    <div id="newsSlider" class="flex gap-4 transition-transform duration-500">

                        <div class="min-w-full flex gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n2.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Comrel</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Safety</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Mepeo</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-full flex gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n1.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Asid</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Safety</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Comrel</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="section-spacer"></div>
    </section>

    <section class="news-trending-section row bg-gray-100">
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container mb-8">
                <h2 class="text-3xl font-bold text-gray-700">
                    Trending News
                    <a href="#" class="bg-green-700 hover:bg-green-900 text-white rounded-full py-2 px-4 w-fit float-right flex flex-row items-center text-base font-normal view-all-btn">
                        View All 
                        <span class="view-all-icon ms-2">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                            </svg>
                        </span>
                    </a>
                </h2>
            </div>
            
            <div class="relative">
    
                <!-- Prev Button -->
                <button onclick="prevTrendingNews()" class="absolute -left-8 top-1/2 -translate-y-1/2 bg-white shadow rounded-full py-2 px-3 z-10 cursor-pointer">
                    ◀
                </button>

                <!-- Next Button -->
                <button onclick="nextTrendingNews()" class="absolute -right-6 top-1/2 -translate-y-1/2 bg-white shadow rounded-full py-2 px-3 z-10 cursor-pointer">
                    ▶
                </button>

                <div class="overflow-hidden">
                    <div id="trendingNewsSlider" class="flex gap-4 transition-transform duration-500">

                        <div class="min-w-full flex gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Safety</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n1.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Asid</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Mepeo</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-full flex gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Comrel</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n5.jpg') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Comrel</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                                <div class="flex flex-col bg-white rounded-xl gap-3 shadow border border-gray-200">
                                    <img class="card-news-image-item rounded-t-xl" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="text-xs font-semibold text-white bg-yellow-500 uppercase px-2 py-1 rounded-full">Safety</small>
                                        <small class="float-right">June 28, 2025</small>
                                        <h3 class="text-lg font-bold mt-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Anne Curtis Smith</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                            Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                        <a href="#" class="text-white bg-green-600 w-fit text-sm font-semibold mt-6 py-2 px-4 flex flex-row items-center rounded-full transition-all group hover:shadow hover:bg-green-700">
                                            Read More 
                                            <span class="icon-arrow-right hidden group-hover:block transition-all ms-2">
                                                <x-icons.arrowright></x-icons.arrowright>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="section-spacer"></div>
    </section>

    <section class="featured-video-section row bg-cover bg-center bg-fixed relative" 
             style="background-image: url('{{ asset('images/bgs/video-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="section-spacer"></div>
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 opacity-0 translate-y-10 transition duration-700 scroll-animate">
           
            <div class="video-container w-full z-20">
                <h6 class="bg-green-400 rounded-full py-1 px-4 w-fit text-xs text-white uppercase mb-2">
                    Discover
                </h6>
                <h2 class="text-3xl font-bold text-white mb-4">
                    Featured Video
                </h2>
                <div class="relative inline-block mt-4">
                    <!-- main card -->
                    <div class="relative">
                        <video autoplay muted loop width="100%" controls class="rounded-xl hover:scale-105 mx-auto">
                            <source src="{{ asset('videos/TIGER.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="intro-container w-full mb-8 -mt-4 z-10">
                <div class="w-full rounded-b-xl p-8 bg-linear-to-r from-green-950 to-green-700 shadow">
                    <h3 class="text-xl font-semibold text-white leading-8 mt-4">
                        What TIGER truly means at Philsaga Mining Corporation. This featured video highlights the company’s core values that guide its operations, workforce, and commitment to responsible mining. TIGER represents the principles that drive excellence, teamwork, and safety across the organization.
                    </h3>
                    <p class="text-base font-normal text-white leading-8 my-3">
                        Through real stories and insights from employees, the video showcases how these values shape daily work, strengthen community relationships, and support sustainable mining practices. It reflects Philsaga’s dedication to maintaining high standards in safety, environmental stewardship, and operational integrity.
                        Watch the video to learn how the TIGER values inspire every member of the Philsaga team to work together toward a safer, more responsible, and more productive future.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="publications-section row bg-white pt-6">
        <div class="section-spacer"></div>
        <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 gap-6 relative opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container w-1/2">
                 <h6 class="bg-green-400 rounded-full py-1 px-4 w-fit text-xs text-white uppercase mb-2">
                    Know More
                </h6>
                <h2 class="text-3xl font-bold text-gray-700 mb-0">
                    Publications
                </h2>
            </div>
            <div class="contents-container w-1/2">
               
            </div>
        </div>

        <div class="publications-slider relative overflow-hidden max-w-7xl mx-auto opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <!-- Slides Wrapper -->
            <div id="sliderTrack" class="flex transition-transform duration-500">

                <!-- Slide 1 -->
                <div class="min-w-full">
                    <div class="flex flex-col md:flex-row items-center  max-w-7xl mx-auto px-4 py-10 gap-4">

                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs1.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8 rounded-xl border-3 border-dashed border-gray-500 bg-gray-100 shadow-lg">
                            <h3 class="text-3xl font-bold text-gray-800 leading-8">
                                Beyond the Surface
                            </h3>

                            <p class="text-lg font-normal text-gray-700 leading-8 my-3">
                                In every community, there comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development is meaningful only when it uplifts people, protects the environment, and secures the well-being of generations yet to come.
                                <br />
                                <br />
                                There comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="min-w-full">
                    <div class="flex flex-col md:flex-row items-center max-w-7xl mx-auto px-4 py-10 gap-4">
                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs2.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8 rounded-xl border-3 border-dashed border-gray-500 bg-gray-100 shadow-lg">
                            <h3 class="text-3xl font-bold text-gray-800 leading-8">
                                Union and Nature - A Dream of Future
                            </h3>

                            <p class="text-lg font-normal text-gray-700 leading-8 my-3">
                                In every community, there comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development is meaningful only when it uplifts people, protects the environment, and secures the well-being of generations yet to come.
                                <br />
                                <br />
                                There comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="min-w-full">
                    <div class="flex flex-col md:flex-row items-center max-w-7xl mx-auto px-4 py-10 gap-4">
                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs3.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8 rounded-xl border-3 border-dashed border-gray-500 bg-gray-100 shadow-lg">
                            <h3 class="text-3xl font-bold text-gray-800 leading-8">
                                Community is  the Key
                            </h3>

                            <p class="text-lg font-normal text-gray-700 leading-8 my-3">
                                In every community, there comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development is meaningful only when it uplifts people, protects the environment, and secures the well-being of generations yet to come.
                                <br />
                                <br />
                                There comes a moment when we must choose not only the direction we want to take, but the kind of future we want to build. Today, as we continue to navigate a rapidly changing world, 
                                our theme – “Forging Pathways of Progress and Sustainability”- reminds us that development.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation -->
            <button onclick="prevSlide()" 
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-gray-900/60 px-3 pb-2 rounded text-white cursor-pointer text-3xl">
                ‹
            </button>

            <button onclick="nextSlide()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-gray-900/60 px-3 pb-2 rounded text-white cursor-pointer text-3xl">
                ›
            </button>
        </div>

    </section>

    <section class="events-section row bg-gray-100 overflow-hidden relative border-t border-gray-300">

        <div class="bg-img-silo w-full z-0 opacity-[0.03] relative">
            <img src="{{ asset('/images/bgs/dotted.jpg') }}" alt="" class="absolute">
        </div>
        
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 gap-6 opacity-0 translate-y-10 transition duration-700 scroll-animate">

            <div class="intro-container w-full mb-5 mt-4 p-6 bg-linear-to-r from-green-950 to-green-700 rounded-2xl shadow z-10">
                <h6 class="bg-green-600 rounded-full py-1 px-4 w-fit text-xs text-white uppercase mb-2">
                    Be Informed
                </h6>
                <h2 class="text-3xl font-bold text-white mb-2">
                    Events
                </h2>
                <small class="text-gray-200">In a brilliant display of teamwork and creative thinking, the managers of Philsaga Mining Corporation (PMC) and Mindanao Mineral Processing & Refining Corporation (MMPRC) came up with a Vision and Mission Statement that completely captured the goals and values of the two companies.</small>
            </div>

            <!-- Tab Style -->
            <div x-data="{ tab: 'one' }" class="z-10">

                <div class="flex flex-col md:flex-row border-b border-gray-300 pb-4 gap-7">
                    <button @click="tab='one'" :class="tab=='one' ? 'bg-green-600 rounded-full' : ''" class="text-white font-bold bg-gray-500 rounded-full py-1 px-3 text-sm shadow cursor-pointer uppercase">
                        ALL
                    </button>

                    <button @click="tab='two'" :class="tab=='two' ? 'bg-green-600 rounded-full' : ''" class="text-white font-bold bg-gray-500 rounded-full py-2 px-4 text-sm shadow cursor-pointer uppercase">
                        Comrel
                    </button>

                    <button @click="tab='three'" :class="tab=='three' ? 'bg-green-600 rounded-full' : ''" class="text-white font-bold bg-gray-500 rounded-full py-2 px-4 text-sm shadow cursor-pointer uppercase">
                        Safety
                    </button>

                    <button @click="tab='four'" :class="tab=='four' ? 'bg-green-600 rounded-full' : ''" class="text-white font-bold bg-gray-500 rounded-full py-2 px-4 text-sm shadow cursor-pointer uppercase">
                        Mepeo
                    </button>

                    <button @click="tab='five'" :class="tab=='five' ? 'bg-green-600 rounded-full' : ''" class="text-white font-bold bg-gray-500 rounded-full py-2 px-4 text-sm shadow cursor-pointer uppercase">
                        Asid
                    </button>
                </div>

                <div class="p-4">

                    <div x-show="tab=='one'">
                        <div class="flex flex-col md:flex-row gap-4">

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="rounded-t-xl" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Comrel
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">PMC Held Medical Mission</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="rounded-t-xl" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Safety
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Tree Planting for Nature Rehabilitation</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Safety
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Fire Prevention Month is Fast Approaching</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <!-- <div class="card-news-item w-full md:w-1/4 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Comrel
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Turn-Over and Acceptance of Land Trandsformations</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                           
                        </div>
                    </div>

                    <div x-show="tab=='two'">
                        <div class="flex flex-col md:flex-row gap-4">

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Comrel
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Turn-Over and Acceptance of Land Trandsformations</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="rounded-t-xl" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Comrel
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">PMC Held Medical Mission</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div x-show="tab=='three'">
                        <div class="flex flex-col md:flex-row gap-4">

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="rounded-t-xl" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Safety
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Tree Planting for Nature Rehabilitation</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n2.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Safety
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Fire Prevention Month is Fast Approaching</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div x-show="tab=='four'">
                        <div class="flex flex-col md:flex-row gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Mepeo
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Turn-Over and Acceptance of Land Trandsformations</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab=='five'">
                        <div class="flex flex-col md:flex-row gap-4">
                            <!-- the vein card item -->
                            <div class="card-news-item w-full md:w-1/3 relative hover:scale-102 cursor-pointer">
                                <div class="flex flex-col bg-white rounded-lg gap-3 shadow border border-gray-200">
                                    <div class="img-holder max-h-38 min-h-38 overflow-hidden">
                                        <img class="min-h-full rounded-t-xl" src="{{ asset('/images/news/n1.png') }}" alt="">
                                    </div>
                                    <div class="card-news-body text-gray-900 p-4 pb-6">
                                        <small class="float-right mt-1">June 28, 2025</small>
                                        <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase mb-2">
                                            Asid
                                        </h6>
                                        <h3 class="text-lg font-bold mt-3 truncate">Acceptance Training of New Firefighters</h3>
                                        <small class="inline-flex gap-1 my-2"><x-icons.userheadset></x-icons.userheadset> Smith Bolongoan</small>
                                        <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">
                                            Completely captured the goals and values of the two companies, conducted an Earthquake drill at the E15 Admin building.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection

@push('scripts')
<script>

    let currentSlide = 0;
    const slider = document.getElementById('sliderTrack');
    const totalSlides = slider.children.length;

    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }

    // Optional Auto Slide
    setInterval(nextSlide, 5000);

    const elements = document.querySelectorAll('.scroll-animate');

    const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0','translate-y-10');
        }
    });
    });

    elements.forEach(el => observer.observe(el));


    // news slider
    let newsIndex = 0;

    const newsSlider = document.getElementById("newsSlider");
    const newsSlides = newsSlider.children.length;

    function updateNewsSlider(){
        newsSlider.style.transform = `translateX(-${newsIndex * 100}%)`;
    }

    setInterval(nextNews, 6000);

    function nextNews(){
        newsIndex = (newsIndex + 1) % newsSlides;
        updateNewsSlider();
    }

    function prevNews() {
        newsIndex = (newsIndex - 1 + newsSlides) % newsSlides;
        updateNewsSlider();
    }

    // trending news slider
    let trendingNewsIndex = 0;

    const trendingNewsSlider = document.getElementById("trendingNewsSlider");
    const trendingNewsSlides = trendingNewsSlider.children.length;

    function updateTrendingNewsSlider(){
        trendingNewsSlider.style.transform = `translateX(-${trendingNewsIndex * 100}%)`;
    }

    setInterval(nextTrendingNews, 4000);

    function nextTrendingNews(){
        trendingNewsIndex = (trendingNewsIndex + 1) % trendingNewsSlides;
        updateTrendingNewsSlider();
    }

    function prevTrendingNews() {
        trendingNewsIndex = (trendingNewsIndex - 1 + trendingNewsSlides) % trendingNewsSlides;
        updateTrendingNewsSlider();
    }

</script>
@endpush