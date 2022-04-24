<x-app-layout>

    <section id="app" class="text-gray-600 font-space_grotesk ">

    </section>

    <section class="h-screen text-gray-600 font-space_grotesk ">
        {{-- @if (session('status')) --}}
        <div class="mx-2 x-auto w-full  block bg-red-100 rounded-lg py-2 px-6 text-base text-red-700 mb-3"
            role="alert">
            {{ session('status') }} Alert
        </div>
        {{-- @endif --}}

        <div class="flex flex-col justify-center my-auto items-center">

            <div class="rounded-lg shadow-lg bg-white text-center max-w-5xl">
                <div class="py-3 px-6 border-b border-gray-300">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum earum a quasi
                </div>
                <div class="mb-3 xl:w-96">
                    <div class="p-6">
                        <input type="text"
                            class="
                      form-control
                      block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                            id="note" placeholder="Gehitu note" />

                        <button type="button"
                            class=" inline-block px-6 py-2.5 mt-5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Gorde</button>
                    </div>
                </div>
            </div>

            <div class="mt-10 rounded-lg shadow-lg bg-white text-center max-w-5xl ">
                <div class="py-3 px-6 border-b border-gray-300">
                    Someone 2 days ago
                </div>
                <div class="px-2 mb-3 xl:w-96">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sint commodi,
                    inventore eligendi ullam reiciendis earum adipisci ut eos laboriosam eveniet
                    facilis? Eaque facilis exercitationem eum expedita cum architecto consectetur?

                    <div class="flex justify-end">
                        <button type="button"
                            class=" inline-block px-2 py-2 mt-5 bg-blue-600 text-white font-light text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <button type="button"
                            class="ml-2 inline-block px-2 py-2 mt-5 bg-red-600 text-white font-light text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/vue.js') }}"></script>
</x-app-layout>
