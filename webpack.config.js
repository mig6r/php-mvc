const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    entry: [
        './assets/js/index.js',
        './assets/sass/index.scss'
    ],
    output: {
        path: __dirname + "/public/dist",
        filename: 'index.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    'babel-loader'
                ]
            },
            {
                test: /\.(woff(2)?|ttf|eot|png|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts/'
                    }
                }]
            },
            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            }
        ]
    },
    watchOptions: {
        ignored: [
            /node_modules/,
            /test/
        ]
    },
    plugins: [
        new MiniCssExtractPlugin(
            {
                filename: 'index.css',
            }
        ),
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 80,
            proxy:"localhost/php-initiation/public/",
            files: [
                'public/index.php',
            ],
            server: {
                baseDir: [
                    './www'
                ]
            }
        })
    ]
};