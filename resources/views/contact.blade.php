<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Style Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

     <style>
        body {
            background-image: url('{{ asset('images/bg/home-bg.jpg') }}');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-black">Style Vision</h1>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="{{ route('gents.index') }}" class="text-gray-600 hover:text-indigo-600">Gents</a>
                <a href="{{ route('ladies.index') }}" class="text-gray-600 hover:text-indigo-600">Ladies</a>
                <a href="{{ route('accessories.index') }}" class="text-gray-600 hover:text-indigo-600">Accessories</a>
                <a href="{{ route('contact') }}" class="text-indigo-600 text-2xl font-semibold">Contact</a>
                <span class="mx-2 text-gray-300">|</span>
                <a href="{{ route('login') }}" title="Login"><i class="ri-user-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
                <a href="{{ route('register') }}" title="Create Account"><i class="ri-user-add-line text-xl text-gray-600 hover:text-indigo-600"></i></a>
            </nav>
        </div>
    </header>

    <!-- Contact Content -->
    <section class="py-16 px-6 max-w-xl mx-auto">
        <h1 class="text-4xl text-white font-bold mb-6 text-center">Contact Us</h1>
        <p class="text-lg  text-gray-300 mb-6 text-center">Have a question? We'd love to hear from you.</p>

        <form class="bg-white bg-opacity-50 py-16 px-4 p-6 rounded-lg shadow space-y-4">
            <input type="text" placeholder="Your Name" class="w-full border  p-2 rounded bg-black bg-opacity-30 font-bold" required>
            <input type="email" placeholder="Your Email" class="w-full border p-2 rounded bg-black bg-opacity-30 font-bold" required>
            <textarea placeholder="Your Message" class="w-full border p-2 rounded h-32 bg-black bg-opacity-30 font-bold" required></textarea>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <!-- [Copy footer from previous page] -->
</body>
</html>
