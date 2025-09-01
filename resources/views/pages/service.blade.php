@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<section class="relative bg-cover bg-center min-h-80 pt-5 md:pt-20 flex items-center justify-start" style="background-image: url('{{ asset('images/eduvibe-breadcrumb-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="container mx-auto px-12 relative z-10">
        <div class="text-left text-white">
            <h1 class="font-extrabold text-4xl md:text-5xl tracking-tight leading-tight mb-2">Layanan Kami</h1>
            <nav class="text-sm text-gray-200">
                <ol class="list-reset flex space-x-2">
                    <li><a href="/" class="hover:text-red-400">Beranda</a></li>
                    <li>/</li>
                    <li class="text-white font-semibold">Layanan Kami</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection