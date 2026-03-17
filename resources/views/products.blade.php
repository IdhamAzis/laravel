@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white">
            <i class="fas fa-box-open mr-3 text-purple-300"></i>
            Daftar Produk
        </h1>
        <p class="mt-3 text-white/70 max-w-2xl mx-auto">
            Lihat semua produk yang tersedia di sini.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        @forelse ($products as $product)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                <h2 class="text-xl font-semibold text-white mb-2">{{ $product }}</h2>
                <p class="text-white/60">Deskripsi singkat produk bisa ditambahkan di sini.</p>
            </div>
        @empty
            <div class="col-span-full bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                <p class="text-white/70">Belum ada produk yang ditambahkan.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
        <a href="/profile" class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full font-semibold text-center hover:shadow-lg hover:shadow-purple-500/30 transition duration-300">
            <i class="fas fa-user mr-2"></i>Profile
        </a>
        <a href="/contact" class="px-8 py-3 bg-white/10 border border-white/30 text-white rounded-full font-semibold text-center hover:bg-white/20 transition duration-300">
            <i class="fas fa-envelope mr-2"></i>Contact
        </a>
    </div>
</div>
@endsection
