<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Fasilitas') }}
            </h2>
            <x-button href="{{route('admin.fasilitas.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-package-plus class="w-6 h-6" />
                <span>Tambah Fasilitas</span>
            </x-button>
        </div>
    </x-slot>

    <div class="my-6 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <table class="table-auto text-left w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['deskripsi'] }}</td>
                        <td class="flex justify-around space-x-1">
                            <x-button
                            href="{{ route('admin.fasilitas.show', $item['id']) }}"
                            icon-only variant="primary" size="sm" pill
                            >
                                <x-lucide-view class="w-4 h-4" />
                            </x-button>

                            <x-button
                            href="{{ route('admin.fasilitas.edit', $item['id']) }}"
                            icon-only variant="warning" size="sm" pill
                            >
                                <x-lucide-edit class="w-4 h-4" />
                            </x-button>

                            <form action="{{ route('admin.fasilitas.destroy', $item['id']) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <x-button
                                type="submit"
                                icon-only variant="danger" size="sm" pill
                                >
                                    <x-lucide-trash-2 class="w-4 h-4" />
                                </x-button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
