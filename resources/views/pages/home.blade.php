@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/hero-bg.jpg') }}')">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 leading-tight">
            Solusi Konstruksi, Renovasi, <br> dan Jasa Profesional
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mb-6">
            CV. Patdara Kusuma Jaya menghadirkan layanan terpercaya di bidang konstruksi, 
            pemeliharaan, kebersihan, serta pengadaan barang untuk instansi pemerintah, militer, dan mitra lainnya.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="#tentang" 
               class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition">
                Pelajari Lebih Lanjut
            </a>
            <a href="{{ url('/kontak') }}" 
               class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>


<section id="tentang" class="py-20 bg-white font-urbanist">
  <div class="container mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
    
    <div>
      <img src="{{ asset('images/about.jpg') }}" alt="Tentang Kami" class="rounded-2xl shadow-lg">
    </div>

    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang Kami</h2>
      <p class="text-lg text-gray-600 leading-relaxed mb-6">
        CV. Patdara Kusuma Jaya adalah bagian dari 
        <span class="font-semibold">Grup Rili Kusuma Jaya</span> dan 
        <span class="font-semibold">PT. Alkata Kusuma Jaya</span>, 
        dengan rekam jejak panjang bekerja sama dengan berbagai instansi militer dan pemerintahan.
      </p>
      <p class="text-lg text-gray-600 leading-relaxed mb-6">
        Kami berfokus pada bidang 
        <span class="font-semibold">konstruksi, pemeliharaan gedung dan taman, jasa kebersihan, serta pengadaan barang</span>. 
        Dengan pengalaman dan komitmen tinggi, kami hadir sebagai mitra terpercaya untuk memberikan solusi terbaik sesuai standar yang berlaku.
      </p>
      <a href="{{ url('/layanan') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full shadow hover:bg-blue-700 transition">
        Lihat Layanan Kami
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Rekam Jejak Terpercaya</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Mitra profesional untuk proyek pemerintah dan militer.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white  p-8">
                <h3 class="text-5xl font-extrabold text-red-600">10+</h3>
                <p class="mt-2 text-gray-600">Tahun Pengalaman</p>
            </div>

            <div class="bg-white  p-8">
                <h3 class="text-5xl font-extrabold text-red-600">20+</h3>
                <p class="mt-2 text-gray-600">Instansi Pemerintah & Militer</p>
            </div>

            <div class="bg-white  p-8">
                <h3 class="text-5xl font-extrabold text-red-600">100+</h3>
                <p class="mt-2 text-gray-600">Proyek Selesai</p>
            </div>
        </div>


        <p class="text-gray-700 font-semibold mb-6">
            Beberapa instansi yang telah bekerja sama dengan kami
        </p>

        <div class="overflow-hidden relative">
            <div id="carousel-track" class="flex transition-transform duration-500 ease-in-out">
                @php
                    $logos = [
                        ['img' => 'logo-zeni.png', 'alt' => 'Pusat zeni Angkatan Darat'],
                        ['img' => 'logo-tni.png', 'alt' => 'Markas Besar TNI'],
                        ['img' => 'logo-kodiklat.png', 'alt' => 'Kodiklat TNI'],
                        ['img' => 'logo-bssn.png', 'alt' => 'BSSN'],
                        ['img' => 'logo-kemhan.png', 'alt' => 'KEMHAN'],
                        ['img' => 'logo-pusbekangad.png', 'alt' => 'PUSBEKANGAD'],
                        ['img' => 'logo-bin.png', 'alt' => 'BIN'],
                        ['img' => 'logo-pusjarah-tni.png', 'alt' => 'PUSJARAH TNI'],
                        ['img' => 'logo-kodam-sriwijaya.png', 'alt' => 'Kodam Sriwijaya'],
                        ['img' => 'logo-kodam-diponogoro.png', 'alt' => 'Kodam Diponegoro'],
                    ];
                    $merged = array_merge($logos, $logos);
                @endphp

                @foreach($merged as $logo)
                    <div class="flex-shrink-0 w-1/2 md:w-1/5 px-2 py-4 flex flex-col justify-center items-center">
                        <img 
                            src="{{ asset('images/mitra/' . $logo['img']) }}" 
                            alt="{{ $logo['alt'] }}" 
                            class="h-20 object-contain filter grayscale hover:grayscale-0 transition duration-300 hover:scale-110"
                        >
                        <p class="mt-2 text-sm text-gray-600 text-center">{{ $logo['alt'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section id="layanan" class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Layanan Kami</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">
            Kami menyediakan berbagai layanan untuk mendukung kebutuhan instansi militer, pemerintahan, maupun mitra lainnya.
            Dengan pengalaman yang luas, kami siap menghadirkan solusi terbaik, mulai dari kebersihan hingga konstruksi berskala besar.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                <div class="text-red-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">Kebersihan & Pemeliharaan</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>Cleaning service</li>
                    <li>Pemeliharaan taman</li>
                    <li>Pemeliharaan & perbaikan gedung</li>
                </ul>
            </div>

            <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                <div class="text-red-600 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>

                </div>
                <h3 class="text-xl font-semibold mb-4">Konstruksi & Renovasi</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>Pembuatan & renovasi rumah dinas</li>
                    <li>Rehabilitasi barak militer</li>
                    <li>Interior & renovasi gedung</li>
                </ul>
            </div>

            <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                <div class="text-red-600 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>


                </div>
                <h3 class="text-xl font-semibold mb-4">Pengadaan Barang</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>Peralatan lapangan</li>
                    <li>IT & elektronik</li>
                    <li>Furnitur & perlengkapan kantor</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="relative bg-blue-700 py-20 text-center text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" 
         style="background-image: url('/images/cta-bg.jpg');"></div>
    
    <div class="relative container mx-auto px-6 md:px-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Menjadi Mitra Anda</h2>
        <p class="text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
            Dengan pengalaman panjang dan komitmen terhadap kualitas, 
            <span class="font-semibold">CV. Patdara Kusuma Jaya</span> siap mendukung kebutuhan Anda, 
            mulai dari jasa kebersihan, konstruksi, hingga pengadaan barang. 
            Mari wujudkan kerja sama yang saling menguntungkan dan berkelanjutan.
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