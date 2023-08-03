<nav x-data="accordion(6)" class="fixed top-0 z-40 flex flex-wrap items-center justify-between w-full px-4 py-5 tracking-wide bg-gray-100 bg-opacity-50 md:px-8 lg:px-14">
    <!-- Left nav -->
    <div class="flex items-center">
        <a href="#" class="text-3xl tracking-wide">
            <span class="block w-28">
                <img src="/assets/images/logo/md-dark.png" alt="" class="object-contain w-full">
            </span>
        </a>
    </div>
    <!-- End left nav -->

    <!-- Right nav -->
    <!-- Show menu sm,md -->
    <!-- Toggle button -->
    <div @click="handleClick()" x-data="{open : false}" class="block text-gray-600 cursor-pointer lg:hidden">
        <button @click="open = ! open" class="w-6 h-6 text-lg">
            <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" :clas="{'transition-full each-in-out transform duration-500':! open}">
                <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>

            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
      </button>
    </div>
    <!-- End toggle button -->

    <!-- Toggle menu -->
    <div x-ref="tab" :style="handleToggle()" class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
        <div class="flex flex-col my-3 space-y-2 text-lg text-gray-600 hover:font-b">
            <a href="#" class="hover:text-gray-900"><span>Link</span></a>
            <hr>
            <a href="#" class="hover:text-gray-900"><span>Link</span></a>
            <hr>
            <a href="#" class="hover:text-gray-900"><span>Link</span></a>
        </div>
        {{-- <div class="px-5 py-6 space-y-6">
            <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                    About
                </a>

                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                    Contact
                </a>
            </div>
        </div>
        <div>
            <a href="#" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm hover:bg-gray-700">
                Sign up
            </a>
            <p class="mt-6 text-base font-medium text-center text-gray-500">
                Existing customer?
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    Sign in
                </a>
            </p>
        </div> --}}
    </div>
    <!-- End toggle menu -->
    <!-- End show menu sm,md -->

    <!-- Show Menu lg -->
    <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
        <div class="items-center justify-center flex-1 pt-6 text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
            <div class="mr-3">
                <a href="/" class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900">
                    Home
                </a>
            </div>

            <div class="mr-3">
                <a href="#" class="inline-block px-4 py-2 text-gray-600 no-underline hover:text-gray-900">
                    Link
                </a>
            </div>

            <!-- Dropdown 1 -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{'text-gray-900': open, 'text-gray-600': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4">Profil</span>
                    <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
            <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="absolute right-0 py-1 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                    <a href="{{route('public.visi-misi')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Visi Misi</a>
                    <a href="{{route('public.struktur-org')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Struktur Organisasi</a>
                    <a href="{{route('public.akreditasi')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Akreditasi</a>
                    <a href="{{route('public.fasilitas')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Fasilitas</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown 1 -->
            <!-- Dropdown 2 -->
            <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{'text-gray-900': open, 'text-gray-600': !open }">
                <!-- Dropdown Toggle Button -->
                <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                    <span class="mr-4">Akademik</span>
                    <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
            <!-- End Dropdown Toggle Button -->

                <!-- Dropdown Menu -->
                <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="absolute right-0 py-1 text-gray-500 bg-white rounded-lg shadow-xl min-w-max">
                    <a href="{{route('public.info-akademik', 'kalender-akademik')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Kalender Akademik</a>
                    <a href="{{route('public.info-akademik', 'kurikulum')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Kurikulum</a>
                    <a href="{{route('public.info-akademik', 'tugas-akhir')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Tugas Akhir</a>
                    <a href="{{route('public.info-akademik', 'kerja-praktek')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Kerja Praktek</a>
                    <a href="{{route('public.info-akademik', 'kampus-merdeka')}}" class="block px-4 py-1 hover:text-gray-900 hover:bg-gray-100">Kampus Merdeka</a>
                </div>
                <!-- End Dropdown Menu -->
            </div>
            <!-- End Dropdown 2 -->
        </div>
    </div>
    {{-- <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
      <div class="items-center justify-center flex-1 pt-6 text-lg text-gray-500 lg:pt-0 list-reset lg:flex">
        <a href="#" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
          Sign in
        </a>
        <a href="#" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-gray-700">
          Sign up
        </a>
      </div>
    </div> --}}
    <!-- End show Menu lg -->
    <!-- End right nav -->
  </nav>
