(() => {
    const navbar = document.querySelector(".fixedMenuTop");

    const mQuery = window.matchMedia('(min-width: 769px)')

    if (mQuery.matches) {
        if (window.scrollY >= 100) {
            scrollMenu();
        }

        window.addEventListener("scroll", e => {
            scrollMenu();
        })
    }

    function scrollMenu () {
        if(scrollY > 200) {
            navbar.classList.add("navbar_scrolled");

        } else {
            navbar.classList.remove("navbar_scrolled");
        }
    }
})()
