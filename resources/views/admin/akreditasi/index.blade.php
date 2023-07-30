<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Akreditasi') }}
            </h2>
            <x-button href="{{route('admin.akreditasi.create')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-file-plus-2 class="w-6 h-6" />
                <span>Tambah Akreditasi</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="relative min-w-full overflow-x-auto">
            <table class="w-full text-left table-auto">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Prodi</th>
                        <th scope="col" class="px-6 py-3">Peringkat</th>
                        <th scope="col" class="px-6 py-3">Nomor SK</th>
                        <th scope="col" class="px-6 py-3">Terbit</th>
                        <th scope="col" class="px-6 py-3">Kadaluarsa</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Dokumen</th>
                        <th scope="col" class="px-6 py-3">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($akreditasi as $item)
                    <tr>
                        <td class="px-6 py-4">{{ $item['id'] }}</td>
                        <td class="px-6 py-4">{{ $item['prodi'] }}</td>
                        <td class="px-6 py-4">{{ $item['peringkat'] }}</td>
                        <td class="px-6 py-4">{{ $item['no_sk'] }}</td>
                        <td class="px-6 py-4">{{ $item['tgl_terbit'] }}</td>
                        <td class="px-6 py-4">{{ $item['tgl_kadaluarsa'] }}</td>
                        <td class="px-6 py-4">{{ $item['status'] }}</td>
                        <td class="px-6 py-4 hover:text-blue-500">
                            <a href="{{url('/storage/uploads/akreditasi/'.$item['dokumen_sk'])}}"
                            download="" target="_blank"
                            >
                                {{ $item['dokumen_sk'] }}
                            </a>
                        </td>
                        <td class="flex justify-around px-6 py-4 space-x-1">
                            <x-button
                            href="{{ route('admin.akreditasi.edit', $item['id']) }}"
                            icon-only variant="warning" size="sm" pill
                            >
                                <x-lucide-edit class="w-4 h-4" />
                            </x-button>

                            <form action="{{ route('admin.akreditasi.destroy', $item['id']) }}" method="post">
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
