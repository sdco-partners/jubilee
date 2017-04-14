var gulp = require("gulp")
, sass = require("gulp-sass")
, uglify = require("gulp-uglify")
, concat = require('gulp-concat')
, clean = require('gulp-clean-css')
, sourcemaps = require('gulp-sourcemaps')
, plumber = require('gulp-plumber')
, notify = require('gulp-notify')
, livereload = require('gulp-livereload')
, modernizr = require('gulp-modernizr');


// uri
var uri = './content/themes/jubilee/';

var paths = {
	scss: uri.concat('src/sass/**/*.sass'),
	styles: uri.concat('src/sass/styles.sass'),
	php: uri.concat('**/*.php'),
	js: uri.concat('src/js/**/*.js'),
	src: uri.concat('src/js'),
	dest: uri.concat('prod/'),
	modJs: uri.concat('prod/scripts-min.js'),
	modCss: uri.concat('prod/styles.css')
}

// Error Handling
var plumberErrorHandler = {
	errorHandler: notify.onError({
		title: 'Gulp',
		message: 'Error. <%= error.message %>'
	})
};

// Sass to Css-min
gulp.task('styles', function() {
	gulp.src(paths.styles)
	  .pipe(plumber(plumberErrorHandler))
	  .pipe(sass())
    .pipe(clean())
	  .pipe(gulp.dest(paths.dest))
	  .pipe(livereload());
});

// Uglify JS
gulp.task('uglify', function() {
	gulp.src(paths.js)
		.pipe(plumber(plumberErrorHandler))
		.pipe(concat('scripts.js'))
	  .pipe(uglify())
	  .pipe(gulp.dest(paths.dest))
	  .pipe(livereload())
});

// Run Moderizr on css & js
gulp.task('modernizr', function() {
	gulp.src([paths.modCss, paths.modJs])
    .pipe(modernizr())
    .pipe(uglify())
    .pipe(gulp.dest(paths.dest));
})

// Watch task
gulp.task('default', function() {
	livereload.listen();
	gulp.watch(paths.php, livereload.reload);
	gulp.watch(paths.scss, ['styles']);
	gulp.watch(paths.js, ['uglify']);
	// gulp.watch([paths.modJs, paths.modCss], ['modernizr']);
});

