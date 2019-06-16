'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cache = require('gulp-cache'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    concat = require('gulp-concat');//,
    // vendorsJsFiles = [
    //     './src/vendor/jquery/jquery.min.js',
    //     './src/vendor/angular/angular-1.6.4.min.js',
    //     './src/vendor/angular/angular-sanitize.js',
    //     './src/vendor/inputmask/jquery.inputmask.bundle.min.js',
    //     './src/vendor/fancybox/js/jquery.fancybox.min.js',
    //     './src/vendor/ng-file-upload/ng-file-upload-all.min.js',
    //     './src/vendor/changeNumbers/changeNumbers.js',
    //     './src/vendor/swiper/js/swiper.min.js',
    //     './src/vendor/ui-select/select.js'
    //];
var cssimport = require('gulp-cssimport');
//
// gulp.task('import', function() {
//     gulp.src('./dist/style.css')
//         .pipe(cssimport())
//         .pipe(gulp.dest('./dist'));
// });

// gulp.task('vendorJs', function() {
//     return gulp.src(vendorsJsFiles)
//         .pipe(sourcemaps.init())
//         .pipe(concat('vendor.js'))
//         .pipe(uglify())
//         .pipe(sourcemaps.write('.'))
//         .pipe(gulp.dest('./dist'));
// });

gulp.task('sass', function () {
    return gulp.src('./src/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(cssimport())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css'));
});

// gulp.task('jsMin', function () {
//    return gulp.src('./src/js/main.js')
//        .pipe(sourcemaps.init())
//        .pipe(uglify({
//            compress: {drop_debugger: false}
//        }))
//        .pipe(sourcemaps.write('.'))
//        .pipe(gulp.dest('./dist'));
// });

// gulp.task('serve', ['sass', 'vendorJs'], function () {
//     gulp.watch('src/**/*.scss', ['sass']);
//     gulp.watch(vendorsJsFiles, ['vendorJs']);
//     gulp.watch('src/js/main.js', ['jsMin']);
// });

// gulp.task('imgMin', function () {
//     gulp.src('dist/img/**/*', {base: './'})
//         .pipe(cache(imagemin({
//             interlaced: true,
//             progressive: true,
//             svgoPlugins: [{removeViewBox: false}],
//             use: [pngquant()]
//         })))
//         .pipe(gulp.dest('./'))
// });

//gulp.task('default', ['sass', 'jsMin', 'serve']);
gulp.task('default', ['sass']);
