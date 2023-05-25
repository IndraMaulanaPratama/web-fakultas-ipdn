/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#Ce2619",
                    "primary-focus": "#a51e14",
                    "primary-content": "#FFFFFF",
                    secondary: "#12485b",
                    "secondary-focus": "#0d3240",
                    "secondary-content": "#FFFFFF",
                    neutral: "#1f0106",
                    "neutral-focus": "#9d1006",
                    "neutral-content": "#000000",
                    accent: "#f0f0f0",
                    "accent-focus": "#f8f8f8",
                    "accent-content": "#000000",
                    //
                    "base-100": "#FFFFFF",
                    //
                    info: "#2fe0ac",
                    "info-content": "#000000",
                    success: "#5de7bf",
                    "success-content": "#000000",
                    warning: "#FEDB39",
                    "warning-content": "#000000",
                    error: "#740216",
                    "error-content": "#FFFFFF",
                },
            },
        ],
    },
    plugins: [
        require("daisyui"),
        require('@tailwindcss/forms')({
            strategy: 'class',
        }),
    ],
};
