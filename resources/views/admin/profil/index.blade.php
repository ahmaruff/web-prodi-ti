<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Profil Teknik Informatika') }}
            </h2>
            <x-button href="{{route('admin.profil-prodi.edit')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-heroicon-o-pencil-alt class="w-6 h-6" />
                <span>Edit Visi Misi</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="mb-2">
            <h1 class="mb-3 text-2xl font-bold">Visi</h1>
            <div class="p-4 text-lg font-semibold text-white bg-purple-500 rounded-lg dark:bg-dark-eval-0">
                {{ $visi }}
            </div>
        </div>
        <div class="my-4">
            <h1 class="mb-3 text-2xl font-semibold">Misi</h1>
            <div class="p-4 bg-gray-100 rounded-lg dark:bg-dark-eval-0">
                <ul>
                    @foreach ($misi as $item)
                        <li class="pb-1 my-2 border-b border-b-gray-300">
                            {{ $item->misi }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="my-4">
            <h1 class="mb-3 text-2xl font-semibold">Tujuan</h1>
            <div class="p-4 bg-gray-100 rounded-lg dark:bg-dark-eval-0">
                <ul>
                    @foreach ($tujuan as $item)
                        <li class="pb-1 my-2 border-b border-b-gray-300">
                            {{ $item->tujuan }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
