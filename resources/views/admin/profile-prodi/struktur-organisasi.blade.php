<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Struktur Organisasi') }}
            </h2>
        </div>
    </x-slot>

    <div class="my-6 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center">
            <div class="md:w-1/2">
                <h1 class="font-bold text-lg mb-2">Kaprodi</h1>
                <div class="flex space-x-4 items-center">
                    <div class="w-1/4 aspect-square bg-purple-400">
                        <img src="{{url('/storage/uploads/dosen/'.$kaprodi->image)}}" alt="Kaprodi" class="object-cover text-purple-500 text-center">
                    </div>
                    <div class="w-3/4">
                        <h2 class="text-xl font-semibold">{{ $kaprodi->nama }}</h2>
                        <p>{{ $kaprodi->jabatan_akademik }}</p>
                        <p>NIDN : {{ $kaprodi->nidn }}</p>
                        <a href="mailto:{{ $kaprodi->email }}" class="hover:text-blue-500">{{ $kaprodi->email }}</a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <h1 class="font-bold text-lg mb-2">Sekprodi</h1>
                <div class="flex space-x-4 items-center">
                    <div class="w-1/4 aspect-square bg-purple-400">
                        <img src="{{url('/storage/uploads/dosen/'.$sekprodi->image)}}" alt="Sekprodi" class="object-cover text-purple-500 text-center">
                    </div>
                    <div class="w-3/4">
                        <h2 class="text-xl font-semibold">{{ $sekprodi->nama }}</h2>
                        <p>{{ $sekprodi->jabatan_akademik }}</p>
                        <p>NIDN : {{ $sekprodi->nidn }}</p>
                        <a href="mailto:{{ $sekprodi->email }}" class="hover:text-blue-500">{{ $sekprodi->email }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 border-t-2 pt-3">
            <h1 class="font-bold text-xl">Ubah Struktural</h1>
            <div class="my-4">
                <form action="{{route('admin.profile-prodi.struktur-org.update-kaprodi')}}" method="post" class="flex flex-col md:flex-row space-x-2 items-center ">
                    @csrf
                    <label for="kaprodi" class="font-semibold md:w-32">Kaprodi</label>
                    <select name="kaprodi" id=""
                    class="bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                        <option value="{{$kaprodi->id}}" selected>{{ $kaprodi->nama }}</option>
                        @foreach ($list_dosen as $dosen)
                        <option value="{{$dosen->id}}">{{ $dosen->nama }}</option>
                        @endforeach
                    </select>
                    <x-button type="submit" value="submit" variant="primary">
                        <x-lucide-save class="w-4 h-4 mr-2" />
                        <span>Save</span>
                    </x-button>
                </form>
            </div>
            <div class="my-4">
                <form action="{{route('admin.profile-prodi.struktur-org.update-sekprodi')}}" method="post" class="flex flex-col md:flex-row space-x-2 items-center ">
                    @csrf
                    <label for="sekprodi" class="font-semibold md:w-32">Sekprodi</label>
                    <select name="sekprodi" id=""
                    class="bg-gray-100 border-transparent rounded-md focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                        <option value="{{$sekprodi->id}}" selected>{{ $sekprodi->nama }}</option>
                        @foreach ($list_dosen as $dosen)
                        <option value="{{$dosen->id}}">{{ $dosen->nama }}</option>
                        @endforeach
                    </select>
                    <x-button type="submit" value="submit" variant="primary">
                        <x-lucide-save class="w-4 h-4 mr-2" />
                        <span>Save</span>
                    </x-button>
                </form>
            </div>
        </div>
    </div>
    <div class="my-6 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <h1 class="font-bold text-xl mb-6">Bagan Struktur Organisasi</h1>
            <div>
                <img src="{{$img_struktur}}" alt="Struktur Organisasi" class="object-contain">
            </div>
        </div>
        <div class="mt-6">
            <h1 class="font-semibold text-lg mb-4">Ubah Bagan Struktur Organisasi</h1>
            <form action="{{route('admin.profile-prodi.struktur-org.update-bagan')}}" method="post" enctype="multipart/form-data" class="flex flex-col md:flex-row md:space-x-4">
                @csrf
                <input type="file" name="gambar_bagan" required
                class="m-0 text-sm bg-gray-100 rounded-md cursor-pointer file:px-2 file:border-none file:py-2 h-w-full focus:border-purple-500 dark:bg-dark-eval-2 dark:file:bg-dark-eval-0 dark:file:text-gray-300"
                >
                <x-button type="submit" value="submit" variant="primary">
                    <x-lucide-save class="w-4 h-4 mr-2" />
                    <span>Save</span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
