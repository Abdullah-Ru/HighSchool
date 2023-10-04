document.addEventListener('scroll', function () {
    const nav = document.querySelector('.nav');
    if (window.scrollY > 70) {
        nav.classList.add('scrolled');
    }    else {
        nav.classList.remove('scrolled');

    }
})