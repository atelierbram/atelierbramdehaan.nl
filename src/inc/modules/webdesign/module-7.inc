<?php
$category = "ontwerp";
$attribute = "ontwikkeling";
$projectName = "Osteopathie de Vos";
$imageDescription = "header van osteopathierijswijk.nl";
$projectDescription = "website met blog van Osteopathie de Vos op osteopathierijswijk.nl";
?><li class="gallery_module mt8">
  <div class="gallery_module_header">
    <p class="f2"><?= $category ?> - <?= $attribute ?></p>
    <h3 class="gallery_module_header_title f2"><?= $projectName ?></h3>
  </div>
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>webdesign/osteopathie-de-vos/"><img data-src="<?= $assetPath ?>img/pics/webdesign/osteopathie-de-vos-gallery_900x600.jpg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='288' height='192' viewBox='0 0 288 192'%3E%3Crect width='288' height='192' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="288" height="192" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li>
