<?php
$title = 'Friends of Light';
$type = 'project-page';
$id = 'fol';
$description = 'Webdevelopment voor Friends of Light';
$prevLink = '../mediatheek-steunpunt-vluchtelingen-de-bilt/';
$nextLink = '../ancestral-health/';
$prevText = 'Mediatheek Steunpunt Vluchtelingen De Bilt';
$nextText = 'Ancestral Health';
include '../../inc/config.inc';
include '../../inc/head.inc';
include '../../inc/header.inc';
$picDesktop = "fol-screenshot-desktop_1476x882.png";
$picTablet =  "fol-screenshot-tablet_1536x2048.jpg";
$picPhone =   "fol-screenshot-phone_750x1334.jpg";
$picDesktopWidth  = "1476";
$picDesktopHeight = "882";
$picTabletWidth   = "1536";
$picTabletHeight  = "2048";
$picPhoneWidth    = "750";
$picPhoneHeight   = "1334";
$projectIntroText = "De huisstijl van <a href='//friendsoflight.net'>Friends of Light</a> is een ontwerp van <a href='//sannebeeren.nl/werk/f-o-l/'>grafisch ontwerper Sanne Beeren</a>. Karakteristiek voor het werk van Sanne Beeren is de minimalistische elegantie waarmee typografie het ontwerp draagt – op een schijnbaar eenvoudige maar vanzelfsprekende wijze – de inhoud over het voetlicht brengend. <br>Sanne Beerens ontwerp voor de website van friends of light is zo getrouw mogelijk omgezet in HTML, CSS en javaScript.";
// include 'inc/nav.inc';
?>
  <main class="main mt8 container">
    <?php include '../../inc/modules/intro.inc'; ?>
    <?php include '../../inc/modules/vs_display.inc'; ?>
  </main>
    <?php include '../../inc/modules/pagination.inc'; ?>
<?php include '../../inc/footer.inc'; ?>
