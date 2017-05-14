var gulp       = require('gulp')
var source     = require('vinyl-source-stream')
var uglify     = require('gulp-uglify')
var concat     = require('gulp-concat')
var gulpUtil   = require('gulp-util')
var minifyCss  = require('gulp-minify-css')
var browserify = require('browserify')
var buffer     = require('vinyl-buffer'); 



var config = {
	script:{
		main: 'resources/assets/js/admin/index.js',
		src:  'resources/assets/js/admin/**/.js',
		dest: 'public/js'
	    },
	css:{
		src: 'resources/assets/css/admin/**/*.css',
		dest: 'public/admin-css'
	}    
}


gulp.task('build:js', function(){
	 return browserify({
	 	entries: config.script.main
	 })
	 .bundle()
	 .pipe(source('all.js'))
	 .pipe(buffer())
	 .pipe(gulpUtil.env.type === 'production' ? uglify() : gulpUtil.noop())
	 .pipe(gulp.dest(config.script.dest))
})

gulp.task('build:css', function() {
     return gulp.src(config.css.src)
     .pipe(concat('all.css'))
     .pipe(gulpUtil.env.type === 'production' ? minifyCss() : gulpUtil.noop())
     .pipe(gulp.dest(config.css.dest))
 })



gulp.task('correr', ['build:js', 'build:css'])
gulp.task('default', ['correr'])