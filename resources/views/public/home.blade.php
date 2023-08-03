@extends('public.layouts.base')


@section('title')
Teknik Informatika UNSIQ
@endsection

@section('content')
<div class="md:mt-24" id="top"></div>
<div class="flex flex-col justify-center w-full h-screen md:mt-16 md:flex-row">
    <div class="w-full md:w-1/2" style="min-height: 20rem;">
        <div class="relative">
            <div class="absolute z-10 w-32 pt-16 rounded-full shadow-lg top-16 left-8 bg-gradient-to-tr from-purple-500 to-pink-500 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute z-10 w-20 pt-32 rounded-lg shadow-lg top-48 left-20 bg-gradient-to-tr from-indigo-500 to-teal-500 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute z-10 w-32 pt-32 rounded-full shadow-lg top-48 right-20 bg-gradient-to-br from-amber-400 to-red-400 hover:transition hover:ease-linear hover:scale-125"></div>
            <div class="absolute top-0 z-10 w-24 pt-24 rounded-lg shadow-lg right-20 bg-gradient-to-br from-pink-500 to-indigo-300 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute z-20 w-48 pt-24 rounded-full shadow-lg top-2 right-64 bg-gradient-to-tl from-amber-500 to-yellow-300 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute z-20 w-2/3 rounded-lg top-6 left-8 md:left-24 aspect-video hover:transition hover:ease-linear">
                <img src="/assets/images/hero.jpg" alt="" class="object-cover w-full ease-in-out rounded-lg shadow-2xl aspect-video hover:transition hover:ease-linear hover:scale-105">
            </div>
        </div>
    </div>
    <div class="w-full px-8 md:w-1/2">
        <div>
            <h1 class="text-4xl font-black md:text-6xl">
                We Build a <span class="text-purple-700 hover:text-purple-600">Better Tech</span> For Humanity
            </h1>
            <h2 class="block mt-6 text-xl font-light md:text-2xl">
                Ayo bergabung bersama kami dalam memajukan teknologi Indonesia
            </h2>
        </div>
        <div class="flex items-center h-20">
            <a href="#about" class="static px-10 py-3 font-bold text-white rounded-full shadow-lg bg-gradient-to-tr from-purple-500 to-pink-500 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-pink-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                Explore
            </a>
        </div>
    </div>
</div>
<div class="min-h-screen bg-white" id="about">
    <div class="pt-24 bg-white"></div>
    <div class="flex flex-col justify-center md:flex-row">
        <div class="flex items-center justify-center md:w-1/2">
            <div class="w-3/4">
                <h1 class="text-xl font-semibold text-purple-700 md:text-2xl">
                    Program Studi
                </h1>
                <h1 class="text-3xl font-bold md:text-4xl hover:transition hover:scale-105">
                    Teknik Informatika
                </h1>
                <p class="mt-4 text-gray-600">
                    Berdiri sejak tahun 2001, Teknik Informatika UNSIQ senantiasa berkembang melalui
                    kurikulum inovatif, pendekatan humanis, dan <span class="font-semibold text-purple-700">bernafaskan Qur'ani</span> <br>
                    Memiliki program unggulan untuk menghasilkan sarjana komputer yang ahli dalam <span class="font-semibold text-purple-700">pengembangan perangkat lunak dan sistem cerdas</span>
                </p>
                <a href="#profil-lulusan" class="block px-6 py-4 mt-4 mb-8 font-semibold text-center text-white rounded-full shadow-lg w-fit bg-gradient-to-r from-indigo-500 to-purple-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                Profil Lulusan
                </a>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="/assets/images/rifig.jpg" alt="" class="object-cover w-full h-full md:rounded-l-full">
        </div>
    </div>
</div>
<div class="min-h-screen mx-10 md:mx-24" id="profil-lulusan">
    <div class="pt-24"></div>
    <div class="flex flex-col md:flex-row">
        <div class="mx-6 md:w-1/2 md:mx-16">
            <ul x-data x-masonry class="grid grid-cols-2 gap-4">
                <li class="text-white rounded-lg bg-slate-900 h-60">
                    <img src="/assets/images/konser.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                </li>
                <li class="text-white rounded-lg h-36 bg-slate-900">
                    <img src="/assets/images/pak-hid.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                </li>
                <li class="text-white rounded-lg h-28 bg-slate-900">
                    <img src="/assets/images/pak-dian.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                </li>
                <li class="text-white rounded-lg h-52 bg-slate-900">
                    <img src="/assets/images/kuliah-tamu.jpeg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                </li>
            </ul>
        </div>
        <div class="flex items-center justify-center w-full md:w-1/2 sm:mt-16 md:mt-0">
            <div class="container w-full" x-data="{ activeAccordion: 0 }">
                <h1 class="mb-2 font-bold ttext-3xl md:text-4xl hover:transition hover:scale-105">
                   <span class="text-purple-600">Profil</span> Lulusan
                </h1>
                @foreach ($profil_lulusan as $lulusan)
                <div>
                    <button class="text-lg font-semibold hover:text-purple-600"
                        @click="activeAccordion = activeAccordion === {{$lulusan['id']}} ? false : {{$lulusan['id']}}"
                        :class="{ 'button-active underline text-purple-600 mt-2': activeAccordion === {{$lulusan['id']}} }"
                        class="button"
                    >
                        {{$lulusan['profil_lulusan']}}
                    </button>

                    <div x-cloak x-show="activeAccordion === {{$lulusan['id']}}" x-collapse>
                        <div class="mb-3 font-light content">
                        {{$lulusan['deskripsi']}}
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <a href="#3" class="block px-6 py-2 mt-4 mb-8 font-semibold text-white rounded-r-full shadow-lg w-fit bg-gradient-to-tr from-purple-500 to-teal-400 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                    Berita Terbaru
                </a> --}}
            </div>
        </div>
    </div>
</div>
<div class="min-h-screen px-10 pb-16 md:px-24 bg-gradient-to-br from-slate-500 to-neutral-400 " id="3">
    <div class="pt-24"></div>
    <h1 class="my-8 text-3xl font-bold text-center text-white md:text-4xl hover:transition hover:scale-105">
        Berita Terbaru
    </h1>
    <div class="flex flex-col justify-center gap-6 md:flex-row">
        @foreach ($berita_terbaru as $berita)
            <div class="w-full bg-white shadow-lg md:w-1/4 rounded-xl h-96 hover:scale-105 hover:ease-in-out hover:transition-all">
                <div class="w-full h-1/2">
                @if (isset($berita['image']))
                    <img src="{{url('/storage/uploads/artikel/'.$berita['image'])}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                @else
                    <img src="/assets/images/logo/sm-fullcolor-bg-light.png" alt="" class="self-center object-scale-down w-3/4 h-full mx-auto bg-white rounded-t-xl">
                @endif
                </div>
                <div class="h-1/2">
                    <div class="px-4 py-1 mt-1 ml-auto text-sm text-right text-white rounded-l-full bg-cyan-600 w-fit">
                        <x-local-time datetime="{{$berita['published_at']}}"/>
                    </div>
                    <div class="flex flex-col justify-center px-4 py-2 h-3/5">
                        <h1 class="font-bold text-gray-800">
                            {{$berita['title']}}
                        </h1>
                    </div>
                    <a href="{{route('public.berita.show', [$berita['category'], $berita['id'], $berita['slug']])}}" class="block px-4 py-1 text-sm font-semibold text-center text-white bg-purple-700 rounded-r-full shadow-md w-fit hover:bg-purple-800 hover:-translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                        Baca <x-lucide-arrow-right class="inline-block w-4 h-4" />
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="w-full mx-auto mt-8">
        <a href="{{route('public.berita.index')}}" class="block px-8 py-4 mx-auto my-8 font-semibold text-center text-white rounded-full shadow-lg w-fit bg-gradient-to-r from-purple-600 to-cyan-500 hover:translate-x-2 hover:shadow-2xl hover:ease-linear hover:transition">
        Cari Berita Lainnya <x-lucide-arrow-right class="inline-block w-4 h-4" />
        </a>
    </div>
</div>
@endsection
