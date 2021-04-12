<?php
$title = 'Zeepaard-Ruiterstandbeeld';
$type = 'project-page';
$id = 'schilderijen';
$description = 'schilderij - Zeepaard-Ruiterstandbeeld door Bram de Haan';
include '../../inc/config.inc';
include '../../inc/head.inc';
include '../../inc/header.inc';
// include 'inc/nav.inc';
?>

<main class="main mt8 container">
<?php
$sizeWidth = '65';
$sizeHeight = '150';
$titlePainting = "Zeepaard-Ruiterstandbeeld";
$imageDescription = "olieverf op m.d.f.-paneel";
$projectDescription = "Schilderij van Bram de Haan";
?><div class="gallery_module mt8">
  <div class="gallery_module_media gallery_module_media-painting"><img data-src="<?= $assetPath ?>img/pics/paintings/zeepaard-ruiterstandbeeld_Bram-de-Haan_432x876.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 432 876'%3E%3Crect width='432' height='876' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="432" height="876" class="gallery_module_image-painting"></div>
  <div class="gallery_module_header">
    <h3 class="gallery_module_header_title f2"><?= $titlePainting ?></h3>
    <p class="f2"><?= $imageDescription; ?></p>
    <p class="f2"><?= $sizeWidth; ?> &times; <?= $sizeHeight; ?> cm</p>
    <p class="f2">2002</p>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</div>
</main>

<?php include '../../inc/footer.inc'; ?>

