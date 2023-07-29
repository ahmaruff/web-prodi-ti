<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dosen Teknik Informatika') }}
            </h2>
            <x-button href="{{route('admin.dosen.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-user-plus class="w-6 h-6" />
                <span>Tambah Dosen</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        @livewire('show-dosen')
    </div>
</x-app-layout>
