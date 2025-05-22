<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProProfile - Professional Profile Management System</title>
    <meta name="description" content="Create professional profiles, manage multiple profiles, and get NFC-enabled business cards. Perfect for professionals and businesses.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @keyframes pulse-offer {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        .pulse-offer {
            animation: pulse-offer 1.5s ease-in-out infinite;
            display: inline-block;
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
        .hamburger {
            transition: all 0.3s ease-in-out;
        }
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-indigo-600">ProProfile</h1>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#features" class="text-gray-700 hover:text-indigo-600 px-3 py-2">Features</a>
                        <a href="#pricing" class="text-gray-700 hover:text-indigo-600 px-3 py-2">Pricing</a>
                        <a href="#nfc-cards" class="text-gray-700 hover:text-indigo-600 px-3 py-2">NFC Cards</a>
                        <a href="/account/register" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Get Started</a>
                    </div>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="hamburger inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-indigo-600 focus:outline-none" id="mobile-menu-button">
                        <span class="block w-6 h-0.5 bg-current mb-1.5 transition-all duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current mb-1.5 transition-all duration-300"></span>
                        <span class="block w-6 h-0.5 bg-current transition-all duration-300"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu fixed top-16 right-0 w-64 h-screen bg-white shadow-lg z-40 md:hidden" id="mobile-menu">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="#features" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md">Features</a>
            <a href="#pricing" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md">Pricing</a>
            <a href="#nfc-cards" class="block px-3 py-2 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md">NFC Cards</a>
            <a href="/account/register" class="block px-3 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Get Started</a>
        </div>
    </div>

    <!-- Add padding to account for fixed navbar -->
    <div class="pt-16">
        <!-- Hero Section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">Your Digital Identity,</span>
                                <span class="block text-indigo-600">Elevated</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Create professional profiles, manage multiple identities, and share your digital presence with NFC-enabled business cards.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="/account/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                        Start Free Trial
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#pricing" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                        View Pricing
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Professional profile showcase">
            </div>
        </div>

        <!-- NFC Business Cards Section -->
        <div id="nfc-cards" class="bg-gradient-to-r from-indigo-500 to-purple-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">NFC-Enabled Premium Business Cards</span>
                        <span class="block text-indigo-200 mt-2">Tap to Connect</span>
                    </h2>
                    <p class="mt-4 text-xl text-indigo-100">
                        Share your digital profile instantly with a simple tap. No apps needed.
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="text-center">
                            <i class="fas fa-bolt text-4xl text-white mb-4"></i>
                            <h3 class="text-lg font-semibold text-white">Instant Sharing</h3>
                            <p class="mt-2 text-indigo-100">Share your profile with a simple tap</p>
                        </div>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="text-center">
                            <i class="fas fa-mobile-alt text-4xl text-white mb-4"></i>
                            <h3 class="text-lg font-semibold text-white">No App Required</h3>
                            <p class="mt-2 text-indigo-100">Works with any NFC-enabled smartphone</p>
                        </div>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="text-center">
                            <i class="fas fa-paint-brush text-4xl text-white mb-4"></i>
                            <h3 class="text-lg font-semibold text-white">Premium Design</h3>
                            <p class="mt-2 text-indigo-100">High-quality, customizable cards</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <div class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        <i class="fas fa-tag mr-2"></i>
                        Get an NFC Business Card + 1 year subscription (Starter Plan) for Only KES 2,000!
                    </div>
                    <p class="mt-4 text-indigo-100">
                        <span class="pulse-offer">Limited time offer - Get 10% off your first order!</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        <span class="block">Powerful Features for Modern Professionals</span>
                        <span class="block text-indigo-600 mt-2">Everything You Need to Succeed</span>
                    </h2>
                    <p class="mt-4 text-xl text-gray-600">
                        Discover why thousands of professionals and businesses choose ProProfile
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Digital Identity Management -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-id-card text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Digital Identity Management</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Create and manage multiple professional profiles with custom branding, contact information, and social media links.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Custom domain support
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Professional themes
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    SEO optimization
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Business Tools -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-briefcase text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Business Tools</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Powerful tools to showcase your services, manage appointments, and grow your business.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Service catalog
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Business analytics
                                </li>
                                <li class="flex items-center text-gray-500">
                                    <i class="fas fa-check text-gray-500 mr-2"></i>
                                    Appointment scheduling (coming soon)
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Management -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-address-book text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Contact Management</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Easily manage and share your contact information with built-in NFC technology.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    NFC business cards
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    QR code generation
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Contact analytics
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social Media Integration -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-share-alt text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Social Media Integration</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Connect all your social media profiles in one place for maximum visibility.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Multi-platform support
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Social media analytics
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Content scheduling
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Analytics & Insights -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-chart-line text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Analytics & Insights</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Track your profile performance with detailed analytics and insights.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Visitor tracking
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Engagement metrics
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Conversion tracking
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Security & Privacy -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3">
                                    <i class="fas fa-shield-alt text-2xl text-indigo-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Security & Privacy</h3>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-600">Enterprise-grade security to protect your data and privacy.</p>
                            <ul class="mt-4 space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Two-factor authentication
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Data encryption
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Privacy controls
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature Highlights -->
                <div class="mt-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg shadow-lg overflow-hidden">
                    <div class="px-8 py-12">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20 mb-4">
                                    <i class="fas fa-mobile-alt text-2xl text-white"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-white">Mobile First</h3>
                                <p class="mt-2 text-indigo-100">Optimized for all devices</p>
                            </div>
                            <div class="text-center">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20 mb-4">
                                    <i class="fas fa-bolt text-2xl text-white"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-white">Lightning Fast</h3>
                                <p class="mt-2 text-indigo-100">Instant profile loading</p>
                            </div>
                            <div class="text-center">
                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20 mb-4">
                                    <i class="fas fa-globe text-2xl text-white"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-white">Global Reach</h3>
                                <p class="mt-2 text-indigo-100">Available worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div id="pricing" class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Simple, Transparent Pricing
                    </h2>
                    <p class="mt-4 text-xl text-gray-600">
                        Choose the perfect plan for your needs
                    </p>
                </div>

                <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:grid-cols-3">
                    <!-- Starter Plan -->
                    <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">Starter</h3>
                            <p class="mt-4 text-sm text-gray-500">Perfect for individuals</p>
                            <p class="mt-8">
                                <span class="text-4xl font-extrabold text-gray-900">KES 200</span>
                                <span class="text-base font-medium text-gray-500">/year</span>
                            </p>
                            <a href="/account/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                                Get Started
                            </a>
                        </div>
                        <div class="pt-6 pb-8 px-6">
                            <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                            <ul class="mt-6 space-y-4">
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">7 days free trial</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">1 Individual Profile</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">Custom URL</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-times text-red-500"></i>
                                    <span class="text-sm text-gray-500">Profile Visit Analytics</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-times text-red-500"></i>
                                    <span class="text-sm text-gray-500">Priority Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Professional Plan -->
                    <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">Professional</h3>
                            <p class="mt-4 text-sm text-gray-500">For professionals with business needs</p>
                            <p class="mt-8">
                                <span class="text-4xl font-extrabold text-gray-900">KES 500</span>
                                <span class="text-base font-medium text-gray-500">/year</span>
                            </p>
                            <a href="/account/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                                Get Started
                            </a>
                        </div>
                        <div class="pt-6 pb-8 px-6">
                            <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                            <ul class="mt-6 space-y-4">
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">7 days free trial</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">2 Individual Profiles</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">1 Business Profile</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">Profile Visit Analytics</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">Priority Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">Enterprise</h3>
                            <p class="mt-4 text-sm text-gray-500">For growing businesses</p>
                            <p class="mt-8">
                                <span class="text-4xl font-extrabold text-gray-900">KES 1,000</span>
                                <span class="text-base font-medium text-gray-500">/year</span>
                            </p>
                            <a href="/account/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                                Get Started
                            </a>
                        </div>
                        <div class="pt-6 pb-8 px-6">
                            <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                            <ul class="mt-6 space-y-4">
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">7 days free trial</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">5 Individual Profiles</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">2 Business Profiles</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">Profile Visit Analytics</span>
                                </li>
                                <li class="flex space-x-3">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-sm text-gray-500">24/7 Support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Custom Plan -->
                <div class="mt-12 text-center">
                    <div class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-indigo-50 hover:bg-indigo-100">
                        <i class="fas fa-star mr-2"></i>
                        Need a custom plan? Contact us for special pricing
                    </div>
                    <p class="mt-4 text-gray-600">We offer custom solutions for large organizations and special requirements</p>
                </div>
            </div>
        </div>

        <!-- Final CTA Section -->
        <div class="bg-indigo-700">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Ready to get started?</span>
                    <span class="block">Create your profile today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">
                    Join thousands of professionals who have already created their profiles.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="/account/register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        Get Started Free
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center px-5 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-indigo-600">
                        View Pricing
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        &copy; {{ date('Y') }} ProProfile. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Add JavaScript for mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            let isMenuOpen = false;

            mobileMenuButton.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;
                mobileMenuButton.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (isMenuOpen && !mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                    isMenuOpen = false;
                    mobileMenuButton.classList.remove('active');
                    mobileMenu.classList.remove('active');
                }
            });

            // Close menu when clicking a link
            const mobileMenuLinks = mobileMenu.getElementsByTagName('a');
            for (let link of mobileMenuLinks) {
                link.addEventListener('click', function() {
                    isMenuOpen = false;
                    mobileMenuButton.classList.remove('active');
                    mobileMenu.classList.remove('active');
                });
            }
        });
    </script>
</body>
</html> 