<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessories | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 scroll-smooth">

    <!-- Header -->
    <header class="bg-white shadow-md animate-fade-in-down duration-700">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600 transition-transform hover:scale-105">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600 transition duration-300">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-600 hover:text-indigo-600 transition duration-300">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-gray-600 hover:text-indigo-600 transition duration-300">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-indigo-600 font-semibold underline underline-offset-4">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600 transition duration-300">Contact</a>
                <span class="mx-2 text-gray-300">|</span>
                <a href="{{ route('login') }}" title="Login">
                    <i class="ri-user-line text-xl text-gray-600 hover:text-indigo-600 transition duration-300 hover:scale-110"></i>
                </a>
                <a href="{{ route('register') }}" title="Create Account">
                    <i class="ri-user-add-line text-xl text-gray-600 hover:text-indigo-600 transition duration-300 hover:scale-110"></i>
                </a>
            </nav>
        </div>
    </header>

    <!-- Accessories Content -->
    <section class="py-16 px-6 max-w-7xl mx-auto animate-fade-in-up duration-1000">
        <h1 class="text-4xl font-bold mb-6 text-center animate-pulse text-indigo-700">Accessories</h1>
        <p class="text-lg mb-8 text-center text-gray-600 animate-fade-in delay-100">Find the perfect accessories to elevate your outfit. Discover trending fashion items now!</p>

        <!-- Featured Products -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
                <img src="https://source.unsplash.com/300x200/?watch" class="w-full rounded-md mb-4" alt="Watch">
                <h3 class="text-xl font-semibold mb-2">Elegant Watch</h3>
                <p class="text-gray-600">Timeless designs that blend style and utility.</p>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
                <img src="https://source.unsplash.com/300x200/?handbag" class="w-full rounded-md mb-4" alt="Handbag">
                <h3 class="text-xl font-semibold mb-2">Luxury Handbag</h3>
                <p class="text-gray-600">Perfect companion for your classy outfit.</p>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
                <img src="https://source.unsplash.com/300x200/?sunglasses" class="w-full rounded-md mb-4" alt="Sunglasses">
                <h3 class="text-xl font-semibold mb-2">Stylish Sunglasses</h3>
                <p class="text-gray-600">Protect your eyes while making a statement.</p>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="bg-indigo-50 rounded-lg p-8 mb-12">
            <h2 class="text-2xl font-bold mb-4 text-indigo-700">Why Choose Our Accessories?</h2>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
                <li>Premium quality materials</li>
                <li>Exclusive designs curated by experts</li>
                <li>Affordable pricing with seasonal discounts</li>
                <li>Fast delivery across Sri Lanka</li>
                <li>24/7 support and easy returns</li>
            </ul>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <a href="{{ route('shop') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">
                Explore Full Collection
            </a>
        </div>
    </section>

    <!-- Tailwind Custom Animations -->
    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-down {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 1s ease-out forwards;
        }
        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }
        .animate-fade-in-down {
            animation: fade-in-down 1s ease-out forwards;
        }
    </style>

</body>
</html>
