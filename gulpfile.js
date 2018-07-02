var gulp = require ('gulp');
var uglify = require ('gulp-uglify');
var concat = require ('gulp-concat');

gulp.task('scripts', function(){
    gulp.src('js/src/*.js')
    .pipe(concat('all.min.js'))
    .pipe(uglify().on('error', function(e){
        console.log(e);
     }))
    .pipe(gulp.dest('dist/js'));
});