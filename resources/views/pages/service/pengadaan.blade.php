@extends('layouts.app')

@section('title', 'Pengadaan Barang')

@section('content')

<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start"
    style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">
                Pengadaan Barang
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
                    <li class="text-white font-semibold">Pengadaan Barang</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Proses Pengadaan</h2>
      <p class="text-gray-600">Kami menjalankan setiap tahapan pengadaan dengan profesional, transparan, dan tepat waktu.</p>
    </div>
    <div class="grid md:grid-cols-4 gap-8 text-center">
      <div>
        <div class="w-16 h-16 mx-auto bg-red-500 text-white flex items-center justify-center rounded-full text-xl font-bold">1</div>
        <h3 class="mt-4 font-semibold text-gray-800">Analisis Kebutuhan</h3>
        <p class="text-sm text-gray-600">Identifikasi barang yang diperlukan sesuai kebutuhan klien.</p>
      </div>
      <div>
        <div class="w-16 h-16 mx-auto bg-red-500 text-white flex items-center justify-center rounded-full text-xl font-bold">2</div>
        <h3 class="mt-4 font-semibold text-gray-800">Seleksi & Sourcing</h3>
        <p class="text-sm text-gray-600">Pemilihan supplier terbaik untuk memastikan kualitas.</p>
      </div>
      <div>
        <div class="w-16 h-16 mx-auto bg-red-500 text-white flex items-center justify-center rounded-full text-xl font-bold">3</div>
        <h3 class="mt-4 font-semibold text-gray-800">Pengadaan</h3>
        <p class="text-sm text-gray-600">Proses pembelian dan pemenuhan kebutuhan barang.</p>
      </div>
      <div>
        <div class="w-16 h-16 mx-auto bg-red-500 text-white flex items-center justify-center rounded-full text-xl font-bold">4</div>
        <h3 class="mt-4 font-semibold text-gray-800">Distribusi</h3>
        <p class="text-sm text-gray-600">Barang dikirim tepat waktu dan sesuai permintaan.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-20">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Mengapa Memilih Layanan Pengadaan Kami?</h2>
      <ul class="space-y-6">
        <li class="flex">
          <span class="text-red-500 text-xl mr-4">✔</span>
          <p class="text-gray-700"><strong>Terpercaya:</strong> Berpengalaman melayani instansi pemerintah dan swasta.</p>
        </li>
        <li class="flex">
          <span class="text-red-500 text-xl mr-4">✔</span>
          <p class="text-gray-700"><strong>Efisien:</strong> Proses cepat, transparan, dan tepat sasaran.</p>
        </li>
        <li class="flex">
          <span class="text-red-500 text-xl mr-4">✔</span>
          <p class="text-gray-700"><strong>Kualitas Terjamin:</strong> Barang sesuai spesifikasi dan standar mutu.</p>
        </li>
      </ul>
    </div>
    <div class="hidden md:block">
    <img src="{{ asset('images/selection.jpg') }}" 
        alt="Pengadaan Barang" 
        class="rounded-lg shadow-lg w-full max-h-80 object-cover mx-auto">
    </div>
  </div>
</section>


<section class="py-20">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Galeri Portofolio</h2>
            <p class="text-gray-600 mb-12 leading-relaxed">
                Kami berpengalaman menangani pengadaan barang untuk berbagai kebutuhan dengan tepat waktu dan berkualitas.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ([
                ['image' => 'images/portfolio/p1.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p2.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p3.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p4.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p5.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p6.jpg', 'alt' => 'Pengadaan Barang'],
                ['image' => 'images/portfolio/p7.jpg', 'alt' => 'Pengadaan Barang'],
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