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
        <nav class="bg-logo-sidebar-color flex justify-between lg:justify-start items-center">
            <div class="logo flex-initial p-2 w-1/6">
                <img src="img/logo.png" width="100" alt="">
            </div>
            <div class="links lg:block hidden w-1/6 md:w-4/6">
                <ul class="flex menu items-center justify-center gap-5">
                    <li><a href="#" class="link">Home</a></li>
                    <li><a href="#" class="link">Play Together</a></li>
                    <li><a href="#" class="link">Explore</a></li>
                    <li><a href="#"
                            class="border-4 border-yellow-400 text-white font-bold p-2 rounded-full align-middle transition duration-500 hover:bg-white hover:text-black">Browser
                            Fury</a></li>
                    <li><a href="#"
                            class="rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:bg-white hover:text-black transition duration-500">Buy
                            Now</a></li>
                </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu">Menu</a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-gray-800">
                    <li><a href="#" class="link">Home</a></li>
                    <li><a href="#" class="link">Play Together</a></li>
                    <li><a href="#" class="link">Explore</a></li>
                    <li><a href="#"
                            class="my-4 inline-block border-4 border-yellow-400 text-white font-bold p-2 rounded-full align-middle transition duration-500 hover:bg-white hover:text-black">Browser
                            Fury</a></li>
                    <li><a href="#"
                            class="my-4 inline-block rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:bg-white hover:text-black transition duration-500">Buy
                            Now</a></li>
                </ul>
            </div>
        </nav>

        <section class="header">
            <img src="img/hero.jpg" alt="">
        </section>

        <section>
            <div class="bg-wave-pattern h-6 bg-repeat-x relative -top-2"></div>

            <div
                class="bg-wave-pattern-dots text-center p-4 flex md:flex-row flex-col gap-3 justify-center">
                <a href="#"
                    class="inline-block py-3 px-16 bg-black text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Buy
                    Now</a>
                <a href="#"
                    class="inline-block py-3 px-16 bg-red-500 text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Watch
                    the Trailer</a>
            </div>
            <div class="bg-wave-pattern bg-repeat-x h-6 relative top-2"></div>
        </section>

        <!-- SECCIÓN DE CARDS -->
        <section class="bg-pattern-characters-red py-28">
            <div class="lg:container 2xl:w-3/5 mx-auto md:flex gap-5 md:w-full p-3 ">
                <div
                    class="left bg-character-mario bg-no-repeat bg-contain bg-top w-5/6 md:w-1/2 pt-52 mx-auto">

                    <!--CARD -->
                    <div
                        class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video01.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-10">Play together</h3>
                            <p class="text-xl">Work with (or against) your friends and
                                family*.</p>
                            <a href="#" class="button group">
                                Watch the Trailer
                                <span class="arrow arrow-group"></span>
                            </a>
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>

                </div>

                <div class="right w-5/6 md:w-1/2 text-center mx-auto">
                    <h2 class="font-black text-white text-6xl py-8">Available Now</h2>

                    <p class="font-bold text-white text-2xl mx-auto py-10 w-4/5">One of the best
                        Mario games ever...</p>

                    <p class="font-black text-white text-4xl mx-auto py-10 w-4/5">Team up for a
                        paws-itively adorable adventure!</p>
                    <p class="text-white text-center w-4/5 mx-auto">
                        Bowser is up to his old tricks again and only Mario and his friends can save
                        the day! Use power-ups like the Super Bell, which grants catlike abilities
                        like climbing and scratching, to overcome Bowser and his minions.
                    </p>

                    <!--CARD -->
                    <div
                        class="card text-center bg-white 2xl:w-5/6 mx-auto mt-16 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video02.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-8">Explore</h3>
                            <p class="text-xl">Prowl through some popular places.</p>
                            <a href="#" class="button group">
                                Take a look!
                                <span class="arrow arrow-group"></span>
                            </a>
                        </div>

                        <div class="dots flex justify-between p-4">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer text-center flex justify-center gap-9 pt-10">
                <img src="img/coin.gif" alt="coin" class="coin">
                <img src="img/coin.gif" alt="coin" class="coin">
                <img src="img/coin.gif" alt="coin" class="coin">
                <img src="img/coin.gif" alt="coin" class="coin hidden sm:block">
                <img src="img/coin.gif" alt="coin" class="coin hidden sm:block">
                <img src="img/coin.gif" alt="coin" class="coin hidden sm:block">
            </div>
        </section>

        <section class="bg-yellow-dots">
            <div class="bg-wave-pink bg-repeat-x h-6 relative -top-4"></div>
            <div
                class="xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="left xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-yellow-900 font-black  xsm:text-3xl sm:text-4xl">
                        Cat <br> Transformation<br> Center
                    </h3>

                    <p class="py-4 text-xl">
                        We’re not kitten—transform into a cat-tastic new you!
                    </p>
                    <p>
                        <a href="#" class="button group">
                            Meow!
                            <span class="arrow arrow-group"></span>
                        </a>
                    </p>

                </div>

                <div class="right xl:w-1/3 lg:w-1/2">
                    <img src="img/activity_img3.png" class="md:w-full" alt="">
                </div>
            </div>
        </section>

        <footer class="bg-black">
            <div class="bg-wave-pattern bg-repeat-x h-6 relative -top-4"></div>

            <div class="container mx-auto text-center py-10 w-2/3">
                <div class="pb-5">
                    <a href="#" class="button group">
                        Customer Support
                        <span class="arrow arrow-group"></span>
                    </a>
                </div>

                <div class="text-white">
                    <p class="py-2">*Additional games, systems and/or accessories may be
                        required for multiplayer mode</p>

                    <p class="py-2">** Nintendo Switch Online membership (sold
                        separately)
                        and Nintendo Account required for online features. Not available in all
                        countries. Internet access required for online features. A Nintendo Account
                        is required to receive and redeem My Nintendo points. Terms apply.
                        nintendo.com/switch-online. </p>

                    <p class="py-2">Game, systems, some accessories and amiibo sold
                        separately. Visit amiibo.com for details on amiibo functionality. </p>

                    <p class="py-2">Nintendo Switch Lite plays all games that support
                        handheld mode.</p>

                    <p class="py-2">©2013-2021 Nintendo. Super Mario and Nintendo Switch
                        are trademarks of Nintendo.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const menuButton = document.querySelector('#mobile-menu');

        menuButton.addEventListener('click', e => {
            const menu = document.querySelector('.mobile-links');

            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
