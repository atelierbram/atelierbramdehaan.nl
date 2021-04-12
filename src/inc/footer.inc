  <footer class="site-footer">
    <ul class="site-footer_list f1"><li>&copy; <a href="<?= $rootUrl; ?>">Atelier Bram de Haan</a></li><li><a href="//github.com/atelierbram/">GitHub</a></li><li><a href="//twitter.com/atelierbram/">Twitter</a></li><li class="email"><a href="mailto:info@atelierbramdehaan.nl">info@atelierbramdehaan.nl</a></li><?php if ($env == "dev"): ?><li><button id="gridToggle" class="grid-toggle"><span class="grid-show">grid</span><span class="grid-hide">verberg grid</span></button></li><?php endif; ?></ul>
  </footer>
</div><!-- /#page.site> -->
<?php if ( ($env == "dev") && ($id == "siteIndex") ): ?>
<script id="toggleGridJs"><?php include "inc/toggle-grid.js.inc" ?></script>
<?php elseif ($env == "dev") : ?>
<script id="toggleGridJs"><?php include "../inc/toggle-grid.js.inc" ?></script>
<?php endif; ?>
<?php if ($id == "siteIndex"): ?>
<script id="themeSwitchJs"><?php include "inc/theme-switch-with-local-storage.js.inc" ?></script>
<?php else: ?>
<script id="themeSwitchJs"><?php include "../inc/theme-switch-with-local-storage.js.inc" ?></script>
<?php endif; ?>
  </body>
</html>

