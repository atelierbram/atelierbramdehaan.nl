<?php
$sizeWidth = '65';
$sizeHeight = '75';
$titlePainting = "Slang-Glijbaan";
$imageDescription = "olieverf op m.d.f.-paneel";
$projectDescription = "Schilderij van Bram de Haan";
?><li class="gallery_module mt8">
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>schilderijen/slang-glijbaan/"><img data-src="<?= $assetPath ?>img/pics/paintings/slang-glijbaan_Bram-de-Haan_570x720.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 288 364'%3E%3Crect width='288' height='364' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="288" height="364" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_header">
    <h3 class="gallery_module_header_title f2"><?= $titlePainting ?></h3>
    <p class="f2"><?= $imageDescription; ?></p>
    <p class="f2"><?= $sizeWidth; ?> &times; <?= $sizeHeight; ?> cm</p>
    <p class="f2">2001</p>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li>
