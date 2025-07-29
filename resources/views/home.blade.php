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
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header with Navigation (inline, no includes) -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Style Vision</h1>

            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-indigo-600 font-medium">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Contact</a>

                <span class="mx-2 text-gray-300">|</span>

                <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600" title="Login">
                    <i class="ri-user-line text-xl"></i>
                </a>
                <a href="{{ route('register') }}" class="text-gray-600 hover:text-indigo-600" title="Create Account">
                    <i class="ri-user-add-line text-xl"></i>
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-r from-indigo-100 to-purple-100">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-4xl font-extrabold mb-4">Discover the Latest Trends</h2>
            <p class="text-lg mb-6">Explore stylish collections of gents wear, ladies wear, and accessories tailored for every fashion lover.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('gents.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">Gents Collection</a>
                <a href="{{ route('ladies.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">Ladies Collection</a>
                <a href="{{ route('accessories.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">Accessories</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 max-w-7xl mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12">Why Choose Style Vision?</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="ri-shirt-fill text-5xl text-indigo-600 mb-4"></i>
                <h4 class="text-xl font-semibold mb-2">Trendy Designs</h4>
                <p>We offer the most fashionable and up-to-date styles that suit all ages and preferences.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="ri-truck-line text-5xl text-indigo-600 mb-4"></i>
                <h4 class="text-xl font-semibold mb-2">Fast Delivery</h4>
                <p>Enjoy fast and reliable delivery across the country — right to your doorstep.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="ri-customer-service-2-line text-5xl text-indigo-600 mb-4"></i>
                <h4 class="text-xl font-semibold mb-2">24/7 Support</h4>
                <p>Our support team is here for you anytime, helping with orders, returns, and questions.</p>
            </div>
        </div>
    </section>

    <!-- Extra Info Section -->
    <section class="bg-white py-12 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <img src="https://images.unsplash.com/photo-1533236897111-3e94666b2edf?auto=format&fit=crop&w=800&q=60" alt="Fashion display" class="rounded-lg shadow-lg">
            <div>
                <h3 class="text-2xl font-bold mb-4">A Style For Every Story</h3>
                <p class="text-lg mb-4">Whether you're dressing for an occasion or everyday elegance, our collection is curated to match your lifestyle. Experience fashion like never before.</p>
                <a href="{{ route('shop') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2">Style Vision</h4>
                <p>Your go-to destination for modern, affordable fashion that expresses you.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" class="hover:text-indigo-400">Home</a></li>
                    <li><a href="{{ route('gents.index') }}" class="hover:text-indigo-400">Gents</a></li>
                    <li><a href="{{ route('ladies.index') }}" class="hover:text-indigo-400">Ladies</a></li>
                    <li><a href="{{ route('accessories.index') }}" class="hover:text-indigo-400">Accessories</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Contact Us</h4>
                <p>Email: support@stylevision.com</p>
                <p>Phone: +94 123 456 789</p>
                <div class="flex space-x-4 mt-2">
                    <i class="ri-facebook-fill text-xl hover:text-indigo-400 cursor-pointer"></i>
                    <i class="ri-instagram-line text-xl hover:text-indigo-400 cursor-pointer"></i>
                    <i class="ri-twitter-x-line text-xl hover:text-indigo-400 cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-400 mt-4 pb-4">&copy; {{ now()->year }} Style Vision. All rights reserved.</div>
    </footer>

</body>
</html>
