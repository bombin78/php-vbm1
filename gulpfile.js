const gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cssimport = require('gulp-cssimport'),
    uglify = require('gulp-uglify'),
    del = require('del'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync').create();


const paths = {
    scss: ['./src/scss/style.scss'],
    jsFiles: [
        './src/js/ie6-7blocker.js',
        './src/js/modules-control.js'
    ]
};

function styles() {
    return gulp.src(paths.scss)
        .pipe(sourcemaps.init())
        //
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        //
        .pipe(cssimport())
        // Добавить префиксы (версии браузеров смотри в файле "package.json")
        .pipe(autoprefixer())
        // Минификация CSS
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(sourcemaps.write('./'))
        // Выходная папка стилей
        .pipe(gulp.dest('./css'))
        // Обновление страницы
        .pipe(browserSync.stream());
}

function scripts() {
    return gulp.src(paths.jsFiles)
        .pipe(sourcemaps.init())
        // Минификация JS
        .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./js'))
        // Обновление страницы
        .pipe(browserSync.stream());
}

function clean() {
    return del(['./css/*', './js/*']);
}

function watcher() {

    connect.server({}, function() {
        browserSync.init({
            proxy: '127.0.0.1:4000'
        });
    });

    // Следит за изменениями scss файлов в папке "src/scss"
    gulp.watch('src/scss/**/*.scss', styles);
    // Следит за изменениями js файлов  в папке "src/js"
    gulp.watch('src/js/**/*.js', scripts);
    // При изменении json файлов запустить синхронизацию
    //gulp.watch('tpl/**/*.json').on('change', browserSync.reload);
    // При изменении php или json файлов запустить синхронизацию
    gulp.watch(['**/*.php', 'tpl/**/*.json']).on('change', browserSync.reload);
}

// Task для отслеживания изменений
gulp.task('watcher', watcher);
// Task для удлания файлов в папках "css" и "js" и запуска "styles" и "scripts"
gulp.task('build', gulp.series(clean, gulp.parallel(styles, scripts)));
// Task для удаления старой сборки, запуска новой сборки и "watcher"a
gulp.task('dev', gulp.parallel('build', 'watcher'));
