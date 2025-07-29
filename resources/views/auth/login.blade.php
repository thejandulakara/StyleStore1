<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Style Vision - Login</title>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- Header with Navigation -->
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Style Vision</h1>

      <nav class="hidden md:flex items-center space-x-6">
        <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Home</a>
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

  <!-- Login Form Section -->
  <div class="min-h-[calc(100vh-80px)] flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 px-4 py-10">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden p-10">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login to Style Vision</h2>

      @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" required autofocus
                 class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
          @error('email')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" required
                 class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
          @error('password')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex items-center justify-between">
          <label class="inline-flex items-center">
            <input type="checkbox" name="remember" class="form-checkbox text-indigo-600">
            <span class="ml-2 text-sm text-gray-700">Remember me</span>
          </label>
          <a href="{{ route('password.request') }}" class="text-sm text-purple-600 hover:underline">Forgot Password?</a>
        </div>

        <input type="submit" value="Login" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 cursor-pointer"/>

        <p class="text-center text-gray-500 text-sm mt-4">Or login with</p>
        <div class="flex justify-center space-x-4 mt-2">
          <a href="#" class="text-purple-600 hover:text-purple-800 text-xl">LinkedIn</a>
          <a href="#" class="text-pink-500 hover:text-pink-700 text-xl">Instagram</a>
          <a href="#" class="text-gray-800 hover:text-black text-xl">GitHub</a>
          <a href="#" class="text-blue-600 hover:text-blue-800 text-xl">Facebook</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
