const pug = require("pug");
const fs = require("fs");
const path = require("path");
const pugPhpFilter = require("pug-php-filter");
const esbuild = require("esbuild");
const sass = require("sass");

const pugSettings = {
    pretty: false,
    filters: {
      php: pugPhpFilter
    },
    extension: "php",
    locals: {
      siteurl: ""
    }
  };



const srcFolder = "./src/templates/";
const writeFolder = "./public/";
const srcJs = "./src/js/app.js";
const writeJs = writeFolder + "js/app.js";

const clearDir = (directory, cb) => {
    fs.rmSync(directory, { recursive: true, force: true });
    fs.mkdir(path.join(directory), (err) => {
        if (err) {
            return console.error(err);
        }
        console.log('Directory cleared');
    });
    if (cb) {
        cb();
    }
}

const buildSite = () => {
    //Write templates
    fs.readdir(srcFolder, (err,files) => {
        if (err) {
            console.error("Could not list the directory.", err);
            process.exit(1);
        }
        files.forEach((file)=>{
            if (file.indexOf(".pug")>-1) {
                const newFile = (writeFolder + file).replace(".pug",".php")
                console.log("Writing template " + newFile);
                fs.writeFile(newFile, pug.renderFile(srcFolder + file, pugSettings), err => {
                    if (err) {
                        console.error(err);
                    }
                });            
            }
        });
        console.log("Writing script file");
        esbuild.build({
            entryPoints: [srcJs],
            bundle: true,
            minify:true,
            outfile: writeJs,
            platform: "node",
            plugins: []
        });

        console.log("Writing css file");
        const fileData = sass.compile("./src/scss/style.scss", {style: "compressed", quietDeps : true });   
        fs.writeFile("./public/style.css", fileData.css, err => {
            if (err) {
                console.error(err);
            }
        }); 
    });
}

clearDir(writeFolder, buildSite);