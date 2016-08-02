<?php
/*
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the main tag.
 */
?>

<!DOCTYPE html>
<head>
  <title>Luc Awater</title>

  <link rel="canonical" href="<?php echo home_url(); ?>">

  <!-- META TAGS -->
  <meta charset="utf-8  " />
  <meta name="description" content="web developer + designer">

  <meta property="og:title" content="Luc Awater">
  <meta property="og:description" content="web developer + designer">
  <meta property="og:url" content="<?php echo home_url(); ?>">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Load fonts & non-critical css asynchronously -->
  <script>
    function loadCSS(e,t,n){"use strict";function o(){var t;for(var i=0;i<s.length;i++){if(s[i].href&&s[i].href.indexOf(e)>-1){t=true}}if(t){r.media=n||"all"}else{setTimeout(o)}}var r=window.document.createElement("link");var i=t||window.document.getElementsByTagName("script")[0];var s=window.document.styleSheets;r.rel="stylesheet";r.href=e;r.media="only x";i.parentNode.insertBefore(r,i);o();return r}

    loadCSS( "https://cloud.typography.com/6711094/6669152/css/fonts.css" );
    loadCSS( "<?php bloginfo('template_directory'); ?>/css/app.css" );
  </script>

  <!-- Critical stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app-critical.css">

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body>
  <main role="main">
    <header>
      <h1><strong>Luc Awater</strong><br>creating with code</h1>
    </header>

    <section class="text">
      <p>I am a <strong>web developer</strong> + designer from the Netherlands, currently living in Stockholm. I combine code with a touch of design to build products for the web.</p>
    </section>
