'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./sass/css'));
};

gulp.task('buildStyles', buildStyles);
gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', gulp.series(buildStyles));
});

gulp.task('default', gulp.series('buildStyles', 'watch'));