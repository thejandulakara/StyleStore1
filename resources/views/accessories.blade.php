<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessories | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

   <style>
    body {
        background: url('{{ asset('images/bg/accessories-bg.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }
</style>
</head>
<body class="bg-white/90 text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-white-100 shadow-md backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white animate-pulse">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6 text-yellow-800">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <a href="{{ route('gents.index') }}" class="hover:text-white">Gents</a>
                <a href="{{ route('ladies.index') }}" class="hover:text-white">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="font-semibold text-2xl text-white">Accessories</a>
                <a href="{{ route('contact') }}" class="hover:text-white">Contact</a>
                <span class="mx-2 text-gray-400">|</span>
                <a href="{{ route('login') }}"><i class="ri-user-line text-xl hover:text-black"></i></a>
                <a href="{{ route('register') }}"><i class="ri-user-add-line text-xl hover:text-black"></i></a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-12">
        <h1 class="text-4xl font-bold text-yellow-800 animate-fade-in-down">Accessories Collection</h1>
        <p class="text-lg text-gray-600 mt-2 animate-fade-in-up">Complete your look with premium accessories</p>
    </section>

    <!-- Sections -->
    @php
        $sections = ['Watches', 'Belts', 'Sunglasses'];
    @endphp

    @foreach($sections as $section)
    <section class="py-10 px-4 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-200 border-b border-gray-300 pb-2">{{ $section }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 12; $i++)
                <div class="bg-white/80 backdrop-blur-md border border-gray-300 p-4 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 animate-fade-in-up">
                    <img src="{{ asset('images/accessories/' . strtolower($section) . '/' . $i . '.jpg') }}"
                         alt="{{ $section }} {{ $i }}"
                         class="rounded-md h-48 w-full object-cover mb-3">
                    <h3 class="text-gray-700 font-semibold text-sm">Model {{ $i }}</h3>
                    <p class="text-gray-600 text-sm">LKR {{ 2500 + $i * 120 }}</p>
                </div>
            @endfor
        </div>
    </section>
    @endforeach

    <!-- Footer -->
    <footer class="bg-white/80 text-gray-800 mt-16 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2">Style Vision</h4>
                <p>Accessories that elevate your look.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-black">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-black">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-black">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-black">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Contact</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2">
                    <i class="ri-facebook-fill text-xl hover:text-black cursor-pointer"></i>
                    <i class="ri-instagram-line text-xl hover:text-black cursor-pointer"></i>
                    <i class="ri-twitter-x-line text-xl hover:text-black cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>

    <!-- Tailwind Custom Animations -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'fade-in-down': 'fadeInDown 1s ease-out',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        fadeInDown: {
                            '0%': { opacity: 0, transform: 'translateY(-20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                    },
                },
            }
        }
    </script>

</body>
</html>
