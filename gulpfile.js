'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

const path = {
    sass: {
        source: './resources/sass/**/*.scss',
        destination: './public/css'
    },
};

gulp.task('sass', function () {

    return gulp.src(path.sass.source)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(path.sass.destination));
});



gulp.task('sass:watch', function () {
    gulp.watch(path.sass.source, gulp.series('sass'));
});