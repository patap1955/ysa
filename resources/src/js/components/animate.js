document.addEventListener("DOMContentLoaded", () => {
    // Логическая функция вывода анимация
    // elem - массив блоков или отдельный блок для анимации
    // className - класс отвечающий за анимацию

    function animate(elem, className = "animate") {
        let windowCenter = (window.innerHeight / 1.1) + window.scrollY; // ширина экрана * 1.1 + высота на сколько просролили экран
        elem.forEach(el => {

            let observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        return entry.target.classList.add(className);
                    }
                });
            });

            let scrollOffset = el.offsetParent.offsetTop + (el.offsetHeight / 2);
            if (windowCenter >= scrollOffset) {
                observer.observe(el);
            }
        });
    }

    // animate__backInDown
    const aboutAsImgLeft = document.querySelectorAll('.about-as__img-left')
    const aboutAsImgRight = document.querySelectorAll('.about-as__img-right')
    const aboutAsRightText = document.querySelectorAll('.about-as__right-text')
    const aboutAsLeftText = document.querySelectorAll('.about-as__left-text')
    const servicesItemAnimateLeft = document.querySelectorAll('.servicesItemAnimateLeft')
    const servicesItemAnimateCenter = document.querySelectorAll('.servicesItemAnimateCenter')
    const servicesItemAnimateCenterBottom = document.querySelectorAll('.servicesItemAnimateCenterBottom')
    const servicesItemAnimateRight = document.querySelectorAll('.servicesItemAnimateRight')
    const contactsFon = document.querySelectorAll('.contactsFon')
    const map = document.querySelectorAll('.map')

    // console.log(aboutAsImgLeft)

    // if (aboutAsImgLeft) animate(aboutAsImgLeft, 'animate__rotateIn')
    if (aboutAsImgRight) animate(aboutAsImgRight, 'animate__rotateIn')
    if (aboutAsRightText) animate(aboutAsRightText, 'animate__zoomIn')
    if (aboutAsLeftText) animate(aboutAsLeftText, 'animate__zoomInUp')
    if (servicesItemAnimateLeft) animate(servicesItemAnimateLeft, 'animate__backInLeft')
    if (servicesItemAnimateCenter) animate(servicesItemAnimateCenter, 'animate__backInDown')
    if (servicesItemAnimateCenterBottom) animate(servicesItemAnimateCenterBottom, 'animate__backInUp')
    if (servicesItemAnimateRight) animate(servicesItemAnimateRight, 'animate__backInRight')
    if (contactsFon) animate(contactsFon, 'animate__backInLeft')
    if (map) animate(map, 'animate__zoomIn')

    window.addEventListener("scroll", () => {
        // if (aboutAsImgLeft) animate(aboutAsImgLeft, 'animate__rotateIn')
        if (aboutAsImgRight) animate(aboutAsImgRight, 'animate__rotateIn')
        if (aboutAsRightText) animate(aboutAsRightText, 'animate__zoomIn')
        if (aboutAsLeftText) animate(aboutAsLeftText, 'animate__zoomInUp')
        if (servicesItemAnimateLeft) animate(servicesItemAnimateLeft, 'animate__backInLeft')
        if (servicesItemAnimateCenter) animate(servicesItemAnimateCenter, 'animate__backInDown')
        if (servicesItemAnimateCenterBottom) animate(servicesItemAnimateCenterBottom, 'animate__backInUp')
        if (servicesItemAnimateRight) animate(servicesItemAnimateRight, 'animate__backInRight')
        if (contactsFon) animate(contactsFon, 'animate__backInLeft')
        if (map) animate(map, 'animate__zoomIn')
    });
});
