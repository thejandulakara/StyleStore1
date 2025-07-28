@extends('layouts.app')

@section('content')
<section class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About Style Vision</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Style Vision is your trusted destination for modern fashion. We offer quality clothing that reflects individuality, comfort, and confidence.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <img src="{{ asset('images/about-fashion.jpg') }}" alt="Fashion Image" class="rounded-2xl shadow-lg w-full">

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-600 mb-4">
                    Our mission is to deliver stylish, affordable, and sustainable fashion. Whether you're dressing for work, events, or everyday wear — we’ve got you covered.
                </p>

                <h2 class="text-2xl font-semibold text-gray-800 mb-4 mt-6">Why Choose Us?</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>✔️ Wide variety of trendy collections</li>
                    <li>✔️ Affordable prices with high quality</li>
                    <li>✔️ Exceptional customer support</li>
                    <li>✔️ Fast and reliable delivery</li>
                </ul>
            </div>
        </div>

        <div class="mt-16 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Visit Our Store</h2>
            <p class="text-gray-600">Bandarawela, Sri Lanka | Open Daily: 9 AM – 7 PM</p>
            <p class="text-gray-600 mt-1">Contact us at <a href="mailto:info@stylevision.lk" class="text-blue-600 hover:underline">info@stylevision.lk</a></p>
        </div>
    </div>
</section>
@endsection
