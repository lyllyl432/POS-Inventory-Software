/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#FFFFFF",
        secondary: "#2660A4",
        "secondary-variant": "rgba(38,96,164,0.1)",
        accent: "#0CCA4A",
        dark: "#000000",
        "dark-variant": "rgba(0,0,0,0.4)",
        "dark-variant-2": "rgba(0,0,0,0.2)",
      },
    },
  },
  plugins: [],
};
