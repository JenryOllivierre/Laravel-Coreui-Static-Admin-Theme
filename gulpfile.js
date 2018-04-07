'use strict'

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin')
var rename = require('gulp-rename');
var runSequence = require('run-sequence');

gulp.paths = {
  dist: './src/public/coreui-static/',
  src: './node_modules/@coreui/ajax/Static_Full_Project_GULP/src/',
  vendors: './src/public/coreui-static/vendors/'
};

var paths = gulp.paths;

gulp.pkg = require('./node_modules/@coreui/ajax/Static_Full_Project_GULP/package.json');
var pkg = gulp.pkg;

require('require-dir')('./node_modules/@coreui/ajax/Static_Full_Project_GULP/gulp-tasks');

gulp.task('sass', ['compile-vendors'], function() {
  return gulp.src(paths.src + '/scss/style.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest(paths.src + 'css'))
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest(paths.src + 'css'));
});

gulp.task('sass:watch', function() {
  gulp.watch(paths.src + 'scss/**/*.scss', ['sass']);
});

gulp.task('publish-dist', ['build:dist'], function () {

});

