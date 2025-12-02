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
        <form action="" class="bg-gray-700 py-18 px-8 rounded-3xl">
            <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="flex flex-col space-y-1">
                    <input type="text" placeholder="Name" class="input">
                    <!-- <span class="error-msg">Error message</span> -->
                </div>

                <div class="flex flex-col space-y-1">
                    <input type="tel" placeholder="Phone" class="input">
                    <!-- <span class="error-msg">Error message</span> -->
                </div>
            </div>

            <div class="my-8">
                <div>
                    <input type="email" placeholder="Email" class="input">
                    <!-- <span class="error-msg">Error message</span> -->
                </div>
            </div>

            <div class="mb-8">
                <div class="flex flex-col space-y-1">
                    <textarea class="textarea" rows="9" placeholder="Additional Information (optional)"></textarea>
                    <!-- <span class="error-msg">Error message</span> -->
                </div>
            </div>

            <div class="w-full flex items-center justify-center">
                <a href="#" class="btn btn-primary">Send Message</a>
            </div>
        </form>
    </div>
@endsection
