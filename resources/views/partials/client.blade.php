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