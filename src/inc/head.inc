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
    <link rel="stylesheet" href="<?= $assetPath; ?>css/frontpage.min.css?v1" media="print" onload="this.media='all'">
    <?php elseif ($type == "landing-page"): ?>
    <style><?php include "../inc/critical.css.inc"; ?></style>
    <?php else: ?>
    <style><?php include "../../inc/critical.css.inc"; ?></style>
    <?php endif ?>
    <link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="<?= $assetPath; ?>css/style.min.css"></noscript>
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
  </head>
  <body class="id-<?= $id; ?> page-type-<?= $type; ?>">
    <?php if ($id == "siteIndex"): ?>
      <?php include "inc/icons.svg.inc"; ?>
    <?php elseif ($type == "landing-page"): ?>
      <?php include "../inc/icons.svg.inc"; ?>
    <?php else : include "../../inc/icons.svg.inc"; ?>
    <?php endif ?>
