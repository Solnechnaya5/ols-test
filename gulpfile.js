const gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync'),
	cache = require('gulp-cache'),
	cssnano = require('gulp-cssnano'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	del = require('del'),
	gcmq = require('gulp-group-css-media-queries'),
	gutil = require('gulp-util'),
	imagemin = require('gulp-imagemin'),
	imageminPngquant = require('imagemin-pngquant'),
	imageminMozjpeg = require('imagemin-mozjpeg'),
	notify = require('gulp-notify'),
	pngquant = require('imagemin-pngquant'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	pug = require('gulp-pug'),
	svgo = require('gulp-svgo'),
	// filelist  				= require('./gulp-cache-filelist'),
	postcss = require('gulp-postcss'),
	inlineSVG = require('postcss-inline-svg'),
	debug = require('gulp-debug'),
	purgecss = require('gulp-purgecss'),
	g = require('gulp-load-plugins')(),
	critical = require('critical').stream;

var PATH = {
	SRC: {
		PUG: 'src/pug/*.pug',
		SASS: [
			'src/sass/**/*.scss',
			'src/sass/**/*.sass'
		],
		JS: [
			'node_modules/jquery/dist/jquery.min.js',
			'node_modules/aos/dist/aos.js',
			'node_modules/slick-carousel/slick/slick.js',
			'src/js-src/*.js',
			'src/blocks/**/*.js'
		]
	},
	PREVIEW: {
		HTML: 'src',
		CSS: 'src/sass/out',
		CSSMIN: 'src/css',
		JS: 'src/js'
	},
	BUILD: {
		HTML: 'build',
		CSS: 'build/css',
		JS: 'build/js',
		IMG: 'build/img',
		FONTS: 'build/fonts',
		ASSETS: 'build/assets',
		PHP: 'build/php'
	},
	LIBS: {
		CSS: [],
		JS: []
	},
	WATCH: {
		PUG: [
			'src/blocks/**/*.pug',
			'src/pug/*.pug'
		],
		SASS: [
			'src/sass/**/*.scss',
			'src/sass/**/*.sass',
			'src/blocks/**/*.scss',
			'src/blocks/**/*.sass'
		],
		JS: [
			'src/js-src/*.js',
			'src/blocks/**/*.js'
		]
	}
}
/****************************************************************
 *                         DEVELOPMENT                          *
 ****************************************************************/
gulp.task('pugDev', function buildHTML() {
	console.log('---------- Обработка Pug ----------');

	return gulp.src(PATH.SRC.PUG)
		.pipe(pug({
				pretty: true
			})
			.on('error', notify.onError(function (err) {
				return {
					title: "PUG error!",
					message: err.message
					// message: "<%= error.message %>"
				}
			})))
		.pipe(gulp.dest(PATH.PREVIEW.HTML))
		.pipe(browserSync.reload({
			stream: true
		}))
});

gulp.task('sassDev', () => {
	console.log('---------- Обработка Sass Deleting Files----------');
	del([PATH.PREVIEW.CSSMIN + '/**/*.css']);
	console.log('---------- Обработка Sass ----------');
	return gulp.src(PATH.SRC.SASS)
		.pipe(sass().on('error', notify.onError(function (err) {
			return {
				title: "SASS error!",
				message: err.message
			}
		})))
		.pipe(postcss([
			require('postcss-flexbugs-fixes'),
			require('postcss-inline-svg')
		]))
		.pipe(gcmq())
		.pipe(autoprefixer({
			browsers: ['last 2 versions', '> 3%', 'ie 11'],
			cascade: false
		}))
		.pipe(g.extractMediaQueries())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(debug({
			title: 'обработано sass файлов'
		}))
		.pipe(gulp.dest(PATH.PREVIEW.CSSMIN))
		.pipe(browserSync.reload({
			stream: true
		}))
});

/****************************************************************
 *                          PUG -> HTML                          *
 ****************************************************************/
gulp.task('pug', function buildHTML() {
	console.log('---------- Обработка Pug ----------');

	return gulp.src(PATH.SRC.PUG)
		.pipe(pug({
				pretty: true
			})
			.on('error', notify.onError(function (err) {
				return {
					title: "PUG error!",
					message: err.message
				}
			})))
		.pipe(gulp.dest(PATH.PREVIEW.HTML))
		// .pipe(browserSync.reload({
		// 	stream: true
		// }))
});



/****************************************************************
 *                          SASS -> CSS                          *
 ****************************************************************/

gulp.task('sass', () => {
	console.log('---------- Обработка Sass Deleting Files----------');
	del([PATH.PREVIEW.CSSMIN + '/**/*.css']);
	console.log('---------- Обработка Sass ----------');
	return gulp.src(PATH.SRC.SASS)
		.pipe(sass().on('error', notify.onError(function (err) {
			return {
				title: "SASS error!",
				message: err.message
			}
		})))
		.pipe(postcss([
			require('postcss-flexbugs-fixes'),
			require('postcss-inline-svg')
		]))
		.pipe(gcmq())
		.pipe(autoprefixer({
			browsers: ['last 2 versions', '> 3%', 'ie 11'],
			cascade: false
		}))
		.pipe(debug({
			title: 'обработано sass файлов'
		}))
		.pipe(gulp.dest(PATH.PREVIEW.CSSMIN))
		// .pipe(browserSync.reload({
		// 	stream: true
		// }))
});




/****************************************************************
 *              				 CRITICAL CSS	                     *
 ****************************************************************/

gulp.task('critical', ['sass', 'pug'], function () {
	console.log('---------- Inline critical CSS ----------');
	return gulp.src(PATH.PREVIEW.HTML + '/*.html')
		.pipe(critical({
			base: PATH.PREVIEW.HTML,
			inline: true,
			css: [
				PATH.PREVIEW.CSSMIN + '/style.css'
			],
			minify: true,
			width: 1300,
			height: 900
		}))
		.on('error', function (err) {
			console.log(err.message);
		})
		.pipe(gulp.dest(PATH.PREVIEW.HTML))
		.pipe(browserSync.reload({
			stream: true
		}))
});


/****************************************************************
 *              				  DELETE UNUSE CSS	                     *
 ****************************************************************/

gulp.task('purgecss', ['critical'], () => {
	console.log('---------- Delete unused CSS ----------');
	return gulp.src(PATH.PREVIEW.CSSMIN + '/**/*.css')
		.pipe(
			purgecss({
				content: ['src/**/*.html', 'src/**/*.js']
			})
		)
		.pipe(g.extractMediaQueries())
		.pipe(cssnano())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest(PATH.PREVIEW.CSSMIN))
		.pipe(browserSync.reload({
			stream: true
		}))
})


/****************************************************************
 *                        JAVASCRIPT		                          *
 ****************************************************************/
gulp.task('scripts', function () {
	console.log('---------- Обработка JS ----------');
	return gulp.src(PATH.SRC.JS)
		.pipe(uglify().on('error', notify.onError(function (err) {
			return {
				title: "JSmin error!",
				message: err.message
				// message: "<%= error.message %>"
			}
		})))
		.pipe(concat('script.min.js'))
		.pipe(gulp.dest(PATH.PREVIEW.JS))
		.pipe(browserSync.reload({
			stream: true
		}))
});


/****************************************************************
 *                TRACKING CHANGES IN FILES                      *
 ****************************************************************/

gulp.task('watch', ['serve', 'sassDev', 'pugDev', 'scripts']);

gulp.task('serve', function () {
	browserSync.init({
		server: {
			baseDir: 'src'
		},
		notify: false
	})

	gulp.watch(PATH.WATCH.SASS, ['sassDev']);
	gulp.watch(PATH.WATCH.PUG, ['pugDev']);
	gulp.watch(PATH.WATCH.JS, ['scripts']);
});


/****************************************************************
 *                   START PREVIEW WATCHING	                    *
 ****************************************************************/
gulp.task('default', ['watch']);



/****************************************************************
 *                   PROJECT FOR PRODUCTION	                    *
 ****************************************************************/
gulp.task('build', ['scripts', 'purgecss'], function () {
	console.log('---------- Очистка папки BUILD ----------');
	del.sync('build');
	del.sync([PATH.PREVIEW.CSSMIN + '/style.css']);

	console.log('---------- BUILD проекта ----------');

	var buildHTML = gulp.src('src/*.html')
		.pipe(gulp.dest(PATH.BUILD.HTML))

	var buildCss = gulp.src(['src/css/*.css'])
		.pipe(gulp.dest(PATH.BUILD.CSS))

	var bildJs = gulp.src('src/js/**/*')
		.pipe(gulp.dest(PATH.BUILD.JS))

	var buildImg = gulp.src(['src/img/**'])
		.pipe(imagemin([
			imagemin.gifsicle(),
			imageminMozjpeg(),
			imageminPngquant()
		], {
			verbose: true
		}))
		.pipe(svgo())
		.pipe(gulp.dest(PATH.BUILD.IMG))

	var buildFonts = gulp.src(['src/fonts/**'])
		.pipe(gulp.dest(PATH.BUILD.FONTS))

	var buildAssests = gulp.src(['src/assets/**'])
		.pipe(gulp.dest(PATH.BUILD.ASSETS))

	var buildPhp = gulp.src([
			'src/php/**'
		])
		.pipe(gulp.dest(PATH.BUILD.PHP))
	// var buildPushWorker = gulp.src([
	// 	'src/push-worker.js'])
	// 	.pipe(gulp.dest('www'))
});






// local SW

// gulp.task('cachingLocal', function () {
// gulp.src(['./src/*.html','./src/img/**/*.{jpg,png,jpeg,gif,svg}', './src/css/*.css', './src/js/*.js', './src/fonts/**/*.*'], {
// 		base: process.cwd()
// 	})
// 	.pipe(rename(function(path){
// 		path.dirname = path.dirname.replace('src', '');
// 		if (path.basename == 'index') {
// 			path.basename = '';
// 			path.extname = path.extname.replace('.html', '');
// 		}
// 	}))
// 	.pipe(filelist('files-to-cache.json'))
//   .pipe(gulp.dest('src/files'));
// })

// gulp.task('caching', ['sass', 'css', 'pug', 'scripts', 'img'], function() {
// 	gulp.src(['./src/*.html','./src/img/**/*.{jpg,png,jpeg,gif,svg}', './src/css/*.css', './src/js/*.js', './src/fonts/**/*.*'], {
// 		base: process.cwd()
// 	})
// 	.pipe(rename(function(path){
// 		path.dirname = path.dirname.replace('src', '');
// 		if (path.basename == 'index') {
// 			path.basename = '';
// 		}
// 		path.extname = path.extname.replace('.html', '');
// 	}))
// 	.pipe(filelist('files-to-cache.json'))
//   .pipe(gulp.dest('www/files'));
// });