<div class="login">

    <div class="px-6 py-4">

        {{ $logo }}
    </div>

    <div
        class="w-85 h-100 sm:max-w-md mt-2 mb-4 px-6 py-4 bg-gray-200 bg-opacity-40 shadow-md overflow-hidden sm:rounded-lg">


        <div>
            {{ $slot }}
        </div>

    </div>
    <footer class="w-full">
        <x-footer />

    </footer>