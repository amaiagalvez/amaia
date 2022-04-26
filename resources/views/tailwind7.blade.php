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
    <section
        class="relative flex items-center justify-center min-h-screen antialiased bg-white bg-gray-100 min-w-screen">
        <div class="container px-0 mx-auto sm:px-5">

            <div
                class="flex-col w-full py-4 mx-auto bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
                <div class="flex flex-row">
                    <img class="object-cover w-12 h-12 border-2 border-gray-300 rounded-full"
                        alt="Noob master's avatar"
                        src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                    <div class="flex-col mt-1">
                        <div class="flex items-center flex-1 px-4 font-bold leading-tight">Noob
                            master
                            <span class="ml-2 text-xs font-normal text-gray-500">2 weeks ago</span>
                        </div>
                        <div
                            class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                            Wow!!! how you did you
                            create this?
                        </div>
                        <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                            <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                    fill-rule="nonzero" />
                            </svg>
                        </button>
                        <button class="inline-flex items-center px-1 -ml-1 flex-column">
                            <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <hr class="my-2 ml-16 border-gray-200">
                <div class="flex flex-row pt-1 md-10 md:ml-16">
                    <img class="w-12 h-12 border-2 border-gray-300 rounded-full"
                        alt="Emily's avatar"
                        src="https://images.unsplash.com/photo-1581624657276-5807462d0a3a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                    <div class="flex-col mt-1">
                        <div class="flex items-center flex-1 px-4 font-bold leading-tight">Emily
                            <span class="ml-2 text-xs font-normal text-gray-500">5 days ago</span>
                        </div>
                        <div
                            class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                            I created it using
                            TailwindCSS
                        </div>
                        <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                            <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                    fill-rule="nonzero" />
                            </svg>
                        </button>
                        <button class="inline-flex items-center px-1 -ml-1 flex-column">
                            <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="flex-col w-full py-4 mx-auto mt-3 bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3">
                <div class="flex flex-row md-10">
                    <img class="w-12 h-12 border-2 border-gray-300 rounded-full"
                        alt="Anonymous's avatar"
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80">
                    <div class="flex-col mt-1">
                        <div class="flex items-center flex-1 px-4 font-bold leading-tight">Anonymous
                            <span class="ml-2 text-xs font-normal text-gray-500">3 days ago</span>
                        </div>
                        <div
                            class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                            Very cool! I'll have
                            to learn more about Tailwind.
                        </div>
                        <button class="inline-flex items-center px-1 pt-2 ml-1 flex-column">
                            <svg class="w-5 h-5 ml-2 text-gray-600 cursor-pointer fill-current hover:text-gray-900"
                                viewBox="0 0 95 78" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.58 0c1.53.064 2.88 1.47 2.879 3v11.31c19.841.769 34.384 8.902 41.247 20.464 7.212 12.15 5.505 27.83-6.384 40.273-.987 1.088-2.82 1.274-4.005.405-1.186-.868-1.559-2.67-.814-3.936 4.986-9.075 2.985-18.092-3.13-24.214-5.775-5.78-15.377-8.782-26.914-5.53V53.99c-.01 1.167-.769 2.294-1.848 2.744-1.08.45-2.416.195-3.253-.62L.85 30.119c-1.146-1.124-1.131-3.205.032-4.312L27.389.812c.703-.579 1.49-.703 2.19-.812zm-3.13 9.935L7.297 27.994l19.153 18.84v-7.342c-.002-1.244.856-2.442 2.034-2.844 14.307-4.882 27.323-1.394 35.145 6.437 3.985 3.989 6.581 9.143 7.355 14.715 2.14-6.959 1.157-13.902-2.441-19.964-5.89-9.92-19.251-17.684-39.089-17.684-1.573 0-3.004-1.429-3.004-3V9.936z"
                                    fill-rule="nonzero" />
                            </svg>
                        </button>
                        <button class="inline-flex items-center px-1 -ml-1 flex-column">
                            <svg class="w-5 h-5 text-gray-600 cursor-pointer hover:text-gray-700"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="min-h-screen bg-white">
        <div class="p-12 text-center">
            <h1 class="text-2xl font-bold text-pink-700 ">Our featured blogs</h1>
            <p class="text-sm text-purple-700">have a look at our most popular blogs specially
                picked
                up for you</p>
        </div>
        <div class="lg:flex lg:justify-around lg:items-center">
            <div class="m-6">
                <div class="max-w-xl m-auto bg-gray-100 rounded-lg shadow-sm ">

                    <div>
                        <div class="py-4 mx-8 text-3xl sm:flex sm:items-center">
                            <svg class="" xmlns="http://www.w3.org/2000/svg"
                                width="64" height="64">
                                <defs>
                                    <linearGradient x1="0" y1="-21.333" y2="85.333" id="A" x2="64"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#6b46c1" offset="0%" />
                                        <stop stop-color="#b83280" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M16 25.6c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8C61.867 27.733 56.533 32 48 32c-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 44.8C2.133 36.267 7.467 32 16 32c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z"
                                    fill="url(#A)" fill-rule="evenodd" />
                            </svg>
                            <h1 class="p-4 text-pink-700">Getting Started with Tailwindcss</h1>
                        </div>
                        <div>
                            <p class="px-8 pb-4 text-justify text-purple-700">Lorem ipsum dolor sit
                                amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad
                                minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo
                                consequat.
                                Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative h-16 bg-gray-100">
                            <h1
                                class="absolute bottom-0 right-0 m-8 text-purple-700 cursor-pointer text-md hover:text-pink-700 hover:underline">
                                Read full article</h1>
                            <h1 class="absolute bottom-0 right-0 mx-8 my-3 text-sm text-gray-500">
                                posted on 1st Oct.
                                2020 |
                                5
                                min. read</h1>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-16 h-16 mb-8 ml-8 border-2 border-gray-200 rounded-full bg-gradient-to-r from-purple-700 to-pink-700">
                            <svg class="pl-1 m-2 text-gray-100 fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"
                                width="40px" height="40px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <div
                            class="h-16 text-gray-100 rounded-b-lg bg-gradient-to-r from-purple-700 to-pink-700">
                            <h1
                                class="absolute bottom-0 left-0 pb-4 pl-32 text-xl font-semibold cursor-pointer hover:underline sm:hover:no-underline sm:cursor-default">
                                Nitish Kumar Sharma</h1>
                            <div
                                class="absolute bottom-0 right-0 hidden px-2 py-1 mx-8 my-4 text-sm text-gray-100 border-2 border-gray-100 border-solid rounded opacity-100 cursor-pointer sm:flex hover:opacity-75">
                                <h2>view profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-6">
                <div class="max-w-xl m-auto bg-gray-100 rounded-lg shadow-sm">
                    <div>
                        <div class="py-4 mx-8 text-3xl sm:flex sm:items-center">
                            <svg class="" xmlns="http://www.w3.org/2000/svg"
                                width="64" height="64">
                                <defs>
                                    <linearGradient x1="0" y1="-21.333" y2="85.333" id="A" x2="64"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#6b46c1" offset="0%" />
                                        <stop stop-color="#b83280" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M16 25.6c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8C61.867 27.733 56.533 32 48 32c-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 44.8C2.133 36.267 7.467 32 16 32c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z"
                                    fill="url(#A)" fill-rule="evenodd" />
                            </svg>
                            <h1 class="p-4 text-pink-700">Getting Started with Tailwindcss</h1>
                        </div>
                        <div>
                            <p class="px-8 pb-4 text-justify text-purple-700">Lorem ipsum dolor sit
                                amet, consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad
                                minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo
                                consequat.
                                Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative h-16 bg-gray-100">
                            <h1
                                class="absolute bottom-0 right-0 m-8 text-purple-700 cursor-pointer text-md hover:text-pink-700 hover:underline">
                                Read full article</h1>
                            <h1 class="absolute bottom-0 right-0 mx-8 my-3 text-sm text-gray-500">
                                posted on 1st Oct.
                                2020 |
                                5
                                min. read</h1>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-16 h-16 mb-8 ml-8 border-2 border-gray-200 rounded-full bg-gradient-to-r from-purple-700 to-pink-700">
                            <svg class="pl-1 m-2 text-gray-100 fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"
                                width="40px" height="40px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <div
                            class="h-16 text-gray-100 rounded-b-lg bg-gradient-to-r from-purple-700 to-pink-700">
                            <h1
                                class="absolute bottom-0 left-0 pb-4 pl-32 text-xl font-semibold cursor-pointer hover:underline sm:hover:no-underline sm:cursor-default">
                                Nitish Kumar Sharma</h1>
                            <div
                                class="absolute bottom-0 right-0 hidden px-2 py-1 mx-8 my-4 text-sm text-gray-100 border-2 border-gray-100 border-solid rounded opacity-100 cursor-pointer sm:flex hover:opacity-75">
                                <h2>view profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <p
                class="m-12 text-center text-gray-500 cursor-pointer txt-sm hover:underline hover:text-gray-700">
                view all
            </p>
        </div>
    </div>

    <div class="flex items-center p-4 bg-white rounded-lg shadow-xl mx-auto max-w-sm relative m-10">
        <span
            class="text-xs font-bold uppercase px-2 mt-2 mr-2 text-green-900 bg-green-400 border rounded-full absolute top-0 right-0">New</span>
        <span
            class="text-xs font-semibold uppercase m-1 py-1 mr-3 text-gray-500 absolute bottom-0 right-0">4:36
            PM</span>

        <img class="h-12 w-12 rounded-full" alt="John Doe's avatar"
            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80" />

        <div class="ml-5">
            <h4 class="text-lg font-semibold leading-tight text-gray-900">John Doe</h4>
            <p class="text-sm text-gray-600">You have a new message!</p>
        </div>
    </div>

    <div class="z-10 fixed right-0 rounded-full bottom-0 mr-5 mb-5 sm:mr-6 sm:mb-6 shadow-2xl">
        <div
            class="flex items-center justify-center bg-teal-500 rounded-full opacity-75 p-3 sm:p-4">
            <svg class="fill-current text-gray-200 h-6 w-6 sm:h-10 sm:w-10"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                <path
                    d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
            </svg>
        </div>
        <div class="absolute left-0 top-0 ml-3 mt-3 sm:ml-4 sm:mt-4">
            <div class="flex h-3 w-3">
                <span
                    class="animate-ping absolute inline-flex h-2 w-2 sm:h-full sm:w-full rounded-full bg-pink-400 opacity-75"></span>
                <span
                    class="relative inline-flex rounded-full h-2 w-2 sm:h-3 sm:w-3 bg-pink-500"></span>
            </div>
        </div>
    </div>

    <div class="p-24 bg-gray-100 flex flex-col justify-center items-center space-y-5">
        <div class="bg-white rounded-xl shadow-2xl">
            <div>
                <div class="w-full bg-cover bg-no-repeat bg-center rounded-xl"
                    style="height: 200px; background-image: url(https://images.unsplash.com/photo-1448375240586-882707db888b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);">
                </div>
                <div class="p-4">
                    <div class="relative flex w-full">
                        <div class="flex flex-1">
                            <div style="margin-top: -6rem;">
                                <div style="height: 9rem; width: 9rem;"
                                    class="md rounded-full relative avatar">
                                    <img style="height: 9rem; width: 9rem;"
                                        class="md rounded-full relative border-4 border-gray-900 justify-center"
                                        src="https://images.unsplash.com/profile-1518156163490-947fb5399aa6?dpr=1&auto=format&fit=crop&w=150&h=150&q=60&crop=faces&bg=fff"
                                        alt="" />
                                    <div class="absolute"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col text-right">
                            <button
                                class="flex justify-center max-h-max whitespace-nowrap focus:outline-none focus:ring rounded max-w-max border bg-transparent border-purple-500 hover:border-blue-800 hover:border-indigo-800 flex items-center hover:shadow-lg font-bold py-2 px-4 mr-0 ml-auto">
                                Website
                            </button>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-bold text-2xl mb-5">John Doe</h3>
                        <p class="text-sm text-gray-900 font-medium">Full Stack Developer</p>
                        <div
                            class="rounded-lg border border-white-400 bg-white-300 text-blue-900 flex">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            San Jose,California
                        </div>
                        <div class="my-5">
                            <a href="#"
                                class="text-yellow-200 block text-center font-medium leading-6 px-6 py-3 bg-yellow-600">Connect
                                with <span class="font-bold">@johndoe123</span></a>
                        </div>
                        <div class="flex flex-nowrap justify-evenly my-5">
                            <a href=""
                                class="bg font-bold text-sm text-blue-800 w-full text-center py-3 hover:bg-blue-800 hover:text-white hover:shadow-lg">Facebook</a>
                            <a href=""
                                class="bg font-bold text-sm text-blue-400 w-full text-center py-3 hover:bg-blue-400 hover:text-white hover:shadow-lg">Twitter</a>
                            <a href=""
                                class="bg font-bold text-sm text-blue-500 w-full text-center py-3 hover:bg-blue-500 hover:text-white hover:shadow-lg">Linkedin</a>
                            <a href=""
                                class="bg font-bold text-sm text-pink-800 w-full text-center py-3 hover:bg-pink-800 hover:text-white hover:shadow-lg">Instagram</a>
                            <a href=""
                                class="bg font-bold text-sm text-gray-600 w-full text-center py-3 hover:bg-gray-600 hover:text-white hover:shadow-lg">Email</a>
                            <a href=""
                                class="bg font-bold text-sm text-green-600 w-full text-center py-3 hover:bg-green-600 hover:text-white hover:shadow-lg">Whatsapp</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                            voluptates assumenda quos doloremque a ullam excepturi delectus vero ad,
                            laboriosam, iusto veritatis, facere voluptatem velit. Laboriosam iure
                            officiis
                            perspiciatis laborum!
                        </p>
                        <footer
                            class="rounded-b-lg bg-gray-100 text-sm text-gray-800 px-8 py-3 text-right">
                            Updated 2 days ago
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button id="open-modal" class="bg-blue-300 text-white p-3 rounded-lg ">Abrir modal</button>

    <div id="modal-component-container" class="fixed inset-0 hidden">
        <div
            class="modal-flex-container 
            flex flex-wrap items-end md:items-center justify-center mx-auto w-full max-w-screen-xl">

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
                    inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle ">
                <div
                    class="modal-wrapper 
                            bg-white px-4 pt-5 pb-4 
                            sm:p-6 sm:pb-4">

                    <div
                        class="modal-wrapper-flex 
                                sm:flex sm:items-start">
                        <div
                            class="modal-content 
                                    text-center mt-3 
                                    sm:mt-0 sm:ml-4 sm:text-left">

                            <article class="max-h-80vh md:max-h-90vh overflow-auto">
                                <div class="p-4 lg:p-8">
                                    <h1
                                        class="text-2xl lg:text-3xl text-blue-500 dark:text-blue-400 font-bold leading-tight">
                                        Paris</h1>
                                    <p
                                        class="text-base lg:text-lg text-blue-800 dark:text-blue-500 font-medium mb-4">
                                        Nullam dictum risus in nibh. </p>
                                    <div class="flex flex-wrap">
                                        <div class="w-full pb-4 lg:w-3/5 lg:pr-4 lg:pb-0">
                                            <div class=" gatsby-image-wrapper"
                                                style="position: relative; overflow: hidden;">
                                                <div aria-hidden="true"
                                                    style="width: 100%; padding-bottom: 65.5738%;">
                                                </div><img aria-hidden="true"
                                                    src="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                    alt=""
                                                    style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 0; transition-delay: 500ms;">
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                        sizes="(max-width: 733px) 100vw, 733px">
                                                    <source
                                                        srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                        sizes="(max-width: 733px) 100vw, 733px"><img
                                                        sizes="(max-width: 733px) 100vw, 733px"
                                                        srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                        src="/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/cc72c/paris.jpg"
                                                        alt="Paris" loading="lazy"
                                                        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1; transition: opacity 500ms ease 0s;">
                                                </picture><noscript>
                                                    <picture>
                                                        <source type='image/webp'
                                                            srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                            sizes="(max-width: 733px) 100vw, 733px" />
                                                        <source
                                                            srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                            sizes="(max-width: 733px) 100vw, 733px" />
                                                        <img loading="lazy"
                                                            sizes="(max-width: 733px) 100vw, 733px"
                                                            srcset="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                            src="https://gatsby-airtable-listing.netlify.app/static/1daf9bf52b3b6680ecf4d79e1b7dafd0/3d40e/paris.webp"
                                                            alt="Paris"
                                                            style="position:absolute;top:0;left:0;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center" />
                                                    </picture>
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-2/5 lg:pl-4">
                                            <h4
                                                class="text-blue-800 dark:text-blue-400 uppercase text-xxs tracking-wide font-medium pb-px">
                                                Country</h4>
                                            <div
                                                class="font-medium text-blue-800 dark:text-blue-400 text-base leading-loose mb-4">
                                                <div class="truncate">🇫🇷 France</div>
                                            </div>
                                            <h4
                                                class="text-blue-800 dark:text-blue-400 uppercase text-xxs tracking-wide font-medium pb-px">
                                                What to see?</h4>
                                            <div
                                                class="font-medium text-blue-800 dark:text-blue-400 text-base leading-loose mb-4">
                                                <span class="inline-block mr-4 break-normal">Eiffel
                                                    Tower</span><span
                                                    class="inline-block mr-4 break-normal">Louvre</span>
                                            </div>
                                            <h4
                                                class="text-blue-800 dark:text-blue-400 uppercase text-xxs tracking-wide font-medium pb-px">
                                                More info</h4>
                                            <div
                                                class="font-medium text-blue-800 dark:text-blue-400 text-base leading-loose mb-4">
                                                <div class="truncate"><a
                                                        href="https://en.parisinfo.com/"
                                                        target="_blank" rel="noopener noreferrer"
                                                        class="text-blue-500 dark:text-blue-400 hover:text-blue-700 transition-colors duration-200">https://en.parisinfo.com/</a>
                                                </div>
                                            </div>
                                            <p
                                                class="mt-4 whitespace-pre-line text-sm lg:text-base leading-normal text-blue-900 dark:text-blue-600">
                                                Ut vestibulum at lorem ut hendrerit. Vivamus
                                                interdum eros lacus, eget fringilla est facilisis
                                                vitae. In luctus, mauris id pharetra pharetra, magna
                                                mi porta diam, sed dapibus felis ligula at elit.

                                                Duis sit amet pharetra lectus, et finibus sapien.
                                                Vivamus sem ipsum, rhoncus et nunc a, rutrum aliquam
                                                dolor. Donec cursus vulputate convallis.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
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
