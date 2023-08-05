@extends('public.layouts.base')

@section('title')
HIMTI FASTIKOM UNSIQ
@endsection

@section('content')
<div class="flex flex-col-reverse items-center justify-center mx-8 my-24 md:flex-row md:mx-24">
    <div class="z-20 md:w-1/2">
        <h1 class="text-3xl font-black md:text-6xl"><span class="text-purple-600">Menggali</span> Kode<span class="text-purple-600">,</span> Berkembang <span class="text-purple-600">Bersama</span>!</h1>
        <h1 class="mt-6 text-2xl font-bold md:text-4xl">Himpunan Mahasiswa <span class="text-pink-600">Teknik Informatika</span></h1>
        <a href='#about' class="block px-12 py-3 mt-4 font-bold text-white rounded-full shadow-xl w-fit hover:translate-x-2 hover:transition-all hover:ease-linear bg-gradient-to-tr from-pink-500 to-amber-400">
           <span></span> <x-lucide-arrow-right class="inline w-8 h-8" />
        </a>
    </div>
    <div class="md:w-1/2">
        <div class="relative h-full aspect-video">
            <div class="absolute top-0 left-0 z-10 w-48 h-48 rounded-full shadow-lg bg-gradient-to-tl from-amber-500 to-yellow-300 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute z-10 w-20 h-20 rounded-full shadow-lg right-6 top-8 bg-gradient-to-tl from-pink-500 to-yellow-400 hover:transition hover:ease-linear hover:scale-110"></div>
            <div class="absolute bottom-0 right-0 z-10 w-48 h-20 rounded-full shadow-lg bg-gradient-to-tl from-pink-500 to-indigo-400 hover:transition hover:ease-linear hover:scale-110"></div>
            <img src="/assets/images/upgrading.jpg" alt="" class="absolute z-20 object-cover w-5/6 shadow-2xl aspect-video rounded-3xl left-8 top-10 hover:transition hover:ease-linear hover:scale-105">
        </div>
    </div>
</div>
<div class="flex flex-col w-full min-h-screen bg-white md:flex-row">
    <div class="bg-center bg-no-repeat bg-cover md:w-1/2" style="background-image: url('/assets/images/raker.jpg')">
        <div class="pt-24" id="about"></div>
    </div>
    <div class="mx-8 md:w-1/2 md:mx-10">
        <div class="md:pt-24"></div>
        <div class="w-full">
            <img src="/assets/images/logo/logo-himti.png" alt="" class="object-contain w-1/4 aspect-auto">
        </div>
        <h2 class="text-2xl font-bold text-gray-500 md:text-4xl hover:underline">Himti Fastikom Unsiq</h2>
        <p class="block my-6 font-light md:text-lg">
            HIMTI merupakan organisasi yang menaungi mahasiswa
            di lingkungan program studi Teknik Infromatika UNSIQ.
            HIMTI hadir sebagai wadah pengembangan mahasiswa Teknik Informatika
        </p>
        <a href="#visi" class="block mt-8 text-xl font-black text-purple-600 hover:underline">
            Visi Misi
        </a>
    </div>
</div>
<div class="pt-24" id="visi"></div>
<div class="flex flex-col w-full min-h-screen md:flex-row">
    <div class="h-full mx-8 text-right md:w-1/2 md:mx-10">
        <h1 class="my-6 text-3xl font-black md:text-6xl">Teknik Informatika<span class="text-purple-600">!</span></h1>

        <h3 class="my-2 text-xl font-bold text-gray-600 md:my-4 md:text-3xl">
            Kita Keluarga, <span class="text-gray-900">Kita Berkarya,</span>
        </h3>
        <h3 class="my-2 text-2xl font-black md:my-4 md:text-4xl">
            Jaya, Jaya, <span class="text-gray-500">Jaya!</span>
        </h3>
    </div>
    <div class="h-full mx-8 md:w-1/2 md:mx-10">
        <div class="hidden md:block md:mt-48"></div>
        <div class="">
            <h1 class="my-6 text-4xl font-bold text-purple-600 md:text-6xl drop-shadow-sm">Visi</h1>
            <p class="text-lg font-light md:text-xl">
                Membangun HIMTI sebagai organisasi yang berintegritas, berkualitas, dan progresif agar terciptanya mahasiswa Teknik Informatika UNSIQ yang solid dan partisipatif
            </p>
        </div>
    </div>
</div>
<div class="flex flex-col w-full min-h-screen bg-white md:flex-row">
    <div class="hidden bg-center bg-no-repeat bg-cover md:h-screen md:w-1/2 md:block" style="background-image: url('/assets/images/makrab.jpg')">
    </div>
    <div class="mx-8 md:w-1/2 md:mx-10">
        <h1 class="mt-6 mb-6 text-4xl font-bold text-purple-600 md:text-6xl drop-shadow-sm md:mt-14">Misi</h1>
        <ul class="font-light md:mr-8">
            <li class="my-3 text-lg md:text-xl hover:font-semibold">
                Membangun sarana untuk pemberdayaan potensi mahasiswa sekaligus sebagai pembinaan dan pengembangan aktif dalam diri mahasiswa
            </li>
            <li class="my-3 text-lg hover:font-semibold md:text-xl ">
                Meningkatkan kualitas mahasiswa Teknik Informatika UNSIQ yang lebih unggul dibidang akademik atau non akademik
            </li>
            <li class="my-3 text-lg md:text-xl hover:font-semibold">
                Mewadahi memproses dan melaksanakan aspirasi mahasiswa Teknik Informatika UNSIQ
            </li>
            <li class="my-3 text-lg md:text-xl hover:font-semibold">
                Meningkatkan intensitas komunikasi dan kerja sama dengan setiap elemen yang ada di lingkungan internal maupun eksternal
            </li>
            <li class="my-3 text-lg md:text-xl hover:font-semibold">
                Mengoptimalkan HIMTI sebagai organisasi yang siap menghadapi perubahan dan tetap bertujuan mencapai suatu perkembangan dan inovasi organisasi
            </li>
        </ul>
    </div>
</div>
<div>
    <h1 class="mt-6 mb-6 text-4xl font-bold text-center md:text-6xl drop-shadow-sm md:mt-14">Program <span class="text-purple-600">Kerja</span></h1>
    <div>
        <div x-data x-masonry class="grid grid-cols-1 gap-8 mx-8 my-8 md:grid-cols-4 md:my-16 md:mx-16">
            @foreach ($program_kerja as $proker)
            <div class="w-fit h-fit">
                <h1 class="text-xl font-semibold hover:text-purple-600">
                    {{$proker->judul}}
                </h1>
                <p class="font-light text-gray-500 hover:text-gray-900">
                    {{$proker->deskripsi}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-white">
    <h1 class="mt-6 mb-6 text-4xl font-bold text-center md:text-6xl drop-shadow-sm md:mt-14">Ko<span class="text-purple-600">ntak</span></h1>
    <div class="flex flex-wrap items-center justify-center gap-y-4 mx-8 mb-16 md:mx-16">
        <a href="https://himti.fastikom-unsiq.ac.id" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <x-lucide-globe class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"/></span>
        <span>https://himti.fastikom-unsiq.ac.id</span>
        </a>
        <a href="https://instagram.com/himtunsiq/" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <x-lucide-instagram class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"/></span>
        <span>@himtiunsiq</span>
        </a>
        <a href="mailto:himti@fastikom-unsiq.ac.id" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <x-lucide-mail class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"/></span>
        <span>himti@fastikom-unsiq.ac.id</span>
        </a>
        <a href="mailto:himtifastikom@gmail.com" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <x-lucide-mail class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"/></span>
        <span>himtifastikom@gmail.com</span>
        </a>
        <a href="https://youtube.com/@HIMTIFASTIKOMUNSIQ" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <x-lucide-youtube class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"/></span>
        <span>Himti Fastikom Unsiq</span>
        </a>
        <a href="https://www.tiktok.com/@daily_himti" target="_blank"
        class="mx-4 md:px-8 py-3 md:text-xl font-semibold text-center bg-gray-100 w-full md:w-fit rounded-full shadow-lg hover:underline hover:text-purple-600 hover:bg-gray-50"
        >
        <span> <img src="/assets/images/icons/logo-tiktok.svg" alt="" class="inline-block w-6 h-6 md:w-10 md:h-10 mr-2"></span>
        <span>@daily_himti</span>
        </a>

    </div>

</div>
@endsection
