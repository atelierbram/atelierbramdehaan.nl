<?php ?><!doctype html>
<html lang="nl" class='no-js core no-flexbox env-<?= $env; ?> server-<?= $server; ?> <?php if ($id == "siteIndex"): echo "frontpage"; endif; ?>'>
  <head>
    <meta charset="utf-8">
    <title><?= $siteTitle; ?> - <?= $title; ?></title>
    <meta name="description" content="<?= $description; ?> - <?= $siteTitle; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="author" href="https://atelierbramdehaan.nl">
    <?php if ($id == "siteIndex"): ?>
    <style><?php include "inc/critical.css.inc"; ?></style>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/frontpage.min.css?v2" media="print" onload="this.media='all'">
    <?php elseif ($type == "landing-page"): ?>
    <style><?php include "../inc/critical.css.inc"; ?></style>
    <?php else: ?>
    <style><?php include "../../inc/critical.css.inc"; ?></style>
    <?php endif ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css?v2" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css?v2"></noscript>
    <?php if ($id == "siteIndex"): ?>
    <script><?php include "inc/head-detect.js.inc"; ?></script>
    <?php elseif ($type == "landing-page"): ?>
    <script><?php include "../inc/head-detect.js.inc"; ?></script>
    <?php else: ?>
    <script><?php include "../../inc/head-detect.js.inc"; ?></script>
    <?php endif ?>
    <?php if ( ($env == "dev") && ($id == "siteIndex") ): ?><style><?php include "inc/grid-toggle.css.inc"; ?></style><?php endif ?>
    <?php if ( ($env == "dev") && ($type == "landing-page") ): ?><style><?php include "../inc/grid-toggle.css.inc"; ?></style><?php endif ?>
    <?php if ( ($env == "dev") && ($type == "project-page") ): ?><style><?php include "../../inc/grid-toggle.css.inc"; ?></style><?php endif ?>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e2d112">
  <meta name="msapplication-TileColor" content="#23241a">
  <meta name="theme-color" content="#ffffff">
  </head>
  <body class="id-<?= $id; ?> page-type-<?= $type; ?>">
    <?php if ($id == "siteIndex"): ?>
      <?php include "inc/icons.svg.inc"; ?>
    <?php elseif ($type == "landing-page"): ?>
      <?php include "../inc/icons.svg.inc"; ?>
    <?php else : include "../../inc/icons.svg.inc"; ?>
    <?php endif ?>
