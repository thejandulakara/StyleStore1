@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-800">Explore Our Latest Products</h2>
        <p class="text-gray-600 mt-2">Hand-picked styles curated just for you.</p>
    </div>
</section>

<!-- Search and Filter -->
<section class="bg-white py-6">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4">
        <input type="text" placeholder="Search for products..." class="w-full md:w-1/2 px-4 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" />

        <select class="w-full md:w-1/4 px-4 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option>All Categories</option>
            <option>Men</option>
            <option>Women</option>
            <option>Kids</option>
        </select>
    </div>
</section>

<!-- Product Grid -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Product Card Example -->
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://via.placeholder.com/300x300?text=Product+{{ $i }}" alt="Product {{ $i }}" class="w-full h-64 object-cover">

                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Product Name {{ $i }}</h3>
                    <p class="text-sm text-gray-500 mt-1">Category: Men</p>

                    <div class="flex items-center justify-between mt-3">
                        <span class="text-indigo-600 font-bold text-lg">$49.99</span>
                        <button class="bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700 text-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
</section>
@endsection
