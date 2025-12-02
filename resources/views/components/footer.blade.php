<footer class="pt-0 xl:pt-24">
    <div class="layout-container bg-black rounded-tl-[48px] rounded-tr-[48px] pt-30 pb-5">

        <div class="px-8 flex justify-between flex-wrap space-y-15 lg:space-y-0 lg:flex-nowrap">

            <div class="w-full lg:max-w-[350px]">
                <a href="{{ route('home') }}" class="block border-b border-white pb-6">
                    <img src="{{ Vite::asset('resources/assets/logo-dark.svg') }}" alt="logo">
                </a>

                <p class="text-white body-md-1 pt-3">
                    Your trusted partner for personalized fitness and nutrition coaching.
                </p>
            </div>

            <div class="text-white">
                <h6 class="h6 mb-3">Pages</h6>

                <ul class="flex flex-col space-y-3">
                    <li class="footer-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="footer-item"><a href="{{ route('home') }}#about">About</a></li>
                    <li class="footer-item"><a href="{{ route('home') }}#services">Services</a></li>
                    <li class="footer-item"><a href="{{ route('home') }}#testimonials">Testimonials</a></li>
                    <li class="footer-item"><a href="{{ route('home') }}#faqs">FAQs</a></li>
                </ul>
            </div>

            <div class="w-full lg:max-w-[400px] flex flex-col space-y-6">
                <h5 class="h5 text-white">Let's get in touch</h5>
                <p class="body-md-1 text-white">Connect with us today to start your journey.</p>

                <a href="{{ route('contact') }}" class="btn btn-outline">Get In Touch</a>
            </div>

        </div>

        <div class="body-t border-white/20 text-center mt-12 mx-12">
            <p class="body-md-1 text-white pt-8">© 2025 FitClub. All rights reserved.</p>
        </div>

    </div>
</footer>
