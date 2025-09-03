@extends('layouts.app')

@section('title', 'Jasa Cleaning Service')

@section('content')

<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start"
    style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">
                Jasa Cleaning Service
            </h1>
            <nav class="text-sm text-gray-200">
                <ol class="list-reset flex space-x-2">
                    <li>
                        <a href="/" class="hover:text-red-400">Beranda</a>
                    </li>
                    <li>/</li>
                    <li>
                        <a href="/layanan" class="hover:text-red-400">Layanan</a>
                    </li>
                    <li>/</li>
                    <li class="text-white font-semibold">Cleaning Service</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start mb-12">
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-red-800 leading-tight">
                    Solusi Kebersihan<br class="hidden md:block"> Profesional
                </h2>
            </div>
            <div>
                <p class="text-gray-600 leading-relaxed">
                    Sebagai penyedia layanan kebersihan profesional, kami menawarkan berbagai solusi kebersihan
                    yang dirancang untuk memenuhi kebutuhan Anda. Berikut adalah produk layanan
                    <span class="font-semibold text-gray-800">Jasa Cleaning Service</span> yang kami sediakan:
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div class="hidden md:flex justify-center">
                <img src="{{ asset('images/service/cleaning-potrait.jpg') }}" 
                    alt="Cleaning Service" 
                    class="w-full max-w-xs md:max-w-sm lg:max-w-md max-h-[500px] object-cover rounded-xl shadow-lg">
            </div>

            <div class="space-y-10">
                <div>
                    <h3 class="text-2xl font-bold text-red-600 mb-3">
                        Outsourcing Cleaning Service
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Jasa Outsourcing Cleaning Service adalah layanan penyedia tenaga kerja profesional untuk kebutuhan
                        kebersihan, meliputi Man Power, Peralatan, Chemical, dan consumables. Cakupan pekerjaannya meliputi
                        pembersihan rutin harian, pembersihan menyeluruh (general cleaning), hingga pengelolaan kebersihan
                        khusus seperti sanitasi area tertentu.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-red-600 mb-3">
                        General Cleaning
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        General cleaning adalah layanan pembersihan menyeluruh pada permukaan dan area tertentu yang sering
                        digunakan, seperti lantai, dinding, kaca, dan furniture. Umumnya General cleaning dilakukan setelah
                        renovasi, sebelum/sesudah acara besar, secara berkala, saat menempati ruang baru, atau ketika
                        pembersihan rutin tak cukup memastikan kebersihan maksimal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-blue-50">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Cakupan Industri</h2>
            <p class="text-gray-600 mb-12 leading-relaxed">
                CV Patdara Kusuma Jaya menyediakan layanan Outsourcing Cleaning Service untuk kebutuhan kebersihan rutin
                serta General Cleaning untuk pembersihan menyeluruh dan mendalam. Layanan cleaning service kami mencakup
                berbagai industri sebagai berikut:
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'title' => 'Perkantoran',
                        'image' => 'images/service/cs-office.jpg',
                        'alt'   => 'Layanan Perkantoran',
                    ],
                    [
                        'title' => 'Rumah Sakit',
                        'image' => 'images/service/cs-hospital.jpg',
                        'alt'   => 'Layanan Rumah Sakit',
                    ],
                    [
                        'title' => 'Sekolah & Universitas',
                        'image' => 'images/service/cs-school.jpg',
                        'alt'   => 'Layanan Pendidikan',
                    ],
                    [
                        'title' => 'Pabrik / Manufaktur',
                        'image' => 'images/service/cs-factory.jpg',
                        'alt'   => 'Layanan Pabrik',
                    ],
                    [
                        'title' => 'Retail',
                        'image' => 'images/service/cs-retail.jpg',
                        'alt'   => 'Layanan Retail',
                    ],
                    [
                        'title' => 'Hotel & Apartemen',
                        'image' => 'images/service/cs-hotel.jpg',
                        'alt'   => 'Layanan Hotel',
                    ],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                    <img 
                        src="{{ asset($service['image']) }}" 
                        alt="{{ $service['alt'] }}" 
                        class="w-full h-56 object-cover transform group-hover:scale-105 transition duration-500"
                    >
                    <div class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-60 transition"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-center">
                        <h3 class="text-lg font-semibold text-white drop-shadow-lg">
                            {{ $service['title'] }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="py-20">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Galeri Portofolio</h2>
            <p class="text-gray-600 mb-12 leading-relaxed">
                Portfolio jasa kebersihan kami mencakup berbagai area, mulai dari Jasa Cleaning Service Rumah,
                Kantor, Apartemen hingga Gedung.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ([
                ['image' => 'images/portfolio/cs1.jpg', 'alt' => 'Rumah'],
                ['image' => 'images/portfolio/cs2.jpg', 'alt' => 'Kantor'],
                ['image' => 'images/portfolio/cs3.jpg', 'alt' => 'Apartemen'],
                ['image' => 'images/portfolio/cs4.jpg', 'alt' => 'Gedung'],
                ['image' => 'images/portfolio/cs5.jpg', 'alt' => 'Hotel'],
                ['image' => 'images/portfolio/cs6.jpg', 'alt' => 'Rumah Sakit'],
                ['image' => 'images/portfolio/cs7.jpg', 'alt' => 'Sekolah'],
                ['image' => 'images/portfolio/cs8.jpg', 'alt' => 'Pabrik'],
            ] as $photo)
                <a href="{{ asset($photo['image']) }}" class="glightbox" data-gallery="portfolio">
                    <img src="{{ asset($photo['image']) }}"
                         alt="{{ $photo['alt'] }}"
                         class="w-full h-40 md:h-48 object-cover rounded-lg shadow hover:opacity-80 transition">
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Klien kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Beberapa instansi yang telah bekerja sama dengan kami
        </p>

        @include('partials.client')
    </div>
</section>

@include('partials.cta1')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            GLightbox({ selector: ".glightbox" });
        });
    </script>
@endpush
@endsection