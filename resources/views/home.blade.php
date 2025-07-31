<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Style Vision | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1618354691320-41fa192b84ec?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans">

    <!-- Header with Navigation -->
    <header class="bg-gray-800 bg-opacity-80 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-400 animate-pulse">Style Vision</h1>
            <img src="D:\Last web project\StyleStore1\resources\imges\Screenshot 2025-07-31 110130.png" alt="Style Vision Logo" class="h-10 ml-4 rounded-full shadow-md">
            <nav class="hidden md:flex items-center space-x-6 text-sm">

            
                <a href="{{ route('home') }}" class="text-indigo-400 font-medium hover:underline">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-300 hover:text-indigo-400">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-gray-300 hover:text-indigo-400">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-gray-300 hover:text-indigo-400">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-300 hover:text-indigo-400">Contact</a>

                <span class="mx-2 text-gray-500">|</span>

                <a href="{{ route('login') }}" class="text-gray-300 hover:text-indigo-400" title="Login">
                    <i class="ri-user-line text-xl"></i>
                </a>
                <a href="{{ route('register') }}" class="text-gray-300 hover:text-indigo-400" title="Create Account">
                    <i class="ri-user-add-line text-xl"></i>
                </a>

                
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-24 bg-black bg-opacity-50 backdrop-blur-md">
        <div class="max-w-3xl mx-auto px-4 animate-fade-in-down">
            <h2 class="text-5xl font-extrabold mb-4 text-white">Discover the Latest Trends</h2>
            <p class="text-lg mb-6 text-gray-300">Explore stylish collections of gents wear, ladies wear, and accessories tailored for every fashion lover.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('gents.index') }}" class="bg-indigo-500 text-white px-6 py-3 rounded-full hover:bg-indigo-600 transition-transform transform hover:scale-105">Gents Collection</a>
                <a href="{{ route('ladies.index') }}" class="bg-indigo-500 text-white px-6 py-3 rounded-full hover:bg-indigo-600 transition-transform transform hover:scale-105">Ladies Collection</a>
                <a href="{{ route('accessories.index') }}" class="bg-indigo-500 text-white px-6 py-3 rounded-full hover:bg-indigo-600 transition-transform transform hover:scale-105">Accessories</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 px-4 bg-gray-900 bg-opacity-80 text-white">
        <h3 class="text-3xl font-bold text-center mb-12 animate-fade-in-up">Why Choose Style Vision?</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-shirt-fill text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">Trendy Designs</h4>
                <p class="text-gray-300">We offer the most fashionable and up-to-date styles that suit all ages and preferences.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-truck-line text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">Fast Delivery</h4>
                <p class="text-gray-300">Enjoy fast and reliable delivery across the country — right to your doorstep.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-customer-service-2-line text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">24/7 Support</h4>
                <p class="text-gray-300">Our support team is here for you anytime, helping with orders, returns, and questions.</p>
            </div>
        </div>
    </section>

    <!-- Extra Info Section -->
    <section class="bg-black bg-opacity-50 py-16 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <img src="https://images.unsplash.com/photo-1533236897111-3e94666b2edf?auto=format&fit=crop&w=800&q=60" alt="Fashion display" class="rounded-lg shadow-lg animate-fade-in-left">
            <div class="text-white animate-fade-in-right">
                <h3 class="text-2xl font-bold mb-4">A Style For Every Story</h3>
                <p class="text-lg mb-4 text-gray-300">Whether you're dressing for an occasion or everyday elegance, our collection is curated to match your lifestyle. Experience fashion like never before.</p>
                <a href="{{ route('shop') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition-transform transform hover:scale-105">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2 text-white">Style Vision</h4>
                <p>Your go-to destination for modern, affordable fashion that expresses you.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2 text-white">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-indigo-400">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-indigo-400">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-indigo-400">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-indigo-400">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2 text-white">Contact Us</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2 text-white">
                    <i class="ri-facebook-fill text-xl hover:text-indigo-400 cursor-pointer"></i>
                    <i class="ri-instagram-line text-xl hover:text-indigo-400 cursor-pointer"></i>
                    <i class="ri-twitter-x-line text-xl hover:text-indigo-400 cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>

    <!-- Tailwind Animation Plugin (Optional) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-down': 'fadeInDown 1s ease-out',
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'fade-in-left': 'fadeInLeft 1s ease-out',
                        'fade-in-right': 'fadeInRight 1s ease-out'
                    },
                    keyframes: {
                        fadeInDown: {
                            '0%': { opacity: 0, transform: 'translateY(-20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        fadeInLeft: {
                            '0%': { opacity: 0, transform: 'translateX(-20px)' },
                            '100%': { opacity: 1, transform: 'translateX(0)' },
                        },
                        fadeInRight: {
                            '0%': { opacity: 0, transform: 'translateX(20px)' },
                            '100%': { opacity: 1, transform: 'translateX(0)' },
                        }
                    }
                }
            }
        }
    </script>

</body>
</html>
