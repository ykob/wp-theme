<?php
  $website_domain = get_bloginfo( 'url' );
  $website_name = '';
  $meta_title_merge = ( $meta_title ) ? $meta_title. '｜'. $website_name : $website_name;
  $meta_keywords_base = '';
  $meta_keywords_merge = ( $meta_keywords != '' ) ? $meta_keywords. ','. $meta_keywords_base : $meta_keywords_base;
  if ( !$meta_ogp_image ) $meta_ogp_image = : $website_domain. '/img/common/ogp.jpg';
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
    <meta property="og:type" content="<?php echo ( $meta_ogp_type ) ? $meta_ogp_type : 'website'; ?>">
    <meta property="og:description" content="<?php echo $meta_description ?>">
    <meta property="og:url" content="<?php echo $meta_path ?>">
    <meta property="og:image" content="<?php echo $meta_ogp_image ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $meta_title_merge ?>">
    <meta name="twitter:description" content="<?php echo $meta_description ?>">
    <meta name="twitter:image" content="<?php echo $meta_ogp_image ?>">
    <?php wp_head(); ?>
  </head>
  <body>
