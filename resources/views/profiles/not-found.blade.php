<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Not Found - ProProfile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full text-center">
            <div class="mb-8">
                <i class="fas fa-search text-6xl text-indigo-600"></i>
            </div>
            
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
                Profile Not Found
            </h1>
            
            <p class="mt-4 text-xl text-gray-600">
                The {{ $type }} profile "{{ $username }}" doesn't exist yet.
            </p>

            <div class="mt-8 space-y-4">
                <p class="text-lg text-gray-600">
                    Be the first to claim this username and create your professional profile!
                </p>

                <div class="mt-8">
                    <a href="/register" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create Your Profile
                    </a>
                </div>

                <div class="mt-4">
                    <a href="/" class="text-indigo-600 hover:text-indigo-500">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Home
                    </a>
                </div>
            </div>

            <!-- Features Preview -->
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <i class="fas fa-link text-3xl text-indigo-600 mb-4"></i>
                    <h3 class="text-lg font-medium text-gray-900">Custom Username</h3>
                    <p class="mt-2 text-gray-600">Get your unique username and create a memorable profile URL.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <i class="fas fa-paint-brush text-3xl text-indigo-600 mb-4"></i>
                    <h3 class="text-lg font-medium text-gray-900">Beautiful Design</h3>
                    <p class="mt-2 text-gray-600">Modern, responsive design that looks great on all devices.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 