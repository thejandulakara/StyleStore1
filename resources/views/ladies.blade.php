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
            background-image: url("D:\Last web project\StyleStore1\public\images\Screenshot 2025-07-31 110130.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-pink-100 text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-pink-200 bg-opacity-90 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-500 animate-pulse">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-pink-500">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-600 hover:text-pink-500">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-pink-500 font-semibold underline">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-gray-600 hover:text-pink-500">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-pink-500">Contact</a>
                <span class="mx-2 text-gray-300">|</span>
                <a href="{{ route('login') }}"><i class="ri-user-line text-xl text-gray-600 hover:text-pink-500"></i></a>
                <a href="{{ route('register') }}"><i class="ri-user-add-line text-xl text-gray-600 hover:text-pink-500"></i></a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-16 backdrop-blur-sm bg-white/70">
        <h1 class="text-4xl font-bold mb-4 text-pink-600 animate-fade-in-down">Ladies Collection</h1>
        <p class="text-lg text-gray-700 mb-6">Elegant • Bold • Trending — Your wardrobe upgrade awaits.</p>
    </section>

    <!-- Collection Grid -->
    <section class="py-12 max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-pink-600 mb-12 animate-fade-in-up">Explore Categories</h2>

        <!-- Categories -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Blouses -->
            <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-4 hover:scale-105 transition-transform duration-300 text-center animate-fade-in-up">
                <img src="https://via.placeholder.com/300x300?text=Blouse" class="rounded-lg mb-4" alt="Blouse">
                <h3 class="text-lg font-semibold text-pink-500">Chiffon Blouse</h3>
                <p class="text-gray-700">LKR 3,200</p>
            </div>

            <!-- T-Shirts -->
            <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-4 hover:scale-105 transition-transform duration-300 text-center animate-fade-in-up delay-100">
                <img src="https://via.placeholder.com/300x300?text=T-Shirt" class="rounded-lg mb-4" alt="T-shirt">
                <h3 class="text-lg font-semibold text-pink-500">Graphic Tee</h3>
                <p class="text-gray-700">LKR 2,400</p>
            </div>

            <!-- Jeans -->
            <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-4 hover:scale-105 transition-transform duration-300 text-center animate-fade-in-up delay-200">
                <img src="https://via.placeholder.com/300x300?text=Jeans" class="rounded-lg mb-4" alt="Jeans">
                <h3 class="text-lg font-semibold text-pink-500">High Waist Jeans</h3>
                <p class="text-gray-700">LKR 4,950</p>
            </div>

            <!-- Sarees -->
            <div class="bg-white bg-opacity-90 rounded-xl shadow-lg p-4 hover:scale-105 transition-transform duration-300 text-center animate-fade-in-up delay-300">
                <img src="https://via.placeholder.com/300x300?text=Saree" class="rounded-lg mb-4" alt="Saree">
                <h3 class="text-lg font-semibold text-pink-500">Silk Saree</h3>
                <p class="text-gray-700">LKR 6,800</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-pink-200 bg-opacity-80 text-gray-700 mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2 text-pink-600">Style Vision</h4>
                <p>Your destination for modern, affordable fashion.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2 text-pink-600">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-pink-500">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-pink-500">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-pink-500">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-pink-500">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2 text-pink-600">Contact Us</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2">
                    <i class="ri-facebook-fill text-xl hover:text-pink-500 cursor-pointer"></i>
                    <i class="ri-instagram-line text-xl hover:text-pink-500 cursor-pointer"></i>
                    <i class="ri-twitter-x-line text-xl hover:text-pink-500 cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>

    <!-- Tailwind Animations Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-down': 'fadeInDown 1s ease-out',
                        'fade-in-up': 'fadeInUp 1s ease-out'
                    },
                    keyframes: {
                        fadeInDown: {
                            '0%': { opacity: 0, transform: 'translateY(-20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

</body>
</html>
