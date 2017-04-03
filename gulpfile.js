//diretorios a serem concatenados e minificados
var scripts = ['bower_components/jquery/dist/jquery.min.js','js/**/*.js'];
var styles = ['css/**.css'];

//inicia task
var gulp = require('gulp');
var jshint = require('gulp-jshint');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var htmlmin = require('gulp-htmlmin');
var cleanCSS = require('gulp-clean-css');

gulp.task('clean',function(){
	return gulp.src(['dist'])
	.pipe(clean());
});

gulp.task('jshint',function(){
	return gulp.src('js/**/*.js')
	.pipe(jshint())
	.pipe(jshint.reporter('default'));
});

gulp.task('uglify',['clean'],function(){ //pegar todos os js, minificar em um só arquivo
	return gulp.src(scripts)
	.pipe(concat('scripts.min.js')) //concatena
	.pipe(uglify()) //minifica e troca o valor das variaveis
	.pipe(gulp.dest('dist/')); //leva os arquivos para outra pasta 
});

gulp.task('cssmin',['clean'], function(){
	return gulp.src(styles)
	.pipe(cleanCSS())
	.pipe(concat('style.min.css'))
	.pipe(gulp.dest('dist/')); //leva os arquivos para outra pasta 
});

gulp.task('default', ['jshint', 'uglify', 'cssmin']);

/*minifica html
gulp.task('htmlmin', function() {
	return gulp.src('view/*.html')
	.pipe(htmlmin({collapseWhitespace: true}))
	.pipe(gulp.dest('dist/view'));
});*/