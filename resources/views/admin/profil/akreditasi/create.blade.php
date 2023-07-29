<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Tambah Data Akreditasi') }}
            </h2>
            <x-button href="{{route('admin.akreditasi.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <form action="{{route('admin.akreditasi.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="prodi" class="block my-4">
                    <span class="">Program Studi</span>
                    <input type="text" name="prodi" id="" value="" placeholder="Teknik Informatika" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('prodi'))<span class="block w-full my-3 text-red-500">{{ $errors->first('prodi') }}</span> @endif
                </label>
                <div class="flex my-4 space-x-8">
                    <label for="peringkat" class="block w-full">
                        <span class="">Peringkat</span>
                        <select name="peringkat" id="" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                            <option value="">...</option>
                            <option value="Unggul">Unggul</option>
                            <option value="Baik Sekali">Baik Sekali</option>
                            <option value="Baik">Baik</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        @if ($errors->has('peringkat'))<span class="text-red-500">{{ $errors->first('peringkat') }}</span> @endif
                    </label>
                    <label for="no_sk" class="block w-full">
                        <span class="">Nomor SK</span>
                        <input type="text" name="no_sk" id="" value="" placeholder="No SK" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('no_sk'))<span class="block w-full my-3 text-red-500">{{ $errors->first('no_sk') }}</span> @endif
                    </label>
                </div>
                <div class="flex my-4 space-x-8">
                    <label for="tgl_terbit" class="block w-full">
                        <span class="">Tanggal SK Terbit</span>
                        <input type="date" name="tgl_terbit" id="" value="" placeholder="2020" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('tgl_terbit'))<span class="block w-full my-3 text-red-500">{{ $errors->first('tgl_terbit') }}</span> @endif
                    </label>
                    <label for="tgl_kadaluarsa" class="block w-full">
                        <span class="">Tanggal Kadaluarsa</span>
                        <input type="date" name="tgl_kadaluarsa" id="" value="" placeholder="No SK" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('tgl_kadaluarsa'))<span class="block w-full my-3 text-red-500">{{ $errors->first('tgl_kadaluarsa') }}</span> @endif
                    </label>
                </div>
                <div class="flex my-4 space-x-8">
                    <label for="status" class="block w-full">
                        <span class="">Status</span>
                        <select name="status" id="" required
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                            <option value="">...</option>
                            <option value="masih berlaku">masih berlaku</option>
                            <option value="kadaluarsa">kadaluarsa</option>
                        </select>
                        @if ($errors->has('status'))<span class="text-red-500">{{ $errors->first('status') }}</span> @endif
                    </label>
                    <label for="dokumen_sk" class="w-full">
                        <span class="">Dokumen SK</span>
                        <input type="file" name="dokumen_sk"
                        class="block w-full mt-1 bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                        >
                    </label>
                </div>
                <x-button variant="primary"
                class="justify-center max-w-xs gap-2 mt-3">
                    <x-lucide-save class="w-4 h-4" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
