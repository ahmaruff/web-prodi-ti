<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('HIMTI UNSIQ') }}
            </h2>
            <x-button href="{{route('admin.event-mahasiswa.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-party-popper class="w-6 h-6" />
                <span>Tambah Event</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-4">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Program Kerja') }}
            </h2>
            <x-button href="{{route('admin.himti.proker.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-plus class="w-6 h-6" />
                <span>Tambah Proker</span>
            </x-button>
        </div>
        <div>
            @livewire('show-proker')
        </div>
    </div>
</x-app-layout>
