<?php
$title = 'Osteopathie de Vos';
$type = 'project-page';
$id = 'odv';
$description = 'Webdevelopment voor Osteopathie de Vos';
$prevLink = '../friends-of-light/';
$nextLink = '../steunpunt-vluchtelingen-de-bilt/';
$prevText = 'Friends of Light';
$nextText = 'Steunpunt Vluchtelingen de Bilt';
$picDesktop = "odv-screenshot-desktop_1825x981.jpg";
$picTablet =  "odv-screenshot-tablet_1536x2048.png";
$picPhone =   "odv-screenshot-phone_750x1334.png";
$picDesktopWidth  = "1825";
$picDesktopHeight = "980";
$picTabletWidth   = "1536";
$picTabletHeight  = "2048";
$picPhoneWidth    = "750";
$picPhoneHeight   = "1334";
$projectIntroText = "Professionele no-nonsense <a href='//osteopathierijswijk.nl/'>website</a> van de eenmans osteopathie beroepspraktijk van Robert de Vos waarbij de doelgroep - wanhopige mensen met chronische lichamelijke klachten (die vastgelopen zijn in de reguliere zorg) op zoek naar adequate hulp - snel en efficiënt haar weg kan vinden. De inhoud voor de website, zoals de blog sectie, was al aanwezig, het ontwerp is dus een ‘redesign’.";
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

