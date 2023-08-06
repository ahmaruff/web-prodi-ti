@extends('public.layouts.base')

@section('title')
    Visi Misi Teknik Informatika
@endsection

@section('content')
<div class="flex flex-col items-center w-full h-screen md:flex-row">
    <div class="bg-center bg-no-repeat bg-cover md:h-screen md:w-1/2" style="background-image: url('/assets/images/maba-putih.jpg')">

    </div>
    <div class="md:h-screen md:w-1/2">
        <div class="pt-24 md:pt-32"></div>
        <h1 class="mx-16 text-4xl font-black md:text-6xl">
            <span class="text-purple-700 hover:text-purple-600">Visi Misi</span>  Program Studi Teknik <span class="px-1 text-white bg-purple-600">Informatika</span>
        </h1>
        <div class="block mx-16 mt-16">
            <a href="#visi" class="px-10 py-3 font-bold text-white shadow-lg rounded-xl bg-gradient-to-tr from-purple-500 to-indigo-400 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-indigo-500 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                Visi Misi
            </a>
        </div>
    </div>
</div>
<div class="" id="visi">
    <h1 class="px-10 py-24 text-xl font-bold text-center bg-white md:px-24 md:text-4xl">
        {{$visi['visi']}}
    </h1>
    <div class="w-full py-24 bg-gray-100">
        <h2 class="my-8 text-4xl font-bold text-center text-purple-600">
            Misi
        </h2>
        <ul class="flex flex-col items-center justify-center gap-y-4">
            @foreach ($misi as $item_misi)
            <li class="w-full px-10 py-8 font-semibold bg-white shadow-lg md:rounded-2xl md:w-2/3 hover:bg-purple-600 hover:text-white hover:transition-colors hover:ease-in-out hover:scale-105 hover:shadow-xl">
                {{$item_misi['misi']}}
            </li>
            @endforeach
        </ul>
    </div>
    <div class="w-full py-24 bg-white">
        <h2 class="my-8 text-4xl font-bold text-center text-purple-600">
            Tujuan
        </h2>
        <ul class="flex flex-col items-center justify-center gap-y-4">
            @foreach ($tujuan as $item_tujuan)
            <li class="w-full px-10 py-8 mx-10 font-semibold text-white bg-purple-500 shadow-lg md:rounded-2xl md:w-2/3 hover:transition-colors hover:ease-in-out hover:scale-105 hover:shadow-xl">
                {{$item_tujuan['tujuan']}}
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
