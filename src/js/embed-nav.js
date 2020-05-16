const SiteHeader = require("../templates/inc/header.pug")
const parseHTML = require("./utils/parse-html")

console.log("external script loaded");
let oldNav = document.querySelectorAll(".navbar-fixed-top")[0];
console.log(oldNav) 
    oldNav.parentNode.style="padding-top:0!important"
    // replace el with newEL
    oldNav.parentNode.replaceChild(parseHTML(SiteHeader({siteurl:"https://thebeuschers.com/"})), oldNav);
