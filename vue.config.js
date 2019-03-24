const path = require('path');

module.exports = {
    publicPath: '/dist/',
    chainWebpack: config => {
        const types = ['vue-modules', 'vue', 'normal-modules', 'normal'];
        types.forEach(type => addStyleResource(config.module.rule('less').oneOf(type)));
        config.module.rule('file-compress').oneOf('file-loader')
            .test(/\.(gif|png|jpe?g|svg)$/i)
            .use('file-loader')
            .loader('image-webpack-loader')
            .options({
                mozjpeg: {
                    progressive: true,
                    quality: 65
                },
                // optipng.enabled: false will disable optipng
                optipng: {
                    enabled: false,
                },
                pngquant: {
                    quality: '65-90',
                    speed: 4
                },
                gifsicle: {
                    interlaced: false,
                },
                // the webp option will enable WEBP
                webp: {
                    quality: 75
                },
                outputPath: 'img',
            })
    },
};

function addStyleResource(rule) {
    rule.use('style-resource')
        .loader('style-resources-loader')
        .options({
            patterns: [
                path.resolve(__dirname, './src/assets/imports/*.less'),
            ],
        })
}