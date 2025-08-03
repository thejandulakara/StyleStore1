<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ladies Collection | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    
   <style>
    body {
        background: url('{{ asset('images/bg/ladies-bg2.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }
</style>
</head>
<body class="bg-pink-100 text-pink-700 font-sans">

    <!-- Header -->
    <header class="bg-pink shadow-md backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-600 animate-pulse">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6 text-pink-500">
                <a href="{{ route('home') }}" class="hover:text-pink-700">Home</a>
                <a href="{{ route('gents.index') }}" class="hover:text-pink-700">Gents</a>
                <a href="{{ route('ladies.index') }}" class="font-semibold text-2xl text-white">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="hover:text-pink-700">Accessories</a>
                <a href="{{ route('contact') }}" class="hover:text-pink-700">Contact</a>
                <span class="mx-2 text-gray-400">|</span>
                <a href="{{ route('login') }}"><i class="ri-user-line text-xl hover:text-pink-700"></i></a>
                <a href="{{ route('register') }}"><i class="ri-user-add-line text-xl hover:text-pink-700"></i></a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-10">
        <h1 class="text-4xl font-bold text-pink-600 animate-fade-in-down">Ladies Collection</h1>
        <p class="text-lg text-white mt-2 animate-fade-in-up">Elegant • Bold • Beautiful</p>
    </section>

    <!-- Sections -->
    @php
        $sections = ['T-Shirts', 'Blouses', 'Frocks', 'Denims'];
    @endphp

    @foreach ($sections as $section)
    <section class="py-8 px-4 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-pink-600 border-b border-pink-300 pb-2">{{ $section }}</h2>

        <div class="grid grid-cols-12 gap-4">

            {{-- Row 1: 4 normal cards --}}
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition-transform duration-300 animate-fade-in-up">
                    <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                    <div class="p-2 text-center">
                        <h3 class="font-semibold">Model {{ $i }}</h3>
                        <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                    </div>
                </div>
            @endfor

            {{-- Row 2: merge 1-2 and 3-4 --}}
            @php $i = 5; @endphp
            <div class="col-span-6  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-64 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>

            {{-- Row 3: normal, merged, normal --}}
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-6  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-64 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>

            {{-- Row 4: normal, merged (last 2) --}}
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-6  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-64 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
            @php $i++; @endphp
            <div class="col-span-3  rounded-lg shadow-md hover:scale-105 transition duration-300 animate-fade-in-up">
                <img src="{{ asset('images/ladies/' . strtolower(str_replace(' ', '_', $section)) . "/$i.jpg") }}" class="w-full h-48 object-cover rounded-t">
                <div class="p-2 text-center">
                    <h3 class="font-semibold">Model {{ $i }}</h3>
                    <p class="text-sm">LKR {{ 2900 + $i * 100 }}</p>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Footer -->
    <footer class="bg-white text-pink-600 mt-16 border-t border-pink-200">
        <div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2">Style Vision</h4>
                <p>Designed for modern elegance.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-pink-500">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-pink-500">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-pink-500">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-pink-500">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Contact</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2">
                    <i class="ri-facebook-fill text-xl hover:text-pink-500 cursor-pointer"></i>
                    <i class="ri-instagram-line text-xl hover:text-pink-500 cursor-pointer"></i>
                    <i class="ri-twitter-x-line text-xl hover:text-pink-500 cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-pink-400 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>
    

</body>
</html>
