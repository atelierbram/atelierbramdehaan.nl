<?php
$category = "ontwerp";
$attribute = "grafische vormgeving";
$projectName = "Osteopathie de Vos";
$imageDescription = "logo onderdeel van de visuele indentiteit van Osteopathie de Vos";
$projectDescription = "logo van Osteopathie de Vos";
?><li class="gallery_module mt8">
  <div class="gallery_module_header">
    <!-- <p class="f2">< ?= $category ?></p> -->
    <!-- <p class="f2">< ?= $attribute ?></p> -->
    <h3 class="gallery_module_header_title f2"><?= $projectName ?></h3>
  </div>
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>logos/osteopathie-de-vos/"><img data-src="<?= $assetPath ?>img/svg/odv-name-logo-notosans-condensed-v7-outline_170x96.svg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 192 108'%3E%3Crect width='192' height='108' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="192" height="108" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li>

