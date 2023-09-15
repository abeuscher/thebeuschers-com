<?php /*
Template Name: Adwords Landing Page Feb 2020
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
gtag('config', 'UA-127402653-1');</script></head><body class="loading"><div class="landing-page"><header><div class="inner fixed-lg"><a class="logo" href="https://withwre.com/thebeuschers/listings/my-office-s-listings"><div id="logo-facepic"></div><img src="/wp-content/themes/thebeuschers/images/windmere-logo.png"></a><h1>Make yourself at home.</h1><p>Or something like that. Look - we don't think it's the <em>best </em>slogan in the world, but we're not an ad agency.</p><p>We just have some great homes around Seattle to sell. If you're looking for one,</p></div><a class="lp-button cta" href="https://withwre.com/thebeuschers/listings/my-office-s-listings">Check Out Our Listings</a></header><article><div class="inner fixed-lg"><h2>Or <a href="tel:206-409-2244">Call Us</a>.</h2><a class="lp-button" href="tel:206-409-2244">206-409-2244</a><br><h2>Or <a href="mailto:thebeuschers@windermere.com"> Send Us Email</a>.</h2><a class="lp-button" href="mailto:thebeuschers@windermere.com">thebeuschers@windermere.com</a><br><h2>Or Check Out The Rest Of Our Website. It's Got a Picture of Our Kid On It. He's Pretty Cute for A 34 Year Old.</h2><a class="lp-button knockout" href="#">thebeuschers.com</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2>It's Pronounced "Boysher". If You Were Curious.</h2></div></article><footer><div class="inner fixed-lg"><p>&copy; 2020 thebeuschers | <a href="https://thebeuschers.com/">thebeuschers.com  </a></p></div></footer></div><script src="/wp-content/themes/thebeuschers/js/bundle.min.js"></script><script src="//pixel.adwerx.com/208963/awp.js" async></script></body></html>