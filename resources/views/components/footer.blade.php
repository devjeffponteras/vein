<footer class="bg-gray-800 text-white relative" style="background-image: url('{{ asset('images/bgs/footer-bg.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="max-w-11/12 mx-auto py-12 grid grid-cols-md-1 md:grid-cols-4 gap-6 px-4 relative overflow-hidden">
        <div class="flex flex-col items-start">
            <!-- <h4 class="font-bold text-xl mb-3">The Vein</h4> -->
            <img src="{{ asset('/images/logos/the_vein_logo.png') }}" alt="" id="vein-logo">
            <p class="text-sm opacity-90 text-start my-4">A Socially Responsible & Environment Friendly Company.</p>

            <h5 class='font-bold text-lg mt-6'>Headquarters:</h5>
            <p class='text-start mb-6'>
                Brgy, C.P. Garcia St., Catitipan, Sasa, Buhangin, Davao City, 8000 Davao del Sur
            </p>

            <p><span class='font-bold'>Phone</span>:</p>
            <ul class='unstyled'>
                <li>(082) 235 0045</li>
            </ul>

            <br />
            <p><span class='font-bold'>Email</span>:</p>
            <ul class='unstyled text-start'>
                <li class="text-sm">Sales: <a href="mailto:sales@webfocus.ph">sales@webfocus.ph</a></li>
                <li class="text-sm">Marketing: <a href="mailto:marketing@webfocus.ph">marketing@webfocus.ph</a></li>
                <li class="text-sm">Billing: <a href="mailto:billing@webfocus.ph">billing@webfocus.ph</a></li>
                <li class="text-sm">Customer Care: <a href="mailto:customercare@webfocus.ph">customercare@webfocus.ph</a></li>
                <li class="text-sm">Tech Support: <a href="mailto:support@webfocus.ph">support@webfocus.ph</a></li>
            </ul>

        </div>
        <div>
            <h5 class="font-bold mb-2 text-start uppercase">About Us</h5>
            <ul class="text-sm space-y-1 opacity-90 text-start">
            <li><a class="hover:underline" href="#">The Way of the Tiger</a></li>
            <li><a class="hover:underline" href="#">History</a></li>
            <li><a class="hover:underline" href="#">ISO</a></li>
            <li><a class="hover:underline" href="#">Environmental Policy Statement</a></li>
            <li><a class="hover:underline" href="#">PMC Board of Directors</a></li>
            <li><a class="hover:underline" href="#">MMPRC Board of Directors</a></li>
            <li><a class="hover:underline" href="#">Board of Trustees of PHSFI</a></li>
            </ul>
        </div>
        <div class="text-start">

            <h5 class="font-bold mb-2 text-start uppercase">Portals</h5>
            <ul class="text-sm space-y-1 opacity-90 text-start">
            <li><a class="hover:underline" href="#">Supplier Portal</a></li>
            <li><a class="hover:underline" href="#">Careers</a></li>
            <li><a class="hover:underline" href="#">The Vein</a></li>
            <li><a class="hover:underline" href="#">Site Map</a></li>
            </ul>
        </div>

        <div class="text-start">
            <h5 class="font-semibold mb-2 uppercase">Social</h5>
            
            <ul class='unstyled'>
            <li class='my-3'>
                <a href="#" class='flex flex-row items-center gap-2 hover:underline fb-a'><x-icons.facebook /><span id='fb-text'>Facebook</span></a>
            </li>
            <li class='my-3'>
                <a href="#" class='flex flex-row items-center gap-2 hover:underline insta-a'><x-icons.instagram /><span id='insta-text'>Instagram</span></a>
            </li>
            <li class='my-3'>
                <a href="#" class='flex flex-row items-center gap-3 hover:underline twitter-a'><x-icons.twitter /><span id='twitter-text'>Twitter</span></a>
            </li>
            <li class='my-3'>
                <a href="#" class='flex flex-row items-center gap-2 hover:underline yt-a'><x-icons.youtube /><span id='yt-a'>Youtube</span></a>
            </li>
            </ul>

            <img class="opacity-40 shadow" id='footer-img' src="{{ asset('/images/logos/pmc-logo-solo.png') }}" alt="" style="min-width: 380px; transform: translate(-50%,10%);" />

        </div>
    </div>
    <div class="bg-gray-900/70 text-gray-100 text-center py-4 text-sm">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</div>
</footer>