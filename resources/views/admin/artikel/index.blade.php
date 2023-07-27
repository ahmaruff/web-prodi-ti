<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Artikel') }}
            </h2>
            <x-button href="{{route('artikel.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-coolicon-edit-pencil-line-01 class="w-6 h-6"></x-coolicon>
                <span>Buat Artikel Baru</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{-- <livewire:datatable model="App\Models\Artikel" exclude="content_html,content_json,created_at,updated_at, slug, image," searchable="title, category"> --}}
        @livewire('show-artikel')
        {{-- <livewire:restore-all model="App\Models\Artikel" /> --}}
    </div>
</x-app-layout>
