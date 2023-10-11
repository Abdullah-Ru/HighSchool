document.addEventListener('scroll', function () {
    const nav = document.querySelector('.nav');
    // كود أذا نزل بل الماوس إلى هاذي القيمة يقوم بالأوامر في الأسفل
    if (window.scrollY > 100) {
        nav.classList.add('scrolled');
        // يظهر تنسيق السكرولد ويكون فيه تغير خلفية الناف بار
    }    else {
        // إزالة التنسيق
        nav.classList.remove('scrolled');

    }
})