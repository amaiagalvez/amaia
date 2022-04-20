const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            container: {
                center: true,
            },

            fontFamily: {
                montserrat: ['Montserrat', ...defaultTheme.fontFamily.sans],
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

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
