<div>
    <div class="flex justify-center">
        <input type="text" placeholder="Cari Event" wire:model='search' class="w-1/2 text-center bg-white border-2 border-purple-500 rounded-full shadow-md focus:border-purple-700 focus:shadow-lg">
    </div>
    <div class="flex flex-col justify-center mx-4 md:mx-10">
        <div x-data x-masonry class="flex flex-wrap justify-center gap-6 my-8">
            @foreach ($event as $item)
                <div class="w-screen bg-white shadow-lg h-fit rounded-xl md:w-80 hover:scale-105 hover:transition-all hover:ease-in-out">
                    <div class="w-full h-52">
                        <img src="{{asset('/storage/uploads/kemahasiswaan/event/'.$item->poster)}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                    </div>
                    <div class="w-full h-full px-6 py-4 text-center">
                        <p class="text-sm font-semibold text-center text-gray-600">
                            <x-local-time datetime="{{ $item->tanggal }}" />
                        </p>
                        <a href="{{route('public.event.show', [$item->id, $item->slug])}}" target="_blank" class="text-lg font-semibold md:text-xl text-bold hover:underline">
                            {{$item->judul}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mx-16 md:mx-24">
            {{$event->links()}}
        </div>
    </div>

</div>
