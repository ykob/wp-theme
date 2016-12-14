<?php
  $website_domain = '';
  $website_name = '';
  $meta_title_merge = '';
  $meta_keywords_base = '';
  $meta_keywords_merge = '';

  if ($meta_title) {
    $meta_title_merge = $meta_title. '｜'. $website_name;
  } else {
    $meta_title_merge = $website_name;
  }
  if ($meta_keywords != '')
    $meta_keywords_merge = $meta_keywords. ','. $meta_keywords_base;
  else
    $meta_keywords_merge = $meta_keywords_base;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $meta_title_merge ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta name="keywords" content="<?php echo $meta_keywords_merge ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/img/common/favicon.ico">
    <link rel="stylesheet" href="/css/main.min.css">
    <meta property="og:title" content="<?php echo $meta_title_merge ?>">
    <meta property="og:site_name" content="<?php echo $website_name ?>">
    <meta property="og:type" content="<?php echo ( $og_type ) ? $og_type : 'website'; ?>">
    <meta property="og:description" content="<?php echo $meta_description ?>">
    <meta property="og:url" content="<?php echo $meta_path ?>">
    <meta property="og:image" content="<?php echo $website_domain. '/img/common/ogp.jpg' ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $meta_title_merge ?>">
    <meta name="twitter:description" content="<?php echo $meta_description ?>">
    <meta name="twitter:image" content="<?php echo $website_domain. '/img/common/ogp.jpg' ?>">
    <?php wp_head(); ?>
  </head>
  <body>
