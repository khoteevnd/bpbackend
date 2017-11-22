let gulp = require('gulp'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	uglify = require('gulp-uglifyjs'),
	concat = require('gulp-concat'),
	cssnano = require('gulp-cssnano'),
	rename = require('gulp-rename'),
	del = require('del'),
	imagemin = require('gulp-imagemin'),
	pngquant = require('imagemin-pngquant'),
	cache =require('gulp-cache'),
	autoprefixer = require('gulp-autoprefixer'),
	rsync = require('gulp-rsync'),
	imageResize = require('gulp-image-resize'),
	pug = require('gulp-pug'),
	html2pug = require('gulp-html2pug');

const $path = 'resources/assets/';

gulp.task('pug', function buildHTML() {
  return gulp.src($path + 'pug/*.pug')
  	.pipe(pug({
  		pretty: true
  	}))
  	.pipe(gulp.dest($path + 'html'));
});

gulp.task('cpindex', function () {
	return gulp.src($path + 'html/index.html')
		.pipe(gulp.dest($path));
});

gulp.task('h2p', function() {
  return gulp.src($path + 'index.html')
  .pipe(html2pug())
  .pipe(gulp.dest($path + 'pug'));
});


gulp.task('sass', function() {
	return gulp.src($path + 'sass/**/*.sass')
	.pipe(sass())
	.pipe(autoprefixer(['last 15 versions',	'> 1%',	'ie 8', 'ie 7'], { cascade: true }))
	.pipe(gulp.dest($path + 'css'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts', function(){
	return gulp.src([
        $path + 'libs/jquery/dist/jquery.min.js',
        $path + 'libs/magnific-popup/dist/jquery.magnific-popup.min.js',
        $path + 'libs/owl.carousel/dist/owl.carousel.min.js',
        $path + 'libs/holderjs/holder.js'
	])
	.pipe(concat('libs.min.js'))
	.pipe(gulp.dest($path + 'js'));
});

gulp.task('css-libs', ['sass'], function(){
	return gulp.src($path + 'css/libs.css')
	.pipe(cssnano())
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest($path + 'css'));
});

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'public'
		},
		notify: true
	});
});

gulp.task('clean', function(){
	return del.sync($path + 'dist');
});

gulp.task('clear', function(){
	return cache.clearAll();
});

gulp.task('img:min', function(){
	return gulp.src($path + 'img/**/*')
	.pipe(cache(imagemin({
		interlaced: true,
		prograssive: true,
		svgoPlugins: [{removeViewBox: false}],
		use: [pngquant()]
	})))
	.pipe(gulp.dest($path + 'dist/img'));
});

gulp.task('img:resize', function(){
	gulp.src($path + 'img/diploms/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}')
	.pipe(rename({suffix: '.thumbs'}))
	.pipe(imageResize({
		imageMagick: true,
		width : 300
	}))
	.pipe(gulp.dest($path + 'img/diploms/thumbs'));
});

gulp.task('watch', ['browser-sync', 'css-libs', 'scripts', 'pug', 'cpindex'], function () {
	gulp.watch($path + 'sass/**/*.sass', ['sass'], browserSync.reload);
	gulp.watch($path + 'pug/**/*.pug', ['pug'], browserSync.reload);
	gulp.watch($path + 'html/index.html', ['cpindex'], browserSync.reload);
	gulp.watch($path + '*.html', browserSync.reload);
	gulp.watch($path + 'js/**/*.js', browserSync.reload);
});

gulp.task('build', ['clean', /*'img:min'*/, 'sass', 'scripts'], function(){
	var buildCss = gulp.src([
        $path + 'css/libs.min.css',
		])
		.pipe(gulp.dest($path + 'dist/css'));

	var buildFonts = gulp.src($path + 'fonts/**/*')
		.pipe(gulp.dest($path + 'dist/fonts'));


	var buildJs = gulp.src($path + 'js/**/*')
		.pipe(gulp.dest($path + 'dist/js'));

	var buildHtml = gulp.src($path + '*.html')
		.pipe(gulp.dest($path + 'dist'));

		console.log(buildCss, buildFonts, buildJs, buildHtml);
});

gulp.task('deploy', function(){
	return gulp.src($path + 'dist/**')
	.pipe(rsync({
		root: $path + '/dist',
		hostname: '',
		destination: 'name_folder_in_host/public_html',
		archive: true,
		silent: false,
		compress: true
	}));
});

gulp.task('deploy-img', function(){
	return gulp.src($path + 'dist/img/**/*')
	.pipe(rsync({
		root: $path + 'dist',
		hostname: '',
		destination: 'name_folder_in_host/public_html/img',
		archive: true,
		silent: false,
		compress: true
	}));
});
