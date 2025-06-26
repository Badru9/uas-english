import { heroui } from '@heroui/react';

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/**/*.{js,jsx,ts,tsx,blade.php}', './node_modules/@heroui/theme/dist/**/*.{js,ts,jsx,tsx}'],
    theme: {
        extend: {
            fontFamily: {
                nunito: ['Nunito Sans', 'sans-serif'],
            },
            colors: {
                'smoke-white': '#F5F5F5',
                primary: '#7286D3',
                accent: '#8EA7E9',
            },
        },
    },
    plugins: [
        require('tailwindcss-animate'),
        heroui({
            prefix: 'heroui',
            defaultExtendTheme: 'light',
            defaultTheme: 'light',
            themes: {
                light: {
                    primary: {
                        DEFAULT: '#7286D3',
                        foreground: '#8EA7E9',
                    },
                },
            },
        }),
    ],
};
