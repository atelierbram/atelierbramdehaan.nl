<?php
$title = 'Ancestral Health';
$type = 'project-page';
$id = 'ahn';
$description = 'Webdevelopment voor Ancestral Health';
$prevLink = '../friends-of-light/';
$nextLink = '../massagebron/';
$prevText = 'Friends of Light';
$nextText = 'MassageBron';
$picDesktop = "ahn-screenshot-desktop_1900x945.jpg";
$picTablet =  "ahn-screenshot-tablet_1536x2048.jpg";
$picPhone =   "ahn-screenshot-phone_750x1334.jpg";
$picDesktopWidth  = "1900";
$picDesktopHeight = "945";
$picTabletWidth   = "1536";
$picTabletHeight  = "2048";
$picPhoneWidth    = "750";
$picPhoneHeight   = "1334";
$projectIntroText = "Het ontwerp voor de website van <a href='//ancestralhealth.nl/'>Ancestral Health Nederland</a> komt van de hand van Bouwyn. In het verlengde van dit fraaie ontwerp zijn door Atelier Bram de Haan nieuwe modules toegevoegd, voor o.m. de homepagina, en de nieuwe landing pagina’s voor symposia en presentaties.";
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

