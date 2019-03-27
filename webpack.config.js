const path = require('path'),
    HTMLplugin = require('html-webpack-plugin'),
    MiniCssExtractPlugin = require('mini-css-extract-plugin'),
    UglifyJsPlugin = require('uglifyjs-webpack-plugin'),
    OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin'),
    SpriteLoaderPlugin = require('svg-sprite-loader/plugin');

module.exports = {
    entry:{
        main: path.resolve(__dirname, 'src', 'index.js'),
    },
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js',
    },
    devServer: {
        historyApiFallback: true,
        contentBase: path.resolve(__dirname, 'dist'),
    },
    module:{
        rules :[
            {
                test:/\.js$/,
                exclude: /node_modules/,
                use:{
                    loader:'babel-loader'
                }
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ],
            },
            {
                test: /(mobile|critical).styl$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'stylus-loader'
                ]
            },
            {
                test: /\.(gif|png|jpe?g)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'img/[name].[ext]'
                        }
                    }
                ]
            },
            {
                test: /\.(svg)$/,
                use: [
                    {
                        loader: 'svg-sprite-loader',
                        options: {
                            extract: true,
                            spriteFilename: 'img/sprite-[hash:6].svg'
                        }
                    },
                    {
                        loader: 'svgo-loader',
                        options: {
                            plugins: [
                                { removeTitle: true },
                                { convertColors: { shorthex: false } },
                                { convertPathData: false }
                            ]
                        }
                    },
                    'svg-transform-loader',
                ]
            },
            {
                test: /\.(eot|otf|ttf|woff|woff2)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'fonts/[hash].[ext]'
                        }
                    }
                ]
            },
            {
                test: /\.pug$/,
                use: 'pug-loader'
            },
        ]
    },
    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                cache: true,
                parallel: true,
                sourceMap: true,
            }),
            new OptimizeCSSAssetsPlugin({})
        ],
    },
    plugins :[
        new HTMLplugin({
            template: path.resolve(__dirname, 'src', 'pages', 'index.pug'),
            filename: 'index.html',
        }),
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),
        new SpriteLoaderPlugin(),
    ],
};