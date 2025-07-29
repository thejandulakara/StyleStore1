<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessories | Style Vision</title>
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
                <a href="{{ route('ladies.index') }}" class="text-gray-600 hover:text-indigo-600">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-indigo-600 font-semibold">Accessories</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600">Contact</a>
                <span class="mx-2 text-gray-300">|</span>
                <a href="{{ route('login') }}" title="Login"><i class="ri-user-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
                <a href="{{ route('register') }}" title="Create Account"><i class="ri-user-add-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
            </nav>
        </div>
    </header>

    <!-- Accessories Content -->
    <section class="py-16 px-6 max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center">Accessories</h1>
        <p class="text-lg mb-8 text-center">Find the perfect accessories to elevate your outfit.</p>
        <div class="bg-white p-6 rounded-lg shadow text-center">
            <p>Accessories collection will be available soon!</p>
        </div>
    </section>

    <!-- Footer -->
    <!-- Same as before -->
    <!-- [Copy footer from previous page] -->
</body>
</html>
