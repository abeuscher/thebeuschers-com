<?php /*
Template Name: Vendors Page
*/ ?><!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta property="og:locale" content="en_US"><meta property="og:site_name" content="The Beuschers Real Estate"><meta property="twitter:site" content="thebeuschers.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"><link rel="shortcut icon" href="/wp-content/themes/thebeuschers/images/favicon.ico"><?php global $wp_query;
$postid = $wp_query->post->ID;
if ($override_title!="") {
  $title = $override_title;
}
else {
  $title = get_the_title();
}
$title = "The Beuschers | Seattle Real Estate | " . $title;
$description = get_field("meta_description");
$description = get_field("meta_keywords");
$featured_image = get_field("meta_post_thumb")=="" ? get_field("meta_post_thumb") : wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
wp_reset_query();
$link = get_the_permalink();
echo "<title>$title | The Beuschers | Real Estate</title>";
echo "<meta property='description' content='".$keywords."' />";
echo "<meta property='keywords' content='".$description."' />";
echo "<meta property='og:title' content='$title' />";
echo "<meta property='og:url' content='$link' />";
echo "<meta property='og:description' content='$description' />";
echo "<meta property='twitter:title' content='$title' />";
echo "<meta property='twitter:description' content='$description' />";
$slink = get_template_directory_uri() . "/style.css?v=" . filemtime( get_stylesheet_directory() . '/style.css');
echo "<link href='$slink' rel='stylesheet' />"; ?><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-127402653-1"></script><script>window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-127402653-1');</script></head><body class="loading"><div id="wrapper"> <nav class="side-nav visible-sm visible-xs"><label for="side-toggle"></label><input id="side-toggle" type="checkbox"><a class="hamburger"><span></span><span></span><span></span></a><div class="inner"><ul><li><a class="home" href="/">Home</a></li><li><a href="/buyers">Buyers</a></li><li><a href="/sellers">Sellers</a></li><li><a href="/vendors">Vendors</a></li><li><a href="https://withwre.com/thebeuschers/listings/my-office-s-listings">Listings</a></li><li><a href="/contact-us">Contact</a></li></ul></div></nav><header class="main"><section class="contact-header"><div class="row no-margin"><div class="col-md-6 no-padding"><a class="logo" href="undefined/"><div id="logo-facepic"></div><img src="/wp-content/themes/thebeuschers/images/windmere-logo.png"></a></div><div class="col-md-3 visible-md visible-lg"><h2>Barbara Beuscher</h2><a href="tel:1-206-409-2244"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-phone"></i></span><span>1-206-409-2243            </span></a></div><div class="col-md-3 visible-md visible-lg"><h2>John Beuscher</h2><a href="tel:1-206-409-2244"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-phone"></i></span><span>1-206-409-2244</span></a><br><a href="mailto:thebeuschers@windermere.com"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-envelope"></i></span><span class="email">thebeuschers@windermere.com</span></a></div></div></section><section class="main-header"><div class="container"><div class="row"><div class="col-md-6 no-padding"><ul class="hmenu social-links"><li><a href="https://www.facebook.com/TheBeuschers/"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-facebook"></i></span></a></li><li><a href="https://twitter.com/thebeuschersRE"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-twitter"></i></span></a></li><li><a href="https://www.instagram.com/thebeuschers.re/"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-instagram"></i></span></a></li></ul></div><div class="col-md-6 visible-md visible-lg right no-padding"><nav class="small-nav"><ul class="hmenu"><ul><li><a class="home" href="/">Home</a></li><li><a href="/buyers">Buyers</a></li><li><a href="/sellers">Sellers</a></li><li><a href="/vendors">Vendors</a></li><li><a href="https://withwre.com/thebeuschers/listings/my-office-s-listings">Listings</a></li><li><a href="/contact-us">Contact</a></li></ul></ul></nav></div></div></div></section></header><?php if( have_posts() ) {
    while( have_posts() ) {
        the_post(); ?><div class="content"><section><div class="container"><div class="row"><div class="col-md-12 vendor"><?php foreach(get_field("vendor_type") as $key=>$vendor_type) {
  printf("<h2>%s</h2>", $vendor_type["vendor_title"]);
  foreach($vendor_type["vendors"] as $vkey=>$vendor) {
  if ($vendor["vendor_image"]) {
    printf("<div class='vendor-tile'><img src='%s' alt='%s' /><h3>%s</h3><p>%s</p><a href='%s' class='button' target='_blank'><i class='fa fa-external-link'></i>website</a><a href='mailto:%s' class='button'><i class='fa fa-envelope'></i>email</a></div>",$vendor["vendor_image"]["url"],$vendor["vendor_name"],$vendor["vendor_name"],$vendor["vendor_job_title"],$vendor["vendor_link"],$vendor["vendor_email"]);
  
    }
  else {
    printf("<div class='vendor-tile'><h3>%s</h3><p>%s</p><a href='%s' class='button' target='_blank'><i class='fa fa-external-link'></i>website</a><a href='mailto:%s' class='button'><i class='fa fa-envelope'></i>email</a></div>",$vendor["vendor_name"],$vendor["vendor_job_title"],$vendor["vendor_link"],$vendor["vendor_email"]);
  
    }
  }
}
}} ?></div></div></div></section></div><footer><div class="footer-top"><div class="container"><div class="row"><div class="col-md-12 footer-menu"><nav><ul class="hmenu"><li><a href="/">Home</a></li><li><a href="buyers">Buyers</a></li><li><a href="sellers">Sellers</a></li><li><a href="Vendors">Vendors</a></li><li><a href="blog">Blog</a></li><li><a href="contact">Contact</a></li></ul></nav></div><div class="col-md-12"><h2>John Beuscher</h2><ul class="hmenu"><li><a href="tel:1-206-409-2244"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-phone"></i></span><span>1-206-409-2244</span></a></li><li><a href="mailto:thebeuschers@windermere.com"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-envelope"></i></span><span>thebeuschers@windermere.com</span></a></li></ul></div><div class="col-md-12"><h2>Barbara Beuscher</h2><ul class="hmenu"><li><a href="tel:1-206-409-2244"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-phone"></i></span><span>1-206-409-2243</span></a></li></ul></div><div class="col-md-12"><img src="/wp-content/themes/thebeuschers/images/windmere-logo-white.png"></div></div></div></div><div class="footer-bottom"><div class="container"><div class="row"><div class="col-sm-12"><p>© 2020. The Beuschers. All rights reserved.</p></div></div></div></div></footer><div id="cta-bar"></div></div><script src="/wp-content/themes/thebeuschers/js/bundle.min.js"></script><script src="//pixel.adwerx.com/208963/awp.js" async></script></body></html>