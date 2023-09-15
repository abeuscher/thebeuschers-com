const pug = require("pug");
const fs = require("fs");
const fse = require("fs-extra");
const path = require("path");
const esbuild = require("esbuild");
const sass = require("sass");
const siteSettings = require("./settings.js")();

const clearDir = (directory, cb) => {
  fs.rmSync(directory, { recursive: true, force: true });
  fs.mkdir(path.join(directory), (err) => {
    if (err) {
      return console.error(err);
    }
    console.log("Directory cleared");
  });
  if (cb) {
    cb();
  }
};

const buildSite = () => {
  //Write templates
  fs.readdir(siteSettings.templatesSrc, (err, files) => {
    if (err) {
      console.error("Could not list the directory.", err);
      process.exit(1);
    }
    files.forEach((file) => {
      if (file.indexOf(".pug") > -1) {
        const newFile = (siteSettings.templatesWrite + file).replace(".pug", ".php");
        console.log("Writing template " + newFile);
        fs.writeFile(
          newFile,
          pug.renderFile(siteSettings.templatesSrc + file, siteSettings.pugSettings),
          (err) => {
            if (err) {
              console.error(err);
            }
          },
        );
      }
    });
    console.log("Writing script file");
    esbuild.build({
      entryPoints: [siteSettings.jsSrc],
      bundle: true,
      minify: true,
      outfile: siteSettings.jsWrite,
      platform: "node",
      plugins: [],
    });

    console.log("Writing css file");
    const fileData = sass.compile(siteSettings.scssSrc, {
      style: "compressed",
      quietDeps: true,
    });
    fs.writeFile(siteSettings.scssWrite, fileData.css, (err) => {
      if (err) {
        console.error(err);
      }
    });

    // To copy a folder or file, select overwrite accordingly
    try {
      fse.copySync(siteSettings.assetSrc, siteSettings.assetWrite, { overwrite: true | false });
      console.log("Assets copied");
    } catch (err) {
      console.error(err);
    }
  });
};

clearDir(siteSettings.templatesWrite, buildSite);
