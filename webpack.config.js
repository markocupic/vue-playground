const Encore = require('@symfony/webpack-encore');

Encore
.copyFiles({
    from: './assets/vue/hello/images',
    to: 'images/hello/images/[path][name].[hash:8].[ext]'
})
// Add entries:
.addEntry('hello', './assets/vue/hello/entry.js')

.setOutputPath('public/')
.setPublicPath('/bundles/markocupicvueplayground')
.enableVueLoader(() => {
}, {version: 3})
.disableSingleRuntimeChunk()
.enableSingleRuntimeChunk() // will require an extra script tag for runtime.js
.cleanupOutputBeforeBuild()
//.enableSourceMaps(!Encore.isProduction())
//.enableVersioning(Encore.isProduction())
.enableSourceMaps(!Encore.isDev())
.enableVersioning(Encore.isDev())
.enableSassLoader()
.setManifestKeyPrefix('')
;

module.exports = Encore.getWebpackConfig();
