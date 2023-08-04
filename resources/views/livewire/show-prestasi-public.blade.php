<div>
    <div class="flex justify-center">
        <input type="text" placeholder="cari prestasi" wire:model='search' class="w-1/2 text-center bg-white border-2 border-purple-500 rounded-full shadow-md focus:border-purple-700 focus:shadow-lg">
    </div>
    <div class="flex flex-col justify-center w-full mx-4 md:mx-10">
        <div x-data x-masonry class="flex flex-wrap justify-center gap-6 my-8">
            @foreach ($prestasi as $item)
                <div class="w-screen bg-white shadow-lg h-fit rounded-xl md:w-80 hover:scale-105 hover:transition-all hover:ease-in-out">
                    <div class="w-full h-52">
                        <img src="{{asset('/storage/uploads/kemahasiswaan/prestasi/'.$item->image)}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                    </div>
                    <div class="w-full h-full px-6 py-4">
                        <h1 class="text-lg font-semibold text-center text-bold hover:underline">
                            {{$item->juara}} <span>{{$item->tingkatan}}</span>
                        </h1>
                        <p class="text-sm font-semibold text-center">
                            {{ $item->nama_kompetisi }}
                        </p>
                        <p class="my-4 text-sm text-center text-gray-500 hover:text-gray-900">
                            {{$item->deskripsi}}
                        </p>
                        <p class="text-center text-gray-500">
                            <span class="text-gray-900">{{ $item->penyelenggara }}</span>
                            <br>
                            <x-local-time datetime="{{$item->tanggal}}" />
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mx-16 md:mx-24">
            {{$prestasi->links()}}
        </div>
    </div>

</div>
