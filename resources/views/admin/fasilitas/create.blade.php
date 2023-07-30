<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tambah Fasilitas') }}
            </h2>
            <x-button href="{{route('admin.fasilitas.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="my-6 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <form action="{{route('admin.fasilitas.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nama" class="block my-4">
                    <span class="">Fasilitas</span>
                    <input type="text" name="nama" id="" value="" placeholder="Nama Fasilitas" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('nama'))<span class="block w-full text-red-500 my-3">{{ $errors->first('nama') }}</span> @endif
                </label>
                <label for="image">
                    <span class="mr-4 min-w-max">Gambar</span>
                    <input type="file" name="image"
                    class="m-0 text-sm bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                    >
                </label>
                <label for="title" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"></textarea>
                </label>
                <x-button variant="primary"
                class="justify-center max-w-xs gap-2 mt-3">
                    <x-lucide-save class="w-4 h-4" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
