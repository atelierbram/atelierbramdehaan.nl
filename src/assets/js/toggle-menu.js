function toggleMenu() {
  document.querySelector('#menuBtn').addEventListener('click', function() {
    this.parentNode.classList.toggle('site-nav-open');
    (this).classList.toggle('menu-button-active');
  });
}
toggleMenu();
