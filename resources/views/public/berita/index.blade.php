@extends('public.layouts.base')
@section('title')
    Berita & Informasi
@endsection

@section('content')
<div class="flex flex-col justify-center">
    <h1 class="py-24 text-4xl font-black text-center md:text-6xl md:py-32">
        <span class="text-purple-600">Berita</span> dan Informasi
    </h1>
</div>
<div class="self-center w-full px-8 md:px-24">
    <div class="px-8 py-3 font-bold text-left text-white rounded-r-full shadow-lg w-fit bg-gradient-to-tr from-purple-500 to-pink-500 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-pink-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition font-lg">
            Pengumuman Terkini
    </div>
    <div class="flex flex-col flex-wrap self-center justify-center gap-2 my-8 md:flex-row md:gap-8">
        @foreach ($pengumuman_terkini as $pengumuman)
        <div class="w-full bg-white shadow-lg md:w-1/4 rounded-xl h-96 hover:scale-105 hover:ease-in-out hover:transition-all">
            <div class="hidden md:block md:w-full md:h-1/2 ">
                @if (isset($pengumuman['image']))
                <img src="{{url('/storage/uploads/artikel/'.$pengumuman['image'])}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                @else
                <img src="/assets/images/logo/sm-fullcolor-bg-light.png" alt="" class="self-center object-scale-down w-3/4 h-full mx-auto bg-white rounded-t-xl">
                @endif

            </div>
            <div class="h-full sm:h-1/2">
                <div class="px-2 py-1 mt-1 ml-auto text-xs text-right text-white rounded-l-full md:px-4 md:text-sm bg-cyan-600 w-fit">
                    <x-local-time datetime="{{$pengumuman['published_at']}}"/>
                </div>
                <div class="flex flex-col justify-center px-4 py-2 h-3/5">
                    <h1 class="font-bold text-gray-800">
                        {{$pengumuman['title']}}
                    </h1>
                </div>
                <a href="{{route('public.berita.show', [$pengumuman['category'], $pengumuman['id'], $pengumuman['slug']])}}" class="block px-4 py-1 text-sm font-semibold text-center text-white bg-purple-700 rounded-r-full shadow-md w-fit hover:bg-purple-800 hover:-translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                    Baca <x-lucide-arrow-right class="inline-block w-4 h-4" />
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="self-center w-full px-8 py-6 bg-white md:px-24 md:py-16">

    <div>
        @livewire('show-artikel-public')
    </div>

</div>
@endsection
