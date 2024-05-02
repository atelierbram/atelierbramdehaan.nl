<?php
$title = 'Webdesign';
$type = 'index';
$id = 'siteIndex';
$description = 'webdesign - frontend development portfolio';
include 'inc/config.inc';
include 'inc/head.inc';
include 'inc/header.inc';
// include 'inc/nav.inc';
  ob_start('compress_page');
?>
<main class="main container">
  <article class="article article-intro">
    <h2 class="article-intro_title f5 f5-ns f5-m serif"><?= $title; ?></h2>
    <p class="article-intro_text">Webdesign is een vorm van toegepaste kunst dat in dienst staat van de gebruikservaring van de bezoeker: de essentie van de website hoort voor de bezoeker z.s.m. ondubbelzinnig duidelijk te&nbsp;zijn.</p><h3 class="f5 f5-ns f5-m serif">Ontwerp</h3><p>Vragen die door het ontwerp beantwoord zullen moeten&nbsp;worden:</p>
    <ul class="article-intro_text has-bullets"><li>Voor wie is de desbetreffende website&nbsp;bedoelt?</li><li>Welke boodschap moet duidelijk&nbsp;overkomen?</li><li>Wat betekent deze boodschap voor de visuele hiërarchie van de elementen in een&nbsp;webpagina?</li><li>Hoe stelt het ontwerp “het oog” in staat om deze lijn te&nbsp;volgen?</li></ul>
    <h3 class="f5 f5-ns f5-m serif">Uitwerking</h3>
    <p class="article-intro_text">Vragen ook die door de getrouwe uitwerking van het ontwerp –  web-bouw (web-development) –  beantwoord zullen moeten worden. Want web-bouw is een ambacht met als elementair gereedschap HTML, CSS&nbsp;en&nbsp;JavaScript <sup>*</sup>.</p>
    <h3 class="f5 f5-ns f5-m serif">Optimalisatie</h3>
    <p class="article-intro_text">Een website optimaliseren zodat het snel laadt –  is een sport die vanaf het allereerste begin van web-bouw in het achterhoofd zit, want een goed presterende snelle website is een essentiële kwaliteit voor de&nbsp;gebruikservaring.</p>
    <div class="cta mt8 mb10"><h3 class="cta_header f5 f5-ns f5-m serif">Wilt U ook een website toegesneden op&nbsp;maat van uw&nbsp;organisatie?</h3><p class="cta_text article-intro_text mt6">Neem <a href="../contact">contact</a> met mij op voor een&nbsp;kennismakingsgesprek.</p></div>
    <p class="small mt6">* Atelier Bram de Haan begint bij het bouwen van een website iedere keer weer met een leeg canvas: ik stel eer in een semantische HTML-markup met effectieve stijlen, z.v.m. gebruikmakend van “vanilla javaScript”, en zo weinig mogelijk gebruikmakend van zgn.&nbsp;“frameworks”.</p>
  </article>
</main>
<?php include 'inc/footer.inc'; ?>
<?php
function compress_page($buffer) {
$search = array(
"/ +/" => " ",
"/<!--\{(.*?)\}-->|<!--(.*?)-->|[\t\r\n]|<!--|-->|\/\/ <!--|\/\/ -->|<!\[CDATA\[|\/\/ \]\]>|\]\]>|\/\/\]\]>|\/\/<!\[CDATA\[/" => ""
);
$buffer = preg_replace(array_keys($search), array_values($search), $buffer);
return $buffer;
}

