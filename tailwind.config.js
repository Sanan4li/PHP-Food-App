const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
  content: ["*.html"],
  theme: {
    extend: {
      fontFamily: {
        mont: "Montserrat",
        // heading: "Proxima",
        primary: "Asap",
      },
      colors: {
        background: "#F3F5F7",
        secondary: "#373737",
        primary: "#0576F0",
        header: "#2D2C2C",
        button: "#464646",
      },
      fontSize: {
        heading: "22px",
        subheading: "18px",
      },
    },
  },
  plugins: [],
};
