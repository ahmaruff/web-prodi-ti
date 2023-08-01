<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @stack('styles')
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div>
        <div class="min-h-screen text-gray-900 bg-gray-100">
            <div class="flex flex-col min-h-screen" style="transition-property: margin; transition-duration: 150ms;">
                @include('public.layouts.nav')
                <div class="md:mt-24" id="top"></div>
                <div class="flex flex-col justify-center w-full h-screen md:mt-16 md:flex-row">
                    <div class="w-full md:w-1/2" style="min-height: 20rem;">
                        <div class="relative">
                            <div class="absolute z-10 w-32 pt-16 rounded-full shadow-lg top-16 left-8 bg-gradient-to-tr from-purple-500 to-pink-500 hover:transition hover:ease-linear hover:scale-110"></div>
                            <div class="absolute z-10 w-20 pt-32 rounded-lg shadow-lg top-48 left-20 bg-gradient-to-tr from-indigo-500 to-teal-500 hover:transition hover:ease-linear hover:scale-110"></div>
                            <div class="absolute z-10 w-32 pt-32 rounded-full shadow-lg top-48 right-20 bg-gradient-to-br from-amber-400 to-red-400 hover:transition hover:ease-linear hover:scale-125"></div>
                            <div class="absolute top-0 z-10 w-24 pt-24 rounded-lg shadow-lg right-20 bg-gradient-to-br from-pink-500 to-indigo-300 hover:transition hover:ease-linear hover:scale-110"></div>
                            <div class="absolute z-20 w-48 pt-24 rounded-full shadow-lg top-2 right-64 bg-gradient-to-tl from-amber-500 to-yellow-300 hover:transition hover:ease-linear hover:scale-110"></div>
                            <div class="absolute z-20 w-2/3 rounded-lg top-6 left-8 md:left-24 aspect-video hover:transition hover:ease-linear">
                                <img src="/assets/images/hero.jpg" alt="" class="object-cover w-full ease-in-out rounded-lg shadow-2xl aspect-video hover:transition hover:ease-linear hover:scale-105">
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-8 md:w-1/2">
                        <div>
                            <h1 class="text-4xl font-black md:text-6xl">
                                We Build a <span class="text-purple-700 hover:text-purple-600">Better Tech</span> For Humanity
                            </h1>
                            <h2 class="block mt-6 text-xl font-light md:text-2xl">
                                Ayo bergabung bersama kami dalam memajukan teknologi Indonesia
                            </h2>
                        </div>
                        <div class="flex items-center h-20">
                            <a href="#1" class="static px-10 py-3 font-bold text-white rounded-full shadow-lg bg-gradient-to-tr from-purple-500 to-pink-500 hover:bg-gradient-to-tr hover:from-purple-700 hover:to-pink-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pt-24 bg-white" id="1"></div>
                <div class="min-h-screen bg-white">
                    <div class="flex flex-col justify-center md:flex-row">
                        <div class="flex items-center justify-center md:w-1/2">
                            <div class="w-2/3">
                                <h1 class="text-xl font-semibold text-purple-700 md:text-2xl">
                                    Program Studi
                                </h1>
                                <h1 class="text-3xl font-bold md:text-4xl hover:transition hover:scale-105">
                                    Teknik Informatika
                                </h1>
                                <div class="py-1 pl-2 pr-10 mt-2 font-semibold text-gray-300 border-2 rounded-r-full w-fit hover:text-purple-400 hover:border-purple-300">
                                    FAKULTAS TEKNIK DAN ILMU KOMPUTER
                                </div>
                                <p class="mt-4 text-xl">
                                    Mengintegrasikan teknologi dengan kurikulum inovatif, pendekatan humanis, dan bernafaskan Qur'ani
                                </p>
                                <a href="#2" class="block px-6 py-2 mt-4 mb-8 font-semibold text-center text-white rounded-full shadow-lg w-fit bg-gradient-to-r from-indigo-500 to-purple-600 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                                Profil Lulusan
                                </a>
                            </div>
                        </div>
                        <div class="md:w-1/2">
                            <img src="/assets/images/rifig.jpg" alt="" class="object-cover w-full h-full md:rounded-l-full">
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="2"></div>
                <div class="min-h-screen mx-10 md:mx-24">
                    <div class="flex flex-col md:flex-row">
                        <div class="mx-6 md:w-1/2 md:mx-16">
                            <h1 class="my-6 text-3xl font-bold text-center md:text-4xl hover:transition hover:scale-105">
                                Profil Lulusan
                            </h1>
                            <ul x-data x-masonry class="grid grid-cols-2 gap-4">
                                <li class="text-white rounded-lg bg-slate-900 h-60">
                                    <img src="/assets/images/konser.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                                </li>
                                <li class="text-white rounded-lg h-36 bg-slate-900">
                                    <img src="/assets/images/pak-hid.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                                </li>
                                <li class="text-white rounded-lg h-28 bg-slate-900">
                                    <img src="/assets/images/pak-dian.jpg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                                </li>
                                <li class="text-white rounded-lg h-52 bg-slate-900">
                                    <img src="/assets/images/kuliah-tamu.jpeg" alt="" class="object-cover w-full h-full rounded-lg shadow-lg hover:transition hover:scale-105">
                                </li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-center w-full md:w-1/2 sm:mt-16 md:mt-0">
                            <div class="container w-full" x-data="{ activeAccordion: 0 }">
                                @foreach ($profil_lulusan as $lulusan)
                                <div>
                                    <button class="text-lg font-semibold hover:text-purple-600"
                                        @click="activeAccordion = activeAccordion === {{$lulusan['id']}} ? false : {{$lulusan['id']}}"
                                        :class="{ 'button-active underline text-purple-600 mt-2': activeAccordion === {{$lulusan['id']}} }"
                                        class="button"
                                    >
                                        {{$lulusan['profil_lulusan']}}
                                    </button>
                                
                                    <div x-cloak x-show="activeAccordion === {{$lulusan['id']}}" x-collapse>
                                        <div class="mb-3 font-light content">
                                        {{$lulusan['deskripsi']}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <a href="#3" class="block px-6 py-2 mt-4 mb-8 font-semibold text-center text-white rounded-r-full shadow-lg w-fit bg-gradient-to-tr from-purple-500 to-teal-400 hover:translate-y-1 hover:shadow-2xl hover:ease-linear hover:transition">
                                    Berita Terbaru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-24 bg-white" id="3"></div>
                <div class="min-h-screen px-10 md:px-24 bg-gradient-to-bl from-purple-500 to-teal-600">
                    <h1 class="my-8 text-3xl font-bold text-center text-white md:text-4xl hover:transition hover:scale-105">
                        Berita Terbaru
                    </h1>
                    <div class="flex flex-col md:flex-row">
                        @dump($berita_terbaru)
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
