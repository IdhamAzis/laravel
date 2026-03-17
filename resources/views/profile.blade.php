@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 shadow-lg">
        <div class="flex flex-col sm:flex-row items-center gap-6 mb-8">
            <div class="w-24 h-24 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white text-3xl font-bold">
                I
            </div>
            <div>
                <h1 class="text-3xl font-bold text-white">Idham Azis Pangestu</h1>
                <p class="text-white/70 mt-1">Teknik Informatika Student</p>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 mb-8 text-white/80">
            <div class="space-y-2">
                <p class="text-xs uppercase tracking-wide text-white/50">NPM</p>
                <p class="text-lg font-semibold">123111011</p>
            </div>
            <div class="space-y-2">
                <p class="text-xs uppercase tracking-wide text-white/50">Contact</p>
                <p class="text-lg font-semibold">08123456789</p>
                <p class="text-sm text-white/60">idham@gmail.com</p>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-white mb-4">Messages</h2>

            @if($messages->count() > 0)
                <ul class="space-y-3">
                    @foreach($messages as $message)
                        <li class="bg-white/5 border border-white/10 rounded-xl p-4">
                            <p class="text-white/80">{{ $message->message }}</p>
                            <p class="text-xs text-white/50 mt-2">{{ $message->created_at->format('d-m-Y H:i') }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-white/70">No messages yet.</p>
            @endif
        </div>

        <div class="flex flex-col sm:flex-row gap-3">
            <a href="/contact" class="w-full sm:w-auto px-6 py-3 text-sm sm:text-base text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-full font-semibold text-center hover:shadow-lg hover:shadow-purple-500/30 transition duration-300">
                Contact
            </a>
            <a href="/gmap" class="w-full sm:w-auto px-6 py-3 text-sm sm:text-base text-white bg-white/10 border border-white/30 rounded-full font-semibold text-center hover:bg-white/20 transition duration-300">
                Gmap
            </a>
        </div>
    </div>
</div>
@endsection
