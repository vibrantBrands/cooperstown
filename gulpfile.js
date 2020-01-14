'use strict';

var gulp = require('gulp'),
    prefix = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    sassLint = require('gulp-sass-lint'),
    sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function () {

  return gulp.src('./scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix('last 1 version'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./_css/'));
});

gulp.task('watch', function () {

    //watch SASS
    gulp.watch('./scss/**/*.scss', ['sass']);

});


gulp.task('default', ['sass', 'watch']);