<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Style Vision | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 relative">
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="absolute top-4 right-4">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 text-sm">
                Logout
            </button>
        </form>

        <h1 class="text-3xl font-bold text-indigo-600 mb-4">Welcome, {{ auth()->user()->name }}</h1>

        <!-- Show common user info -->
        <p class="text-gray-700 mb-4">You are logged in as: 
            <span class="font-semibold">{{ auth()->user()->getRoleNames()->first() }}</span>
        </p>

        <!-- Role-based content -->
        @if(auth()->user()->hasRole('admin'))
            <div class="bg-indigo-100 p-4 rounded mb-4">
                <h2 class="text-xl font-semibold mb-2">Admin Panel</h2>
                <ul class="list-disc pl-6">
                    <li>View all users</li>
                    <li>Manage roles</li>
                    <li>Access reports and analytics</li>
                </ul>
            </div>
        @elseif(auth()->user()->hasRole('user'))
            <div class="bg-purple-100 p-4 rounded mb-4">
                <h2 class="text-xl font-semibold mb-2">User Dashboard</h2>
                <ul class="list-disc pl-6">
                    <li>Browse products</li>
                    <li>View your orders</li>
                    <li>Update your profile</li>
                </ul>
            </div>
        @else
            <div class="bg-yellow-100 p-4 rounded">
                <p>Welcome! Your role doesn’t have custom dashboard content yet.</p>
            </div>
        @endif

        <a href="{{ route('home') }}" class="inline-block mt-6 text-indigo-600 hover:underline">← Back to Home</a>
    </div>

</body>
</html>
