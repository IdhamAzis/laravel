@extends('layouts.app')

@section('title', 'Message')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-4">Send Message</h1>
        <p class="text-white/70 mb-6">
            Kirim pesanmu, nanti akan tampil di halaman profil.
        </p>

        @if(session('success'))
            <div class="mb-6 rounded-lg bg-green-500/20 border border-green-500/40 p-4 text-white">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/message" class="space-y-4">
            @csrf
            <div>
                <label for="message" class="block text-sm font-semibold text-white/70 mb-2">Message</label>
                <textarea id="message" name="message" rows="4" required
                    class="w-full rounded-xl border border-white/20 bg-white/5 p-4 text-white placeholder:text-white/40 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/30 outline-none transition"></textarea>
            </div>

            <button type="submit" class="w-full sm:w-auto px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full font-semibold hover:shadow-lg hover:shadow-purple-500/30 transition duration-300">
                Send Message
            </button>
        </form>

        <div class="mt-8 flex flex-col sm:flex-row gap-3">
            <a href="/profile" class="w-full sm:w-auto px-6 py-3 bg-white/10 border border-white/30 text-white rounded-full font-semibold text-center hover:bg-white/20 transition duration-300">
                Back to Profile
            </a>
            <a href="/contact" class="w-full sm:w-auto px-6 py-3 bg-white/10 border border-white/30 text-white rounded-full font-semibold text-center hover:bg-white/20 transition duration-300">
                Contact
            </a>
        </div>
    </div>
</div>
@endsection