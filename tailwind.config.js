import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
              sans: ['Montserrat Alternates', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
              inset: '0 0 10px 0 rgb(187 38 73) inset, 0 0 10px 4px rgb(187 38 73)'
            },
            colors: {
              darkblue: 'rgb(39,39,58)',
              red: '#BB2649',
            },
            margin: {
              '85': '85px',
            },
            borderRadius: {
              '28': '28px'
            }
        },
    },

    plugins: [forms, typography],
};
