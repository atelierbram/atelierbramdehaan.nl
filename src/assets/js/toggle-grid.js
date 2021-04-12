function toggleGrid() {
  document.querySelector('#gridToggle').addEventListener('click', function() {
    document.querySelector('#page').classList.toggle('is-grid-toggled');
    (this).classList.toggle('grid-toggle-active');
  });
}
toggleGrid();
function toggleMenu() {
  document.querySelector('#menuBtn').addEventListener('click', function() {
    this.parentNode.classList.toggle('site-nav-open');
    (this).classList.toggle('menu-button-active');
  });
}
toggleMenu();
