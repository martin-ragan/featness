const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    corePlugins: {
        outline: false,
    },
    theme: {
        extend: {
            inset:{
              '10vh':'10vh'
            },
            height: {
                'vh-large': '80vh',
                'vh-larger': '90vh',
                'vh-small': '20vh',
                'vh-smaller': '10vh',
                '9/10': '90%'
            },
            width: {
                '12/25': '48%',
            },
            fontSize: {
                'tiny': ['0.7rem', '0.8rem'],
            },
            minHeight: {
                '1/6v': '12vh',
                '5/6v': '84vh',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#C18E60',
                secondary: '#283C50',
                secondaryBg: 'rgba(40, 60, 80, 0.85)',
                primaryBg: 'rgba(193, 142, 96, 0.85)'
            },
            spacing: {
                '80': '28rem',
                '96': '40rem',
                '18': '3rem'
            },
            backgroundImage: theme => ({
                'icon': "url('../images/1.png')",
                'dark-background': "url('../images/bg-dark-desktop.png')",
                'light-background': "url('../images/bg-light-desktop.png')",
                'light-mobile-background': "url('../images/bg-light-desktop.png')",
                'main-page-background': "url('../images/main-page-bg.png')",
                'select-arrow': "url('../images/select-arrow.png')"
               })
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['checked'],
            borderColor: ['checked'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
