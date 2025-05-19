<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->business_name ?? $profile->fullname }} - ProProfile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @if($profile->theme === 'dark')
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }
    </style>
    @endif
</head>
<body class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </div>
</body>
</html> 