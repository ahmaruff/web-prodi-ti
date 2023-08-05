@extends('public.layouts.base')
@section('title')
    Fasilitas
@endsection

@section('content')
<div class="flex flex-col items-center w-full min-h-96 md:flex-row">
    <div class="h-full md:w-1/2">
        <div class="pt-24 md:pt-32"></div>
        <h1 class="mx-16 text-4xl font-black md:text-6xl">
            <span class="text-purple-700 hover:text-purple-600">Fasilitas</span>  Program Studi Teknik Informatika
        </h1>
    </div>
    <div class="md:h-96 bg-center bg-no-repeat bg-cover md:w-1/2" style="background-image: url('/assets/images/maba-jalan-2.jpg')">
    </div>
</div>
<div class="w-full min-h-96 py-24">
    <div x-data x-masonry class="grid grid-cols-1s md:grid-cols-4 gap-6 my-16 md:my-20 md:mx-24">
        @foreach ($fasilitas as $item)
            <div class="h-fit bg-white shadow-lg md:rounded-xl w-full md:min-w-80 hover:scale-105 hover:transition-all hover:ease-in-out">
                <div class="w-full h-52">
                    <img src="{{asset('/storage/uploads/fasilitas/'.$item['image'])}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                </div>
                <div class="w-full h-full px-6 py-4">
                    <h1 class="text-bold text-center font-semibold hover:underline text-lg">
                        {{$item['nama']}}
                    </h1>
                    <p class="text-center text-sm text-gray-500 capitalize hover:underline">
                        {{$item['deskripsi']}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
