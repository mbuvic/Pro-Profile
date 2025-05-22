@extends('layouts.profile')

@section('content')
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header Section -->
    <div class="relative h-48 bg-gradient-to-r from-blue-500 to-indigo-600">
        <div class="absolute -bottom-16 left-8">
            <div class="h-32 w-32 rounded-full border-4 border-white overflow-hidden bg-white">
                @if($profile->photo)
                    <img src="{{ asset('storage/' . $profile->photo) }}" alt="{{ $profile->fullname }}" class="h-full w-full object-cover">
                @else
                    <div class="h-full w-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user text-4xl text-gray-400"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Profile Info -->
    <div class="pt-20 pb-8 px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">{{ $profile->fullname }}</h1>
                @if($profile->title)
                    <p class="mt-1 text-xl text-gray-600">{{ $profile->title }}</p>
                @endif
            </div>
            @if($profile->company)
                <div class="mt-2 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                        <i class="fas fa-building mr-2"></i>
                        {{ $profile->company }}
                    </span>
                </div>
            @endif
        </div>

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

        <!-- Business Hours -->
        @if($profile->business_hours)
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Business Hours</h3>
                <p class="text-gray-600">{{ $profile->business_hours }}</p>
            </div>
        @endif
    </div>
</div>

<!-- Marketing CTA Section -->
<div class="mt-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow-lg overflow-hidden">
    <div class="px-8 py-12 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Create Your Professional Profile</h2>
        <p class="text-xl text-indigo-100 mb-8">Join professionals worldwide who are showcasing their expertise and building their personal brand.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-user-tie text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Professional Branding</h3>
                <p class="text-indigo-100">Create a professional online presence that stands out.</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-network-wired text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Network Growth</h3>
                <p class="text-indigo-100">Connect with peers and potential opportunities.</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                <i class="fas fa-bullhorn text-4xl text-white mb-4"></i>
                <h3 class="text-lg font-semibold text-white mb-2">Showcase Skills</h3>
                <p class="text-indigo-100">Highlight your expertise and achievements.</p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/account/register" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 transition-colors duration-200">
                <i class="fas fa-user-plus mr-2"></i>
                Create Your Profile
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
        Ready to build your professional online presence? Create your profile today and get a custom URL like <span class="font-semibold">domain.test/i/yourname</span>. Perfect for professionals, freelancers, and creatives looking to showcase their work and connect with opportunities.
    </p>
</div>
@endsection 