/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: '#0F4D2E',
                secondary: '#2D7A45',
                accent: '#D8A320',
                accentLight: '#F2C94C',
                background: '#F8FAF7',
                dark: '#1B1B1B',
            },

            fontFamily: {
                heading: ['Montserrat', 'sans-serif'],
                body: ['Inter', 'sans-serif'],
            },

            boxShadow: {
                soft: '0 10px 30px rgba(0,0,0,.08)',
            },

            borderRadius: {
                '4xl': '2rem',
            },

            backgroundImage: {
                'hero-gradient':
                    'linear-gradient(135deg, #0F4D2E 0%, #2D7A45 50%, #D8A320 100%)',
            }
        },
    },

    plugins: [],
}