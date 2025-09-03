@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start"
    style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">

    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">
                Layanan Kami
            </h1>
            <nav class="text-sm text-gray-200">
                <ol class="list-reset flex space-x-2">
                    <li>
                        <a href="/" class="hover:text-red-400">Beranda</a>
                    </li>
                    <li>/</li>
                    <li class="text-white font-semibold">Layanan Kami</li>
                </ol>
            </nav>
        </div>
    </div>
</section>


<section class="py-20 bg-gray-50">
    <div class="container max-w-5xl mx-auto px-6 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami fokus menyediakan layanan utama yang menjadi keunggulan kami dalam mendukung kebutuhan mitra.
            </p>
        </div>

        <div class="space-y-16">
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('images/cleaning-service.jpg') }}" 
                         alt="Cleaning Service" 
                         class="w-full h-56 md:h-72 object-cover rounded-xl shadow">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Cleaning Service</h3>
                    <p class="text-gray-600 mb-6">
                        Layanan kebersihan dan pemeliharaan yang profesional untuk menjaga kenyamanan serta kebersihan fasilitas.<br class="hidden md:block">
                        Mulai dari gedung perkantoran, rumah dinas, hingga fasilitas militer, kami memastikan lingkungan tetap sehat dan terawat.
                    </p>
                    <a href="{{ url('/layanan/jasa-cleaning-service') }}" 
                       class="block md:inline-block text-center bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700 transition w-full md:w-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="order-2 md:order-1">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Konstruksi & Renovasi</h3>
                    <p class="text-gray-600 mb-6">
                        Kami berpengalaman dalam proyek konstruksi dan renovasi berskala besar maupun kecil. <br class="hidden md:block">
                        Dengan fokus pada kualitas, keamanan, dan ketepatan waktu, kami siap mendukung pembangunan rumah dinas, barak militer, maupun gedung pemerintahan.
                    </p>
                    <a href="{{ url('/layanan/jasa-konstruksi') }}" 
                       class="block md:inline-block text-center bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700 transition w-full md:w-auto">
                        Lihat Detail
                    </a>
                </div>
                <div class="order-1 md:order-2">
                    <img src="{{ asset('images/construction.jpg') }}" 
                         alt="Konstruksi & Renovasi" 
                         class="w-full h-56 md:h-72 object-cover rounded-xl shadow">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('images/pengadaan.jpg') }}" 
                         alt="Cleaning Service" 
                         class="w-full h-56 md:h-72 object-cover rounded-xl shadow">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Pengadaan Barang</h3>
                    <p class="text-gray-600 mb-6">
                        Kami menyediakan layanan pengadaan barang yang terpercaya dan efisien untuk mendukung kebutuhan operasional Anda.<br class="hidden md:block">
                        Mulai dari peralatan kantor, perlengkapan kebersihan, hingga kebutuhan khusus sesuai permintaan, 
                        kami memastikan kualitas produk yang terjamin, harga yang kompetitif, serta pengiriman yang tepat waktu.
                    </p>
                    <a href="{{ url('/layanan/jasa-pengadaan') }}" 
                       class="block md:inline-block text-center bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700 transition w-full md:w-auto">
                        Lihat Detail
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Klien Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Beberapa instansi yang telah bekerja sama dengan kami
        </p>

        @include('partials.client')
    </div>
</section>

@include('partials.cta1')

@endsection