<?php
$sizeWidth = '65';
$sizeHeight = '150';
$titlePainting = "Zeepaard-Ruiterstandbeeld";
$imageDescription = "olieverf op m.d.f.-paneel";
$projectDescription = "Schilderij van Bram de Haan";
?><li class="gallery_module mt8">
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>schilderijen/zeepaard-ruiterstandbeeld/"><img data-src="<?= $assetPath; ?>img/pics/paintings/zeepaard-ruiterstandbeeld_Bram-de-Haan_432x876.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='288' height='584' viewBox='0 0 288 584'%3E%3Crect width='288' height='584' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="288" height="584" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_header">
    <h3 class="gallery_module_header_title f2"><?= $titlePainting ?></h3>
        <p class="f2"><?= $imageDescription; ?></p>
    <p class="f2"><?= $sizeWidth; ?> &times; <?= $sizeHeight; ?> cm</p>
    <p class="f2">2002</p>
  </div>
  <div class="gallery_module_content">
    <p><?= $projectDescription ?></p>
  </div>
</li>
