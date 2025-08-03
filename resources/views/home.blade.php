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
            background-image: url('{{ asset('images/bg/home-bg2.jpg') }}');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-black text-white font-sans">

    <!-- Header with Navigation -->
    <header class="bg-opacity-60 bg-black shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white ">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6 text-sm">

            
                <a href="{{ route('home') }}" class=" text-red-800 text-2xl font-bold hover:underline">Home</a>
                <a href="{{ route('gents.index') }}" class="text-white font-bold hover:text-indigo-400">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-white font-bold hover:text-pink-200">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-white font-bold hover:text-yellow-400">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-300 hover:text-red-400">Contact</a>

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
        
    <!-- Hero Section with Swiper -->
<section x-data="{
        slides: ['{{ asset('images/hero/1.jpg') }}', '{{ asset('images/hero/2.jpg') }}', '{{ asset('images/hero/3.jpg') }}'],
        active: 0,
        init() {
            setInterval(() => {
                this.active = (this.active + 1) % this.slides.length;
            }, 4000);
        }
    }"
    class="relative h-[32rem] overflow-hidden">

    <!-- Swiper Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="active === index"
             x-transition:enter="transition-opacity duration-1000"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="absolute inset-0 bg-cover bg-center"
             :style="'background-image: url(' + slide + ')';">
        </div>
    </template>

    <!-- Overlay Content -->
    <div class="absolute inset-0 bg-black bg-opacity-60 backdrop-md flex flex-col justify-center items-center text-center px-4 animate-fade-in-down">
        <h2 class="text-6xl font-extrabold text-white mb-4">Discover the Latest Fashions</h2>
        <p class="text-lg text-gray-300 mb-6">Explore stylish collections of gents wear, ladies wear, and accessories tailored for every fashion lover.</p>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="{{ route('gents.index') }}" class="bg-gray-800 bg-opacity-60 text-white px-6 py-3 rounded-full hover:bg-red-600 transition-transform transform hover:scale-105">Gents Collection</a>
            <a href="{{ route('ladies.index') }}" class=" bg-gray-800 bg-opacity-60 text-white px-6 py-3 rounded-full hover:bg-red-600 transition-transform transform hover:scale-105">Ladies Collection</a>
            <a href="{{ route('accessories.index') }}" class="bg-gray-800 bg-opacity-60 text-white px-6 py-3 rounded-full hover:bg-red-600 transition-transform transform hover:scale-105">Accessories</a>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section class="py-20 px-4 bg-black-800 bg-opacity-60 text-white">
        <h3 class="text-3xl font-bold text-center mb-12 animate-fade-in-up">Why Choose Style Vision?</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <div class="bg-black bg-opacity-70 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-shirt-fill text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">Trendy Designs</h4>
                <p class="text-gray-300">We offer the most fashionable and up-to-date styles that suit all ages and preferences.</p>
            </div>
            <div class="bg-red-800 bg-opacity-60 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-truck-line text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">Fast Delivery</h4>
                <p class="text-gray-300">Enjoy fast and reliable delivery across the country — right to your doorstep.</p>
            </div>
            <div class="bg-black  bg-opacity-70 p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
                <i class="ri-customer-service-2-line text-5xl text-indigo-400 mb-4 animate-bounce"></i>
                <h4 class="text-xl font-semibold mb-2">24/7 Support</h4>
                <p class="text-gray-300">Our support team is here for you anytime, helping with orders, returns, and questions.</p>
            </div>
        </div>
    </section>

    <!-- Extra Info Section -->
    <section class="bg-black bg-opacity-50 py-16 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <img src="D:\Last web project\StyleStore1\public\images\story.jpg" alt="Fashion display" class="rounded-lg shadow-lg animate-fade-in-left">
            <div class="text-white animate-fade-in-right">
                <h3 class="text-2xl font-bold mb-4">A Style For Every Story</h3>
                <p class="text-lg mb-4 text-gray-300">At Style Vision, fashion is more than clothing it's self-expression. Whether you're dressing for a celebration, a professional setting, or a casual day out, our collection is crafted to match your unique lifestyle. We blend elegance with comfort, trends with timelessness, and boldness with simplicity. Every piece is chosen to empower you, enhance your confidence, and tell your story without saying a word. From versatile basics to standout styles, we ensure there's something for everyone. Because your journey deserves a wardrobe that evolves with you.</p>
                <a href="{{ route('shop') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition-transform transform hover:scale-105">Shop Now</a>
            </div>
        </div>
    </section>

     <section class="bg-black bg-opacity-50 py-4 px-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <img src="D:\Last web project\StyleStore1\public\images\story.jpg" alt="Fashion display" class="rounded-lg shadow-lg animate-fade-in-left">
            <div class="text-white animate-fade-in-left">
                <h3 class="text-2xl font-bold mb-4">Vision of US</h3>
                <p class="text-lg mb-4 text-gray-300">At Style Vision, we envision a world where fashion empowers individuality and confidence. Our goal is to redefine how people experience clothing  not just as attire, but as a powerful form of self-expression. We aim to be a leading destination for modern, accessible, and inclusive fashion that resonates with every lifestyle and identity. Through carefully curated collections, exceptional quality, and a commitment to evolving trends, we strive to inspire creativity and authenticity in every wardrobe. Style Vision is more than a brand it’s a movement to help everyone look good, feel great, and express their true self..</p>
                <a href="{{ route('shop') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition-transform transform hover:scale-105">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 mt-16">
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
        <div class="text-center text-sm text-lime-500 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
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
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
