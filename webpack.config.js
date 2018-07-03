var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/assets/')
    .setPublicPath('/assets')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    //.enableVersioning(Encore.isProduction())
    .addEntry('js/app', './assets/scripts/main.js')
    .addStyleEntry('css/app', './assets/styles/style.scss')
    .addStyleEntry('css/owl.carousel', './node_modules/owl.carousel/dist/assets/owl.carousel.css')
    .enableSassLoader()
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();