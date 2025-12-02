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
                <div class="mb-6 p-4 bg-green-600 text-white rounded-xl text-center">
                    {{ session('success') }}
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
