
const mix = require('laravel-mix');
const purgecssWordpress  = require('purgecss-with-wordpress')
// Removes unused CSS
// According to Discord chat: Running Purge CSS as part of Post CSS is a ton faster than laravel-mix-purgecss
// But if that doesn't work use https://github.com/spatie/laravel-mix-purgecss
const purgecss = require('@fullhuman/postcss-purgecss')({
    // Specify the paths to all of the template files in your project 
    content: ['**/*.php', '*.cshtml', '*.js'],
    css: ['**/*.css'],
    // keyframes: true,
    safelist: [
        ...purgecssWordpress.safelist,
        'header-scrolled',
        'navbar-mobile',
        'dropdown-active',
        /^red/,
        /blue$/,
    ],
  
    // Include any special characters you're using in this regular expression
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
  });

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
    postCss: [
        // to enable purgecss on production only
        //...process.env.NODE_ENV === 'production' ? [purgecss] : []
        purgecss
    ],
});