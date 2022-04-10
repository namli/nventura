/*
    Tasks:

    $ gulp 			: Runs the "css" and "js" tasks.
    $ gulp watch	: Starts a watch on the "css" and "js" tasks.

*/

const { src, dest, watch, series, parallel } = require('gulp');

//  For CSS
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');


//  Dirs
const inputDir = 'sass';
const outputDir = './';

/** CSS task */
const css = () => {
    return src(inputDir + '/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(['> 5%', 'last 5 versions']))
        .pipe(cleancss())
        .pipe(sourcemaps.write())
        .pipe(dest(outputDir));
};



/*
    $ gulp
*/
exports.default = parallel(css);

/*
    $ gulp watch
*/
exports.watch = () => {
    watch(inputDir + '/**/*.scss', css);
};
