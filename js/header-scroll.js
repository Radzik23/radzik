window.addEventListener('scroll', function () {
    const header = documenet.querySelector('.site-header');
    if (this.window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});