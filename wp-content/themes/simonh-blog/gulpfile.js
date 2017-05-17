// leaving less in for now, may need removing later
var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    libsass = require('gulp-sass'),
    cssmin = require('gulp-cssmin'),
    watch = require('gulp-watch');

//SASS related first

//libsass version of sass
gulp.task('libsass', function () {
    gulp.src('./css/style.scss')
    .pipe(sourcemaps.init())
    .pipe(libsass())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./'));
});

gulp.task('libsass-production', function () {
    gulp.src('./css/style.scss')
    .pipe(libsass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
    gulp.watch([
        './css/**/*.scss',
        './js/scripts/*.js'
    ], { verbose: true }, ['libsass']);
});

//JS related secondary for now
// gulp.task('concat', function() {
//   return gulp.src('./common/scripts/plugins/edSelect.min.js')
//     .pipe(concat('plugins.js'))
//     .pipe(gulp.dest('./common/scripts/concat_files'));
// });

// gulp.task('uglify', function () {
//   return gulp.src([
//         './common/scripts/common.js',
//         './common/scripts/sliders.js',
//         './common/scripts/isotope.js',
//         './common/scripts/concat_files/plugins.js'
//     ])
//     .pipe(uglify())
//     .pipe(rename({
//         extname: '.min.js'
//     }))
//     .pipe(gulp.dest('./common/scripts/min'));
// });

// leaving less in for now, may need removing later
// gulp.task('less', function () {
//   return gulp.src('./common/css/style.less')
//     .pipe(less())
//     .pipe(cssmin())
//     .pipe(gulp.dest('./common/css'));
// });

gulp.task('clean', function() {
    //swag
});

gulp.task('help', function() {
    console.log('HELP: The following functions can be used currently: '+'\n\n');
    console.log('Command: "gulp default" - Our normal build. Will build JS stuff, then go onto watching less as usual. Builds with ruby sass.'+'\n');
    console.log('Command: "gulp sass" - Watch and build sass only with ruby sass. This is stable and safe.'+'\n');
    console.log('Command: "gulp sass-fast" - Watch and build sass only with libsass. Libsass is less stable but faster. Only use if you need to work mega fast. Recommend doing a "gulp sass" after.'+'\n');
    console.log('Command: "gulp test-css" - Run css-lint on the project. Add " > ./common/css/csslint.txt" onto it to output to file if theres too much output.'+'\n');
});

gulp.task('default', ['libsass', 'watch']);
gulp.task('production', ['libsass-production']);
