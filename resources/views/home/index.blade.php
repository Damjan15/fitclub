@extends('layouts.app')

@section('title', 'Home | Fitclub Coaching')

@section('content')
    <!-- ====== HERO ====== -->
    <section class="py-18 lg:py-20">
        <div class="layout-container">
            <!-- Top Section -->
            <div class="w-full relative">
                <!-- Content -->
                <div class="text-center">
                    <h1 class="h1 mb-4">Your Fitness, Your <span class="bg-primary-200">Journey</span></h1>
                    <p class="body-lg-1 mb-8">
                        Personalized coaching to help you achieve your health and fitness goals with confidence.
                    </p>

                    <a href="{{ route('contact') }}" class="btn btn-primary">Connect Now</a>
                </div>

                <!-- Icons -->
                <div
                    class="w-12 h-12 bg-primary-200 border border-black rounded-md xl:flex items-center justify-center hidden xl:absolute bottom-[60px] left-[90px]">
                    <img src="{{ Vite::asset('resources/assets/icons/dumbbell-icon.svg') }}" alt="dumbbell-icon">
                </div>

                <div
                    class="w-12 h-12 bg-primary-300 border border-black rounded-md xl:flex items-center justify-center hidden xl:absolute top-0 right-[60px]">
                    <img src="{{ Vite::asset('resources/assets/icons/muscle-icon.svg') }}" alt="muscle-icon">
                </div>
            </div>

            <!-- Bottom Section -->
            <div
                class="w-full flex justify-center md:justify-evenly xl:justify-between items-center flex-wrap space-y-8 mt-20 xl:space-y-0">

                <img src="{{ Vite::asset('resources/assets/hero-image-1.png') }}" alt="hero-image-1">
                <img src="{{ Vite::asset('resources/assets/hero-image-2.png') }}" alt="hero-image-2">
                <img src="{{ Vite::asset('resources/assets/hero-image-3.png') }}" alt="hero-image-3">

            </div>
        </div>
    </section>

    <!-- ====== ABOUT ====== -->
    <section id="about" class="py-20">
        <div class="layout-container">
            <!-- Top -->
            <div class="flex flex-col items-center justify-center text-center space-y-4">
                <span class="section-subtitle">About</span>
                <h2 class="section-title">
                    We Are Passionate About Helping You Achieve Your Fitness Goals
                    Through Expert Coaching, Personalized Training, and Sustainable
                    health solutions.
                </h2>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12 mt-12 place-items-center">

                <!-- Card 1 -->
                <div class="w-full bg-primary-200 rounded-xl relative px-6 py-12">
                    <div class="flex flex-col space-y-4 relative z-10">
                        <div class="w-14 h-14 bg-black flex items-center justify-center rounded-full">
                            <img src="{{ Vite::asset('resources/assets/icons/vision-icon.svg') }}" alt="vision-icon">
                        </div>

                        <div>
                            <h3 class="text-black subtitle">Our Vision</h3>
                            <p class="body-md-1 text-black">
                                Building a world where fitness is a lifestyle, not a challenge.
                            </p>
                        </div>
                    </div>

                    <img src="{{ Vite::asset('resources/assets/about-pattern.svg') }}" alt="about-pattern"
                        class="absolute top-0 right-0 z-0">
                </div>

                <!-- Card 2 -->
                <div class="w-full bg-primary-200 rounded-xl relative px-6 py-12">
                    <div class="flex flex-col space-y-4 relative z-10">
                        <div class="w-14 h-14 bg-black flex items-center justify-center rounded-full">
                            <img src="{{ Vite::asset('resources/assets/icons/target-icon.svg') }}" alt="target-icon">
                        </div>

                        <div>
                            <h3 class="text-black subtitle">Our Mission</h3>
                            <p>
                                Helping you get stronger, healthier, and more confident every day.
                            </p>
                        </div>
                    </div>

                    <img src="{{ Vite::asset('resources/assets/about-pattern.svg') }}" alt="about-pattern"
                        class="absolute top-0 right-0 z-0">
                </div>

            </div>
        </div>
    </section>

    <!-- ====== SERVICES ====== -->
    <section id="services" class="py-20">
        <div class="layout-container bg-primary-300 pt-20 pb-15 rounded-2xl relative">
            <!-- Top -->
            <div class="flex flex-col items-center justify-center text-center space-y-4">
                <span class="section-subtitle">Services</span>
                <h2 class="section-title">We Are Passionate About Helping You Achieve Your Fitness Goals
                    Through Expert Coaching, Personalized Training, and Sustainable
                    health solutions.</h2>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 mt-13 lg:mt-24 mb-15 lg:mb-10 lg:px-8">
                <!-- Service Card 1 -->
                <div
                    class="bg-white flex flex-col items-center justify-center space-y-4 py-12 px-4 lg:px-0 w-full rounded-2xl border border-black">
                    <div class="w-14 h-14 bg-black flex items-center justify-center rounded-full">
                        <img src="{{ Vite::asset('resources/assets/icons/document.svg') }}" alt="document-icon">
                    </div>

                    <div class="max-w-[500px] text-center">
                        <h3 class="subtitle text-black mb-3">Personalized Workout Plans</h3>
                        <p class="body-md-1 text-gray-200">Tailored fitness routines designed to meet your specific
                            goals and lifestyle.</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="bg-white flex flex-col items-center justify-center space-y-4 py-12 px-4 lg:px-0 w-full rounded-2xl border border-black">
                    <div class="w-14 h-14 bg-black flex items-center justify-center rounded-full">
                        <img src="{{ Vite::asset('resources/assets/icons/dumbbell2-icon.svg') }}" alt="dumbbell-icon">
                    </div>

                    <div class="max-w-[500px] text-center">
                        <h3 class="subtitle text-black mb-3">One-on-One Coaching</h3>
                        <p class="body-md-1 text-gray-200">Dedicated support from certified trainer to keep you
                            motivated and on track.</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- ====== TESTIMONIALS ====== -->
    <section id="testimonials" class="py-20">
        <div class="layout-container bg-primary-200 rounded-2xl py-18 lg:py-25 relative">
            <!-- Top -->
            <div class="flex flex-col items-center justify-center text-center space-y-4">
                <span class="section-subtitle">Testimonials</span>
                <h2 class="section-title">What Our Clients Are Saying</h2>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 place-items-center py-8 lg:py-20 px-0 lg:px-8 gap-20">
                <!-- Testimonial Card 1 -->
                <div
                    class="bg-white w-full rounded-2xl flex flex-col items-center justify-center text-center p-8 space-y-3">
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[52px] h-[52px] mb-2">
                            <img src="{{ Vite::asset('resources/assets/testimonial-1.jpg') }}" alt="testimonial-avatar"
                                class="rounded-full">
                        </div>

                        <h3 class="body-lg-2 text-black">Ronald Adan</h3>
                        <p class="body-sm text-gray-200">Firefighter</p>
                    </div>

                    <div class="flex space-x-2 mb-6">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                    </div>

                    <p class="text-black body-md-1 max-w-[450px]">This personalized workout and meal plans have
                        completely transformed my
                        lifestyle.</p>
                </div>

                <!-- Testimonial Card 2 -->
                <div
                    class="bg-white w-full rounded-2xl flex flex-col items-center justify-center text-center p-8 space-y-3">
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[52px] h-[52px] mb-2">
                            <img src="{{ Vite::asset('resources/assets/testimonial-2.jpg') }}" alt="testimonial-avatar"
                                class="rounded-full">
                        </div>

                        <h3 class="body-lg-2 text-black">Helen Myers</h3>
                        <p class="body-sm text-gray-200">Doctor</p>
                    </div>

                    <div class="flex space-x-2 mb-6">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                        <img src="{{ Vite::asset('resources/assets/icons/star-icon.svg') }}" alt="star">
                    </div>

                    <p class="text-black body-md-1 max-w-[450px]">This personalized workout and meal plans have
                        completely transformed my
                        lifestyle.</p>
                </div>
            </div>

            <!-- Patterns -->
            <div>
                <img src="{{ Vite::asset('resources/assets/testimonials-pattern-1.svg') }}" alt="pattern"
                    class="hidden xl:block xl:absolute top-0 left-0">
                <img src="{{ Vite::asset('resources/assets/testimonials-pattern-2.svg') }}" alt="pattern"
                    class="hidden xl:block xl:absolute bottom-0 right-0">
            </div>
        </div>
    </section>

    <!-- ====== FAQs ====== -->
    <section id="faqs" class="py-10 lg:py-18">
        <div class="layout-container">
            <!-- Top -->
            <div class="flex flex-col items-center justify-center text-center space-y-4">
                <span class="section-subtitle">FAQs</span>
                <h2 class="section-title">Everything You Need to Know</h2>
            </div>

            <!-- Questions -->
            <div class="mt-12 flex flex-col space-y-6 w-full mx-auto" id="faq-container">
                <!-- Question 1 -->
                <div class="faq-item" data-faq-item>
                    <button class="faq-header" aria-expanded="false">
                        <h4 class="body-lg-2 text-black">1. How does the coaching program work?</h4>
                        <div class="faq-icon-wrapper">
                            <img src="{{ Vite::asset('resources/assets/icons/arrow-up-icon.svg') }}" alt="toggle-icon"
                                class="faq-icon">
                        </div>
                    </button>

                    <div class="faq-content">
                        <p class="body-md-1 text-gray-200 pt-4 border-t border-gray-500/20">Our coaching program is
                            built around your personal goals. After completing an onboarding questionnaire, you will
                            receive customized workout plan, nutrition guidance, and weekly check-ins. Your coach
                            monitors your progress and adjusts your plan as you improve.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-item" data-faq-item>
                    <button class="faq-header" aria-expanded="false">
                        <h4 class="body-lg-2 text-black">2. Do I need access to a gym?</h4>
                        <div class="faq-icon-wrapper">
                            <img src="{{ Vite::asset('resources/assets/icons/arrow-up-icon.svg') }}" alt="toggle-icon"
                                class="faq-icon">
                        </div>
                    </button>

                    <div class="faq-content">
                        <p class="body-md-1 text-gray-200 pt-4 border-t border-gray-500/20">Not at all. You can choose
                            between gym-based, home-based, or minimal-equipment training plans. Your coach will tailor
                            your program based on what equipment you have available and your preferred training
                            environment.</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item" data-faq-item>
                    <button class="faq-header" aria-expanded="false">
                        <h4 class="body-lg-2 text-black">3. How often will my plan be updated?</h4>
                        <div class="faq-icon-wrapper">
                            <img src="{{ Vite::asset('resources/assets/icons/arrow-up-icon.svg') }}" alt="toggle-icon"
                                class="faq-icon">
                        </div>
                    </button>

                    <div class="faq-content">
                        <p class="body-md-1 text-gray-200 pt-4 border-t border-gray-500/20">Your plan is adjusted
                            regularly based on your progress. Most users receive updates every week or two, depending on
                            their goals and how consistently they complete their workouts. Your coach will refine your
                            training and nutrition to make sure you are always moving in the right direction</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ====== CTA ====== -->
    <section class="py-20">
        <div class="layout-container">
            <div class="w-full relative bg-no-repeat bg-cover bg-center h-[500px] rounded-3xl px-6 xl:h-[550px]"
                style="background-image: url('{{ Vite::asset('resources/assets/cta-bg.jpg') }}">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/70 rounded-3xl"></div>

                <!-- Content -->
                <div
                    class="relative z-10 w-full xl:max-w-[900px] xl:mx-auto h-full flex flex-col items-center justify-center space-y-8 lg:space-y-12">
                    <div class="text-center">
                        <h2 class="h2 text-white pb-2">Elevate Your Life With Health & Fitness</h2>
                        <p class="body-lg-1 text-white">Transform your body and mind with a balanced approach to fitness
                            and nutrition.</p>
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-primary">Join Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Scroll to Top Component --}}
    @include('components.scroll-to-top')
@endsection
