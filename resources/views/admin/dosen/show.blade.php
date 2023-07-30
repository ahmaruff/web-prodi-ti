<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Dosen
            </h2>
            <x-button href="{{route('admin.dosen.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex items-center justify-between pb-2 mb-3">
            <h1 class="text-xl md:text-4xl  font-bold">
                {{$dosen->nama}}
            </h1>
            <div>
                <x-button href="{{route('admin.dosen.edit', $dosen->id)}}" variant="warning"
                class="justify-center max-w-xs gap-2">
                    <x-lucide-file-edit class="w-6 h-6" />
                    <span>Edit Data</span>
                </x-button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row space-x-8 items-center justify-center">
            <div class="w-full md:w-1/2 h-fit bg-purple-400 border-none">
                <img src="{{url('/storage/uploads/dosen/'.$dosen->image)}}" alt="Pas foto {{$dosen->nama}}" class="object-cover aspect-square text-center">
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full">
                    <div class="border-b-2 pb-1 mb-1">
                        <h2>Nama Lengkap</h2>
                        <p class="text-xl font-bold">{{$dosen->nama}}</p>
                    </div>

                    <div class="border-b-2 pb-1 mb-1">
                        <h2>Email</h2>
                        <p class="text-lg font-bold">{{$dosen->email}}</p>
                    </div>
                    <div class="border-b-2 pb-1 mb-1">
                        <h2>NIDN</h2>
                        <p class="text-lg font-bold">{{$dosen->nidn}}</p>
                    </div>
                    <div class="border-b-2 pb-1 mb-1">
                        <h2>Homebase</h2>
                        <p class="text-lg font-bold">{{$dosen->homebase}}</p>
                    </div>
                    <div class="border-b-2 pb-1 mb-1">
                        <h2>Jabatan Akademik</h2>
                        <p class="text-lg font-bold">{{$dosen->jabatan_akademik}}</p>
                    </div>
                    <div class="border-b-2 pb-1 mb-1">
                        <h2>Jabatan Struktural</h2>
                        <p class="text-lg font-bold">{{$dosen->jabatan_struktural}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
