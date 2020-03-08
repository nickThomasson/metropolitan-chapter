const gulp = require('gulp');
const sass = require('gulp-sass');
 
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('./theme/assets/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./theme/assets/css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./theme/assets/scss/**/*.scss', ['sass']);
});