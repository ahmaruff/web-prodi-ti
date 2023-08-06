@extends('public.layouts.base')
@section('title')
    Pusat Unduhan
@endsection

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    <h1 class="w-full py-24 text-4xl font-black text-center md:text-6xl md:py-32">
        <span class="text-purple-600">Pusat </span>Unduhan
    </h1>
    <div class="bg-white ">
        <div class="mx-4 my-16 overflow-x-auto md:mx-24">
            @livewire('show-unduhan-public')
        </div>
    </div>
</div>
@endsection
