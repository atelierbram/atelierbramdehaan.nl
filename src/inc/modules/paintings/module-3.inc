<?php
$sizeWidth = '65';
$sizeHeight = '55';
$titlePainting = "Baviaan-Auto";
$imageDescription = "olieverf op m.d.f.-paneel";
$projectDescription = "Schilderij van Bram de Haan";
?><li class="gallery_module mt8">
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>schilderijen/baviaan-auto/"><img data-src="<?= $assetPath; ?>img/pics/paintings/baviaan-auto_Bram-de-Haan_720x570.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='288' height='228' viewBox='0 0 288 228'%3E%3Crect width='288' height='228' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="288" height="228" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_header">
    <h3 class="gallery_module_header_title f2"><?= $titlePainting ?></h3>
    <p class="f2"><?= $imageDescription; ?></p>
    <p class="f2"><?= $sizeWidth; ?> &times; <?= $sizeHeight; ?> cm</p>
    <p class="f2">2003</p>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li> 
