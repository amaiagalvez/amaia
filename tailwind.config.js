const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js'
    ],

    theme: {
        extend: {
            colors: {
                'sidebar-color': 'var(--sidebar-color)',
                'logo-sidebar-color': 'var(--logo-sidebar-color)',
                'my-bg-color': 'var(--my-bg-color)',
                'my-bg-color-bover': 'var(--my-bg-color-bover)',
                'my-text-color': 'var(--my-text-color)',
            },

            backgroundImage: theme => ({
                'wave-pattern': 'url(../../public/img/wave-white.png)',
                'wave-pattern-dots': 'url(../../public/img/pattern-white-dots.png)',
                'pattern-characters-red': "url('../../public/img/pattern-characters-red.png')",
                'character-mario': "url('../../public/img/character-l.png')",
                'wave-pink': "url('../../public/img/wave-pink.png')",
                'yellow-dots': "url('../../public/img/pattern-yellow-dots.png')",
            }),
            screens: {
                'xsm': '320px'
            },

            animation: {
                fadeIn: "fadeIn",
                fadeOut: "fadeOut",
                scaleIn: "scaleIn",
                scaleOut: "scaleOut"
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 }
                },
                fadeOut: {
                    "0%": { opacity: 1 },
                    "100%": { opacity: 0 }
                },
                scaleIn: {
                    "0%": { transform: "scale(0)" },
                    "100%": { transform: "scale(1)" }
                },
                scaleOut: {
                    "0%": { transform: "scale(1)" },
                    "100%": { transform: "scale(0)" }
                }
            },
            // container: {
            //     center: true,
            // },

            fontFamily: {
                space_grotesk: ["Space Grotesk"],
            },

            // fontSize: {
            //     'xs': '2rem',
            //     'sm': ' 2rem',
            //     'tiny': '2rem',
            //     'base': '2.25rem',
            //     'lg': '2.5rem',
            //     'xl': '2.5rem',
            //     '2xl': '3rem',
            //     '3xl': '3rem',
            //     '4xl': '3rem',
            //     '5xl': '4rem',
            //     '6xl': '5rem',
            //     '7xl': '6rem',
            // }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tw-elements/dist/plugin')
    ],
};
