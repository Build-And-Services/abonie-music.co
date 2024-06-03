/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["class", '[data-mode="dark"]'],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
