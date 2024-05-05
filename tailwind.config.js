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
    future: {
      hoverOnlyWhenSupported: true
    },
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
              violetButton: '#323296',
              violetHoverButton: '#6563FF',
            },
            margin: {
              '85': '85px',
            },
            borderRadius: {
              '28': '28px'
            },
            keyframes: {
              marquee: {
                '0%': { transform: 'translateX(0%)' },
                '100%': { transform: 'translateX(-100%)' }
              },
              marquee2: {
                '0%': { transform: 'translateX(100%)' },
                '100%': { transform: 'translateX(0%)' }
              },
              'contact-title': {
                '0%': { 'background-position': '0% 50 %' },
                '100%': { 'background-position': '100% 50%' }
              },
            },
        },
    },

  plugins: [forms, typography, require("@xpd/tailwind-3dtransforms"), require('tailwind-scrollbar')({ nocompatible: true })],
};
