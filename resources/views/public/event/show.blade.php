@extends('public.layouts.base')
@section('title')
    {{$event->judul}}
@endsection

@section('content')
<div class="flex flex-col justify-center w-full min-h-screen">
    <div class="pt-24"></div>
    @if (isset($event->poster))
    <div class="self-center w-full md:w-1/3 h-fit">
        <img alt="poster" src="{{asset('/storage/uploads/kemahasiswaan/event/'.$event->poster)}}" class="object-cover w-full h-full">
    </div>
    @endif
    <h1 class="pt-8 mx-8 text-2xl font-black text-center md:text-4xl md:mx-24">
        {{$event->judul}}
    </h1>
    <div class="self-center p-4 text-center">
        <span class="px-2">
            <x-local-time datetime="{{$event->tanggal}}" />
        </span>
    </div>

    <div class="self-center w-full bg-white">
        <div class="mx-auto my-16 prose">
            {!! $event->content_html !!}

            <a href="{{route('public.event.index')}}" class="w-full font-bold text-right hover:underline hover:text-blue-500">
                <span><x-lucide-arrow-left class="inline-block w-4 h-4 mr-2" /></span>
                <span>Kembali</span>
            </a>
        </div>

    </div>

</div>
@endsection
