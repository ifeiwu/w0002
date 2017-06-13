var
gulp = require('gulp'),
concat = require('gulp-concat'), //文件合并
uglify = require('gulp-uglify'), //JS压缩
minifycss = require('gulp-clean-css'), //CSS压缩
autoprefixer = require('gulp-autoprefixer'), //CSS3前缀
rename = require('gulp-rename'); //重命名

gulp.task('css', function() {
	return gulp.src([
				'asset/css/reset.css',
				'asset/css/swiper.css',
				'asset/css/main.css',
			])
		.pipe(autoprefixer({browsers:'last 10 versions'}))
		.pipe(concat('main.min.css'))
		.pipe(minifycss())
		.pipe(gulp.dest('asset/css'));
});

gulp.task('js', function() {
	return gulp.src([
				/*'asset/js/jquery.js',
				'asset/js/restive.js',
				'asset/js/trunk8.js',*/
				'asset/js/main.js',
			])
		.pipe(concat('main.min.js'))
		.pipe(uglify({compress:true,mangle:{except:['require','exports','module','$']}}))
		.pipe(gulp.dest('asset/js'));
});

//自动监听
gulp.task('watch', function() {
	gulp.watch(['asset/css/**/*.css'], ['css']);
	gulp.watch(['asset/js/main.js'], ['js']);
});

//默认执行
gulp.task('default', function () {  
	gulp.start('css', 'js');
});