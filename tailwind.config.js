import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Work Sans", ...defaultTheme.fontFamily.sans],
                brand: ["Josefin Sans", "sans-serif"],
            },
            colors: {
                // Original Poseify Gold
                primary: "#D4AF37",
                // Original Poseify Dark Background
                dark: "#111111",
                // Original Poseify Secondary (Light Gray-Black)
                secondary: "#1a1a1a",
                'body-text':'#FFFFFF'
            },
        },
    },
    plugins: [],
};
