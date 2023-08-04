<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="text-xl font-semibold">
            Hallo Admin!
        </h1>
    </div>
    <div class="flex flex-wrap my-6 gap-4">
        <x-button href="{{route('admin.artikel.create')}}" variant="primary"
        class="justify-center max-w-xs gap-2 shadow-lg">
            <x-lucide-file-plus-2 class="w-6 h-6" />
            <span>Buat Artikel Baru</span>
        </x-button>

        <x-button href="{{route('admin.event-mahasiswa.create')}}" variant="primary"
        class="justify-center max-w-xs gap-2 shadow-lg">
            <x-lucide-calendar-plus class="w-6 h-6" />
            <span>Tambah Event</span>
        </x-button>

        <x-button href="{{route('admin.prestasi.create')}}" variant="primary"
        class="justify-center max-w-xs gap-2 shadow-lg">
            <x-lucide-trophy class="w-6 h-6" />
            <span>Tambah Prestasi</span>
        </x-button>

        <x-button href="{{route('admin.unduhan.create')}}" variant="primary"
        class="justify-center max-w-xs gap-2 shadow-lg">
            <x-lucide-file-plus-2 class="w-6 h-6" />
            <span>Tambah Unduhan</span>
        </x-button>

        <x-button href="{{route('admin.dosen.create')}}" variant="primary"
        class="justify-center max-w-xs gap-2 shadow-lg">
            <x-lucide-user-plus class="w-6 h-6" />
            <span>Tambah Dosen</span>
        </x-button>
    </div>
</x-app-layout>
