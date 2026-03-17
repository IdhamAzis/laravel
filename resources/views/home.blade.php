@extends('layouts.app')

@section('title', 'home')

@section('content')

<!-- Admin -->
@if(isset($userType) && $userType === 'admin')
    <div class="bg-red-500 text-white p-4 rounded mb-6 text-center">
        <strong>Halo Admin!!</strong> Selamat datang pengguna!
        <h1>INI ADALAH HALAMAN HOME</h1>
    </div>
@endif


<div class="max-w-6xl mx-auto px-4">
    <!-- Hero Section -->
    <div class="text-center py-20">
        <div class="inline-block p-4 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 mb-6 animate-pulse">
            <i class="fas fa-user-graduate text-6xl text-white"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-6">
            Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400></span>
        </h1>
        <p class="text-lg md:text-xl text-white/70 mb-8 max-w-2xl mx-auto">
            Teknik Informatika Student | Passionate Developer | Creative Problem Solver
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/profile" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-sm sm:text-base rounded-full font-semibold hover:shadow-lg hover:shadow-purple-500/30 transition duration-300 transform hover:scale-105">
                <i class="fas fa-user mr-2 text-sm sm:text-base"></i>View My Profile
            </a>
            <a href="/contact" class="px-6 py-3 bg-white/10 border border-white/30 text-white text-sm sm:text-base rounded-full font-semibold hover:bg-white/20 transition duration-300">
                <i class="fas fa-envelope mr-2 text-sm sm:text-base"></i>Get In Touch
            </a>
        </div>
    </div>

    <!-- Quick Links Cards -->
    <div class="grid md:grid-cols-3 gap-6 mt-12">
        <a href="/profile" class="group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 hover:border-purple-500/50 transition duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                <i class="fas fa-id-card text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Profile</h3>
            <p class="text-white/60">Learn more about my academic background and skills.</p>
        </a>
        
        <a href="/contact" class="group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 hover:border-pink-500/50 transition duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                <i class="fas fa-phone text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Contact</h3>
            <p class="text-white/60">Get in touch with me for collaborations or questions.</p>
        </a>
        
        <a href="/gmap" class="group p-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 hover:border-green-500/50 transition duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                <i class="fas fa-map-marker-alt text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Location</h3>
            <p class="text-white/60">Find out where I'm located and visit me.</p>
        </a>
    </div>
</div>
@endsection

