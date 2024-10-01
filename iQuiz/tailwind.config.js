import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            opacity: {
                '94' : '0.94',
            },
            backgroundImage: {
                'homepage-bg': "url('/images/bg-img.jpg')",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                satoshi: ['Satoshi', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
            },
            colors: {
                'custom-gray': 'rgb(222, 228, 238)',
                'custombg-gray' : '#1C2434',
                'sidebar-menu' : '#8A99AF',
                'button-bg' : '#3E4DB5',
                'custom-black' : '#202020',
                'custom-bt' : '#0eb1d2',
                'custom-bt-hover' : '#34E4EA',
                'softwhite' : '#f8f9fa',
                'bg-violet': '#020F1F',
            },
            width: {
                'custom-sidebar-width' : '290px',
                '1366px': '1170px',
            },
        },
    },

    plugins: [forms],
};
