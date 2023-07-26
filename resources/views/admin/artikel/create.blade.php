<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Buat Artikel Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="">
            <form action="{{route('artikel.store')}}" method="post" enctype=multipart/form-data
            x-data="{content : {html : '<h2>Ayo menulis!</h2>', json : ''}}"
            >
                {{ csrf_field() }}
                <label for="title" class="block">
                    <span class="text-gray-700">Judul</span>
                    <input type="text" name="title" id="" value="" placeholder="Judul Artikel"
                    class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-purple-500 focus:bg-white focus:ring-0"
                    >
                </label>
                <div class="flex space-x-4 w-full justify-between my-4">
                    <label for="category" class="block w-1/2">
                        <span class="text-gray-700">Kategori</span>
                        <select name="category" id=""
                        class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-purple-500 focus:bg-white focus:ring-0"
                        >
                            <option value="">Kategori</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="berita">Berita</option>
                            <option value="kemahasiswaan">Kemahasiswaan</option>
                        </select>
                    </label>
                    <label for="author" class="block w-1/2">
                        <span class="text-gray-700">Penulis</span>
                        <input type="text" name="author" id="" value="" placeholder="John Doe"
                        class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-purple-500 focus:bg-white focus:ring-0"
                        >
                    </label>
                </div>
                <label for="image" class="block mb-6">
                    <span class="text-gray-700">Gambar Illustrasi</span>
                    <input type="file" name="image" id=""
                    class="block w-full mt-1 focus:border-none"
                    >
                </label>
                <x-tiptap-alpine></x-tiptap-alpine>
                {{-- <x-tiptap wire:model='content></x-tiptap> --}}
                <input type="hidden" name="content_html" x-bind:value="content.html">
                <input type="hidden" name="content_json" x-bind:value="JSON.stringify(content.json)">
                <x-button type="submit" value="submit" variant="primary"
                >Save</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
