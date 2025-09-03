@extends('layouts.app')

@section('title', 'Jasa Konstruksi')

@section('content')

<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start"
    style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">
                Jasa Konstruksi
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
                    <li class="text-white font-semibold">Jasa Konstruksi</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 lg:px-20 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">
            Jasa Konstruksi Profesional & Terpercaya
        </h2>
        <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Kami hadir untuk membantu Anda mewujudkan proyek konstruksi dengan hasil terbaik, 
            mulai dari pembangunan rumah dinas, rehabilitasi barak militer, hingga interior gedung.
        </p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-6 lg:px-20">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Kenapa Memilih Kami?</h3>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <div class="text-5xl text-blue-600 mb-4">👷</div>
                <h4 class="font-semibold text-lg mb-2">Berpengalaman</h4>
                <p class="text-gray-600 text-sm">Kami memiliki pengalaman luas dalam berbagai proyek konstruksi skala besar maupun kecil.</p>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <div class="text-5xl text-blue-600 mb-4">✅</div>
                <h4 class="font-semibold text-lg mb-2">Kualitas & Tepat Waktu</h4>
                <p class="text-gray-600 text-sm">Kualitas pekerjaan terjamin dengan penyelesaian proyek sesuai jadwal.</p>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <div class="text-5xl text-blue-600 mb-4">💰</div>
                <h4 class="font-semibold text-lg mb-2">Harga Kompetitif</h4>
                <p class="text-gray-600 text-sm">Menawarkan solusi yang sesuai anggaran tanpa mengurangi standar mutu.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-20">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Layanan Utama Kami</h3>
        <div class="grid md:grid-cols-3 gap-8">
            @php
                $layanan = [
                    [
                        'title' => 'Pembuatan & Renovasi Rumah Dinas',
                        'desc' => 'Kami menangani pembangunan maupun renovasi rumah dinas dengan hasil rapi, kokoh, dan sesuai standar.',
                        'icon' => '🏠'
                    ],
                    [
                        'title' => 'Rehabilitasi Barak Militer',
                        'desc' => 'Proyek rehabilitasi barak militer dikerjakan dengan ketelitian tinggi untuk mendukung kenyamanan dan keamanan.',
                        'icon' => '🛡️'
                    ],
                    [
                        'title' => 'Interior & Renovasi Gedung',
                        'desc' => 'Layanan renovasi gedung dan pengerjaan interior profesional untuk menciptakan ruang yang fungsional dan estetis.',
                        'icon' => '🏢'
                    ],
                ];
            @endphp

            @foreach ($layanan as $item)
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition text-center">
                    <div class="text-5xl mb-4">{{ $item['icon'] }}</div>
                    <h4 class="font-semibold text-lg text-gray-800 mb-2">{{ $item['title'] }}</h4>
                    <p class="text-gray-600 text-sm">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="py-16 bg-blue-600 text-white text-center">
    <div class="container mx-auto px-6 lg:px-20">
        <h3 class="text-3xl font-bold mb-4">Siap Mewujudkan Proyek Anda?</h3>
        <p class="mb-6 max-w-2xl mx-auto">
            Hubungi kami sekarang untuk konsultasi lebih lanjut dan dapatkan penawaran terbaik.
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


@php
    $portfolioImages = [
        'client1' => [
            'tp11.jpg',
            'tp12.jpg',
            'tp13.jpg',
            'tp14.jpg',
            'tp15.jpg',
            'tp16.jpg',
            'tp17.jpg',
            'tp18.jpg',
            'tp19.jpg',
            'tp191.jpg',
        ],
        'client2' => [
            'tp21.jpg',
            'tp22.jpg',
            'tp23.jpg',
            'tp24.jpg',
            'tp25.jpg',
            'tp26.jpg',
            'tp27.jpg',
        ],
        'client3' => [
            'tp31.jpg',
            'tp32.jpg',
            'tp33.jpg',
            'tp34.jpg',
            'tp35.jpg',
            'tp36.jpg',
            'tp37.jpg',
        ],
    ];
@endphp

<section class="py-16 bg-gray-50" x-data="{ activeTab: 'client1' }">
    <div class="container mx-auto px-6 md:px-12">
        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Portfolio Konstruksi Kami
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Beberapa proyek konstruksi yang telah kami selesaikan.
            </p>
        </div>

        <!-- Tabs -->
        <div class="flex justify-center mb-10 space-x-4">
            @foreach ([
                'client1' => 'Renovasi Rumah Dinas', 
                'client2' => 'Rehabilitasi Gedung & Area', 
                'client3' => 'Pembangunan Rumah Dinas',
                ] as $key => $label)
                <button 
                    @click="activeTab = '{{ $key }}'"
                    :class="activeTab === '{{ $key }}' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 border'"
                    class="px-4 py-2 rounded-lg font-semibold transition"
                >
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <!-- Tab Content -->
        <div class="mt-6">
            @foreach ($portfolioImages as $client => $images)
                <div 
                    x-show="activeTab === '{{ $client }}'" 
                    class="grid grid-cols-1 md:grid-cols-3 gap-6"
                >
                    @foreach ($images as $image)
                        <a href="{{ asset('images/portfolio/' . $image) }}" 
                            class="glightbox block overflow-hidden rounded-lg shadow-lg group" 
                            data-gallery="{{ $client }}">
                            <img src="{{ asset('images/portfolio/' . $image) }}" 
                                alt="Portfolio {{ $client }}" 
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                        </a>
                    @endforeach
                </div>
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