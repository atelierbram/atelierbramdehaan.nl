<?php ?><!doctype html>
<html lang="nl" class='no-js core no-flexbox env-<?= $env; ?> server-<?= $server; ?> <?php if ($id == "siteIndex"): echo "frontpage"; endif; ?>'>
  <head>
    <meta charset="utf-8">
    <title><?= $siteTitle; ?> - <?= $title; ?></title>
    <meta name="description" content="<?= $description; ?> - <?= $siteTitle; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="author" href="https://atelierbramdehaan.nl">
  <?php if ( ($id == "siteIndex") ): ?>
    <style id="fontfaceCss"><?php include "inc/fontface.css.inc"; ?></style>
  <?php endif; ?>
  <?php if ( ($type == "landing-page") ): ?>
    <style id="fontfaceCss"><?php include "../inc/fontface.css.inc"; ?></style>
  <?php endif; ?>
  <?php if ( ($id == "siteIndex") && ($env == "dev") ): ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/critical.css?v4"  media="all">
    <link rel="stylesheet" href="<?= $assetPath; ?>css/frontpage.css?v4" media="all">
  <?php endif; ?>
  <?php if ( ($id == "siteIndex") && ($env == "prod") ): ?>
    <style id="critalCss"><?php include "inc/critical.css.inc"; ?></style>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/frontpage.min.css?v4" media="print" onload="this.media='all'">
  <?php endif; ?>
  <?php if ( ($type == "landing-page") && ($env == "prod") ): ?>
    <style id="critalCss"><?php include "../inc/critical.css.inc"; ?></style>
  <?php endif ?>
  <?php if ( ($type == "product-page") && ($env == "prod") ) : ?>
    <style id="critalCss"><?php include "../../inc/critical.css.inc"; ?></style>
  <?php endif ?>
  <?php if ( ($env == "dev") ): ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/style.css?v5" media="all">
  <?php endif; ?>
  <?php if ( ($env == "prod") ): ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css?v5" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css?v4"></noscript>
  <?php endif; ?>
  <?php if ($id == "siteIndex"): ?>
    <script id="headDetect"><?php include "inc/head-detect.js.inc"; ?></script>
  <?php elseif ($type == "landing-page"): ?>
    <script id="headDetect"><?php include "../inc/head-detect.js.inc"; ?></script>
  <?php else: ?>
    <script id="headDetect"><?php include "../../inc/head-detect.js.inc"; ?></script>
  <?php endif ?>
  <?php if ( ($env == "dev") && ($id == "siteIndex") ): ?><style id="gridToggleCss"><?php include "inc/grid-toggle.css.inc"; ?></style><?php endif ?>
  <?php if ( ($env == "dev") && ($type == "landing-page") ): ?><style id="gridToggleCss"><?php include "../inc/grid-toggle.css.inc"; ?></style><?php endif ?>
  <?php if ( ($env == "dev") && ($type == "project-page") ): ?><style id="gridToggleCss"><?php include "../../inc/grid-toggle.css.inc"; ?></style><?php endif ?>
  <?php if ( ($server == "local") ): ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/local.min.css?v1" media="all">
  <?php endif; ?>
  <?php if ( ($env == "prod") ): ?>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e2d112">
  <meta name="msapplication-TileColor" content="#23241a">
  <meta name="theme-color" content="#ffffff">
  <?php endif; ?>
  </head>
  <body class="id-<?= $id; ?> page-type-<?= $type; ?>">
    <?php if ($id == "siteIndex"): ?>
      <?php include "inc/icons.svg.inc"; ?>
    <?php elseif ($type == "landing-page"): ?>
      <?php include "../inc/icons.svg.inc"; ?>
    <?php else : include "../../inc/icons.svg.inc"; ?>
    <?php endif ?>
