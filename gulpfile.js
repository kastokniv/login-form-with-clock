var gulp = require('gulp');
var sass = require('sass');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');

//Compile Sass files to CSS
gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
      .pipe(plumber())
      .pipe(sass({
        includePaths: ['./sass'],
        errLogToConsole: true,
        outputStyle: 'compressed',
        onError: browserSync.notify
      }))
      .pipe(gulp.dest('./css'))
      .pipe(browserSync.stream());
  });

  gulp.task('watch', ['sass'], function () {
    browserSync.init({
        server: './registration',
    }),
    gulp.watch('./sass/**/*.scss', ['sass']);
  });

  gulp.task('default', ['watch']);