<div>
    <div class="flex flex-col items-center justify-between w-full md:flex-row">
        <div class="px-8 py-3 font-bold text-left text-white rounded-r-full shadow-lg w-fit bg-gradient-to-tr from-purple-500 to-pink-500 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-pink-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition font-lg">
            Informasi & Berita
        </div>
        <div class="flex flex-col gap-3 md:flex-row w-fit">
            <div>
                <label for="category" class="mr-2">Kategori</label>
                <select wire:model='category' id="" class="bg-white border-purple-500 rounded-lg focus:border-2 ring-1 focus:shadow-lg">
                    <option value="">Semua</option>
                    <option value="pengumuman">Pengumuman</option>
                    <option value="berita">Berita</option>
                    <option value="kemahasiswaan">Kemahasiswaan</option>
                </select>
            </div>
            <input type="text" wire:model='search' placeholder="Cari Artikel" class="block px-4 py-2 bg-white border-purple-500 rounded rounded-lg focus:shadow-lg focus:border-2 ring-1">
        </div>
    </div>
    <div x-data x-masonry class="grid grid-cols-2 gap-8 mx-16 my-8 md:grid-cols-4 md:mx-24">
        @foreach ($artikel as $item)
        <div class="w-full bg-gray-100 shadow-md h-fit rounded-xl hover:scale-105 hover:ease-in-out hover:transition-all h-96">
            <div class="hidden md:block md:w-full md:h-1/2">
                @if (isset($item['image']))
                <img src="{{url('/storage/uploads/artikel/'.$item['image'])}}" alt="" class="object-cover w-full h-full rounded-t-xl">
                @else
                <img src="/assets/images/logo/sm-fullcolor-bg-light.png" alt="" class="self-center object-scale-down w-3/4 h-full mx-auto my-4">
                @endif

            </div>
            <div class="h-auto">
                <div class="px-2 py-1 mt-1 ml-auto text-xs text-right text-white rounded-l-full md:px-4 md:text-sm bg-cyan-600 w-fit">
                    <x-local-time datetime="{{$item['published_at']}}"/>
                </div>
                <div class="p-2">
                    <h1 class="font-bold text-gray-800">
                        {{$item['title']}}
                    </h1>
                </div>
                <a href="{{route('public.berita.show', [$item['category'], $item['id'], $item['slug']])}}" class="block px-4 py-1 mt-auto text-sm font-semibold text-center text-white bg-purple-700 rounded-r-full rounded-bl-full shadow-md w-fit hover:bg-purple-800 hover:-translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                    Baca <x-lucide-arrow-right class="inline-block w-4 h-4" />
                </a>
            </div>
        </div>
       @endforeach
    </div>
</div>
