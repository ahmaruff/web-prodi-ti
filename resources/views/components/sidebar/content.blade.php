<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-lucide-home class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Dummy Links
    </div>

    <x-sidebar.link
    title="Artikel"
    href="{{route('artikel.index')}}"
    :isActive="request()->routeIs('artikel.*')">
        @slot('icon') <x-lucide-scroll class="flex-shrink-0 w-6 h-6"/>@endslot
        Artikel
    </x-sidebar>

    <x-sidebar.dropdown
        title="Profil Prodi"
        :active="Str::startsWith(request()->route()->uri(), 'admin/profil')"
    >
        <x-slot name="icon">
            <x-lucide-graduation-cap class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Visi Misi"
            href="{{ route('admin.profil-prodi.index') }}"
            :active="request()->routeIs('admin.profil-prodi.index')"
        />
        <x-sidebar.sublink
            title="Profil Lulusan"
            href="{{ route('admin.profil.lulusan.index') }}"
            :active="request()->routeIs('admin.profil.lulusan.index')"
        />

        <x-sidebar.sublink
            title="Akreditasi"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="Struktur Organisasi"
            href="{{ route('admin.profil-prodi.struktur') }}"
            :active="request()->routeIs('admin.profil-prodi.struktur')"
        />
        <x-sidebar.sublink
            title="Dosen"
            href="{{ route('admin.dosen.index') }}"
            :active="request()->routeIs('admin.dosen.index')"
        />
        <x-sidebar.sublink
            title="Fasilitas"
            href="{{ route('admin.fasilitas.index') }}"
            :active="request()->routeIs('admin.dosen.index')"
        />
    </x-sidebar.dropdown>

    @php
        $links = array_fill(0, 20, '');
    @endphp

    {{-- @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach --}}

</x-perfect-scrollbar>
