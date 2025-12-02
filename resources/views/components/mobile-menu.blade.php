<div id="mobile-menu"
    class="fixed inset-0 z-50 bg-white transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-2xl">

    <div class="layout-container h-full flex flex-col pt-6">

        <div class="flex justify-between items-center py-6">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/assets/logo-light.svg') }}" alt="logo">
            </a>

            <button id="mobile-menu-close" class="bg-black p-3 rounded-xl">
                <img src="{{ Vite::asset('resources/assets/icons/close-icon.svg') }}" alt="close">
            </button>
        </div>

        <div class="flex flex-col space-y-8 mt-8 grow">
            <a href="{{ route('home') }}" class="h4 mobile-item">Home</a>
            <a href="{{ route('home') }}#about" class="h4 mobile-item">About</a>
            <a href="{{ route('home') }}#services" class="h4 mobile-item">Services</a>
            <a href="{{ route('home') }}#testimonials" class="h4 mobile-item">Testimonials</a>
            <a href="{{ route('home') }}#faqs" class="h4 mobile-item">FAQs</a>

            <div class="mt-auto pb-12">
                <a href="{{ route('contact') }}" class="btn btn-primary w-full block text-center">Get In Touch</a>
            </div>
        </div>

    </div>
</div>
