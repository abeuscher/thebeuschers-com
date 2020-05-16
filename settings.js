var srcDir = "./src/";
var buildDir = "./public_html/wp-content/themes/thebeuschers/";

var jsSrcDir = srcDir + "js/";
var jsBuildDir = buildDir + "js/";

var sassSrcDir = srcDir + "scss/";
var sassBuildDir = buildDir;

var assetsSrcDir = srcDir + "public_transfer/";
var assetsBuildDir = buildDir;

var templateSrcDir = srcDir + "templates/";
var templateBuildDir = buildDir;


function siteSettings() {
  return {
    siteName: "weedreviews.com",
    directories:[buildDir, jsBuildDir],
    jsFiles: [
      {
        name: "Main Bundle",
        srcDir: jsSrcDir,
        srcFileName: "app.js",
        buildDir: jsBuildDir,
        buildFileName: "bundle.js"
      },
      {
        name: "Embed Bundle",
        srcDir: jsSrcDir,
        srcFileName: "embed-nav.js",
        buildDir: jsBuildDir,
        buildFileName: "embed.js"
      },
    ],
    templates: [
      {
        name: "Main Template Group",
        srcDir: templateSrcDir,
        buildDir: templateBuildDir
      },
    ],
    stylesheets: [
      {
        name: "Main Stylesheet",
        srcDir: sassSrcDir,
        buildDir: sassBuildDir
      },
    ],
    assets: [
      {
        name: "Main Public Assets",
        srcDir: [assetsSrcDir + "**/*"],
        buildDir: assetsBuildDir
      }
    ]
  };
}
module.exports = siteSettings;
