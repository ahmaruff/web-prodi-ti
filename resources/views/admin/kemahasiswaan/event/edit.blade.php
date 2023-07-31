<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
               Edit | {{ $event_mahasiswa->judul }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="">
            <form action="{{route('admin.event-mahasiswa.update', $event_mahasiswa->id)}}" method="post" enctype=multipart/form-data
            x-data="{content : {html : '{{$event_mahasiswa->content_html}}', json : '{{$event_mahasiswa->content_json}}'}}"
            >
                @method('PATCH')
                {{ csrf_field() }}
                <label for="title" class="block">
                    <span class="">Judul</span>
                    <input type="text" name="judul" id="" value="{{$event_mahasiswa->judul}}" placeholder="Judul Event" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('judul'))<span class="block w-full text-red-500">{{ $errors->first('judul') }}</span> @endif
                </label>
                <div class="flex items-center my-8 space-x-4">
                    <label for="tanggal" class="block w-1/2">
                        <span class="">Tanggal</span>
                        <input type="date" name="tanggal" id="" value="{{$event_mahasiswa->tanggal}}" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('tanggal'))<span class="block w-full text-red-500">{{ $errors->first('tanggal') }}</span> @endif
                    </label>
                    <label for="poster" class="block w-1/2">
                        <span class="mr-4 min-w-max">Poster</span>
                        <input type="file" name="poster" id=""
                        class="block w-full mt-1 bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('poster'))<span class="block w-full text-red-500 ">{{ $errors->first('poster') }}</span> @endif
                    </label>
                </div>

                <div class="mb-4 bg-gray-100 rounded-lg dark:bg-dark-eval-2">
                    <x-tiptap-alpine></x-tiptap-alpine>
                </div>

                {{-- <x-tiptap wire:model='content></x-tiptap> --}}
                <input type="hidden" name="content_html" x-bind:value="content.html">
                <input type="hidden" name="content_json" x-bind:value="JSON.stringify(content.json)">
                <x-button type="submit" value="submit" variant="primary"
                >
                    <x-lucide-save class="w-4 h-4 mr-2" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
