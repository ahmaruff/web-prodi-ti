<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Edit | {{$info_akademik->judul}}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="">
            <form action="{{route('admin.akademik.info-akademik.update', $info_akademik->id)}}" method="post" enctype=multipart/form-data
            x-data="{content : {html : '{{$info_akademik->content_html}}', json : '{{$info_akademik->content_json}}'}}"
            >
            @method('PUT')
                {{ csrf_field() }}
                <label for="title" class="block my-4">
                    <span class="">Judul</span>
                    <input type="text" name="judul" id="" value="{{$info_akademik->judul}}" placeholder="Kerja Praktek" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('judul'))<span class="block w-full text-red-500">{{ $errors->first('judul') }}</span> @endif
                </label>
                <label for="dokumen" class="block w-1/2 my-4">
                    <span class="mr-4 min-w-max">Dokumen</span>
                    <span class="block my-2 text-sn text-gray-400">Uploaded file: {{$info_akademik->dokumen}}</span>
                    <input type="file" name="dokumen" id=""
                    class="block w-full mt-1 bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('dokumen'))<span class="block w-full text-red-500 ">{{ $errors->first('dokumen') }}</span> @endif
                </label>

                <div class="my-4 bg-gray-100 rounded-lg dark:bg-dark-eval-2">
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
