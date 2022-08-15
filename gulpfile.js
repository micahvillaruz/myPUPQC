const browsersync = require('browser-sync').create()
const cached = require('gulp-cached')
const cssnano = require('gulp-cssnano')
const del = require('del')
const fileinclude = require('gulp-file-include')
const gulp = require('gulp')
const gulpif = require('gulp-if')
const npmdist = require('gulp-npm-dist')
const replace = require('gulp-replace')
const uglify = require('gulp-uglify')
const useref = require('gulp-useref-plus')
const rename = require('gulp-rename')
const sass = require('gulp-sass')(require('sass'))
const autoprefixer = require('gulp-autoprefixer')
const sourcemaps = require('gulp-sourcemaps')
const cleanCSS = require('gulp-clean-css')
const rtlcss = require('gulp-rtlcss')

const fs = require('fs') // Read a file
var envConfig = JSON.parse(fs.readFileSync('theme-config.json', 'utf8'))

const isSourceMap = true

const sourceMapWrite = isSourceMap ? './' : false

const paths = {
	base: {
		base: {
			dir: './',
		},
		node: {
			dir: './node_modules',
		},
	},
	dist: {
		base: {
			dir: './dist',
			assets: './public',
		},
		libs: {
			dir: './public/libs',
		},
		css: {
			dir: './public/css',
		},
		js: {
			dir: './public/js',
			files: './public/js/pages',
		},
	},
	src: {
		base: {
			dir: './src',
			assets: './src/assets/**/*',
		},
		js: {
			dir: './src/assets/js',
			pages: './src/assets/js/pages',
			files: './src/assets/js/pages/*.js',
			main: './src/assets/js/*.js',
		},
		scss: {
			dir: './src/assets/scss',
			files: './src/assets/scss/**/**/*',
			main: './src/assets/scss/config/app.scss',
		},
		icon: {
			dir: './src/assets/scss',
			files: './src/assets/scss/icons.scss',
			main: './src/assets/scss/*.scss',
		},
		bootstrap: {
			files: './src/assets/scss/config/bootstrap.scss',
			typeFiles: './src/assets/scss/config/**/bootstrap.scss',
			components: './src/assets/scss/components/*',
			light: './src/assets/scss/config/**/_theme*',
			variables: './src/assets/scss/config/**/_variables*',
		},
		custom: {
			dir: './src/assets/scss/config/custom.scss',
			files: './src/assets/scss/config/**/custom.scss',
			main: './src/assets/scss/config/custom.scss',
		},
	},
}

gulp.task('browsersync', function (callback) {
	if (envConfig.run != 'all') {
		var baseDir = paths.dist.base.dir + '/' + envConfig.run
		browsersync.init({
			server: {
				baseDir: [baseDir, paths.src.base.dir, paths.base.base.dir],
			},
		})
		callback()
	} else {
		var baseDir = paths.dist.base.dir + '/' + envConfig.demos[0]
		browsersync.init({
			server: {
				baseDir: [baseDir, paths.src.base.dir, paths.base.base.dir],
			},
		})
		callback()
	}
})

gulp.task('browsersyncReload', function (callback) {
	browsersync.reload()
	callback()
})

gulp.task('watch', async function () {
	gulp.watch(
		[
			paths.src.scss.files,
			'!' + paths.src.custom.files,
			'!' + paths.src.icon.files,
			'!' + paths.src.bootstrap.typeFiles,
			'!' + paths.src.bootstrap.light,
			'!' + paths.src.bootstrap.variables,
		],
		gulp.series('scss', 'browsersyncReload'),
	)
	gulp.watch(
		[
			paths.src.bootstrap.typeFiles,
			'!' + paths.src.bootstrap.components,
			'!' + paths.src.bootstrap.light,
		],
		gulp.series('bootstrap', 'browsersyncReload'),
	)
	gulp.watch(
		[paths.src.bootstrap.light, paths.src.bootstrap.variables],
		gulp.series('bootstrap', 'scss', 'browsersyncReload'),
	)
	gulp.watch(paths.src.icon.files, gulp.series('icon', 'browsersyncReload'))
	gulp.watch(paths.src.custom.files, gulp.series('custom', 'browsersyncReload'))
	gulp.watch([paths.src.js.dir], gulp.series('js', 'browsersyncReload'))
	gulp.watch([paths.src.js.pages], gulp.series('jsPages', 'browsersyncReload'))
})

gulp.task('js', async function () {
	if (envConfig.run != 'all') {
		var destPath = paths.dist.js.dir
		destPath = destPath.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		return gulp.src(paths.src.js.main).pipe(uglify()).pipe(gulp.dest(destPath))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var destPath = paths.dist.js.dir
				destPath = destPath.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)

				var proc = gulp.src(paths.src.js.main).pipe(uglify()).pipe(gulp.dest(destPath))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task('jsPages', function () {
	if (envConfig.run != 'all') {
		return new Promise(function (resolve, reject) {
			var JsPagePath = paths.dist.js.files
			JsPagePath = JsPagePath.replace(
				paths.dist.base.dir,
				paths.dist.base.dir + '/' + envConfig.run,
			)

			var proc = gulp.src(paths.src.js.files).pipe(uglify()).pipe(gulp.dest(JsPagePath))
			// if (envConfig.demos.length - 1)
			resolve(proc)
		})
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var JsPagePath = paths.dist.js.files
				JsPagePath = JsPagePath.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)
				var proc = gulp.src(paths.src.js.files).pipe(uglify()).pipe(gulp.dest(JsPagePath))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task('bootstrap', function () {
	if (envConfig.run != 'all') {
		var scssFiles = paths.src.bootstrap.files
		scssFiles = scssFiles.replace('config', 'config/' + envConfig.run)

		var cssDest = paths.dist.css.dir
		cssDest = cssDest.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		// generate ltr
		gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))

		// generate rtl
		return gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(rtlcss())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '-rtl.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var scssFiles = paths.src.bootstrap.files
				scssFiles = scssFiles.replace('config', 'config/' + envConfig.demos[i])

				var cssDest = paths.dist.css.dir
				cssDest = cssDest.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)

				gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))

				// generate rtl
				var proc = gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(rtlcss())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '-rtl.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task('scss', function () {
	if (envConfig.run != 'all') {
		var scssFiles = paths.src.scss.main
		scssFiles = scssFiles.replace('config', 'config/' + envConfig.run)

		var cssDest = paths.dist.css.dir
		cssDest = cssDest.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		// generate ltr
		gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))

		// generate rtl
		return gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(rtlcss())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '-rtl.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var scssFiles = paths.src.scss.main
				scssFiles = scssFiles.replace('config', 'config/' + envConfig.demos[i])

				var cssDest = paths.dist.css.dir
				cssDest = cssDest.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)

				gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))

				// generate rtl
				var proc = gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(rtlcss())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '-rtl.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})
gulp.task('custom', async function () {
	if (envConfig.run != 'all') {
		var scssFiles = paths.src.custom.main
		scssFiles = scssFiles.replace('config', 'config/' + envConfig.run)

		var cssDest = paths.dist.css.dir
		cssDest = cssDest.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		// generate ltr
		gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))
		// generate rtl
		return gulp
			.src(scssFiles)
			.pipe(sourcemaps.init())
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(rtlcss())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '-rtl.min',
				}),
			)
			.pipe(sourcemaps.write(sourceMapWrite))
			.pipe(gulp.dest(cssDest))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var scssFiles = paths.src.custom.main
				scssFiles = scssFiles.replace('config', 'config/' + envConfig.demos[i])

				var cssDest = paths.dist.css.dir
				cssDest = cssDest.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)

				gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))
				// generate rtl
				var proc = gulp
					.src(scssFiles)
					.pipe(sourcemaps.init())
					.pipe(sass.sync().on('error', sass.logError))
					.pipe(autoprefixer())
					.pipe(rtlcss())
					.pipe(gulp.dest(cssDest))
					.pipe(cleanCSS())
					.pipe(
						rename({
							suffix: '-rtl.min',
						}),
					)
					.pipe(sourcemaps.write(sourceMapWrite))
					.pipe(gulp.dest(cssDest))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task('icon', async function () {
	if (envConfig.run != 'all') {
		var iconFiles = paths.src.icon.dir
		iconFiles = iconFiles.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		var cssDest = paths.dist.css.dir
		cssDest = cssDest.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)
		gulp
			.src(paths.src.icon.main)
			.pipe(sass.sync().on('error', sass.logError))
			.pipe(autoprefixer())
			.pipe(gulp.dest(cssDest))
			.pipe(cleanCSS())
			.pipe(
				rename({
					suffix: '.min',
				}),
			)
			.pipe(gulp.dest(cssDest))
	} else {
		for (let i = 0; i < envConfig.demos.length; i++) {
			var iconFiles = paths.src.icon.dir
			iconFiles = iconFiles.replace(
				paths.dist.base.dir,
				paths.dist.base.dir + '/' + envConfig.demos[i],
			)

			var cssDest = paths.dist.css.dir
			cssDest = cssDest.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.demos[i])
			gulp
				.src(paths.src.icon.main)
				.pipe(sourcemaps.init())
				.pipe(sass.sync().on('error', sass.logError))
				.pipe(autoprefixer())
				.pipe(gulp.dest(cssDest))
				.pipe(cleanCSS())
				.pipe(
					rename({
						suffix: '.min',
					}),
				)
				.pipe(sourcemaps.write(sourceMapWrite))
				.pipe(gulp.dest(cssDest))
		}
	}
})

gulp.task('copy:all', function (cb) {
	if (envConfig.run != 'all') {
		var destPath = paths.dist.base.assets
		destPath = destPath.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)
		return gulp
			.src([
				paths.src.base.assets,
				'!' + paths.src.scss.files,
				'!' + paths.src.js.main,
				'!' + paths.src.js.files,
				'!' + paths.src.scss.dir,
			])
			.pipe(gulp.dest(destPath))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var destPath = paths.dist.base.assets
				destPath = destPath.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)

				var proc = gulp
					.src([
						paths.src.base.assets,
						'!' + paths.src.scss.files,
						'!' + paths.src.js.main,
						'!' + paths.src.js.files,
						'!' + paths.src.scss.dir,
					])
					.pipe(gulp.dest(destPath))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task('copy:libs', function () {
	if (envConfig.run != 'all') {
		var destPath = paths.dist.libs.dir
		destPath = destPath.replace(paths.dist.base.dir, paths.dist.base.dir + '/' + envConfig.run)

		return gulp
			.src(
				npmdist({
					replaceDefaultExcludes: isSourceMap,
					excludes: ['/**/*.txt'],
				}),
				{
					base: paths.base.node.dir,
				},
			)
			.pipe(
				rename(function (path) {
					path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '')
				}),
			)
			.pipe(gulp.dest(destPath))
	} else {
		return new Promise(function (resolve, reject) {
			for (let i = 0; i < envConfig.demos.length; i++) {
				var destPath = paths.dist.libs.dir
				destPath = destPath.replace(
					paths.dist.base.dir,
					paths.dist.base.dir + '/' + envConfig.demos[i],
				)
				var proc = gulp
					.src(
						npmdist({
							replaceDefaultExcludes: isSourceMap,
							excludes: ['/**/*.txt'],
						}),
						{
							base: paths.base.node.dir,
						},
					)
					.pipe(
						rename(function (path) {
							path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '')
						}),
					)
					.pipe(gulp.dest(destPath))
				if (i == envConfig.demos.length - 1) resolve(proc)
			}
		})
	}
})

gulp.task(
	'build',
	gulp.series(
		gulp.parallel('copy:all', 'copy:libs', 'bootstrap', 'scss', 'js', 'jsPages', 'icon', 'custom'),
		gulp.parallel('scss'),
	),
)

gulp.task(
	'default',
	gulp.series(
		gulp.parallel('copy:all', 'copy:libs', 'bootstrap', 'scss', 'js', 'jsPages', 'icon', 'custom'),
		gulp.parallel('browsersync', 'watch'),
	),
)
