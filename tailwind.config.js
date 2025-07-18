import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                heading: ['League Spartan', ...defaultTheme.fontFamily.sans],
                body: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#0a1f44',
                secondary: '#ffffff',
                'frosty-white': '#f2f9ff',
                'blush-pink': '#f9bbc6',
                pink: '#ff4f8b',
                tosca: '#03a6a1',
                'sunshine-yellow': '#ffdb57',
                'vivid-sky-blue': '#0a9aff',
                'mint-green': '#35c395',
                'rose-pink': '#f06a84',
                'dodger-blue': '#25a5f1',
            },
            screens: {
                xs: '375px',
                sm: '480px',
                md: '768px',
                lg: '976px',
                xl: '1440px',
                '2xl': '1600px',
            },
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
            borderRadius: {
                '4xl': '2rem',
            },
        },
    },

    plugins: [forms, typography, aspectRatio],
};
