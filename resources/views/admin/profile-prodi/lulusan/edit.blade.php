<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                Edit Profil Lulusan | {{$lulusan->id}}
            </h2>
            <x-button href="{{route('admin.profile-prodi.lulusan.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
    </div>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <form action="{{route('admin.profile-prodi.lulusan.update', $lulusan->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div>
                <label for="title" class="block">
                    <span class="">Profil Lulusan</span>
                    <input type="text" name="profil_lulusan" id="" placeholder="Profil Lulusan" value="{{$lulusan->profil_lulusan}}" required
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                </label>
                @if ($errors->has('profil_lulusan'))<span class="text-red-500">{{ $errors->first('profil_lulusan') }}</span> @endif
                <label for="title" class="block mt-3">
                    <span class="">Deskripsi</span>
                    <textarea name="deskripsi" id="" class="w-full mt-1 min-h-[7rem] bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2">{{$lulusan->deskripsi}}</textarea>
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
