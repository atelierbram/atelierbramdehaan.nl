<?php ?><section class="vs-display mt9">
  <h2 class="screen-reader-text"><?= $title; ?> is goed leesbaar op verschillende formaten beeldscherm</h2>
  <div class="vs-display_desktop">
    <div class="vs-display_header">
      <h3 class="vs-display_header_title f2">desktop / laptop</h3>
    </div>
    <div class="vs-display_image vs-display_desktop_image">
    <img data-src="<?= $assetPath ?>img/pics/screenshots/<?= $picDesktop ?>" src="<?= $img ?>" alt="screenshot <?= $title; ?> van desktop" class="vs-display_image_img vs-display_desktop_image_img" width="<?= $picDesktopWidth; ?>" height="<?= $picDesktopHeight; ?>" />
    </div>
  </div>
<div class="row vs-display_mobile">
  <div class="vs-display_tablet mt8">
    <div class="vs-display_header">
      <h3 class="vs-display_header_title f2">tablet</h3>
    </div>
    <div class="vs-display_image vs-display_tablet_image">
    <img data-src="<?= $assetPath ?>img/pics/screenshots/<?= $picTablet ?>" src="<?= $img ?>" alt="screenshot <?= $title; ?> van tablet" class="vs-display_image_img vs-display_tablet_image_img" width="<?= $picTabletWidth; ?>" height="<?= $picTabletHeight; ?>" />
    </div>
  </div>
  <div class="vs-display_phone mt8">
    <div class="vs-display_header">
      <h3 class="vs-display_header_title f2">phone</h3>
    </div>
    <div class="vs-display_image vs-display_phone_image">
    <img data-src="<?= $assetPath ?>img/pics/screenshots/<?= $picPhone ?>" src="<?= $img ?>" alt="screenshot <?= $title; ?> van smartphone" class="vs-display_image_img vs-display_phone_image_img" width="<?= $picTabletWidth; ?>" height="<?= $picTabletHeight; ?>" />
    </div>
  </div>
</div>

</section>
