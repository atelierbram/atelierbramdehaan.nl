<?php
$category = "ontwerp";
$attribute = "grafische vormgeving";
$projectName = "Atelier Bram de Haan";
$imageDescription = "onderdeel van de visuele indentiteit van Atelier Bram de Haan";
$projectDescription = "logo van Atelier Bram de Haan";
?><li class="gallery_module mt8">
  <div class="gallery_module_header">
    <!-- <p class="f2"></ ?= $category ?></p> -->
    <!-- <p class="f2"></ ?= $attribute ?></p> -->
    <h3 class="gallery_module_header_title f2"><?= $projectName ?></h3>
  </div>
  <div class="gallery_module_media"><a href="<?= $rootUrl; ?>logos/atelier-bram-de-haan/"><img data-src="<?= $assetPath ?>img/svg/abdh-redesign-logo-7_1200x800.svg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 192 128'%3E%3Crect width='192' height='128' fill='%23b5b0a6'/%3E%3C/svg%3E" alt="<?= $imageDescription; ?>" width="192" height="128" class="gallery_module_image"></a>
  </div>
  <div class="gallery_module_content">
    <p class="screen-reader-text"><?= $projectDescription ?></p>
  </div>
</li>

