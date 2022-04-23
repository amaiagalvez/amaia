<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>

    <button id="open-modal" class="bg-blue-300 text-white p-3 rounded-lg ">Abrir modal</button>

    <div id="modal-component-container" class="fixed inset-0 hidden">
        <div
            class="modal-flex-container 
                    flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center 
                    sm:block sm:p-0">

            <div
                class="modal-bg-container
                    fixed inset-0 bg-gray-700 bg-opacity-75">

            </div>

            <div
                class="modal-sapce-container 
                        hidden 
                        sm:inline-block sm:align-middle sm:h-screen">
                <!-- La capa oculta hace un espacio -->
            </div>

            <div id="modal-container"
                class="modal-container 
                    inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg 
                    w-full">
                <div
                    class="modal-wrapper 
                            bg-white px-4 pt-5 pb-4 
                            sm:p-6 sm:pb-4">

                    <div
                        class="modal-wrapper-flex 
                                sm:flex sm:items-start">

                        <div
                            class="modal-icon 
                                    mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 
                                    sm:mx-0 sm:h-10 sm:w-10">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div
                            class="modal-content 
                                    text-center mt-3 
                                    sm:mt-0 sm:ml-4 sm:text-left">

                            <h3 class="text-lg font-medium text-gray-900"> Eliminar el elemento</h3>

                            <div class="modal-text mt-2">

                                <p class="text-gray-500 text-sm">¿Seguro que quieres eliminar el
                                    elemento?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="modal-actions 
                            bg-gray-50 px-4 py-3 
                            sm:px-6 sm:flex sm:flex-row-reverse">

                    <a href="{{ route('dashboard') }}"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-3 py-2 bg-red-700 font-medium text-white
                        hover:bg-red-600 
                        focus:outline-none focus:ring-2 focus:ring-offeset-2 focus:ring-red-200 
                        sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Eliminar
                    </a>

                    <button id="close-modal"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-md px-3 py-2 bg-white font-medium text-gray-700 
                        hover:bg-gray-50 
                        focus:outline-none focus:ring-2 focus:ring-offeset-2 focus:ring-blue-200 
                        sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const closeButton = document.querySelector("#close-modal");
        const openButton = document.querySelector("#open-modal");
        const modalContainer = document.querySelector("#modal-component-container");
        const modal = document.querySelector("#modal-container");

        openButton.addEventListener("click", () => {
            openModal();
        });
        closeButton.addEventListener("click", () => {
            closeModal();
        });

        function openModal() {
            showAndHide(modalContainer, ["block", "bg-fadeIn"], ["hidden", "bg-fadeOut"]);
            showAndHide(modal, ["modal-scaleIn"], ["modal-scaleOut"]);
        }

        function closeModal() {
            showAndHide(modalContainer, ["bg-fadeOut"], ["bg-fadeIn"]);
            showAndHide(modal, ["modal-scaleOut"], ["modal-scaleIn"]);

            setTimeout(() => {
                showAndHide(modalContainer, ["hidden"], ["block"]);
            }, 300);
        }

        function showAndHide(element, classesToAdd, classesToRemove) {
            element.classList.remove(...classesToRemove);
            element.classList.add(...classesToAdd);
        }
    </script>
</body>

</html>
