<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit Visi Misi') }}
            </h2>
            <x-button href="{{route('admin.profile-prodi.visi-misi.index')}}" variant="primary"
            class="justify-center max-w-xs gap-2">
                <x-lucide-arrow-left-circle class="w-6 h-6" />
                <span>Kembali</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="text-xl font-semibold leading-tight">Visi</h1>
        <form action="{{route('admin.profile-prodi.visi-misi.update-visi')}}" method="post">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{$visi->id}}">
                <textarea name="visi" id=""
                class="block w-full my-1 bg-gray-100 border-transparent rounded-md min-h-[7rem] dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                >{{$visi->visi}}</textarea>
                @if ($errors->has('visi'))<span class="text-red-500">{{ $errors->first('visi') }}</span> @endif
                <x-button variant="primary"
                class="justify-center max-w-xs gap-2 mt-3">
                    <x-lucide-save class="w-4 h-4" />
                    <span>Save</span>
                </x-button>
            </div>
        </form>
    </div>
    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="text-xl font-semibold leading-tight">Misi</h1>
        <div x-data="{
            rows : {{$misi}},
            deleted_rows : [],
            addRow() {
                this.rows.push({id:'', misi:'',});
            },
            deleteRow(index) {
                this.deleted_rows.push(this.rows[index]);
                this.rows.splice(index,1);
            },
            printRows() {
                console.log(this.rows);
            }
        }"
        >
            <template x-for="(row,index) in rows" x-bind:key="index">
                {{-- <p x-init="console.log(row)"></p> --}}
                <div class="flex items-center space-x-3">
                    <input type="text" x-model="row.misi" placeholder="Misi"
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    <div class="">
                        <x-button
                        icon-only variant="danger" size="sm" pill
                        x-show="index >= 0" @click="deleteRow(index)"
                        >
                            <x-lucide-trash-2 class="w-4 h-4" />
                        </x-button>
                    </div>
                </div>
            </template>
            <div>
                <div class="flex mt-3 space-x-4">
                    <x-button variant="info"
                    class="justify-center max-w-xs gap-2"
                    @click="addRow()"
                    >
                        <x-lucide-plus-circle class="w-4 h-4" />
                        <span>Tambah</span>
                    </x-button>
                    <div>
                        <form action="{{route('admin.profile-prodi.visi-misi.update-misi')}}" method="post">
                            @csrf
                            <input type="hidden" name="upsert" x-bind:value="JSON.stringify(rows)">
                            <input type="hidden" name="delete" x-bind:value="JSON.stringify(deleted_rows)">
                            <x-button variant="primary"
                            class="justify-center max-w-xs gap-2">
                                <x-lucide-save class="w-4 h-4" />
                                <span>Save</span>
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 my-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="text-xl font-semibold leading-tight">Tujuan</h1>
        <div x-data="{
            rows : {{$tujuan}},
            deleted_rows : [],
            addRow() {
                this.rows.push({id:'', tujuan:'',});
            },
            deleteRow(index) {
                this.deleted_rows.push(this.rows[index]);
                this.rows.splice(index,1);
            },
            printRows() {
                console.log(this.rows);
            }
        }"
        >
            <template x-for="(row,index) in rows" x-bind:key="index">
                {{-- <p x-init="console.log(row)"></p> --}}
                <div class="flex items-center space-x-3">
                    <input type="text" x-model="row.tujuan" placeholder="Tujuan"
                    class="block w-full mt-1 bg-gray-100 border-transparent rounded-md dark: focus:border-purple-500 focus:bg-white focus:ring-0 dark:bg-dark-eval-2"
                    >
                    <div class="">
                        <x-button
                        icon-only variant="danger" size="sm" pill
                        x-show="index >= 0" @click="deleteRow(index)"
                        >
                            <x-lucide-trash-2 class="w-4 h-4" />
                        </x-button>
                    </div>
                </div>
            </template>
            <div>
                <div class="flex mt-3 space-x-4">
                    <x-button variant="info"
                    class="justify-center max-w-xs gap-2"
                    @click="addRow()"
                    >
                        <x-lucide-plus-circle class="w-4 h-4" />
                        <span>Tambah</span>
                    </x-button>
                    <div>
                        <form action="{{route('admin.profile-prodi.visi-misi.update-tujuan')}}" method="post">
                            @csrf
                            <input type="hidden" name="upsert" x-bind:value="JSON.stringify(rows)">
                            <input type="hidden" name="delete" x-bind:value="JSON.stringify(deleted_rows)">
                            <x-button variant="primary"
                            class="justify-center max-w-xs gap-2">
                                <x-lucide-save class="w-4 h-4" />
                                <span>Save</span>
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
