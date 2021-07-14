
const mix = require('laravel-mix');

mix.sass( 'src/scss/app.scss', 'assets/css/app.css')
.js( 'src/js/app.js', 'assets/js/app.js')
.extract([
    'bootstrap',
    'popper.js'
])
.sourceMaps()
.copyDirectory('src/img', 'assets/img')
.options({
    processCssUrls: false,
});