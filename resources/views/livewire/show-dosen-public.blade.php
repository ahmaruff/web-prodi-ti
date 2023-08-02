<div class="w-full">
    <div class="flex justify-center">
        <input type="text" placeholder="Cari Dosen" wire:model='search' class="w-1/2 rounded-full border-purple-500 border-2 focus:border-purple-700 text-center bg-white shadow-md focus:shadow-lg">
    </div>
    <div x-data x-masonry class="grid grid-cols-2 md:grid-cols-4 gap-8 my-16 md:my-20 mx-16 md:mx-24">
        @foreach ($dosen as $item)
            <div class="h-fit bg-white shadow-lg rounded-xl min-w-60 hover:scale-105 hover:transition-all hover:ease-in-out">
                <div class="w-full h-52">
                    <img src="{{asset('/storage/uploads/dosen/'.$item->image)}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                </div>
                <div class="w-full h-full px-6 py-4">
                    <h1 class="text-bold text-center font-semibold hover:underline text-lg">
                        {{$item->nama}}
                    </h1>
                    <a href="mailto:{{$item->email}}" class="my-1 text-gray-500 text-center block break-words hover:underline hover:text-blue-700 text-sm" target="_blank" rel="noreferre noopener">{{$item->email}}</a>
                    <p class="text-sm font-semibold text-center">
                        NIDN: {{ $item->nidn }}
                    </p>
                    <p class="text-center text-sm text-gray-500 capitalize hover:underline">
                        {{$item->jabatan_akademik}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mx-16 md:mx-24">
        {{$dosen->links()}}
    </div>
</div>
