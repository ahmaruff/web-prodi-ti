@extends('public.layouts.base')

@section('title')
    Struktur Organisasi
@endsection

@section('content')
<div class="flex flex-col items-center justify-center w-full h-screen md:flex-row">
    <div class="h-screen md:w-2/3">
        <div class="pt-24 md:pt-32"></div>
        <h1 class="mx-16 text-4xl font-black md:text-6xl">
           <span class="text-purple-500">Struktur Organisasi</span> Program Studi Teknik Informatika
        </h1>
        <div class="block mx-16 mt-16">
            <a href="#kaprodi" class="px-10 py-3 font-bold text-white shadow-lg rounded-xl bg-gradient-to-tr from-purple-500 to-indigo-400 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-pink-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                Organisasi
            </a>
        </div>
    </div>
</div>
<div class="pt-24" id="kaprodi"></div>
<div class="flex flex-col w-screen min-h-screen">
    <div class="flex flex-col items-center justify-center w-screen gap-6 md:flex-row">
        <div class="md:w-1/3">
            <div class="flex flex-col bg-white shadow-xl md:flex-row rounded-xl hover:scale-105">
                <div class="md:w-1/3">
                    <img src="{{asset('/storage/uploads/dosen/'.$kaprodi['image'])}}" alt="" class="object-cover w-full h-full md:rounded-l-xl">
                </div>
                <div class="flex flex-col justify-center gap-2 px-6 py-4">
                    <h2 class="py-1 text-xl font-light border-b-2">
                        Ketua Program Studi
                    </h2>
                    <h3 class="text-2xl font-bold">
                        {{$kaprodi['nama']}}
                    </h3>
                    <a href="mailto:{{$kaprodi['email']}}" rel="noopener noreferrer" class="text-lg hover:text-blue-600 hover:underline">{{$kaprodi['email']}}</a>
                    <p>
                       NIDN: <span class="font-bold">{{$kaprodi['nidn']}}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="md:w-1/3">
            <div class="flex flex-col bg-white shadow-xl md:flex-row rounded-xl hover:scale-105">
                <div class="md:w-1/3">
                    <img src="{{asset('/storage/uploads/dosen/'.$sekprodi['image'])}}" alt="" class="object-cover w-full h-full md:rounded-l-xl">
                </div>
                <div class="flex flex-col justify-center gap-2 px-6 py-4">
                    <h2 class="py-1 text-xl font-light border-b-2">
                        Sekretaris Program Studi
                    </h2>
                    <h3 class="text-2xl font-bold">
                        {{$sekprodi['nama']}}
                    </h3>
                    <a href="mailto:{{$sekprodi['email']}}" rel="noopener noreferrer" class="text-lg hover:text-blue-600 hover:underline">{{$sekprodi['email']}}</a>
                    <p>
                       NIDN: <span class="font-bold">{{$sekprodi['nidn']}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-24">
        <h1 class="py-20 text-2xl font-bold text-center md:text-4xl">
            Staff Pengajar
        </h1>
        <div class="flex flex-wrap gap-6">
            @livewire('show-dosen-public')
        </div>
    </div>
</div>



@endsection
