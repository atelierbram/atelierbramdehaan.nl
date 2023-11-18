<nav class="site&#45;nav" id="siteNav">
  <button class="menu-button" id="menuBtn"><span class="screen-reader-text">menu</span>
    <svg class="svg-menu" width="42" height="36" fill="#454f5f"><use xlink:href="#shape-menu" /></svg></button>
  <ul class="site-nav_list" id="siteNavList">
    <li class='nav-item < ?php if ($id == "webdesign") { echo "nav-item-current"; } ?>'><a href="< ?= $rootUrl;?>webdesign/">Webdesign</a></li>
    <li class='nav-item <?php // if ($id == "schilderijen") { echo "nav-item-current"; } ?>'><a href="< ?= $rootUrl;?>schilderijen/">Schilderijen</a></li>
    <li class='nav-item < ?php if ($id == "logos") { echo "nav-item-current"; } ?>'><a href="< ?= $rootUrl;?>logos/">Logo’s</a></li>
    <li class='nav-item <?php // if ($id == "bram") { echo "nav-item-current"; } ?>'><a href="< ?= $rootUrl;?>bram/">Bram</a></li>
    <li class='nav-item <?php // if ($id == "contact") { echo "nav-item-current"; } ?>'><a href="< ?= $rootUrl;?>contact/">Contact</a></li>
  </ul>
</nav>

