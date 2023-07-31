<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <div class="bg-purple-500">
                <img src="{{url('/storage/uploads/kemahasiswaan/event/'.$event_mahasiswa->poster)}}" alt="poster" class="object-cover w-full h-fit">
            </div>
            <div class="mt-4">
                <div class="flex items-center justify-end mb-2 space-x-1 font-semibold">
                    <div class="px-4 py-2 bg-gray-300 rounded-none dark:bg-dark-eval-2">
                        <p>{{ $event_mahasiswa->tanggal }}</p>
                    </div>
                    <div class="px-4 py-2 bg-gray-100 rounded-none text-amber-500 dark:bg-dark-eval-2">
                        <a href="{{ route('admin.event-mahasiswa.edit',[$event_mahasiswa->id]) }}">Click to edit</a>
                    </div>
                </div>
                <h1 class="pb-2 mb-4 text-4xl font-black border-b-4">
                    {{$event_mahasiswa->judul}}
                </h1>
                <div>

                </div>
            </div>
            <div class="prose prose-slate xl:prose-lg dark:prose-invert">
                {!! $event_mahasiswa->content_html !!}
            </div>
        </div>
    </div>
</x-app-layout>
