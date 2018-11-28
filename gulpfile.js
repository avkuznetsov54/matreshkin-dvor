var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync');

gulp.task('browser-sync', function() {
	browserSync({
		proxy: "localhost:8888/GULP_project/matreshkin-dvor/app",
		// server: {
		// 	baseDir: 'app'
		// },
		notify: false,
		// open: false, // открытие в браузере после запуска
		// online: false, // Work Offline Without Internet Connection
		//tunnel: true, tunnel: "land-chloboda", // Demonstration page: http://projectname.localtunnel.me
	})
});

gulp.task('styles', function() {
	return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
		'app/libs/jquery/dist/jquery.min.js',
		'app//libs/plugins/jquery.mask.js',
		'app/libs/bootstrap/js/bootstrap.min.js',
		'app/libs/plugins/jquery.fancybox.min.js',
		'app/libs/plugins/owl.carousel.min.js',
		'app/libs/plugins/sweetalert2.min.js',
		'app/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('app/js'))
	.pipe(browserSync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('app/**')
	.pipe(rsync({
		root: 'app/',
		hostname: 'cu19643@92.53.96.214',
		destination: 'landing/public_html/matreshkin-dvor/',
		// include: ['*.htaccess'], // Includes files to deploy (включаемые файлы)
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy (исключаемые файлы)
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('app/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'app/js/common.js'], ['js']);
	gulp.watch('app/*.php', browserSync.reload)
});

gulp.task('default', ['watch']);
