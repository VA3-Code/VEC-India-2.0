module.exports = {
  plugins: [
    require("cssnano")({
      preset: "default",
    }),
    require("autoprefixer")({
      preset: "default",
    }),
    require("postcss-font-magician")({
      preset: "default",
    }),
    require("css-mqpacker")({
      sort: true,
    }),
  ],
};
