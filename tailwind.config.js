const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php', //can remove

    ],

    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.green,
                success: colors.green-200,
                warning: colors.green-500,
            }, //can remove
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
