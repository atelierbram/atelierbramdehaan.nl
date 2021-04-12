<?php
$title = 'logo’s - grafische vormgeving';
$type = 'landing-page';
$id = 'logos';
$description = 'logo’s - grafische vormgeving portfolio';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
// include 'inc/nav.inc';
?>
  <main class="main mt8 container">
    <!-- <article class="article article&#45;intro"> -->
    <!-- <h2 class="article&#45;intro_title f5 f6&#45;ns f7&#45;m">< ?= $title ?></h2> -->
    <!-- </article> -->
<section class="gallery mt8">
  <h2 class="screen-reader-text"><?= $title ?></h2>
  <ul class="gallery_list l-modules">
 <?php include '../inc/modules/logos/module-5.inc'; ?><?php include '../inc/modules/logos/module-1.inc'; ?><?php include '../inc/modules/logos/module-2.inc'; ?><?php include '../inc/modules/logos/module-3.inc'; ?><?php include '../inc/modules/logos/module-4.inc'; ?><?php // include '../inc/modules/logos/module-6.inc'; ?></ul>
</section>
  </main>

<?php include '../inc/footer.inc'; ?>

