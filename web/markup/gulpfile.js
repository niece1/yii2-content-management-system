let gulp = require('gulp');
let server = require('gulp-server-livereload');
let sass = require('gulp-sass');
let autoprefixer = require('gulp-autoprefixer');
let cssnano = require('gulp-cssnano');
let rename  = require('gulp-rename');
let uglify = require('gulp-uglify');
let imagemin = require('gulp-imagemin');

function livereload() {
  gulp.src('/')
  .pipe(server({
    livereload: true,
    defaultFile: 'index.html',
    directoryListing: false,
    open: false
  }));
};
gulp.task('livereload', livereload);

function preprocess() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass({outputStyle:'expanded'}).on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 5 versions'],
    cascade: true
  }))
  .pipe(gulp.dest('./css'));
};
gulp.task('preprocess', preprocess);

// Compressing css files
function minify() {
  return gulp.src('./css/main.css')
  .pipe(cssnano())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('./css'));
};
gulp.task('minify', minify);

// Compressing js files
function scripts() {
  return gulp.src('./js/main.js')
  .pipe(uglify())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('./js'));
};
gulp.task('scripts', scripts);

// Compressing images
function image() {
  return gulp.src('./img/*')
  .pipe(imagemin([
    imagemin.gifsicle({interlaced: true}),
    imagemin.jpegtran({progressive: true}),
    imagemin.optipng({optimizationLevel: 5}),
    imagemin.svgo({
      plugins: [
      {removeViewBox: true},
      {cleanupIDs: false}
      ]
    })
    ]))
  .pipe(gulp.dest('./images'));
};
gulp.task('image', image);

function watch() {
  gulp.watch('./sass/**/*.scss', gulp.parallel(preprocess));
}
gulp.task('watch', watch);

gulp.task('default', gulp.parallel(livereload, watch));


