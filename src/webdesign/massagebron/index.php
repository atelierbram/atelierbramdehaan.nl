<?php
$title = 'MassageBron';
$type = 'project-page';
$id = 'ahn';
$description = 'Webdevelopment voor MassageBron';
$prevLink = '../ancestral-health/';
$nextLink = '../atelierbram/';
$prevText = 'Ancestral Health';
$nextText = 'Atelierbram';
$picDesktop = "massagebron-screenshot-desktop_1008x600.jpg";
$picTablet =  "massagebron-screenshot-tablet_780x1040.jpg";
$picPhone =   "massagebron-screenshot-phone_376x671.jpg";
$picDesktopWidth  = "1008";
$picDesktopHeight = "600";
$picTabletWidth   = "780";
$picTabletHeight  = "1040";
$picPhoneWidth    = "376";
$picPhoneHeight   = "671";
$projectIntroText = "Het logo voor MassageBron is ontworpen. De webshop was gebouwd op het CMS Magento.";
include '../../inc/config.inc';
include '../../inc/head.inc';
include '../../inc/header.inc';
// include 'inc/nav.inc';
// https://web.archive.org/web/20140701203529/http://www.massagebron.nl/
?>
  <main class="main mt8 container">
    <?php include '../../inc/modules/intro.inc'; ?>
    <?php include '../../inc/modules/vs_display.inc'; ?> 
  </main>
    <?php include '../../inc/modules/pagination.inc'; ?> 
<?php include '../../inc/footer.inc'; ?>

