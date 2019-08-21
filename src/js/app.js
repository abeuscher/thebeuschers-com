require("dom4");
require("fetch-ie8");

var parseHTML = require("./utils/parse-html.js");
var isElement = require("./utils/is-element.js");

var siteSettings = {
  "imagePath": "/wp-content/themes/thebeuschers/images/",
  "templates" : {
    "ctaBar" : require("./inc/cta-bar.pug")
  },
  "breakpoints": {
    "xs": 0,
    "s": 641,
    "m": 1025,
    "l": 1321,
    "xl": 1921
  }
}

window.addEventListener("load", function() {
activateImages();
var ctaBar = document.getElementById("cta-bar");
var buttons = [
  {
  "label":"Buyer's Guide",
  "url":siteSettings.imagePath+"TheBeuschersBuyersGuide.pdf"
  },
  {
  "label":"Seller's Guide",
  "url":siteSettings.imagePath+"TheBeuschersSellersGuide.pdf"
  }
];
ctaBar.appendChild(parseHTML(siteSettings.templates.ctaBar(buttons)));
});

function activateImages() {
  var backgroundImages = document.querySelectorAll("[data-bg]");
  var backgroundObjects = document.querySelectorAll("[data-bg-object]");
  for (i in backgroundObjects) {
    if (isElement(backgroundObjects[i])) {
      thisElement = backgroundObjects[i];
      var imageObj = JSON.parse(thisElement.getAttribute("data-bg-object"));
      thisElement.style.backgroundImage = "url('" + imageObj.url + "')";
    }
  }
  for (i in backgroundImages) {
    if (isElement(backgroundImages[i])) {
      thisElement = backgroundImages[i];
      if (thisElement.getAttribute("data-bg").indexOf("http") > -1) {
        thisElement.style.backgroundImage = "url('" + thisElement.getAttribute("data-bg") + "')";
      } else {
        thisElement.style.backgroundImage = "url('" + siteSettings.imagePath + thisElement.getAttribute("data-bg") + "')";
      }
    }
  }
  var lzImages = document.querySelectorAll("[data-src]");
  for (i in lzImages) {
    if (isElement(lzImages[i])) {
      thisElement = lzImages[i];
      var img = document.createElement("img");
      if (thisElement.getAttribute("data-src").indexOf("http") > -1) {
        img.src = thisElement.getAttribute("data-src");
      } else {
        img.src = siteSettings.imagePath + thisElement.getAttribute("data-src");
      }

      img.alt = "";
      thisElement.appendChild(img);
    }
  }
}
