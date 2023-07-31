<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tambah Program Kerja') }}
            </h2>
            <x-button href="{{route('admin.himti.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="my-6 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <form action="{{route('admin.himti.proker.store')}}" method="post">
                @csrf
                <label for="judul" class="block my-4">
                    <span class="">Judul</span>
                    <input type="text" name="judul" id="" value="" placeholder="Pelatihan IoT" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('judul'))<span class="block w-full text-red-500 my-3">{{ $errors->first('judul') }}</span> @endif
                </label>

                <label for="deskripsi" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2" required></textarea>
                    @if ($errors->has('deskripsi'))<span class="block w-full text-red-500 my-3">{{ $errors->first('deskripsi') }}</span> @endif
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
