@extends('public.layouts.base')
@section('title')
    Pusat Unduhan
@endsection

@section('content')
<div class="flex flex-col justify-center min-h-screen">
    <h1 class="text-4xl font-black md:text-6xl text-center w-full py-24 md:py-32">
        <span class="text-purple-600">Pusat </span>Unduhan
    </h1>
    <div class="w-full bg-white">
        <div class="mx-4 md:mx-24 my-16">
            @livewire('show-unduhan-public')
        </div>
    </div>
</div>
@endsection
