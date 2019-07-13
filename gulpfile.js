var gulp        = require('gulp'),
    browserSync = require('browser-sync'),
    sass        = require('gulp-sass'),
    prefix      = require('gulp-autoprefixer'),
    cp          = require('child_process'),
    sourcemaps  = require('gulp-sourcemaps'),
    watch       = require('gulp-watch');

/**
 * Launch the Server
 */
gulp.task('browser-sync', ['sass'], function() {
    browserSync.init({
        // Change as required
        proxy: "local.site.path"
    });
});

/**
 * @task sass
 * Compile files from scss
 */
gulp.task('sass', function () {
    return gulp.src('sass/styles.scss')
        .pipe(sass())
        .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('css'))

});

gulp.task('sass', function() {
    return gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'))

});

/**
 * @task clearcache
 * Clear all caches
 */
gulp.task('clearcache', function(done) {
    return cp.spawn('drush', ['cc all'], {stdio: 'inherit'})
        .on('close', done);
});

/**
 * @task reload
 * Refresh the page after clearing cache
 */
gulp.task('reload', ['clearcache'], function () {
    // browserSync.reload();
});

/**
 * @task watch
 * Watch scss files for changes & recompile
 * Clear cache when Drupal related files are changed
 */
gulp.task('watch', function () {
    gulp.watch(['sass/*.scss', 'sass/**/*.scss'], ['sass']);
    gulp.watch('**/*.{php,inc,info}',['reload']);
});

/**
 * Default task, running just `gulp` will
 * compile Sass files, launch BrowserSync & watch files.
 */
gulp.task('default', ['browser-sync', 'watch']);