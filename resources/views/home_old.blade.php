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
                    <div class="img-holder">
                        <img class="rounded-2xl shadow min-h-full" src="{{ asset('/images/news/n1.png') }}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <div class="rounded-2xl p-6 bg-green-900 text-white shadow min-h-full content-holder">
                        <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">Featured</small>
                        <small class="float-right opacity-90"><i>By: Kasandra Hailey</i></small>
                        <h4 class="text-3xl font-bold my-4">Philsaga Mining Corporation Fire Prevention Month 2024 Kick-Off</h4>
                        <p class="text-lg" style="max-height: 255px; min-height: 255px; overflow-y: hidden;">
                            BUNAWAN, AGUSAN DEL SUR – On March 2, 2024, the Philsaga Mining Corporation TIGERS joined the Kick-Off and Opening Ceremony for the Fire Prevention Month of the Bureau of Fire Protection in Bunawan Municipal Quadrangle. With the theme “Sa pag-iwas sa sunog, Di ka nag-iisa,” the celebration aims to promote a united and fire-free community. In relation to the fire prevention month spearheaded by SFO3 Benedicto C. Function Jr. PMC will also launch the company-wide celebration of fire prevention competitions with the active participation of the employees and personnel starting this March 8-21, 2024, organized by the Compliance and Emergency Management section.
                        </p>
                        <a href="#" class="bg-limegreen-default w-fit font-semibold mt-6 py-3 px-6 flex flex-row items-center rounded-full transition-all">Read More</a>
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

    <section class="news-latest-section row bg-[#063232]">
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container mb-8">
                <h2 class="text-3xl font-bold text-white">
                    Latest News & Updates
                    <a href="#" class="bg-limegreen-default rounded-full py-3 px-6 w-fit float-right flex flex-row items-center text-base font-normal view-all-btn">
                        View All &nbsp;
                        <span class="view-all-icon">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                            </svg>
                        </span>
                    </a>
                </h2>
            </div>
            <div class="card-news-container flex flex-col md:flex-row gap-4">
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n2.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">Latest</small>
                            <small class="float-right">June 28, 2025</small>
                            <h3 class="text-lg font-bold my-3 truncate">FIRE DRILL Boosts PMC Tigers</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n3.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">Latest</small>
                            <small class="float-right">September 15, 2025</small>
                            <h3 class="text-lg font-bold my-3 truncate">PMC continues its week-long Women’s Month Celebration</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n4.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">Latest</small>
                            <small class="float-right">November 10, 2025</small>
                            <h3 class="text-lg font-bold my-3 truncate">Gift Giving: Celebrating with the Children of Barangay Maligaya</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-spacer"></div>
    </section>

    <section class="news-trending-section row bg-[#0f2727]">
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container mb-8">
                <h2 class="text-3xl font-bold text-white">
                    Trending News
                    <a href="#" class="bg-limegreen-default rounded-full py-3 px-6 w-fit float-right flex flex-row items-center text-base font-normal view-all-btn">
                        View All &nbsp;
                        <span class="view-all-icon">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                            </svg>
                        </span>
                    </a>
                </h2>
                
            </div>
            <div class="card-news-container flex flex-col md:flex-row gap-4">
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n6.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">trending</small>
                            <small class="float-right">January 5, 2026</small>
                            <h3 class="text-lg font-bold my-3 truncate">PMC continues its week-long Women’s Month Celebration</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n4.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">trending</small>
                            <small class="float-right">September 15, 2025</small>
                            <h3 class="text-lg font-bold my-3 truncate">A blood for a cause: PMC employees extends their support to save lives</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="card-news-item w-full md:w-1/3 relative scale-hov">
                    <div class="flex flex-row bg-green-900 rounded-2xl p-4 pb-6 gap-3 shadow">
                        <div class="w-1/4 card-news-image-holder">
                            <img class="card-news-image-item rounded-full h-22 w-22 border-4 border-white" src="{{ asset('/images/news/n3.png') }}" alt="">
                        </div>
                        <div class="w-3/4 card-news-body text-white">
                            <small class="text-xs font-semibold text-white bg-green-500 uppercase px-2 py-1 rounded-full">trending</small>
                            <small class="float-right">November 10, 2025</small>
                            <h3 class="text-lg font-bold my-3 truncate">Rising from the Ashes: Philsaga Distributes School Supplies to Davao Fire Victims</h3>
                            <p style="max-height: 74px; min-height: 74px; overflow-y: hidden;">Consuelo, Bunawan, Agusan del Sur on  the Safety and Health Department, through the Compliance and 
                                Emergency Management section, conducted an Earthquake drill at the E15 Admin building.
                            </p>
                            <small>By: Mae Jean Marbel</small>
                            <br />
                            <br />
                            <a href="#" class="rounded-full bg-limegreen-default px-4 py-2 font-semibold text-sm">Read More</a>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-spacer"></div>
    </section>

    <section class="featured-video-section row bg-[#063232]">
        <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 py-12 gap-6 opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container w-1/2 mb-8 mt-4">
                <h6 class="bg-green-400 rounded-full py-1 px-4 w-fit text-xs text-white uppercase mb-2">
                    Discover
                </h6>
                <h2 class="text-3xl font-bold text-white mb-4">
                    Featured Video
                </h2>
                <h3 class="text-xl font-semibold text-white leading-8">
                     What TIGER truly means at Philsaga Mining Corporation. This featured video highlights the company’s core values that guide its operations, workforce, and commitment to responsible mining. TIGER represents the principles that drive excellence, teamwork, and safety across the organization.
                </h3>
                <p class="text-base font-normal text-white leading-8 my-3 opacity-80">
                    Through real stories and insights from employees, the video showcases how these values shape daily work, strengthen community relationships, and support sustainable mining practices. It reflects Philsaga’s dedication to maintaining high standards in safety, environmental stewardship, and operational integrity.
                    Watch the video to learn how the TIGER values inspire every member of the Philsaga team to work together toward a safer, more responsible, and more productive future.
                </p>
            </div>
            <div class="video-container w-1/2 p-8">
                <div class="relative inline-block">
                    <!-- offset background -->
                    <div class="absolute top-4 left-4 w-full h-full bg-green-900 rounded-xl"></div>
                    <!-- main card -->
                    <div class="relative">
                        <video autoplay muted loop width="100%" controls class="rounded-2xl hover:scale-105">
                            <source src="{{ asset('videos/TIGER.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="publications-section row bg-[#063232] pt-6">
        <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 gap-6 relative opacity-0 translate-y-10 transition duration-700 scroll-animate">
            <div class="intro-container w-1/2">
                 <h6 class="bg-green-400 rounded-full py-1 px-4 w-fit text-xs text-white uppercase mb-2">
                    Know More
                </h6>
                <h2 class="text-3xl font-bold text-white mb-0">
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
                    <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 py-10 gap-4">
                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs1.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8">
                            <h3 class="text-2xl font-semibold text-white leading-8">
                                Beyond the Surface
                            </h3>

                            <p class="text-base font-normal text-white leading-8 my-3 opacity-80">
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
                    <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 py-10 gap-4">
                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs2.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8">
                            <h3 class="text-2xl font-semibold text-white leading-8">
                                Union and Nature - A Dream of Future
                            </h3>

                            <p class="text-base font-normal text-white leading-8 my-3 opacity-80">
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
                    <div class="flex flex-col md:flex-row max-w-7xl mx-auto px-4 py-10 gap-4">
                        <div class="intro-container w-1/2 mb-8 mt-4">
                            <img class="rounded-2xl shadow min-h-full"
                                src="{{ asset('/images/publications/pubs3.png') }}"
                                style="max-width:500px;">
                        </div>

                        <div class="contents-container w-1/2 p-8">
                            <h3 class="text-2xl font-semibold text-white leading-8">
                                Community is  the Key
                            </h3>

                            <p class="text-base font-normal text-white leading-8 my-3 opacity-80">
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
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 px-3 pb-2 rounded text-white cursor-pointer text-3xl">
                ‹
            </button>

            <button onclick="nextSlide()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 px-3 pb-2 rounded text-white cursor-pointer text-3xl">
                ›
            </button>
        </div>

    </section>

    <section class="events-section row bg-gray-100 overflow-hidden relative">

        <div class="bg-img-silo w-full z-0 opacity-[0.05] relative">
            <img src="{{ asset('/images/bgs/dotted.jpg') }}" alt="" class="absolute">
        </div>
        
        <div class="flex flex-col max-w-7xl mx-auto px-4 py-12 gap-6 opacity-0 translate-y-10 transition duration-700 scroll-animate">

            <div class="intro-container w-full mb-5 mt-4 p-6 bg-[#0f2727] rounded-2xl shadow z-10">
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

                <div class="flex flex-col md:flex-row border-b border-gray-300 pb-4 gap-2">
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
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n2.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab=='two'">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n1.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n5.jpg') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Comrel
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab=='three'">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n3.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Safety
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n6.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Safety
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n2.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Safety
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="w-1/4 border border-gray-300 rounded-lg shadow hover:scale-105 transition-all bg-white">
                                <a href="#">
                                    <div class="img-holder max-h-38 overflow-hidden">
                                        <img class="rounded-t-lg shadow min-h-full" src="{{ asset('/images/news/n4.png') }}" alt="">
                                    </div>
                                    <div class="description-holder flex flex-col p-3">
                                        <div class="flex flex-row justify-between items-center">
                                            <h6 class="bg-green-600 rounded-full py-1 px-3 w-fit text-xs text-white uppercase my-2">
                                                Safety
                                            </h6>
                                            <div class="mini-date-holder float-right text-sm text-gray-600">
                                                July 29, 2025
                                            </div>
                                        </div>
                                        <h4 class="truncate text-gray-700">
                                            Completely captured the goals and values of the two companies.
                                        </h4>
                                        <small class="mt-2">By: Smith Bolongoan</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab=='four'">
                        No event found.
                    </div>

                    <div x-show="tab=='five'">
                        No event found.
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

</script>
@endpush