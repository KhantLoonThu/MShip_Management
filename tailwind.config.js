/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './src/**/*.php',
    './src/assets/**/*.{html,js}',
    './*.php',
  ],
  theme: {
    backgroundImage: {
      banner: 'url(/dist/images/banner-bg.png)',
    },
    extend: {
      fontSize: {
        '4xl': '36px',
        '3xl': '30px',
        '2xl': '24px',
        'extra-xl': '22px',
        'xl': '20px',
        'lg': '18px',
        'base': '16px',
      },
      fontWeight: {
        'bold': '700',
        'semibold': '600',
        'medium': '500',
      },
      screens: {
        'xs': '320px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
        'lg-2': '968px', // Added breakpoint
      },
      colors: {
        primary: '#FF9500',
        secondary: '#007AFF',
        white: '#fff',
        black: '#000',
        lightGray: '#8E8E93',
      },
      fontFamily: {
        'poppins': ['Poppins', ...defaultTheme.fontFamily.sans],
      },
      borderRadius: {
        'xl': '1.5rem',
        '2xl': '2rem',
      },
      boxShadow: {
        'md': '0 4px 6px rgba(0, 0, 0, 0.1)',
        'lg': '0 10px 15px rgba(0, 0, 0, 0.1)',
        'xl': '0 20px 25px rgba(0, 0, 0, 0.1)',
        'blur': '0 0 30px 0 rgba(0, 0, 0, 0.15)',
      },
    },
  },
  plugins: [],
};
