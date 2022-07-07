module.exports = {
    content: ["./src/**/*.{html,js,php}", "./node_modules/tw-elements/dist/js/**/*.js"],
    plugins: [require("tw-elements/dist/plugin")],
    theme: {
        fontFamily: {
            roboto: ["Roboto", "sans-serif"],
            bebas: ["Bebas Neue", "sans-serif"],
            bungee: ["Bungee", "cursive"],
        },
        extend: {
            colors: {
                modern_dark_blue: {
                    DEFAULT: "#336699",
                },
                modern_light_blue: {
                    DEFAULT: "#00bfff",
                },
                modern_blue: {
                    DEFAULT: "#4598d7",
                },
                modern_grey: {
                    DEFAULT: "#DCDCDC",
                },
                modern_white_smoke: {
                    DEFAULT: "#f5f5f5",
                },
                modern_light_silver: {
                    DEFAULT: "#CCCCCC",
                },
                modern_dark_silver: {
                    DEFAULT: "#A5A5A5",
                },
                old_paper: {
                    100: "#fdf6e1",
                    200: "#f0ddb2",
                },
                comic_blue: {
                    DEFAULT: "#3377aa",
                },
                comic_orange: {
                    DEFAULT: "#ff4400",
                },
                comic_yellow: {
                    DEFAULT: "#f7a204",
                },
                comiclopedia_paper: {
                    DEFAULT: "#e6d9cc",
                },
            },
        },
    },
};
