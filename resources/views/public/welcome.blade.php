@extends('public.layout')

@section('title', 'Welcome')

@section('content')

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center text-white">
        <div class="absolute inset-0 bg-gray-800"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Welcome to MyApp</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">A starter template for your Laravel Breeze project with RBAC-ready structure.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#about" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition transform hover:scale-105">
                    <i class="fas fa-arrow-down mr-2"></i>Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>About
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">This template is built to kickstart your Laravel Breeze project with authentication and role-based access control already set up.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-star text-blue-600 mr-2"></i>Features
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-4"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">This starter includes user authentication, RBAC scaffolding, and a responsive layout ready for customization.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RBAC Ready</h3>
                    <p class="text-gray-600 mb-4">Roles and permissions already configured for easy access control management.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">User Authentication</h3>
                    <p class="text-gray-600 mb-4">Includes Breeze authentication scaffolding with login, registration, and password reset pages.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 text-center">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Customizable</h3>
                    <p class="text-gray-600 mb-4">Easily extendable to add new pages, components, and features according to your project needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-github text-2xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
            </div>
            <p>
                <i class="far fa-copyright mr-1"></i>{{ date('Y') }} MyApp. All rights reserved. Template built with Laravel Breeze and RBAC-ready structure.
            </p>
        </div>
    </footer>

    <!-- Smooth Scroll Script -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navHeight = 64;
                    const targetPosition = target.offsetTop - navHeight;
                    window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                }
            });
        });
    </script>
@endsection
