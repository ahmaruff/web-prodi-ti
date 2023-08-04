@extends('public.layouts.base')

@section('title')
Prestasi Mahasiswa
@endsection

@section('content')
<div class="flex flex-col-reverse items-center justify-center h-screen md:flex-row">
    <div class="z-20 md:w-1/2">
        <h1 class="px-8 text-3xl font-black md:px-16 md:text-6xl"><span class="text-purple-600">Prestasi</span> Mahasiswa, Teknik <span class="text-purple-600">Informatika</span>!</h1>
    </div>
    <div class="h-full bg-center bg-no-repeat bg-cover md:w-1/2" style="background-image: url('/assets/images/ftj.jpg')">
        <div class="pt-24" id=""></div>
    </div>
</div>
<div class="py-16">
@livewire('show-prestasi-public')
</div>
@endsection
