@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white">
            <i class="fas fa-address-card mr-3 text-purple-300"></i>
            Contact Information
        </h1>
        <p class="mt-3 text-white/70 max-w-2xl mx-auto">
            Hubungi saya untuk kolaborasi, project, atau sekadar ngobrol.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-2">
        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 shadow-lg">
            <h2 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                <i class="fas fa-user-circle text-purple-300"></i>
                Biodata
            </h2>
            <div class="space-y-4 text-white/80">
                <div class="flex justify-between items-start">
                    <span class="text-sm font-semibold text-white/60">Nama</span>
                    <span class="text-base font-semibold">Idham Azis Pangestu</span>
                </div>
                <div class="flex justify-between items-start">
                    <span class="text-sm font-semibold text-white/60">NPM</span>
                    <span class="text-base font-semibold">123111011</span>
                </div>
                <div class="flex justify-between items-start">
                    <span class="text-sm font-semibold text-white/60">Jurusan</span>
                    <span class="text-base font-semibold">Teknik Informatika</span>
                </div>
            </div>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 shadow-lg">
            <h2 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                <i class="fas fa-phone-alt text-purple-300"></i>
                Kontak
            </h2>
            <div class="space-y-4 text-white/80">
                <div class="flex justify-between items-start">
                    <span class="text-sm font-semibold text-white/60">Nomor Telepon</span>
                    <span class="text-base font-semibold">08123456789</span>
                </div>
                <div class="flex justify-between items-start">
                    <span class="text-sm font-semibold text-white/60">Email</span>
                    <span class="text-base font-semibold">idham@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
        <a href="/profile" class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full font-semibold text-center hover:shadow-lg hover:shadow-purple-500/30 transition duration-300">
            <i class="fas fa-user mr-2"></i>Profile
        </a>
        <a href="/gmap" class="px-8 py-3 bg-white/10 border border-white/30 text-white rounded-full font-semibold text-center hover:bg-white/20 transition duration-300">
            <i class="fas fa-map-marker-alt mr-2"></i>Gmap
        </a>
    </div>
</div>
@endsection
