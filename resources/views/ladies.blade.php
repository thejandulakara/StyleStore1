<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ladies Collection | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-600 hover:text-indigo-600">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-indigo-600 font-semibold">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-gray-600 hover:text-indigo-600">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600">Contact</a>
                <span class="mx-2 text-gray-300">|</span>
                <a href="{{ route('login') }}" title="Login"><i class="ri-user-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
                <a href="{{ route('register') }}" title="Create Account"><i class="ri-user-add-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
            </nav>
        </div>
    </header>

    <!-- Ladies Content -->
    <section class="py-16 px-6 max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center">Ladies Collection</h1>
        <p class="text-lg mb-8 text-center">Explore elegant, bold, and trending women's fashion at Style Vision.</p>
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <p>Our Ladies Collection will be available soon. Stay tuned!</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-semibold mb-2">Style Vision</h4>
                <p>Your destination for modern, affordable fashion.</p>
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
