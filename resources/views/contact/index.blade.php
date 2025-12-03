@extends('layouts.app')

@section('title', 'Contact | Fitclub Coaching')

@section('content')
    <!-- ====== CONTACT HEADING ====== -->
    <section class="layout-container py-12 text-center">
        <h1 class="h2 text-black">Contact With Customer Support</h1>
        <p>Reach out to us today and start your fitness journey with personalized
            support</p>
    </section>

    <!-- ====== CONTACT FORM ====== -->
    <div class="py-8 layout-container">
        <form action="{{ route('contact.store') }}" class="bg-gray-700 py-18 px-8 rounded-3xl" method="POST">
            @csrf

            {{-- Success Message --}}
            @if (session('success'))
                <div id="success-modal"
                    class="fixed inset-0 bg-black/80 flex items-center justify-center z-100 p-4 transition-opacity duration-300 opacity-100"
                    aria-modal="true" role="dialog">
                    <div class="bg-white p-8 md:p-12 rounded-2xl max-w-md w-full text-center shadow-2xl">
                        <div class="mb-6">
                            <!-- Checkmark Icon (SVG) -->
                            <svg class="w-16 h-16 text-primary-100 mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>

                        <h2 class="h3 text-black mb-3">{{ session('success') }}</h2>

                        <p class="body-md-1 text-gray-200 mb-6">
                            Your message has been submitted successfully. Our team will review your information and contact
                            you
                            within 24 hours to schedule your introductory call!
                        </p>

                        <a href="{{ route('home') }}" class="btn btn-primary w-full">
                            Got it!
                        </a>
                    </div>
                </div>
            @endif

            <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="flex flex-col space-y-1">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
                        class="input @error('name') error @enderror">

                    @error('name')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col space-y-1">
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone"
                        class="input @error('name') error @enderror">

                    @error('phone')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="my-8">
                <div>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                        class="input @error('email') error @enderror">

                    @error('email')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-8">
                <div class="flex flex-col space-y-1">
                    <textarea class="textarea" name="message" value="{{ old('message') }}" rows="9"
                        placeholder="Additional Information (optional)"></textarea>

                    @error('message')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full flex items-center justify-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>
    </div>

@endsection
