@extends('layouts.app')

@section('title', 'Gmap')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white">
            <i class="fas fa-map-marker-alt mr-3 text-purple-300"></i>
            Lokasi Saya
        </h1>
        <p class="mt-3 text-white/70 max-w-2xl mx-auto">
            Lihat di mana saya berada langsung di peta (Google Maps).
        </p>
    </div>

    <div class="relative overflow-hidden rounded-2xl border border-white/10 shadow-lg">
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/0"></div>
        <iframe
            class="w-full h-[450px] md:h-[520px]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13966.203806409585!2d107.65214143903387!3d-6.949048035127319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2d834ee57cb%3A0xf097d99bcccc4293!2sUniversitas%20Informatika%20Dan%20Bisnis%20Indonesia%20(UNIBI)!5e0!3m2!1sid!2sid!4v1773738142364!5m2!1sid!2sid"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
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
