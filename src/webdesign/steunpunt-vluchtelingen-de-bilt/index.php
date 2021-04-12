<?php
$title = 'Redesign Steunpunt Vluchtelingen De Bilt';
$type = 'project-page';
$id = 'steunpunt';
$description = 'Redesign van de website van Steunpunt Vluchtelingen De Bilt';
$prevLink = '../../';
$nextLink = '../mediatheek-steunpunt-vluchtelingen-de-bilt/';
$prevText = 'vorige';
$nextText = 'Mediatheek Steunpunt Vluchtelingen De Bilt';
$picDesktop = 'svdb-screenshot-desktop_1586x947.jpg';
$picTablet =  'svdb-screenshot-tablet_1536x2048.jpg';
$picPhone =   'svdb-screenshot-phone_750x1334.jpg';
$picDesktopWidth  = '1586';
$picDesktopHeight = '947';
$picTabletWidth   = '1536';
$picTabletHeight  = '2048';
$picPhoneWidth    = '750';
$picPhoneHeight   = '1334';
$projectIntroText = 'Met de overgang naar een nieuw CMS (WordPress) voor de website van Steunpunt Vluchtelingen De Bilt was het oportuun om de website een redesign te laten ondergaan. Er is kritisch gekeken naar de gebruikers interface zoals o.m. het navigatie menu. Uitgangspunt voor de redesign was een toegankelijke ervaring voor een reeks van gebruikers, waaronder een grote groep vrijwilligers die achter een inlogscherm voor hen relevante informatie kunnen vinden.';
include '../../inc/config.inc';
include '../../inc/head.inc';
include '../../inc/header.inc';
// include 'inc/nav.inc';
?>
  <main class='main mt8 container'>
    <?php include '../../inc/modules/intro.inc'; ?>
    <?php include '../../inc/modules/vs_display.inc'; ?>
  </main>
    <?php include '../../inc/modules/pagination.inc'; ?>
<?php include '../../inc/footer.inc'; ?>
