<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>
            <div class="bg-purple-500">
                <img src="{{url('/storage/uploads/artikel/'.$artikel->image)}}" alt="Ilustrasi" class="object-cover w-full h-72">
            </div>
            <div class="mt-4" x-data="{category: '{{$artikel->category}}' }">
                <div class="flex items-center justify-between mb-2">
                    <div class="px-4 py-1 text-lg font-bold text-white rounded-r-full"
                    x-bind:class="category == 'berita' ? 'bg-green-600' : category == 'pengumuman' ? 'bg-pink-600' : category == 'kemahasiswaan' ? 'bg-amber-600' : 'bg-purple-600' ">
                        <p>{{ $artikel->category }}</p>
                    </div>
                    <div class="flex items-center justify-end space-x-1 font-semibold">
                        <div class="px-4 py-2 bg-gray-300 rounded-l-full dark:bg-dark-eval-2">
                            <p>{{ $artikel->author }}</p>
                        </div>
                        @if (isset($artikel->published_at))
                        <div class="px-4 py-2 bg-gray-200 rounded-none dark:bg-dark-eval-2"">
                            <p>{{ $artikel->published_at }}</p>
                        </div>
                        @endif
                        <div class="px-4 py-2 bg-gray-100 rounded-none text-amber-500 dark:bg-dark-eval-2">
                            <a href="{{ route('admin.artikel.edit',[$artikel->id]) }}">Click to edit</a>
                        </div>
                    </div>
                </div>
                <h1 class="pb-2 mb-4 text-6xl font-black border-b-4">
                    {{$artikel->title}}
                </h1>
                <div>

                </div>
            </div>
            <div class="prose prose-slate xl:prose-lg dark:prose-invert">
                {!! $artikel->content_html !!}
            </div>
        </div>
    </div>
</x-app-layout>
