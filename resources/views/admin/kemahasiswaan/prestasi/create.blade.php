<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tambah Prestasi') }}
            </h2>
            <x-button href="{{route('admin.prestasi.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <form action="{{route('admin.prestasi.store')}}" method="post" enctype=multipart/form-data>
                @csrf
                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="juara" class="block w-1/2">
                        <span class="">Juara</span>
                        <input type="text" name="juara" id="" value="" placeholder="Juara 1" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('juara'))<span class="block w-full text-red-500 my-3">{{ $errors->first('juara') }}</span> @endif
                    </label>
                    <label for="nama_kompetisi" class="block w-1/2">
                        <span class="">Kompetisi</span>
                        <input type="text" name="nama_kompetisi" id="" value="" placeholder="Hackathon 2023" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('nama_kompetisi'))<span class="block w-full text-red-500 my-3">{{ $errors->first('nama_kompetisi') }}</span> @endif
                    </label>
                </div>
                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="tanggal" class="block w-1/2">
                        <span class="">Tanggal</span>
                        <input type="date" name="tanggal" id="" value="" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('tanggal'))<span class="block w-full text-red-500 my-3">{{ $errors->first('tanggal') }}</span> @endif
                    </label>
                    <label for="tingkatan" class="block w-1/2">
                        <span class="">Tingkatan</span>
                        <select name="tingkatan" id="" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                            <option value="">...</option>
                            <option value="Kampus">Kampus</option>
                            <option value="Kabupaten">Kabupaten</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Internasional">Internasional</option>
                        </select>
                        @if ($errors->has('tingkatan'))<span class="text-red-500 my-3 block w-full">{{ $errors->first('tingkatan') }}</span> @endif
                    </label>
                </div>
                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="image" class="block w-1/2">
                        <span class="">Foto</span>
                        <input type="file" name="image" required
                        class="block w-full mt-1 text-sm bg-gray-100 border-transparent active:border-purple-500 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                        >
                        @if ($errors->has('image'))<span class="block w-full text-red-500 my-3">{{ $errors->first('image') }}</span> @endif
                    </label>
                    <label for="penyelenggara" class="block w-1/2">
                        <span class="">Penyelenggara</span>
                        <input type="text" name="penyelenggara" id="" value="" placeholder="Dicoding ID" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('penyelenggara'))<span class="block w-full text-red-500 my-3">{{ $errors->first('penyelenggara') }}</span> @endif
                    </label>
                </div>
                <label for="title" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"></textarea>
                    @if ($errors->has('deskripsi'))<span class="block w-full text-red-500 my-3">{{ $errors->first('deskripsi') }}</span> @endif
                </label>

                <x-button type="submit" value="submit" variant="primary"
                class="mt-3"
                >
                    <x-lucide-save class="w-4 h-4 mr-2" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
