<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ $fasilitas->nama }}
            </h2>
            <x-button href="{{route('admin.fasilitas.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col md:flex-row space-x-8 items-center justify-center">
            <div class="w-full md:w-1/2 h-fit bg-purple-400 border-none">
                <img src="{{url('/storage/uploads/fasilitas/'.$fasilitas->image)}}" alt="fasilitas" class="object-cover w-full h-full text-center">
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full">
                    <div class="border-b-2 pb-1 mb-1">
                        <h2 class="text-xl font-bold">{{$fasilitas->nama}}</h2>
                    </div>

                    <div class="">
                        <p>{{$fasilitas->deskripsi}}</p>
                    </div>
                    <x-button href="{{route('admin.fasilitas.edit', $fasilitas->id)}}" variant="warning"
                        class="justify-center max-w-xs gap-2 mt-4">
                            <x-lucide-file-edit class="w-6 h-6" />
                            <span>Edit Data</span>
                        </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
