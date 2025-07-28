<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Style Vision</title>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 font-sans">

  <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row">
    
    <!-- Sign In Form -->
    <div class="w-full md:w-1/2 p-10">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Sign In</h2>

      <form action="dashboard.html?" class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" placeholder="Username" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" placeholder="Password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <input type="submit" value="Login" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 cursor-pointer"/>

        <p class="text-center text-gray-500 text-sm">Or sign in with</p>

        <div class="flex justify-center space-x-4">
          <a href="#" class="text-purple-600 hover:text-purple-800 text-xl">LinkedIn</a>
          <a href="#" class="text-pink-500 hover:text-pink-700 text-xl">Instagram</a>
          <a href="#" class="text-gray-800 hover:text-black text-xl">GitHub</a>
          <a href="#" class="text-blue-600 hover:text-blue-800 text-xl">Facebook</a>
        </div>
      </form>
    </div>

    <!-- Sign Up Form -->
    <div class="w-full md:w-1/2 bg-gray-100 p-10">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Sign Up</h2>

      <form action="dashboard.html" class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" placeholder="Username" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" placeholder="Email" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" placeholder="Password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <input type="submit" value="Sign Up" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 cursor-pointer"/>

        <p class="text-center text-gray-500 text-sm">Or sign up with</p>

        <div class="flex justify-center space-x-4">
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
