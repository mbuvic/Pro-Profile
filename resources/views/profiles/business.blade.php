@extends('layouts.profile')

@section('content')
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header Section -->
    <div class="relative h-48 bg-gradient-to-r from-indigo-500 to-purple-600">
        <div class="absolute -bottom-16 left-8">
            <div class="h-32 w-32 rounded-full border-4 border-white overflow-hidden bg-white">
                @if($profile->logo)
                    <img src="{{ asset('storage/' . $profile->logo) }}" alt="{{ $profile->business_name }}" class="h-full w-full object-cover">
                @else
                    <div class="h-full w-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-building text-4xl text-gray-400"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Profile Info -->
    <div class="pt-20 pb-8 px-8">
        <h1 class="text-3xl font-bold text-gray-900">{{ $profile->business_name }}</h1>
        @if($profile->about)
            <p class="mt-4 text-gray-600">{{ $profile->about }}</p>
        @endif

        <!-- Location -->
        @if($profile->location)
            <div class="mt-4 flex items-center text-gray-600">
                <i class="fas fa-map-marker-alt mr-2"></i>
                <span>{{ $profile->location }}</span>
            </div>
        @endif

        <!-- Contact Information -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Websites -->
            @if($profile->websites)
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-gray-900">Websites</h3>
                    @foreach($profile->websites as $website)
                        <a href="{{ $website['url'] }}" target="_blank" class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-globe mr-2"></i>
                            <span>{{ $website['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- Contact Numbers -->
            @if($profile->contacts)
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                    @foreach($profile->contacts as $contact)
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2"></i>
                            <span>{{ $contact['phone'] }} ({{ $contact['type'] }})</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Email Addresses -->
            @if($profile->emails)
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                    @foreach($profile->emails as $email)
                        <a href="mailto:{{ $email['email'] }}" class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ $email['email'] }} ({{ $email['type'] }})</span>
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- Social Links -->
            @if($profile->social_links)
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-gray-900">Social Media</h3>
                    @foreach($profile->social_links as $social)
                        <a href="{{ $social['url'] }}" target="_blank" class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fab fa-{{ strtolower($social['platform']) }} mr-2"></i>
                            <span>{{ $social['platform'] }}</span>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Services -->
        @if($profile->services)
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Services</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($profile->services as $service)
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h4 class="font-medium text-gray-900">{{ $service['name'] }}</h4>
                            <p class="mt-2 text-gray-600">{{ $service['description'] }}</p>
                            @if(isset($service['price']))
                                <p class="mt-2 text-indigo-600 font-medium">${{ $service['price'] }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Marketing CTA Section -->
<div class="mt-8 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg shadow-lg overflow-hidden">
    <div class="px-8 py-12 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Create Your Business Profile Today</h2>
        <p class="text-xl text-indigo-100 mb-8">Join thousands of businesses who are showcasing their services and connecting with customers.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-chart-line text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Boost Visibility</h3>
                <p class="text-indigo-100">Get discovered by potential customers searching for your services.</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-mobile-alt text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Mobile Ready</h3>
                <p class="text-indigo-100">Your profile looks great on any device, from phones to desktops.</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-share-alt text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Easy Sharing</h3>
                <p class="text-indigo-100">Share your profile with anyone using your unique URL.</p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/register" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 transition-colors duration-200">
                <i class="fas fa-building mr-2"></i>
                Create Business Profile
            </a>
            <a href="/" class="inline-flex items-center justify-center px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-indigo-600 transition-colors duration-200">
                <i class="fas fa-info-circle mr-2"></i>
                Learn More
            </a>
        </div>
    </div>
</div>

<!-- SEO Content -->
<div class="mt-8 text-center text-gray-600">
    <p class="text-sm">
        Looking for professional business profile solutions? Create your business profile today and get a custom URL like <span class="font-semibold">domain.test/b/yourbusiness</span>. Perfect for small businesses, freelancers, and service providers.
    </p>
</div>
@endsection 