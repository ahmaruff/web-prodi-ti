<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Pusat Unduhan') }}
            </h2>
            <x-button href="{{route('admin.unduhan.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-file-plus-2 class="w-6 h-6" />
                <span>Tambah Dokumen</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
       @livewire('show-unduhan')
    </div>

</x-app-layout>
