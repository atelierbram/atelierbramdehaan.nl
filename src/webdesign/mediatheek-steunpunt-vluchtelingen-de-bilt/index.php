<?php
$title = 'Mediatheek Steunpunt Vluchtelingen De Bilt';
$type = 'project-page';
$id = 'steunpunt';
$description = 'Mediatheek van de website van Steunpunt Vluchtelingen De Bilt';
$prevLink = '../steunpunt-vluchtelingen-de-bilt/';
$nextLink = '../friends-of-light/';
$prevText = 'Steunpunt Vluchtelingen De Bilt';
$nextText = 'Friends of Light';
$picDesktop = "mediatheek-screenshot-desktop_1448x947.jpg";
$picTablet =  "mediatheek-screenshot-tablet_1536x2048.jpg";
$picPhone =   "mediatheek-screenshot-phone_750x1334.jpg";
$picDesktopWidth  = "1448";
$picDesktopHeight = "947";
$picTabletWidth   = "1536";
$picTabletHeight  = "2048";
$picPhoneWidth    = "750";
$picPhoneHeight   = "1334";
$projectIntroText = "Steunpunt Vluchtelingen De Bilt had behoefte aan een <a href='https://mediatheek.steunpuntvluchtelingendebilt.nl'>mediatheek</a> om te voorzien in lesmateriaal voor taalcoaches en nieuwe Nederlanders. Om een intuïtieve manier van navigeren te stimuleren is gekozen voor een zoeksysteem met filter functie. Naast de zoekfunctie helpen iconen met intuïtief navigeren op niveau, vaardigheid of thema.";
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
