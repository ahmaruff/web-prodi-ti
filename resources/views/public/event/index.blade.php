@extends('public.layouts.base')

@section('title')
Prestasi Mahasiswa
@endsection

@section('content')
<div class="flex flex-col-reverse items-center justify-center md:h-screen md:flex-row">
    <div class="md:h-full bg-center bg-no-repeat bg-cover md:w-1/2" style="background-image: url('/assets/images/voli.jpg')">
        <div class="pt-24" id=""></div>
    </div>
    <div class="z-20 md:w-1/2">
        <img src="/assets/images/logo/logo-himti-text.png" alt="" class="w-1/2 px-8 my-8 aspect-auto md:px-16">
        <h1 class="px-8 text-3xl font-black md:px-16 md:text-5xl"><span class="text-white bg-purple-600">Event Mahasiswa</span> Teknik Informatika</h1>
    </div>
</div>
<div class="py-16">
@livewire('show-event-public')
</div>
@endsection
