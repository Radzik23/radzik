document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeBtn = document.getElementById('close-menu');

  const isMobile = () => window.innerWidth <= 1201;

  burger.addEventListener('click', () => {
    mobileMenu.classList.add('open');
    if (isMobile()) {
      burger.style.display = 'none';
    }
  });

  closeBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    if (isMobile()) {
      burger.style.display = 'flex';
    }
  });

  window.addEventListener('resize', () => {
    if (!isMobile()) {
      mobileMenu.classList.remove('open');
      burger.style.display = 'none';
    } else {
      burger.style.display = 'flex';
    }
  });
});
