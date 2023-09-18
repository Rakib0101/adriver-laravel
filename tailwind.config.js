/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      display: "'IBM Plex Sans', sans-serif",
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#FFFFFF",
      black: "#000000",
      primary: {
        50: "#EEF7EA",
        100: "#DEF0D5",
        200: "#BCE1AA",
        300: "#9BD180",
        400: "#79C255",
        500: "#58B32B",
        600: "#468F22",
        700: "#356B1A",
        800: "#234811",
        900: "#122409",
      },
      gray: {
        50: "#F3F5F2",
        100: "#DEE6DC",
        200: "#B3BAB1",
        300: "#99A197",
        400: "#7A8178",
        500: "#636A60",
        600: "#4D554B",
        700: "#3A4138",
        800: "#272E25",
        900: "#171E15",
      },
      blue: {
        50: "rgba(31, 133, 226, 0.08)",
        500: "#1F85E2",
      },
      warning: {
        50: "#FDF4E9",
        100: "#FBE7D2",
        500: "#E8903B",
      },
      danger: {
        50: "#F9E9EA",
        100: "#F4D4D6",
        500: "#CC3E42",
      },
    },
    container: {
      center: true,
      padding: "1rem",
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [
    require("@tailwindcss/line-clamp"),
    require("tailwind-scrollbar-hide"),
    require("preline/plugin"),
  ],
}

