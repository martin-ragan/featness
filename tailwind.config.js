const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#C18E60',
                secondary: '#283C50',
                secondaryBg: 'rgba(40, 60, 80, 0.85)'
            },
            spacing: {
                '96': '28rem',
            },
            backgroundImage: theme => ({
                'icon': "url('../images/1.png')",
                'dark-background': "url('../images/bg-dark-desktop.png')"
               })
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
