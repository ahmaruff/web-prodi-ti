<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Profil Lulusan') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        @if ($lulusan->isEmpty())
        <h2 class="leading-tight">
           Tidak ada profil lulusan, silakan tambahkan terlebih dahulu!
        </h2>
        @else
        <h1 class="my-4 text-xl font-semibold leading-tight">Profil Lulusan</h1>
        <div class="">
            @foreach ($lulusan as $item)
            <div class="flex items-center p-4 space-x-4">
                <div class="w-4/12 p-3 text-lg font-semibold text-right text-white bg-purple-400 rounded-l-full dark:bg-dark-eval-2">
                    {{ $item->profil_lulusan }}
                </div>
                <div class="w-7/12">
                    {{ $item->deskripsi }}
                </div>
                <div class="flex w-1/12 space-x-2">
                    <x-button
                    href="{{ route('admin.profile-lulusan.edit',[$item->id]) }}"
                    icon-only variant="warning" size="sm" pill
                    >
                        <x-lucide-edit class="w-4 h-4" />
                    </x-button>

                    <form action="{{ route('admin.profile-lulusan.destroy', $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <x-button
                        type="submit"
                        icon-only variant="danger" size="sm" pill
                        >
                            <x-lucide-trash-2 class="w-4 h-4" />
                        </x-button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <div class="my-4 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="my-4 text-xl font-semibold leading-tight">Tambah Profil Lulusan</h1>
        <form action="{{route('admin.profile-lulusan.store')}}" method="post">
            @csrf
            <div>
                <label for="title" class="block">
                    <span class="">Profil Lulusan</span>
                    <input type="text" name="profil_lulusan" id="" placeholder="Profil Lulusan" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                </label>
                @if ($errors->has('profil_lulusan'))<span class="text-red-500">{{ $errors->first('profil_lulusan') }}</span> @endif
                <label for="title" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"></textarea>
                </label>
                @if ($errors->has('deskripsi'))<span class="text-red-500">{{ $errors->first('deskripsi') }}</span> @endif
                <x-button variant="primary"
                class="justify-center max-w-xs gap-2 mt-3">
                    <x-lucide-save class="w-4 h-4" />
                    <span>Save</span>
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
