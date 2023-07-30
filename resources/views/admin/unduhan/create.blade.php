<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tambah Dokumen') }}
            </h2>
            <x-button href="{{route('admin.akreditasi.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div x-data="{ is_link : '' }">
            <form action="{{route('admin.unduhan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="judul" class="block my-4">
                    <span class="">Judul Dokumen</span>
                    <input type="text" name="judul" id="" value="" placeholder="Dokumen" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('judul'))<span class="block w-full my-3 text-red-500">{{ $errors->first('judul') }}</span> @endif
                </label>
                <label for="title" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"></textarea>
                </label>
                <label for="jenis_dokumen" class="block mt-3">
                    <span class="block mb-1">Jenis Dokumen</span>
                    <div class="flex items-center mb-2">
                        <input type="radio" name="jenis_dokumen" value="file" x-on:click="is_link=false" checked
                        class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="jenis_dokumen" class="ml-2">File Upload (.pdf)</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" name="jenis_dokumen" value="link" x-on:click="is_link=true"
                        class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="jenis_dokumen" class="ml-2">Link/URL</label>
                    </div>
                    @if ($errors->has('jenis_dokumen'))<span class="block w-full my-3 text-red-500">{{ $errors->first('jenis_dokumen') }}</span> @endif
                </label>
                <label for="path" class="block my-4" x-show="is_link">
                    <span class="">Link/URL Dokumen</span>
                    <input type="url" name="link" id="" value="" placeholder="URL Dokumen"
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                </label>
                <label for="path" class="block my-4" x-show="!is_link">
                    <span class="block">Unggah Dokumen</span>
                    <input type="file" name="file" value=""
                    class="block w-full mt-1 bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                    >
                </label>
                @if ($errors->has('path'))<span class="block w-full my-3 text-red-500">{{ $errors->first('path') }}</span> @endif
                @if ($errors->has('url'))<span class="block w-full my-3 text-red-500">{{ $errors->first('url') }}</span> @endif
                @if ($errors->has('dokumen'))<span class="block w-full my-3 text-red-500">{{ $errors->first('dokumen') }}</span> @endif
                <x-button variant="primary"
                class="justify-center max-w-xs gap-2 mt-3">
                    <x-lucide-save class="w-4 h-4" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
