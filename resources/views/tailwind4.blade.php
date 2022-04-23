<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer sitio con Tailwind</title>

    <style>
        :root {
            --sidebar-color: #262E3C;
            --logo-sidebar-color: {{ Amaia\Base\Models\Note::first()->notes }};
            --my-bg-color: #0097FE;
            --my-bg-color-bover: #0481d7;
            --my-text-color: #ffffff;
        }

    </style>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    <div class="w-[1920px] xsm:w-full mx-auto">


        <section class="container p-5">
            <div class="flex justify-between mb-1">
                <span class="text-base font-medium text-blue-700 dark:text-white">Flowbite</span>
                <span class="text-sm font-medium text-blue-700 dark:text-white">45%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
            </div>
            <br>
            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 45%"> 45%</div>
            </div>

            <br>

            <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="font-medium">Info alert!</span> Change a few things up and try
                submitting again.
            </div>

            <br>

            <div class="bg-blue-100 rounded-lg p-4 mb-4 text-base text-blue-700" role="alert">
                A simple primary alert - check it out!
            </div>
        </section>

        <section class="overflow-hidden text-gray-700">
            <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
                <div class="flex flex-wrap -m-1 md:-m-2">
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
                        </div>
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp">
                        </div>
                    </div>
                </div>
            </div>

            <div class="content p-10">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp"
                    class="max-w-xs hover:shadow-lg transition duration-300 ease-in-out"
                    alt="Louvre" />
            </div>

            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Pie chart</div>
                <canvas class="p-10" id="chartPie"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart pie -->
            <script>
                const dataPie = {
                    labels: ["JavaScript", "Python", "Ruby"],
                    datasets: [{
                        label: "My First Dataset",
                        data: [300, 50, 100],
                        backgroundColor: [
                            "rgb(133, 105, 241)",
                            "rgb(164, 101, 241)",
                            "rgb(101, 143, 241)",
                        ],
                        hoverOffset: 4,
                    }, ],
                };

                const configPie = {
                    type: "pie",
                    data: dataPie,
                    options: {},
                };

                var chartBar = new Chart(document.getElementById("chartPie"), configPie);
            </script>

            <div id="carouselExampleCaptions" class="carousel slide relative"
                data-bs-ride="carousel">
                <div
                    class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover"
                            style="background-position: 50%;">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(123).jpg"
                                class="block w-full" />
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                            </div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover"
                            style="background-position: 50%;">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(124).jpg"
                                class="block w-full" />
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                            </div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover"
                            style="background-position: 50%;">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg"
                                class="block w-full" />
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                            </div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="flex space-x-2 justify-center">
                <div>
                    <button type="button"
                        class="inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="download" class="w-3 mx-auto" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

        </section>

    </div>

</body>

</html>
