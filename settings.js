const pugPhpFilter = require("pug-php-filter");

const settings = () => {
  return {
    sitename: "",
    templatesSrc: "./src/templates/",
    templatesWrite: "./public/",
    jsSrc: "./src/js/app.js",
    jsWrite: "./public/js/app.js",
    scssSrc: "./src/scss/style.scss",
    scssWrite: "./public/style.css",
    assetSrc: "./src/public_transfer/",
    assetWrite: "./public/",
    pugSettings: {
      pretty: false,
      filters: {
        php: pugPhpFilter,
      },
      extension: "php",
      locals: {
        siteurl: "",
      },
    },
  };
};

module.exports = settings;
