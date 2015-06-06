// any package you download, you pass in method require('package')

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	notify = require("gulp-notify"),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync').create();

// .task(), .watch(), .require() .pipe() are the only gulp methods

gulp.task('styles', function (){
	return gulp.src('styles/**/*.scss')
			.pipe(sass({
				'sourcemap=none': true,
				errLogToConsole: true
			}))
			.on("error", notify.onError(function (error) {
				return "Message to the notifier: " + error.message;
 			}))
			.pipe(concat('style.css'))
			.pipe(gulp.dest('.'))
			.pipe(browserSync.reload({stream:true}))
			.pipe(notify('Sass done')); 
});

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: 'localhost:8888/projects/projectEight/'
	});
});

gulp.task('watch', function(){
	gulp.watch('styles/*.scss', ['styles']);
	gulp.watch('**/*.php', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'styles','watch']);