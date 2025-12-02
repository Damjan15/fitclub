<header class="bg-white">
    <div class="layout-container">
        <!-- Desktop & Mobile Header Structure -->
        <nav class="flex justify-between items-center py-6 lg:py-8">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/assets/logo-light.svg') }}" alt="logo">
            </a>

            <!-- Desktop Navigation Links -->
            <ul class="hidden lg:flex lg:space-x-12 items-center">
                <li>
                    <a href="{{ route('home') }}" class="nav-item text-gray-200 hover:text-primary-100">Home</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#about" class="nav-item text-gray-200 hover:text-primary-100">About</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#services"
                        class="nav-item text-gray-200 hover:text-primary-100">Services</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#testimonials"
                        class="nav-item text-gray-200 hover:text-primary-100">Testimonials</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#faqs" class="nav-item text-gray-200 hover:text-primary-100">FAQs</a>
                </li>
            </ul>

            <!-- Contact Button (Desktop) -->
            <div class="hidden lg:block">
                <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch</a>
            </div>

            <!-- Hamburger Menu Icon (Mobile) -->
            <div class="lg:hidden">
                <button id="mobile-menu-button"
                    class="bg-primary-100 p-3 rounded-md transition-colors hover:bg-primary-100/90">
                    <img src="{{ Vite::asset('resources/assets/icons/menu-icon.svg') }}" class="w-full h-full"
                        alt="menu">
                </button>
            </div>
        </nav>
    </div>
</header>
