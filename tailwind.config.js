import colors from "tailwindcss/colors";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{ts,js}", "./theme/**/*.{php,html}"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
    fontFamily: {
      heading: ["Roboto Flex Variable", ...defaultTheme.fontFamily.sans],
      body: ["Open Sans Variable", ...defaultTheme.fontFamily.sans],
    },
    colors: {
      blue: {
        50: "#dae7fb",
        100: "#c8dcf9",
        200: "#a3c4f5",
        300: "#7eacf2",
        400: "#5995ee",
        500: "#347dea",
        600: "#1767de",
        700: "#124fab",
        800: "#0c3878",
        900: "#072045",
        950: "#05142c",
        DEFAULT: "#1767de",
      },
      pink: {
        50: "#efe8ee",
        100: "#e6dce4",
        200: "#d6c4d2",
        300: "#c5acc0",
        400: "#b494ae",
        500: "#9d7395",
        600: "#7f5978",
        700: "#5e4259",
        800: "#3d2b39",
        900: "#1c141a",
        950: "#0b080b",
        DEFAULT: "#b494ae",
      },
      grey: colors.gray,
      yellow: colors.yellow,
      white: "#ffffff",
      black: "#000000",
    },
    extend: {
      gridTemplateRows: {
        "navbar-open": "min-content 1fr",
        "navbar-closed": "min-content 0fr",
      },
      content: {
        empty: '""',
      },
      backgroundColor: {
        transparent: "transparent",
      },
      spacing: {
        192: "48rem",
      },
    },
  },
  plugins: [
    require("tailwindcss-full-bleed"),
    require("@tailwindcss/typography"),
    require("@pyncz/tailwind-mask-image"),
  ],
};
