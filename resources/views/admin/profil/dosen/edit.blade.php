<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Edit | {{$dosen->nama}}
            </h2>
            <x-button href="{{route('admin.dosen.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <form action="{{route('admin.dosen.update', $dosen->id)}}" method="post" enctype=multipart/form-data>
                @method('PATCH')
                @csrf
                <label for="nama" class="block my-4">
                    <span class="">Nama Lengkap dan Gelar</span>
                    <input type="text" name="nama" id="" value="{{$dosen->nama}}" placeholder="Nama" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('nama'))<span class="block w-full text-red-500 my-3">{{ $errors->first('nama') }}</span> @endif
                </label>

                <label for="email" class="block my-4">
                    <span class="">Email</span>
                    <input type="email" name="email" id="" value="{{$dosen->email}}" placeholder="user@mail.com" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    @if ($errors->has('email'))<span class="text-red-500 my-3 block w-full">{{ $errors->first('email') }}</span> @endif
                </label>

                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="nidn" class="block w-1/2">
                        <span class="">NIDN</span>
                        <input type="text" name="nidn" id="" value="{{$dosen->nidn}}" placeholder="Nomor NIDN"
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('nidn'))<span class="block w-full text-red-500 my-3">{{ $errors->first('nidn') }}</span> @endif
                    </label>
                    <label for="homebase" class="block w-1/2">
                        <span class="">Homebase</span>
                        <input type="text" name="homebase" id="" value="{{$dosen->nidn}}" placeholder="Teknik Informatika"
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('homebase'))<span class="block w-full text-red-500 my-3">{{ $errors->first('homebase') }}</span> @endif
                    </label>
                </div>
                <div class="flex justify-between w-full my-4 space-x-4">
                    <label for="jabatan_struktural" class="block w-1/2">
                        <span class="">Jabatan Struktural</span>
                        <input type="text" name="jabatan_struktural" id="" value="{{$dosen->jabatan_struktural}}" placeholder="Ketua Program Studi"
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                        @if ($errors->has('jabatan_struktural'))<span class="block w-full text-red-500 my-3">{{ $errors->first('jabatan_struktural') }}</span> @endif
                    </label>
                    <label for="jabatan_akademik" class="block w-1/2">
                        <span class="">Jabatan Akademik</span>
                        <select name="jabatan_akademik" id=""
                        class="block w-full mt-1 bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                        >
                            <option value="{{$dosen->jabatan_akademik}}">{{$dosen->jabatan_akademik}}</option>
                            <option value="asisten ahli">Asisten Ahli</option>
                            <option value="lektor">Lektor</option>
                            <option value="lektor kepala">Lektor Kepala</option>
                            <option value="professor">Professor</option>
                        </select>
                        @if ($errors->has('jabatan_akademik'))<span class="text-red-500 my-3 block w-full">{{ $errors->first('jabatan_akademik') }}</span> @endif
                    </label>
                </div>
                <label for="image" class="block w-1/2">
                    <span class="">Foto</span>
                    <input type="file" name="image"
                    class="block w-full m-0 text-sm bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                    >
                    @if ($errors->has('image'))<span class="block w-full text-red-500 my-3">{{ $errors->first('image') }}</span> @endif
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
