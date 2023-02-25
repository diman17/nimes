'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const del = require('del');

function styles() {
  return gulp
    .src('./src/styles/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS({ level: 2 }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./build'));
}

function php() {
  return gulp.src('./src/**/*.php').pipe(gulp.dest('./build'));
}

function fonts() {
  return gulp.src('./src/assets/fonts/**').pipe(gulp.dest('./build/assets/fonts'));
}

function images() {
  return gulp
    .src('./src/assets/images/**')
    .pipe(
      cache(
        imagemin([imagemin.mozjpeg({ quality: 75, progressive: true }), imagemin.optipng({ optimizationLevel: 5 })])
      )
    )
    .pipe(gulp.dest('./build/assets/images'));
}

function icons() {
  return gulp.src('./src/assets/icons/**').pipe(cache(imagemin())).pipe(gulp.dest('./build/assets/icons'));
}

function clean() {
  return del(['build/*']);
}

function watch() {
  gulp.watch('./src/styles/**/*.scss', styles);
  gulp.watch('./src/**/*.php', php);
  gulp.watch('./src/assets/images/**', images);
  gulp.watch('./src/assets/icons/**', icons);
}

exports.default = gulp.series(clean, gulp.parallel(styles, php, images, icons, fonts), watch);
