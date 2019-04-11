'use strict'

var gulp = require('gulp'),
  scss = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  babel = require('gulp-babel'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  autoprefixer = require('gulp-autoprefixer'),
  plumber = require('gulp-plumber'),
  decomment = require('gulp-decomment'),
  rename = require('gulp-rename'),
  mode = require('gulp-mode')({
    modes: ['production', 'development'],
    default: 'development',
    verbose: false
  });

var SASS_INCLUDE_PATHS = [
  './node_modules/bootstrap/scss/',
  './node_modules/multiple-select/'
]
var LIB_JS_INCLUDE_PATHS = [
  './node_modules/bootstrap/dist/js/bootstrap.min.js',
  './node_modules/multiple-select/multiple-select.js',
  './node_modules/jquery-validation/dist/jquery.validate.min.js'
]

var CUSTOM_JS_SOURCE = [
  './source-js/main.js',
  './source-js/industry-onaddnew-scroll.js'
]

function handleError (err) {
  console.log(err.toString())
  this.emit('end')
}

gulp.task('styles', function () {
  return gulp.src('./scss/main.scss')
    .pipe(plumber({errorHandler: handleError}))
    .pipe(mode.development(sourcemaps.init()))
    .pipe(scss({outputStyle: 'compressed', includePaths: SASS_INCLUDE_PATHS}))
    .pipe(autoprefixer({browsers: ['last 2 versions', 'safari 8', 'ie 11', 'opera 12.1', 'ios 6', 'android 4']}))
    .pipe(mode.development(sourcemaps.write()))
    .pipe(rename({
      extname: '.min.css'
    }))
    .pipe(mode.production(decomment.text({
      ignore: /url\([\w\s:\/=\-\+;,]*\)/g,
      trim: true
    })))
    .pipe(gulp.dest('./css/'))
})

