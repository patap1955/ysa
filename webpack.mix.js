const mix = require('laravel-mix');

const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;

require('laravel-mix-webp');
require('laravel-mix-polyfill');

mix
    // Обрабатываем JS
    .js(
        'resources/src/js/main.js',
        'public/assets/js'
    )
    // Используем полифиллы
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: false, // Используем настройки browserslist из package.json
        debug: true,
        corejs: '3.8',
    })
    // Преобразовываем SASS в CSS
    .sass(
        'resources/src/assets/scss/main.scss', // Путь относительно каталога с webpack.mix.js
        'public/assets/css/' // Путь относительно каталога с webpack.mix.js
    )
    // Переопределяем параметры mix
    .options({
        processCssUrls: false, // Отключаем автоматическое обновление URL в CSS
        postCss: [
            // Добавляем вендорные префиксы в CSS
            require('autoprefixer')({
                cascade: false, // Отключаем выравнивание вендорных префиксов
            }),
            // Группируем стили по медиа-запросам
            require('postcss-sort-media-queries'),
        ],
    })
    // Настраиваем webpack для обработки изображений
    .webpackConfig({
        plugins: [
            // Копируем картинки из каталога ресурсов в публичный каталог
            new CopyWebpackPlugin({
                patterns: [
                    {
                        from: 'resources/src/assets/img', // Путь относительно каталога с webpack.mix.js
                        to: 'assets/img', // Путь относительно каталога public/,
                    },
                ],
            }),
        ],
    })
    // Создаем WEBP версии картинок
    .ImageWebp({
        from: 'resources/src/assets/img', // Путь относительно каталога с webpack.mix.js
        to: 'public/assets/img', // Путь относительно каталога с webpack.mix.js
        imageminWebpOptions: {
            quality: 70
        }
    })
    .version();
