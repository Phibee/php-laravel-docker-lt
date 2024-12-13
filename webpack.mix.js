// const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix
//   .js("resources/js/app.js", "public/js")
//   //   .sass("resources/sass/app.scss", "public/css")
//   .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);

// mix
//   .js("resources/js/app.js", "js")
//   .postCss("resources/css/app.css", "css")
//   .setPublicPath("dist");

const mix = require("laravel-mix");

mix.webpackConfig({
  optimization: {
    chunkIds: "named",
  },
});

mix
  .js("resources/js/app.js", "public/js")
  .react()
  .extract(["react"])
  .postCss("resources/css/app.css", "public/css", [
    require("postcss-import"),
    require("tailwindcss"),
  ]);
// .setPublicPath("dist");
// .webpackConfig(require("./webpack.config"));

if (mix.inProduction()) {
  mix.version();
}
