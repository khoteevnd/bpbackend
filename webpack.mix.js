let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/assets/js/custom.js', 'public/js');
mix.js('resources/assets/js/owl.js', 'public/js');
mix.js('resources/assets/js/SmoothScroll.js', 'public/js');
//css libs
mix.sass('resources/assets/sass/custom.sass', 'public/css');
mix.copy('resources/assets/libs/animate.css/animate.min.css', 'public/css/libs/animate.min.css');
mix.copy('resources/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css', 'public/css/libs/owl.carousel.min.css');
mix.copyDirectory('resources/assets/fonts/mapglyphs/2.0', 'public/css/fonts/mapglyphs');
mix.copyDirectory('resources/assets/libs/font-awesome/css', 'public/css/fonts/font-awesome/css');
mix.copyDirectory('resources/assets/libs/font-awesome/fonts', 'public/css/fonts/font-awesome/fonts');
//js libs
mix.copy('resources/assets/libs/jquery/dist/jquery.min.js', 'public/js/libs/jquery.min.js');
mix.copy('resources/assets/libs/holderjs/holder.min.js', 'public/js/libs/holder.min.js');
mix.copy('resources/assets/libs/owl.carousel/dist/owl.carousel.min.js', 'public/js/libs/owl.carousel.min.js');

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.ts(src, output); <-- Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });s