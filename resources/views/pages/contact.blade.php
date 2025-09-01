@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start" style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="container mx-auto px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">Kontak Kami</h1>
            <nav class="text-sm text-gray-200">
                <ol class="list-reset flex space-x-2">
                    <li><a href="/" class="hover:text-red-400">Beranda</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Kontak Kami</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- <section id="kontak" class="py-20 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Kontak Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Form Kontak -->
            <div>
                <form action="#" method="POST" class="bg-white shadow rounded-2xl p-8 space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" required>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" required>
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600" required></textarea>
                    </div>

                    <button type="submit" class="bg-red-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-red-700 transition">Kirim Pesan</button>
                </form>
            </div>
            <!-- Info Kontak -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Alamat</h3>
                    <p class="text-gray-600 leading-relaxed">Jl. Bambu Petung No.1 F-G, Kelurahan Cipayung, Kecamatan Cipayung, Jakarta Timur, 13840</p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600 leading-relaxed">patdarajaya@gmail.com</p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-600 leading-relaxed">021-22816708</p>
                </div>
            </div>

        </div>
    </div>
</section> --}}

<section id="kontak" class="py-20 bg-gray-50 font-urbanist">
    <div class="container mx-auto px-6 md:px-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white shadow rounded-2xl p-8 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-4 text-red-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">Alamat</h3>
                <p class="text-gray-600">Jl. Bambu Petung No.1 F-G, Kel. Cipayung, Kec. Cipayung, Jakarta Timur, 13840</p>
            </div>

            <div class="bg-white shadow rounded-2xl p-8 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-4 text-red-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                <a href="mailto:patdarajaya@gmail.com" class="text-gray-600 hover:text-red-600 transition">patdarajaya@gmail.com</a>
            </div>

            <div class="bg-white shadow rounded-2xl p-8 flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-4 text-red-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">Telepon</h3>
                <a href="tel:02122816708" class="text-gray-600 hover:text-red-600 transition">021-22816708</a>
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
        <a href="#" target="_blank" class="px-8 py-4 bg-white text-blue-700 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
            Lihat Profil Perusahaan
        </a>
    </div>
</section>


@endsection