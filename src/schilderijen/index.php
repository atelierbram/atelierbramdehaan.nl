<?php
$title = 'schilderijen';
$type = 'landing-page';
$id = 'schilderijen';
$description = 'schilderijen - portfolio';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
// include 'inc/nav.inc';
?>
  <main class="main mt8 container">
    <article class="article article-intro">
    <h2 class="article-intro_title f5 f6-ns f7-m"><?= $title ?></h2>
    <p class="article-intro_text f3-ns f4-m">Schilderen is een proces, hier van idee naar schets naar uitwerking. Als in een collage worden (drie) variaties van vormen - elk met haar eigen schilderkunstige uitwerking - met elkaar verweven, in een contrastrijk idioom.</p>
    </article>

<section class="gallery mt8">
  <h2 class="screen-reader-text">Schilderijen</h2>
  <ul class="gallery_list l-modules">
    <?php include '../inc/modules/paintings/module-1.inc'; ?><?php include '../inc/modules/paintings/module-2.inc'; ?><?php include '../inc/modules/paintings/module-3.inc'; ?><?php include '../inc/modules/paintings/module-4.inc'; ?><?php include '../inc/modules/paintings/module-5.inc'; ?></ul>
</section>
  </main>

<?php include '../inc/footer.inc'; ?>

