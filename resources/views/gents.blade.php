<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gents Collection | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    
   <style>
    body {
        background: url('{{ asset('images/bg/gents-bg3.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }
</style>
</head>
<body class="text-lime-400">

    <!-- Header -->
    <header class="bg-black  bg-opacity-40 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-lime-400 animate-pulse">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6 text-lime-300">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <a href="{{ route('gents.index') }}" class="font-semibold text-2xl text-white">Gents</a>
                <a href="{{ route('ladies.index') }}" class="hover:text-white">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="hover:text-white">Accessories</a>
                <a href="{{ route('contact') }}" class="hover:text-white">Contact</a>
                <span class="mx-2 text-gray-500">|</span>
                <a href="{{ route('login') }}"><i class="ri-user-line text-xl hover:text-white"></i></a>
                <a href="{{ route('register') }}"><i class="ri-user-add-line text-xl hover:text-white"></i></a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-12">
        <h1 class="text-4xl font-bold text-lime-400 animate-fade-in-down">Gents Collection</h1>
        <p class="text-lg text-lime-300 mt-2 animate-fade-in-up">Style your way with top trends in menswear</p>
    </section>

    <!-- Product Sections -->
    @php
        $sections = ['T-Shirts', 'Shirts', 'Office Collection', 'Trousers', 'Denims', 'Shorts'];
    @endphp

    @foreach($sections as $section)
        <section class="py-10 px-6 max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-lime-400 border-b border-white pb-2 animate-fade-in-left">{{ $section }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="bg p-4 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-lime-400 transition duration-300 animate-fade-in-up">
                        <img src="{{ asset('images/gents/' . strtolower(str_replace(' ', '_', $section)) . '/' . $i . '.jpg') }}" alt="{{ $section }} {{ $i }}" class="rounded-md h-48 w-full object-cover mb-4">
                        <h3 class="text-lime-300 font-semibold text-sm">Model {{ $i }}</h3>
                        <p class="text-lime-500">LKR {{ 2500 + $i * 100 }}</p>
                    </div>
                @endfor
            </div>
        </section>
    @endforeach

    <!-- Footer -->
    <footer class="bg-gray-300 text-black mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2">Style Vision</h4>
                <p>Where gentlemen's fashion begins.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-white">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-white">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-white">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Contact Us</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2">
                    <i class="ri-facebook-fill hover:text-white text-xl"></i>
                    <i class="ri-instagram-line hover:text-white text-xl"></i>
                    <i class="ri-twitter-x-line hover:text-white text-xl"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-lime-500 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>

    <!-- Tailwind Animations -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lime: tailwind.colors.lime
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'fade-in-down': 'fadeInDown 1s ease-out',
                        'fade-in-left': 'fadeInLeft 1s ease-out'
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' }
                        },
                        fadeInDown: {
                            '0%': { opacity: 0, transform: 'translateY(-20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: 0, transform: 'translateX(-20px)' },
                            '100%': { opacity: 1, transform: 'translateX(0)' }
                        }
                    }
                }
            }
        }
    </script>
</body>
</html>
