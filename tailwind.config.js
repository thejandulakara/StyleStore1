import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
    'fade-in': 'fadeIn 1s ease-in-out',
    'slide-up': 'slideUp 0.5s ease-out',
    'bounce-slow': 'bounce 3s infinite',
},
keyframes: {
    fadeIn: {
        '0%': { opacity: '0' },
        '100%': { opacity: '1' },
    },
    slideUp: {
        '0%': { transform: 'translateY(20px)', opacity: '0' },
        '100%': { transform: 'translateY(0)', opacity: '1' },
    },
}
        },
    },

    plugins: [forms],
};
