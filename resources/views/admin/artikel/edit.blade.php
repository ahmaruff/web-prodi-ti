<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Edit Artikel | {{$artikel->title}}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="">
            <form action="{{route('artikel.update', [$artikel->id])}}" method="post" enctype=multipart/form-data
            x-data="{content : {html : '{{$artikel->content_html}}', json : {{$artikel->content_json}}}}"
            >
                @method('PUT')
                @csrf
                <label for="title" class="block">
                    <span class="">Judul</span>
                    <input type="text" name="title" id="" value="{{$artikel->title}}" placeholder="Judul Artikel" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                </label>
                @if ($errors->has('title'))<span class="text-red-500">{{ $errors->first('title') }}</span> @endif
                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="category" class="block w-1/2">
                        <span class="">Kategori</span>
                        <select name="category" id="" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                            <option value="{{$artikel->category}}">{{$artikel->category}}</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="berita">Berita</option>
                            <option value="kemahasiswaan">Kemahasiswaan</option>
                        </select>
                        @if ($errors->has('category'))<span class="text-red-500">{{ $errors->first('category') }}</span> @endif
                    </label>

                    <label for="author" class="block w-1/2">
                        <span class="">Penulis</span>
                        <input type="text" name="author" id="" value="{{$artikel->author}}" placeholder="John Doe" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('author'))<span class="block w-full text-red-500">{{ $errors->first('author') }}</span> @endif
                    </label>
                </div>
                <div class="flex items-center my-8 space-x-4">
                    <label for="image" class="flex items-center w-1/2">
                        <span class="mr-4 min-w-max">Gambar Illustrasi</span>
                        <input type="file" name="image" id=""
                        class="block w-full m-0 text-sm bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('image'))<span class="text-red-500 ">{{ $errors->first('image') }}</span> @endif
                    </label>
                    <div class="w-1/2">
                        <input
                        class="h-5 w-8 border-none appearance-none rounded-full bg-gray-100 before:pointer-events-none before:absolute before:h-5 before:w-5 before:m-0 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:h-5 after:w-5 after:-mt-[1px] after:rounded-full after:bg-gray-300 after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-purple-500 checked:after:absolute checked:after:-mt-[1px] checked:after:ml-4 checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-purple-50 checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer hover:bg-gray-100 focus:outline-none focus:ring-0 focus:bg-purple-500 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-purple-500 checked:focus:bg-purple-500 checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-gray-600 dark:after:bg-gray-400 dark:checked:bg-purple-500 dark:checked:after:bg-purple-50 dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                        type="checkbox" @if ($artikel->is_published) {{ 'checked' }}@endif
                        role="switch"
                        name="is_published"
                         />
                        <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="flexSwitchCheckDefault"
                        >
                            Terbitkan Sekarang
                        </label>
                        @if ($errors->has('is_published'))<span class="text-red-500">{{ $errors->first('is_published') }}</span> @endif
                    </div>

                </div>

                <div class="mb-4 bg-gray-100 rounded-lg dark:bg-dark-eval-2">
                    <x-tiptap-alpine></x-tiptap-alpine>
                </div>

                {{-- <x-tiptap wire:model='content></x-tiptap> --}}
                <input type="hidden" name="id" value="{{$artikel->id}}">
                <input type="hidden" name="content_html" x-bind:value="content.html">
                <input type="hidden" name="content_json" x-bind:value="JSON.stringify(content.json)">
                <x-button type="submit" value="submit" variant="primary"
                >
                    <x-coolicon-save class="w-4 h-4 mr-2"></x-coolicon-save>
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
