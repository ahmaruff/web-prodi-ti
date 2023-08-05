@extends('public.layouts.base')
@section('title')
    {{$artikel->title}}
@endsection

@section('content')
<div class="flex flex-col justify-center w-full min-h-screen">
    <div class="pt-24"></div>
    @if (isset($artikel->image))
    <div class="w-full h-60 md:h-80 self-center">
        <img alt="illustrasi" src="{{asset('/storage/uploads/artikel/'.$artikel->image)}}" class="object-cover w-full h-60 md:h-80">
    </div>
    @endif
    <h1 class="text-2xl font-black md:text-4xl text-center pt-8 mx-8 md:mx-24">
        {{$artikel->title}}
    </h1>
    <div class="self-center md:p-4 mx-8 text-center">
        <span class="border-r-2 border-gray-700 px-2">
            <x-local-time datetime="{{$artikel->published_at}}" />
        </span>
        <span class="border-r-2 border-gray-700 px-2 text-purple-600">
            {{$artikel->author}}
        </span>
        <span class="capitalize px-2 font-semibold">
            {{$artikel->category}}
        </span>
    </div>
    <div class="w-full bg-white self-center w-full flex flex-col justify-center">
        <div class="mx-8 my-16 prose container w-fit md:mx-auto">
            {!! $artikel->content_html !!}

            <hr>
            <div class="w-fit text-lg font-bold mx-8 hover:text-purple-600 ml-auto">
                <a href="{{route('public.berita.index')}}">
                <x-lucide-arrow-left class="w-6 h-6 inline-block" /> <span>Kembali</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
