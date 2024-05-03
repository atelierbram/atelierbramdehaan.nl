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
    <div class="language-switcher"><a href="#0" class="language-switcher_link lsl lsl-nl" id="lslNl">EN</a><span class="divider">&nbsp;/&nbsp;</span><a href="#0" class="language-switcher_link lsl lsl-en" id="lslEn">NL</a></div>
    <div class="article_nl en-hidden" id="articleNL">
      <h2 class="article-intro_title f5 f5-ns f5-m serif"><?= $title; ?></h2>
      <p class="article-intro_text">Webdesign is een vorm van toegepaste kunst dat in dienst staat van de gebruikservaring: de essentie van de website hoort voor de bezoeker z.s.m. ondubbelzinnig duidelijk te&nbsp;zijn.</p><h3 class="f5 f5-ns f5-m serif">Ontwerp</h3><p>Vragen die door het ontwerp beantwoord zullen moeten&nbsp;worden:</p>
      <ul class="article-intro_text has-bullets"><li>Voor wie is de desbetreffende website&nbsp;bedoelt?</li><li>Welke boodschap moet duidelijk&nbsp;overkomen?</li><li>Wat betekent deze boodschap voor de visuele hiërarchie van de elementen in een&nbsp;webpagina?</li><li>Hoe stelt het ontwerp “het oog” in staat om deze lijn te&nbsp;volgen?</li></ul>
      <h3 class="f5 f5-ns f5-m serif">Uitwerking</h3>
      <p class="article-intro_text">Vragen ook die door de getrouwe uitwerking van het ontwerp –  web-bouw (web-development) –  beantwoord zullen moeten worden. Want web-bouw is een ambacht met als elementair gereedschap HTML, CSS&nbsp;en&nbsp;JavaScript <sup>*</sup>.</p>
      <h3 class="f5 f5-ns f5-m serif">Optimalisatie</h3>
      <p class="article-intro_text">Een website optimaliseren zodat het snel laadt –  is een activiteit die vanaf het allereerste begin van web-bouw in m’n achterhoofd zit, want een goed presterende snelle website is een essentiële kwaliteit voor de&nbsp;gebruikservaring.</p>
      <div class="cta mt8 mb10"><h3 class="cta_header f5 f5-ns f5-m serif">Wilt U ook een website toegesneden op&nbsp;maat van uw&nbsp;organisatie?</h3><p class="cta_text article-intro_text">Neem <a href="../contact">contact</a> met mij op voor een&nbsp;kennismakingsgesprek.</p></div>
      <p class="small mt6">* Atelier Bram de Haan begint bij het bouwen van een website iedere keer weer met een leeg canvas: ik stel eer in een semantische HTML-markup met effectieve stijlen, z.v.m. gebruikmakend van “vanilla javaScript”, en zo weinig mogelijk gebruikmakend van zgn.&nbsp;“frameworks”.</p>
    </div>
    <div class="article_en nl-hidden" lang="en" id="articleEN">
      <h2 class="article-intro_title f5 f5-ns f5-m serif"><?= $title; ?></h2>
      <p class="article-intro_text">Webdesign is a form of applied art that serves the user experience: the essence of the website should be unambiguously clear to the visitor as soon as&nbsp;possible.</p><h3 class="f5 f5-ns f5-m serif">Design</h3><p>Questions that will have to be answered by the&nbsp;design:</p>
      <ul class="article-intro_text has-bullets"><li>Who is the website in question intended&nbsp;for?</li><li>What message should come across&nbsp;clearly?</li><li>What does this message mean for the visual hierarchy of the elements in a web page?</li><li>How does the design enable “the eye” to follow this&nbsp;line?</li></ul>
      <h3 class="f5 f5-ns f5-m serif">Elaboration</h3>
      <p class="article-intro_text">Questions that will also have to be answered through the faithful elaboration of the design – web construction (web development). Because web building is a craft with HTML, CSS and JavaScript as basic&nbsp;tools.<sup>*</sup>.</p>
      <h3 class="f5 f5-ns f5-m serif">Optimization</h3>
      <p class="article-intro_text">Optimizing a website so that it loads quickly is an activity that is in the back of my mind from the very beginning of web building, because a well-performing fast website is an essential quality for the user&nbsp;experience.</p>
      <div class="cta mt8 mb10"><h3 class="cta_header f5 f5-ns f5-m serif">Would you also like to have a website tailored to your&nbsp;organization?</h3><p class="cta_text article-intro_text"><a href="../contact">Contact me</a> for a&nbsp;introductory&nbsp;meeting.</p></div>
      <p class="small mt6">* Atelier Bram de Haan always starts with a blank canvas when building a website: I pride myself on a semantic HTML markup with effective styles, as soon as possible. Using “vanilla JavaScript”, and using so-called “frameworks” as little as&nbsp;possible.</p>
    </div>
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

