document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('main-header');

  function toggleHeaderBackground() {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  toggleHeaderBackground(); 
  window.addEventListener('scroll', toggleHeaderBackground);
});
