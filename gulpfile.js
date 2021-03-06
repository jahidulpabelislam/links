const gulp = require("gulp");

const include = require("gulp-include")

const rename = require("gulp-rename");

const uglify = require("gulp-uglify");

const cleanCss = require("gulp-clean-css");
const autoPrefix = require("gulp-autoprefixer");

const sass = require("gulp-sass");

const livereload = require("gulp-livereload");

const assetsDir = "./assets";
const jsDir = `${assetsDir}/js`;
const jsDevDir = `${jsDir}/dev`;
const cssDir = `${assetsDir}/css`;
const scssDir = cssDir;

let defaultTasks = [];

gulp.task("reload-listen", function(callback) {
    livereload.listen();
    callback();
});

defaultTasks.push("compile-js");
gulp.task("compile-js", function() {
    return gulp.src(`${jsDevDir}/*.js`)
        .pipe(include())
        .pipe(gulp.dest(`${jsDir}/`))
        .pipe(livereload());
});

gulp.task("watch-js", function(callback) {
    gulp.watch(`${jsDevDir}/**/*.js`, gulp.parallel("compile-js"));
    callback();
});

// Concatenate & minify JS
defaultTasks.push("scripts");
gulp.task("scripts", function() {
    return gulp.src([`${jsDir}/*.js`, `!${jsDir}/*.min.js`])
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(gulp.dest(`${jsDir}/`));
});

defaultTasks.push("sass");
gulp.task("sass", function() {
    return gulp.src(`${scssDir}/*.scss`)
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest(`${cssDir}/`))
        .pipe(livereload());
});

// Watch scss file changes to compile to css
gulp.task("watch-scss", function(callback) {
    gulp.watch(`${scssDir}/**/*.scss`, gulp.parallel("sass"));
    callback();
});

// Minify stylesheets
defaultTasks.push("stylesheets");
gulp.task("stylesheets", function() {
    return gulp.src([`${cssDir}/*.css`, `!${cssDir}/*.min.css`])
        .pipe(rename({suffix: ".min"}))
        .pipe(autoPrefix({remove: false}))
        .pipe(cleanCss({compatibility: "ie8"}))
        .pipe(gulp.dest(`${cssDir}/`));
});

gulp.task("watch", gulp.series(["reload-listen", "sass", "compile-js", "watch-scss", "watch-js"]));

gulp.task("default", gulp.series(defaultTasks));
