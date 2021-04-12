<?php
$sizeWidth = '';
$sizeHeight = '';
$titlePainting = "Atelierbram – open source projecten";
$imageDescription = "olieverf op m.d.f.-paneel";
$projectDescription = "Schilderij van Bram de Haan";
?><li class="gallery_module mt8">
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>schilderijen/"><img data-src="<?= $assetPath ?>img/pics/paintings/atelierbram-gallery_900x600.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='288' height='192' viewBox='0 0 288 192'%3E%3Crect width='288' height='192' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="288" height="192" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_header">
    <h3 class="gallery_module_header_title f2"><?= $titlePainting ?></h3>
    <p class="f2"><?= $imageDescription; ?></p>
    <p class="f2"><?= $sizeWidth; ?><?= $sizeHeight; ?> cm</p>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li>
