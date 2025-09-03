<nav x-data="{ open: false }" class="bg-white fixed top-0 left-0 w-full z-50 font-urbanist">
    <div class="container mx-auto px-12 py-3 flex items-center justify-between">
        
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo-1.png') }}" alt="Patdara Kusuma Jaya" class="h-16">

            <p class="hidden lg:block text-xl font-semibold text-gray-800 uppercase">
                Cv. Patdara Kusuma Jaya
            </p>
        </a>

        <button @click="open = !open" class="md:hidden text-gray-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <div class="hidden md:flex md:items-center md:space-x-2">
            @php $current = request()->path(); @endphp

            <a href="{{ url('/') }}" class="px-4 py-2 rounded-full text-md font-semibold transition font-urbanist {{ $current === '/' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-blue-600 hover:text-white' }}">Beranda</a>
            <a href="{{ url('/tentang-kami') }}" class="px-4 py-2 rounded-full text-md font-semibold transition font-urbanist {{ $current === 'tentang-kami' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-blue-600 hover:text-white' }}">Tentang Kami</a>
            <a href="{{ url('/layanan') }}" class="px-4 py-2 rounded-full text-md font-semibold transition font-urbanist {{ $current === 'layanan' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-blue-600 hover:text-white' }}">Layanan</a>
            <a href="{{ url('/kontak') }}" class="px-4 py-2 rounded-full text-md font-semibold transition font-urbanist {{ $current === 'kontak' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-blue-600 hover:text-white' }}">Kontak</a>
        </div>
    </div>

    <div x-cloak x-show="open" x-collapse class="md:hidden px-4 pb-4">
        <div class="flex flex-col space-y-2">
            <a href="{{ url('/') }}" class="text-center px-4 py-2 rounded-full text-sm font-semibold transition font-urbanist text-gray-600 hover:bg-blue-600 hover:text-white">Beranda</a>
            <a href="{{ url('/tentang-kami') }}" class="text-center px-4 py-2 rounded-full text-sm font-semibold transition font-urbanist text-gray-600 hover:bg-blue-600 hover:text-white">Tentang Kami</a>
            <a href="{{ url('/layanan') }}" class="text-center px-4 py-2 rounded-full text-sm font-semibold transition font-urbanist text-gray-600 hover:bg-blue-600 hover:text-white">Layanan</a>
            <a href="{{ url('/kontak') }}" class="text-center px-4 py-2 rounded-full text-sm font-semibold transition font-urbanist text-gray-600 hover:bg-blue-600 hover:text-white">Kontak</a>
        </div>
    </div>
</nav>
