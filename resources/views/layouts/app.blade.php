<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen">
    <!-- Navigation -->
    <nav class="backdrop-blur-md bg-white/10 border-b border-white/20 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-white">
                    <i class="fas fa-code text-purple-400 mr-2"></i>MyPortfolio
                </a>
                <div class="flex space-x-6">
                    <a href="/" class="text-white/80 hover:text-purple-400 transition duration-300 font-medium">Home</a>
                    <a href="/profile" class="text-white/80 hover:text-purple-400 transition duration-300 font-medium">Profile</a>
                    <a href="/contact" class="text-white/80 hover:text-purple-400 transition duration-300 font-medium">Contact</a>
                    <a href="/gmap" class="text-white/80 hover:text-purple-400 transition duration-300 font-medium">Location</a>
                    <a href="/message" class="text-white/80 hover:text-purple-400 transition duration-300 font-medium">Send Message</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="backdrop-blur-md bg-white/10 border-t border-white/20 py-6 mt-auto">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-white/60">&copy; 2024 Idham Azis Pangestu. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

