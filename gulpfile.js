var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var less = require('gulp-less');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');

var onError = function (err) {
  gutil.beep();
  console.log(err);
};

gulp.task('css', function () {
  return gulp.src('public_raw/styles/*.less')
          .pipe(plumber({ errorHandler: onError }))
          .pipe(less())
          .pipe(autoprefixer('last 15 version'))
          .pipe(gulp.dest('public/styles'));
});

gulp.task('default', function () {
  gulp.start('css');

  gulp.watch('public_raw/styles/*.less', function() {
    gulp.start('css');
  });
});
