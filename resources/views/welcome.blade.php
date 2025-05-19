<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProProfile - Professional Profile Management System</title>
    <meta name="description" content="Create professional profiles, manage multiple profiles, and get NFC-enabled business cards. Perfect for professionals and businesses.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-indigo-600">ProProfile</h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#features" class="text-gray-700 hover:text-indigo-600 px-3 py-2">Features</a>
                        <a href="#pricing" class="text-gray-700 hover:text-indigo-600 px-3 py-2">Pricing</a>
                        <a href="#nfc-cards" class="text-gray-700 hover:text-indigo-600 px-3 py-2">NFC Cards</a>
                        <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
                                <a href="/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
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
                    Only KES 2,000 per pack
                </div>
                <p class="mt-4 text-indigo-100">Limited time offer - Get 20% off your first order!</p>
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
                        <a href="/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                            Get Started
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                        <ul class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <i class="fas fa-check text-green-500"></i>
                                <span class="text-sm text-gray-500">1 Individual Profile</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check text-green-500"></i>
                                <span class="text-sm text-gray-500">Custom URL</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check text-green-500"></i>
                                <span class="text-sm text-gray-500">Basic Analytics</span>
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
                        <a href="/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                            Get Started
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                        <ul class="mt-6 space-y-4">
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
                                <span class="text-sm text-gray-500">Advanced Analytics</span>
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
                        <a href="/register" class="mt-8 block w-full bg-indigo-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-indigo-700">
                            Get Started
                        </a>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h4 class="text-sm font-medium text-gray-900 tracking-wide">What's included</h4>
                        <ul class="mt-6 space-y-4">
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
                                <span class="text-sm text-gray-500">Premium Analytics</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check text-green-500"></i>
                                <span class="text-sm text-gray-500">24/7 Support</span>
                            </li>
                            <li class="flex space-x-3">
                                <i class="fas fa-check text-green-500"></i>
                                <span class="text-sm text-gray-500">Custom Branding</span>
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
                <a href="/register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
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
                    &copy; 2024 ProProfile. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html> 