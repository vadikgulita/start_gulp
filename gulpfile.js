import gulp from "gulp";
// const plumber from "gulp-plumber`);
import del from "del";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import mqpaker from "css-mqpacker";
import imagemin from "gulp-imagemin";
import imageminJPG from "imagemin-jpeg-recompress";
import imageminPNG from "imagemin-pngquant";
import imageminWEBP from "gulp-webp";
import server from "browser-sync";
import cleanCSS from "gulp-clean-css";
import dartSass from "sass";
import gulpSass from "gulp-sass";
const sass = gulpSass(dartSass);

gulp.task(`clean`, () => {
  return del(`build`);
});

gulp.task(`copy`, () => {
  return gulp
    .src(
      [
        `source/fonts/**/*.*`,
        `source/img/**/*.{gif,ico}`,
        `source/**/*.html`,
        `source/**/*.php`,
        `source/video/**/*.*`,
        `source/models/**/*`,
        `source/**/*.js`,
        `source/.htaccess`,
        `source/**/*.json`,
      ],
      {
        base: `source`,
      }
    )
    .pipe(gulp.dest(`build`));
});
gulp.task(`html`, () => {
  return gulp
    .src([`source/**/*.html`], {
      base: `source`,
    })
    .pipe(gulp.dest(`build`));
});
gulp.task(`php`, () => {
  return gulp
    .src([`source/**/*.php`], {
      base: `source`,
    })
    .pipe(gulp.dest(`build`));
});
gulp.task(`js`, () => {
  return gulp
    .src([`source/**/*.js`], {
      base: `source`,
    })
    .pipe(gulp.dest(`build`));
});

gulp.task(`css`, () => {
  return (
    gulp
      .src(`source/**/*.css`)
      // .pipe(plumber())
      .pipe(
        postcss([
          autoprefixer({
            overrideBrowserslist: ["last 5 versions"],
          }),
        ])
      )
      .pipe(cleanCSS({ format: "keep-breaks", level: 0 }))
      .pipe(gulp.dest(`build/`))
      .pipe(server.stream())
  );
});
gulp.task(`scss`, () => {
  return gulp
    .src(`source/**/*.scss`)
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS({ format: "keep-breaks", level: 0 }))
    .pipe(gulp.dest(`build/`))
    .pipe(server.stream());
});

gulp.task(`images`, () => {
  return gulp
    .src(`source/img/**/*.{png,jpg,svg}`)
    .pipe(
      imagemin([
        imageminJPG({
          loops: 6,
          min: 40,
          max: 85,
          quality: "medium",
        }),
        imageminPNG({
          speed: 1,
          floyd: 1,
        }),
      ])
    )
    .pipe(gulp.dest(`build/img`));
});

gulp.task(`webp`, () => {
  return gulp
    .src([`build/img/**/*.{png,jpg}`])
    .pipe(imageminWEBP({ quality: 70 }))
    .pipe(gulp.dest(`build/img`));
});

gulp.task(`refresh`, function (done) {
  server.reload();
  done();
});

gulp.task(`server`, function () {
  server.init({
    // server: `build/`,
    notify: false,
    open: true,
    cors: true,
    ui: false,
    proxy: "http://localhost:3002/build/",
  });

  gulp.watch(`source/**/*.css`, gulp.series(`css`));
  gulp.watch(`source/**/*.scss`, gulp.series(`scss`));
  gulp.watch(`source/**/*.html`, gulp.series(`html`, `refresh`));
  gulp.watch(`source/**/*.php`, gulp.series(`php`, `refresh`));
  gulp.watch(`source/**/*.js`, gulp.series(`js`, `refresh`));
});

gulp.task(
  `build`,
  gulp.series(`clean`, `images`, `webp`, `css`, `scss`, `copy`)
);
gulp.task(`start`, gulp.series(`build`, `server`));
