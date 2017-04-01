/**
 * Created by akke on 29/03/2017.
 */
var gulp = require('gulp');
// var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

// gulp.task('sass', function () {
//     return gulp.src('path/style.scss')
//         .pipe(sass())
//         .pipe(gulp.dest(''));
//     .pipe(livereload());
// });

// Watch Files For Changes
// gulp.task('watch', function () {
//     livereload.listen();
//     gulp.watch(['path/sass/**/*'], ['sass']);
// });

elixir(function (mix) {
    mix.clean()
        .sass('*.scss')
        .wiredep()
        .jshint()
        .sync('resources/assets/js/**/*.js', 'public/js');

    if (elixir.config.production) {
        mix.useref({ src: false })
            .version(['js/*.js', 'css/*.css'])
    }
});