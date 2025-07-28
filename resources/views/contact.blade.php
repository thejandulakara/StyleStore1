@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center bg-gradient-to-r from-purple-900 via-gray-900 to-black">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white animate__animated animate__fadeInDown">
            Get in Touch
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
            Have questions about our products or services? We'd love to hear from you!
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-6 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
            <a href="#contact-form" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                Contact Us
            </a>
            <a href="#store-locations" class="bg-gray-800 hover:bg-gray-700 text-white px-8 py-4 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                Find Our Store
            </a>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact-form" class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4 animate__animated animate__fadeIn">Send us a Message</h2>
                <div class="w-24 h-1 bg-purple-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-800 rounded-xl p-8 shadow-2xl animate__animated animate__fadeInLeft">
                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label class="block text-gray-300 mb-2">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white" required>
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white" required>
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Subject</label>
                            <input type="text" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white" required>
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-8 animate__animated animate__fadeInRight">
                    <div class="bg-gray-800 rounded-xl p-8 shadow-2xl transform hover:translate-y-2 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Our Location</h3>
                        </div>
                        <p class="text-gray-300">123 Fashion Avenue, Style District, New York, NY 10001</p>
                    </div>
                    
                    <div class="bg-gray-800 rounded-xl p-8 shadow-2xl transform hover:translate-y-2 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Call Us</h3>
                        </div>
                        <p class="text-gray-300">+1 (555) 123-4567</p>
                        <p class="text-gray-300">Mon-Fri: 9AM - 6PM</p>
                    </div>
                    
                    <div class="bg-gray-800 rounded-xl p-8 shadow-2xl transform hover:translate-y-2 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Email Us</h3>
                        </div>
                        <p class="text-gray-300">info@stylevision.com</p>
                        <p class="text-gray-300">support@stylevision.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Store Locations -->
<section id="store-locations" class="py-20 bg-gradient-to-r from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4 animate__animated animate__fadeIn">Our Store Locations</h2>
            <div class="w-24 h-1 bg-purple-600 mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Store 1 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-300 animate__animated animate__fadeInUp">
                <img src="https://picsum.photos/seed/store1/600/400.jpg" alt="Store Location" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">New York Flagship</h3>
                    <p class="text-gray-300 mb-4">123 Fashion Avenue, Style District, NY</p>
                    <p class="text-gray-300 mb-2"><i class="fas fa-clock mr-2"></i> 9AM - 9PM</p>
                    <p class="text-gray-300"><i class="fas fa-phone mr-2"></i> (212) 555-7890</p>
                </div>
            </div>
            
            <!-- Store 2 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <img src="https://picsum.photos/seed/store2/600/400.jpg" alt="Store Location" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Los Angeles Boutique</h3>
                    <p class="text-gray-300 mb-4">456 Sunset Blvd, Hollywood, CA</p>
                    <p class="text-gray-300 mb-2"><i class="fas fa-clock mr-2"></i> 10AM - 8PM</p>
                    <p class="text-gray-300"><i class="fas fa-phone mr-2"></i> (323) 555-4567</p>
                </div>
            </div>
            
            <!-- Store 3 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-300 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <img src="https://picsum.photos/seed/store3/600/400.jpg" alt="Store Location" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Chicago Showroom</h3>
                    <p class="text-gray-300 mb-4">789 Magnificent Mile, Chicago, IL</p>
                    <p class="text-gray-300 mb-2"><i class="fas fa-clock mr-2"></i> 9AM - 7PM</p>
                    <p class="text-gray-300"><i class="fas fa-phone mr-2"></i> (312) 555-1234</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-purple-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-6 animate__animated animate__fadeIn">Subscribe to Our Newsletter</h2>
        <p class="text-gray-300 mb-8 max-w-2xl mx-auto animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
            Stay updated with our latest collections, exclusive offers, and fashion trends.
        </p>
        <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
            <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-full bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 text-white">
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-full font-semibold transition duration-300 transform hover:scale-105">
                Subscribe
            </button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h2 class="text-2xl font-bold text-white">StyleVision</h2>
                <p class="text-gray-400 mt-2">Your destination for trendy fashion</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-purple-500 transition duration-300 transform hover:scale-110">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-purple-500 transition duration-300 transform hover:scale-110">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-purple-500 transition duration-300 transform hover:scale-110">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-purple-500 transition duration-300 transform hover:scale-110">
                    <i class="fab fa-pinterest text-xl"></i>
                </a>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2023 StyleVision. All rights reserved.</p>
        </div>
    </div>
</footer>
@endsection