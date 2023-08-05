@extends('public.layouts.base')
@section('title')
    Akreditasi
@endsection

@section('content')
<div class="flex flex-col items-center w-full min-h-96 md:flex-row">
    <div class="md:w-1/2 h-min">
        <div class="pt-24 md:pt-32"></div>
        <h1 class="mx-16 text-4xl font-black md:text-6xl">
            <span class="text-purple-700 hover:text-purple-600">Akreditasi</span>  Program Studi Teknik Informatika
        </h1>
    </div>
    <div class="md:h-96 bg-center bg-no-repeat bg-cover md:w-1/2" style="background-image: url('/assets/images/maba-jalan.jpg')">
    </div>
</div>
<div class="w-full min-h-96 py-24 bg-white">
    <div class="flex flex-col min-h-96 container justify-center mx-auto items-center">
        @foreach ($akreditasi as $akred)
        <div class="md:w-2/3 bg-gray-100 rounded-xl shadow-xl p-6 border-2 hover:bg-white mx-4">
            <table class="table-auto text-left w-full">
                <tbody>
                    <tr>
                        <th>Peringkat</th>
                        <td class="font-bold text-xl">
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
                        <td class="font-semibold text-lg text-purple-700 capitalize">
                            {{$akred['status']}}
                        </td>
                    </tr>
                    <tr>
                        <th>Dokumen</th>
                        <td>
                            <a href="{{url('/storage/uploads/akreditasi/'.$akred['dokumen_sk'])}}"
                            class="text-sm font-semibold hover:underline text-blue-600 hover:text-blue-800"
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
