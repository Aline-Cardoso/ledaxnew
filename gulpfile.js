const { series, src, watch } = require("gulp");
const gulp = require("gulp");
const minify = require("gulp-minify-css");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const webp = require("gulp-webp");
const purge = require("gulp-purgecss");
const rename = require("gulp-rename");
const clearCss = require("gulp-clean-css");

function css() {
  return src([
    "./vendor/bootstrap/css/bootstrap.min.css",
    "./vendor/simple-line-icons/css/simple-line-icons.min.css",
    "./vendor/owl.carousel/assets/owl.carousel.min.css",
    "./vendor/owl.carousel/assets/owl.theme.default.min.css",
    "./vendor/magnific-popup/magnific-popup.min.css",
    "./vendor/animate/animate.compat.css",
    "./css/theme.css",
    "./css/theme-elements.css",
    "./css/theme-blog.css",
    "./css/theme-shop.css",
    "./vendor/rs-plugin/css/settings.css",
    "./vendor/rs-plugin/css/layers.css",
    "./vendor/rs-plugin/css/navigation.css",
    "./css/skin-corporate-17.css",
    "./css/custom.css",
    "./css/tipologo.css",
    "./vendor/fontawesome-free/css/all.min.css",
  ])
    .pipe(clearCss({ level: { 1: { specialComments: 0 } } }))
    .pipe(minify())
    .pipe(concat("style-min.css"))
    .pipe(gulp.dest("./css"));
}

function cleanCss() {
  return src("./css/style-min.css")
    .pipe(
      purge({
        content: [
          "./includes/header.php",
          "./includes/slider.php",
          "./includes/negocios.php",
          "./includes/quem-somos.php",
          "./includes/segmentos-1.php",
          "./includes/noticias.php",
          "./includes/cases.php",
          "./includes/footer.php",
        ],
      })
    )
    .pipe(concat("home.css"))
    .pipe(gulp.dest("./css"));
}

function script() {
  return src([
    "./vendor/jquery/jquery.min.js",
    "./vendor/jquery.cookie/jquery.cookie.min.js",
    "./vendor/lazysizes/lazysizes.min.js",
    "./vendor/isotope/jquery.isotope.min.js",
    "./vendor/bootstrap/js/bootstrap.bundle.min.js",
    "./vendor/owl.carousel/owl.carousel.min.js",
    "./vendor/magnific-popup/jquery.magnific-popup.min.js",
    "./js/theme.js",
    "./js/orbit-form.js",
    "./js/views/view.shop.js",
    "./js/theme.init.js",
    "./js/examples/examples.gallery.js",
    "./js/examples/examples.portfolio.js",
  ])
    .pipe(concat("default.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("./js"));
}

function images() {
  return src(["./img/**/*.{jpg,png}"])
    .pipe(webp())
    .pipe(gulp.dest("./img/webp"));
}

exports.css = css;
exports.images = images;
exports.scripts = script;
exports.purgeCss = cleanCss;
// digitando apenas gulp ele roda padrão para montar os arquivos "build"  gulp
exports.default = series(css, images, script);
// para assistir o codigo e fazer as mudanças automaticamente digita gulp watch
exports.watch = function () {
  watch("./css/**/*.scss", css);
  watch("./img/**/*.{jpg,png}", images);
  watch("./js/**/*.js", script);
};
