module.exports = {
  content: ["./src/**/*.{html,js}", "./public/index.html"],
  theme: {
    extend: {
      fontFamily: {
        Montserrat: ["Montserrat", "sans-serif"],
      },
      colors: {
        pri: "#e65540",
      },
      keyframes: {
        fadeIn: {
          from: {
            opacity: 0,
            transform: "scale(1.25)",
          },
          to: {
            opacity: 1,
            transform: "scale(1)",
          },
        },
        fadeRight: {
          "0%,50%": {
            opacity: 0,
            transform: "translateX(-100%)",
          },
          "100%": {
            opacity: 1,
            transform: "translateX(0)",
          },
        },
        fadeUp: {
          "0%,50%": {
            opacity: 0,
            transform: "translateY(100%)",
          },
          "100%": {
            opacity: 1,
            transform: "translateY(0)",
          },
        },
      },
      animation: {
        fadeIn: "fadeIn 800ms ease-in-out",
        fadeRight: "fadeRight 1200ms ease-in-out forwards",
        fadeUp: "fadeUp 1600ms ease-in-out forwards",
      },
    },
  },
  plugins: [],
};
