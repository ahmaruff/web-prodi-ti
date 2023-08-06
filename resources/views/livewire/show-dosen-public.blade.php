<div class="w-full">
    <div class="flex justify-center">
        <input type="text" placeholder="Cari Dosen" wire:model='search' class="mx-8 text-center bg-white border-2 border-purple-500 rounded-full shadow-md md:w-1/2 focus:border-purple-700 focus:shadow-lg">
    </div>
    <div x-data x-masonry class="grid grid-cols-1 gap-8 mx-4 my-16 md:grid-cols-4 md:my-20 md:mx-24">
        @foreach ($dosen as $item)
            <div class="bg-white shadow-lg h-fit rounded-xl min-w-60 hover:scale-105 hover:transition-all hover:ease-in-out">
                <div class="w-full h-52">
                    <img src="{{asset('/storage/uploads/dosen/'.$item->image)}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                </div>
                <div class="w-full h-full px-6 py-4">
                    <h1 class="text-lg font-semibold text-center text-bold hover:underline">
                        {{$item->nama}}
                    </h1>
                    <a href="mailto:{{$item->email}}" class="block my-1 text-sm text-center text-gray-500 break-words hover:underline hover:text-blue-700" target="_blank" rel="noreferre noopener">{{$item->email}}</a>
                    <p class="text-sm font-semibold text-center">
                        NIDN: {{ $item->nidn }}
                    </p>
                    <p class="text-sm text-center text-gray-500 capitalize hover:underline">
                        {{$item->jabatan_akademik}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mx-8 md:mx-24">
        {{$dosen->links()}}
    </div>
</div>
