@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start" style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="container mx-auto px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">Tentang Kami</h1>
            <nav class="text-sm text-gray-200">
                <ol class="list-reset flex space-x-2">
                    <li><a href="/" class="hover:text-red-400">Beranda</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="tentang-kami" class="pt-20 pb-10 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-4">
            <div class="w-full flex justify-center">
                <img src="{{ asset('images/company-about.jpg') }}" alt="CV Patdara Kusuma Jaya" class="rounded-xl shadow-lg w-full max-w-md object-cover">
            </div>
            <div class="text-left">
                <h5 class="text-md md:text-md font-bold text-red-800 mb-2">CV. Patdara Kusuma Jaya</h5>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang Kami</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    CV. Patdara Kusuma Jaya merupakan bagian dari <span class="font-semibold">Grup Rili Kusuma Jaya</span> 
                    dan <span class="font-semibold">PT. Alkata Kusuma Jaya</span>. 
                    Dengan pengalaman panjang bekerja sama dengan berbagai instansi militer dan pemerintah, 
                    kami hadir sebagai mitra terpercaya dalam bidang <span class="font-semibold">konstruksi, pemeliharaan, jasa kebersihan, serta pengadaan barang</span>.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Komitmen kami adalah memberikan layanan profesional dengan kualitas terbaik, tepat waktu, dan sesuai standar yang berlaku.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="visi-misi" class="py-10 bg-white font-urbanist">
    <div class="container mx-auto px-6 md:px-12">
        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-gray-50 p-8 text-left">
                <h3 class="text-2xl font-semibold mb-4 text-red-600">Visi</h3>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi perusahaan terpercaya dan profesional dalam mendukung kebutuhan konstruksi, pemeliharaan, serta pengadaan barang bagi instansi pemerintah dan militer.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-gray-50 p-8 text-left">
                <h3 class="text-2xl font-semibold mb-4 text-red-600">Misi</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-600 leading-relaxed">Menyediakan layanan konstruksi dan renovasi sesuai standar kualitas tinggi.</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-600 leading-relaxed">Menyelenggarakan pemeliharaan gedung, taman, dan fasilitas dengan profesionalisme.</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-600 leading-relaxed">Memberikan pengadaan barang yang tepat waktu, berkualitas, dan sesuai kebutuhan klien.</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-600 leading-relaxed">Membangun kemitraan jangka panjang dengan instansi pemerintah dan militer.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="relative bg-blue-700 py-20 text-center text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" 
         style="background-image: url('/images/cta-bg.jpg');"></div>
    
    <div class="relative container mx-auto px-6 md:px-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Bekerja Sama dengan Profesional</h2>
        <p class="text-lg max-w-xl mx-auto mb-8 leading-relaxed">
            CV. Patdara Kusuma Jaya siap mendukung kebutuhan konstruksi, kebersihan, dan pengadaan Anda.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="{{ url('/kontak') }}" class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
                Hubungi Kami
            </a>
            <a href="#" target="_blank" class="px-6 py-3 border border-white font-semibold rounded-lg hover:bg-white hover:text-blue-700 transition">
                Lihat Profil Perusahaan
            </a>
        </div>
    </div>
</section>


@endsection