<?php /*
Template Name: Blank Page
*/ ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Dynamic Signal">
    <meta property="twitter:site" content="dynamicsignal.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="shortcut icon" href="/wp-content/themes/thebeuschers/images/favicon.ico"><?php global $wp_query;
$postid = $wp_query->post->ID;
if ($override_title!="") {
  $title = $override_title;
}
else {
  $title = get_the_title();
}
$description = the_excerpt();
$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
wp_reset_query();
$link = get_the_permalink();
echo "<title>$title</title>";
echo "<meta property='description' content='".$description."' />";
echo "<meta property='og:title' content='$title' />";
echo "<meta property='og:url' content='$link' />";
echo "<meta property='og:description' content='$description' />";
echo "<meta property='twitter:title' content='$title' />";
echo "<meta property='twitter:description' content='$description' />";
$slink = get_template_directory_uri() . "/style.css?v=" . filemtime( get_stylesheet_directory() . '/style.css');
echo "<link href='$slink' rel='stylesheet' />"; ?>
    <body class="loading">
      <div id="wrapper"> 
        <header class="main">
          <section class="contact-header">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <ul class="hmenu social-links">
                    <li><a href="https://www.facebook.com/TheBeuschers/"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-facebook"></i></span></a></li>
                    <li><a href="https://twitter.com/thebeuschersRE"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-twitter"></i></span></a></li>
                    <li><a href="https://www.instagram.com/thebeuschers.re/"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-instagram"></i></span></a></li>
                  </ul>
                </div>
                <div class="col-md-6 right">
                  <ul class="hmenu social-links">
                    <li><a href="tel:1-206-409-2244"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-phone"></i></span><span>1-206-409-2244</span></a></li>
                    <li><a href="mailto:johnnyb@windermere.com"><span class="fa-1x fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse fa-envelope"></i></span><span>johnnyb@windermere.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="main-header">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-xs-9 logo-bucket"><a class="logo" href="/"><img src="/wp-content/themes/thebeuschers/images/windmere-logo.png">
                    <div class="headpic" data-bg="johnandbarbara.jpg">
                      <h1>The Beuschers</h1>
                    </div></a></div>
                <div class="col-md-8 col-xs-3 right">
                  <nav class="small-nav">
                    <ul class="hmenu">
                      <li><a href="/">Home</a></li>
                      <li><a href="buyers-and-sellers">Buyers & Sellers</a></li>
                      <li><a href="Vendors">Vendors</a></li>
                      <li><a href="blog">Blog</a></li>
                      <li><a href="contact">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </section>
        </header>
        <section class="hero">
          <h1><?php the_title(); ?></h1>
        </section>
        <section class="content">
          <div class="container"><?php if( have_posts() ): while( have_posts() ): the_post(); ?>
            <article class="row">
              <div class="col-md-12 blog-content"><?php the_content(); ?></div>
            </article><?php endwhile;
endif; ?>
          </div>
        </section>
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <nav>
                    <ul>
                      <li><a href="/">Home</a></li>
                      <li><a href="buyers-and-sellers">Buyers and Sellers</a></li>
                      <li><a href="Vendors">Vendors</a></li>
                      <li><a href="blog">Blog</a></li>
                      <li><a href="contact">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <p>© 2017. The Beuschers. All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <script src="/wp-content/themes/thebeuschers/js/bundle.js"></script>
    </body>
  </head>
</html>