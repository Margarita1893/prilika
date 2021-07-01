<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plataforma desarrolladores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    .bg-white {
        opacity: .8;
        border-radius: 0 0 10px 10px;
    }
    </style>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="antialiased">


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- ++++++++++++++++++++ HEADER BEGIN ++++++++++++++++++++ -->
    <div>
        <header class="bg-gray-800" x-data="{ isOpen: false }">
            <nav class="container  px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-white transition-colors duration-300 transform md:text-2xl hover:text-indigo-400"
                        href="#">Prilika</a>

                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button"
                            class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'"
                    class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">


                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 underline">Mi cuenta</a>
                        </a>
                        @else
                        <a href="{{ route('login') }}"
                            class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400">Inicio
                            sessión</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400">Registro</a>
                        @endif
                        @endauth
                    </div>
                    @endif

            </nav>


            <section class="bg-gray-400  mt-11">
                <h2 class="text-3xl text-center font-semibold text-gray-800">Inicia Sesión
                </h2>
                <div class="max-w-5xl px-8 py-8 mx-auto">
                    <div class="items-center md:flex md:space-x-6">
                        <div class="mt-8 md:mt-0 md:w-1/2">
                            <div class="flex items-center justify-center ">
                                <div class="max-w-md">
                                    <img class="bg-white object-center w-full rounded-md shadow"
                                        src="/img/developerbg.png">
                                    <div class="flex justify-center mt-8">
                                        <a href="{{ route('login') }}"
                                            class="px-8 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 mr-10"
                                            href="#">Postulate a una oferta</a>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="mt-8 md:mt-0 md:w-1/2">
                            <div class="flex items-center justify-center">
                                <div class="max-w-md">
                                    <img class="bg-white object-center w-full rounded-md shadow"
                                        src="/img/empresabg.png">
                                    <div class="flex justify-center mt-8">
                                        <a href="{{ route('login') }}"
                                            class="px-8 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 mr-10"
                                            href="#">Postula una oferta</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!-- ++++++++++++++++++++ HEADER CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ ABOUT US BEGIN ++++++++++++++++++++ -->
        <section class="bg-white">
            <div class="max-w-5xl px-6 pt-14 pb-6 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">El mejor talento y las mejores empresas están en<br>
                    Prilika
                </h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Si eres un talento apasionado por la tecnologia o una
                    empresa buscando los mejores colaboradores en prilika encontraras tu solución</p>
            </div>
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Estas ofertas pueden Interesarte...</h2>
                <div>
        </section>
        <!-- ++++++++++++++++++++ ABOUT US CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ FILTER BEGIN ++++++++++++++++++++ -->
        <!-- ++++++++++++++++++++ FILTER CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ cards ++++++++++++++++++++ -->
        <div>


            {{-- <x-vacancy-card />  --}}
            {{-- @include('vacancyindex') --}}
            {{-- <x-vacancie-list /> --}}


            <livewire:vacancies-list />
        </div>
        <!-- ++++++++++++++++++++ FOOTER BEGIN ++++++++++++++++++++ -->
        <footer>
            <x-footer />

        </footer>