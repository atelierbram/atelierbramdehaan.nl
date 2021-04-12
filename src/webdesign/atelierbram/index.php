<?php
$title = 'Atelierbram';
$type = 'project-page';
$id = 'ahn';
$description = 'Webdevelopment voor Atelierbram';
$prevLink = '../ancestral-health/';
$nextLink = '../../';
$prevText = 'Ancestral Health';
$nextText = 'Volgende';
$picDesktop = "atelierbram-screenshot-desktop_1900x945.png";
$picTablet =  "atelierbram-screenshot-tablet_1536x2048.jpg";
$picPhone =   "atelierbram-screenshot-phone_750x1334.jpg";
$picDesktopWidth  = "1900";
$picDesktopHeight = "945";
$picTabletWidth   = "1536";
$picTabletHeight  = "2048";
$picPhoneWidth    = "750";
$picPhoneHeight   = "1334";
$projectIntroText = "Verzameling van open source projecten <a href='https://atelierbram.github.io/'>onder de naam “Atelierbram” op Github</a>.";
include '../../inc/config.inc';
include '../../inc/head.inc';
include '../../inc/header.inc';
// include 'inc/nav.inc';
?>
  <main class="main mt8 container">
    <?php include '../../inc/modules/intro.inc'; ?>
    <?php include '../../inc/modules/vs_display.inc'; ?> 
  </main>
    <?php include '../../inc/modules/pagination.inc'; ?> 
<?php include '../../inc/footer.inc'; ?>

