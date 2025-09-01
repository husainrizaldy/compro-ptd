<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Logo & Deskripsi -->
            <div>
                <img src="{{ asset('images/logo-full-bw-hz.png') }}" alt="CV. Patdara Kusuma Jaya" class="h-16">
                <p class="text-gray-400 text-sm leading-relaxed">
                    CV. Patdara Kusuma Jaya adalah bagian dari grup CV. RILI KUSUMA JAYA dan PT. ALKATA KUSUMA JAYA,
                    berpengalaman dalam layanan kebersihan, konstruksi, hingga pengadaan barang untuk berbagai instansi.
                </p>
            </div>

            <!-- Navigasi -->
            <div class="text-center md:text-left">
                <h3 class="font-semibold text-lg text-white mb-4">Navigasi</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-purple-400 transition">Beranda</a></li>
                    <li><a href="{{ url('/tentang-kami') }}" class="hover:text-purple-400 transition">Tentang Kami</a></li>
                    <li><a href="{{ url('/layanan') }}" class="hover:text-purple-400 transition">Layanan</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:text-purple-400 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="text-center md:text-left">
                <h3 class="font-semibold text-lg text-white mb-4">Hubungi Kami</h3>
                <ul class="space-y-2 text-sm">
                    <li>📍 Jl. Bambu Petung No.1 F-G, Cipayung, Jakarta Timur, 13840</li>
                    <li>📧 <a href="mailto:patdarajaya@gmail.com" class="hover:text-purple-400 transition">patdarajaya@gmail.com</a></li>
                    <li>☎️ <a href="tel:02122816708" class="hover:text-purple-400 transition">(021) 22816708</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} CV. Patdara Kusuma Jaya. All Rights Reserved.
        </div>
    </div>
</footer>
