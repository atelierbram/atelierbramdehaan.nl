function toggleGrid() {
  document.querySelector('#gridToggle').addEventListener('click', function() {
    document.querySelector('#page').classList.toggle('is-grid-toggled');
    (this).classList.toggle('grid-toggle-active');
  });
}
toggleGrid();
