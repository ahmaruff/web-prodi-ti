@extends('public.layouts.base')
@section('title')
    Akreditasi
@endsection

@section('content')
<div class="flex flex-col items-center w-full min-h-96 md:flex-row">
    <div class="md:w-1/2 h-min">
        <div class="pt-24 md:pt-32"></div>
        <h1 class="m-16 text-4xl font-black md:text-6xl">
            <span class="text-purple-700 hover:text-purple-600">Akreditasi</span>  Program Studi Teknik Informatika
        </h1>
    </div>
    <div class="bg-center bg-no-repeat bg-cover md:h-96 md:w-1/2" style="background-image: url('/assets/images/maba-jalan.jpg')">
    </div>
</div>
<div class="w-full py-24 bg-white min-h-96">
    <div class="container flex flex-col items-center justify-center mx-auto min-h-96">
        @foreach ($akreditasi as $akred)
        <div class="p-6 mx-4 bg-gray-100 border-2 shadow-xl md:w-2/3 rounded-xl hover:bg-white">
            <table class="w-full text-left table-auto">
                <tbody>
                    <tr>
                        <th>Peringkat</th>
                        <td class="text-xl font-bold">
                            {{$akred['peringkat']}}
                        </td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td class="font-bold">
                            {{$akred['prodi']}}
                        </td>
                    </tr>
                    <tr>
                        <th>No SK</th>
                        <td class="hover:underline">
                            {{$akred['no_sk']}}
                        </td>
                    </tr>
                    <tr>
                        <th>Terbit</th>
                        <td class="text-gray-500">
                            <x-local-time datetime="{{$akred['tgl_terbit']}}" />
                        </td>
                    </tr>
                    <tr>
                        <th>Kadaluarsa</th>
                        <td>
                            <x-local-time datetime="{{$akred['tgl_kadaluarsa']}}" />
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td class="text-lg font-semibold text-purple-700 capitalize">
                            {{$akred['status']}}
                        </td>
                    </tr>
                    <tr>
                        <th>Dokumen</th>
                        <td>
                            <a href="{{url('/storage/uploads/akreditasi/'.$akred['dokumen_sk'])}}"
                            class="text-sm font-semibold text-blue-600 hover:underline hover:text-blue-800"
                            >
                            Unduh disini
                        </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>

@endsection
