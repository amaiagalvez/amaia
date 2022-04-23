<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tailwind') }}
            <a href="https://tailwindcss.com/docs" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 inline text-red-500 hover:text-blue-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-blue-200 sm:col-span-2 md:col-span-3 lg:col-span-4">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500 col-start-2">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
        </div>
    </div>

    <div class="container my-5">
        <div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
        </div>
    </div>

    <div class="container my-5">
        <div class="grid grid-cols-4 grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="font-montserrat text-6xl md:text-3xl font-bold"> texto H1 </h1>
        <h1> texto H1 </h1>
        <p class="font-montserrat font-semibold leading-tight my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore harum soluta
            voluptatum error, unde numquam, dignissimos a tenetur sequi excepturi labore dicta
            cumque at, dolores deleniti id nisi architecto cum.</p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore harum soluta
            voluptatum error, unde numquam, dignissimos a tenetur sequi excepturi labore dicta
            cumque at, dolores deleniti id nisi architecto cum.</p>
        <ul>
            <li class="font-mono text-sm italic">li #01</li>
            <li class="font-mono text-sm italic">li #02</li>
            <li class="font-mono text-sm italic">li #03</li>
            <li>li #04</li>
        </ul>
    </div>

    <div class="container">
        <div class="bg-blue-600 h-64">
            <div class="bg-red-500 h-full w-full max-w-lg">

            </div>
        </div>
    </div>

    <div class="container">
        <div class="bg-black w-64 h-screen">

        </div>
    </div>

    <div class="container my-5">

        <ul class="text-xl list-disc list-inside">
            <li>tailwind.config.js para cargar los datos por defecto</li>
            <li>container: tiene puntos de corte</li>
            <li>mx-auto: centrar el container</li>
            <li>grid-cols: número de columnas</li>
            <li>gap: separación entre div</li>
            <li>col-span: cuantas columnas tiene que ocupar el div</li>
            <li>col-start: en qué columna debe de empezar el div</li>
            <li>resoruces/css/app.css: crear las clases </li>
            <li>icons: https://heroicons.com/ </li>
            <li>images: https://www.pexels.com/ </li>
        </ul>
    </div>

    

</x-app-layout>
