import { heroui } from '@heroui/react';

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/**/*.{js,jsx,ts,tsx,blade.php}', './node_modules/@heroui/theme/dist/**/*.{js,ts,jsx,tsx}'],
    theme: {
        extend: {},
    },
    darkMode: 'class',
    plugins: [
        require('tailwindcss-animate'),
        heroui({
            themes: {
                colors: {
                    primary: '#7286D3',
                    accent: '#8EA7E9',
                },
            },
        }),
    ],
};
