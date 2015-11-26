var gulp = require('gulp')
	,uglifiy = require('gulp-uglify');

gulp.task('minify',function() {
	gulp.src('js/**/*.js')
	.pipe(uglifiy())
	.pipe(dest('/js/main.min.js'));
});

gulp.task('default',['minify']);