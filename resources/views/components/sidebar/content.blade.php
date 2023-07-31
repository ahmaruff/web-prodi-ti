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
        Konten
    </div>

    <x-sidebar.link
    title="Artikel"
    href="{{route('admin.artikel.index')}}"
    :isActive="request()->routeIs('admin.artikel.*')">
        @slot('icon') <x-lucide-newspaper class="flex-shrink-0 w-6 h-6"/>@endslot
        Artikel
    </x-sidebar>

    <x-sidebar.link
    title="Pusat Unduhan"
    href="{{route('admin.unduhan.index')}}"
    :isActive="request()->routeIs('admin.unduhan.*')">
        @slot('icon') <x-lucide-download-cloud class="flex-shrink-0 w-6 h-6"/>@endslot
        Pusat Unduhan
    </x-sidebar>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Profile Prodi
    </div>

    <x-sidebar.dropdown
        title="Profil Prodi"
        :active="Str::startsWith(request()->route()->uri(), 'admin/profile-prodi')"
    >
        <x-slot name="icon">
            <x-lucide-graduation-cap class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Visi Misi"
            href="{{ route('admin.profile-prodi.visi-misi.index') }}"
            :active="request()->routeIs('admin.profile-prodi.visi-misi.index')"
        />
        <x-sidebar.sublink
            title="Struktur Organisasi"
            href="{{ route('admin.profile-prodi.struktur-org.index') }}"
            :active="request()->routeIs('admin.profile-prodi.struktur-org.index')"
        />
        <x-sidebar.sublink
            title="Profil Lulusan"
            href="{{ route('admin.profile-prodi.lulusan.index') }}"
            :active="request()->routeIs('admin.profile-prodi.lulusan.index')"
        />
    </x-sidebar.dropdown>

    <x-sidebar.link
    title="Akreditasi"
    href="{{route('admin.akreditasi.index')}}"
    :isActive="request()->routeIs('admin.akreditasi.*')">
        @slot('icon') <x-lucide-award class="flex-shrink-0 w-6 h-6"/>@endslot
        Akreditasi
    </x-sidebar>

    <x-sidebar.link
    title="Dosen"
    href="{{route('admin.dosen.index')}}"
    :isActive="request()->routeIs('admin.dosen.*')">
        @slot('icon') <x-lucide-users class="flex-shrink-0 w-6 h-6"/>@endslot
        Dosen
    </x-sidebar>

    <x-sidebar.link
    title="Fasilitas"
    href="{{route('admin.fasilitas.index')}}"
    :isActive="request()->routeIs('admin.fasilitas.*')">
        @slot('icon') <x-lucide-building class="flex-shrink-0 w-6 h-6"/>@endslot
        Fasilitas
    </x-sidebar>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Kemahasiswaan
    </div>

    <x-sidebar.link
    title="Prestasi"
    href="{{route('admin.prestasi.index')}}"
    :isActive="request()->routeIs('admin.prestasi.*')">
        @slot('icon') <x-lucide-trophy class="flex-shrink-0 w-6 h-6"/>@endslot
        Prestasi
    </x-sidebar>

    @php
        $links = array_fill(0, 20, '');
    @endphp

    {{-- @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach --}}

</x-perfect-scrollbar>
