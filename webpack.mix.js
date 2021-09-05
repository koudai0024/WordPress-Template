const mix = require("laravel-mix");

mix.ts("src/ts/index.ts", "./assets/js/").sass("src/scss/style.scss", "./");
