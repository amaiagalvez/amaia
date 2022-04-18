<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    <section class="h-screen flex items-center justify-center my-auto text-gray-600 body-font">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap -m-4">

                <x-card class="" :tags="['tag1', 'tag2']">
                    <x-slot name="title">
                        <h2 class="text-xl">Title</h2>
                    </x-slot>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, non. Architecto
                    consequatur impedit provident <strong>doloremque</strong> perferendis! Minima
                    nam
                    doloremque ad optio,
                    vel delectus, aliquam dolorum natus tempore magnam omnis numquam?
                </x-card>

                <x-card class="lg:ml-2">
                    <x-slot name="title">
                        <h2 class="text-xl">Title 2 </h2>
                    </x-slot>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, non. Architecto
                    consequatur impedit provident <strong>doloremque</strong> perferendis! Minima
                    nam
                    doloremque ad optio,
                    vel delectus, aliquam dolorum natus tempore magnam omnis numquam?
                </x-card>
            </div>
        </div>
        </div>
</x-app-layout>
