<?php
$title = 'contact';
$type = 'landing-page';
$id = 'contact';
$description = 'webdesign - frontend development portfolio';
include '../inc/config.inc';
include '../inc/head.inc';
include '../inc/header.inc';
// include 'inc/nav.inc';
  ob_start('compress_page');
?>
  <main class="main container">
    <article class="article article-intro">
    <h2 class="article-intro_title f4 f5-ns f6-m"><?= $title ?></h2>
      <div id="hcard-Bram-de-Haan" class="vcard article-intro_text f2 f3-ns f4-m"><a class="url fn n screen-reader-text" href="https://atelierbramdehaan.nl/"><span class="given-name">Bram</span> <span class="family-name">de Haan</span></a><div class="org">Atelier Bram de Haan</div><a class="email" href="mailto:info@atelierbramdehaan.nl">info@atelierbramdehaan.nl</a><div class="adr"><div class="street-address">Geertgen tot <abbr class="data-tooltip" data-tooltip="Sint">St.</abbr> Janslaan 12</div><span class="postal-code">3723 CK</span> <span class="locality">Bilthoven</span><br><span class="region screen-reader-text">Utrecht</span><span class="country-name screen-reader-text">Nederland</span></div></div>
    </article>
  </main>
<?php include '../inc/footer.inc'; ?>
<?php
function compress_page($buffer) {
$search = array(
    "/ +/" => " ",
    "/<!--\{(.*?)\}-->|<!--(.*?)-->|[\t\r\n]|<!--|-->|\/\/ <!--|\/\/ -->|<!\[CDATA\[|\/\/ \]\]>|\]\]>|\/\/\]\]>|\/\/<!\[CDATA\[/" => ""
);
$buffer = preg_replace(array_keys($search), array_values($search), $buffer);
return $buffer;
}

