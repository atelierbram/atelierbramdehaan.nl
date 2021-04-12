<?php
$title = 'webdesign - frontend development - projecten';
$type = 'landing-page';
$id = 'webdesign';
$description = 'webdesign - frontend development portfolio';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
// include 'inc/nav.inc';
?>
  <main class="main mt8 container">
    <header><h2 class="screen-reader-text"><?= $title ?></h2></header>
      <section class="gallery mt8">
        <h2 class="screen-reader-text">Projecten</h2>
        <ul class="gallery_list l-modules">
          <?php include '../inc/modules/webdesign/module-7.inc'; ?><?php include '../inc/modules/webdesign/module-1.inc'; ?><?php include '../inc/modules/webdesign/module-2.inc'; ?><?php include '../inc/modules/webdesign/module-3.inc'; ?><?php include '../inc/modules/webdesign/module-4.inc'; ?><?php include '../inc/modules/webdesign/module-5.inc'; ?><?php include '../inc/modules/webdesign/module-6.inc'; ?></ul>
      </section>
  </main>
<?php include '../inc/footer.inc'; ?>
