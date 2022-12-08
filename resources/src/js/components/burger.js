(function() {
  const burger = document.querySelectorAll(".burger");
  const linkMenus = document.querySelectorAll(".nav-link")
    const menuMobile = document.querySelectorAll('.menu-mobile')
    const navListMobile = document.querySelectorAll('.nav-list__mobile')
    burger.forEach((val) => {
        val.addEventListener('click', () => {
            document.querySelector(".header").classList.toggle("active");
            document.querySelector('.header__info-phone').classList.toggle("active");
            document.querySelector('.fixedMenu__logo').classList.toggle("active")
            document.querySelector('.fixedMenu__phone').classList.toggle("active")
            menuMobile.forEach(((val) => {
                val.classList.toggle("active")
            }))
            navListMobile.forEach(((val) => {
                val.classList.toggle("active")
            }))
            // document.querySelector('.menu-mobile').classList.toggle("active");
            // document.querySelector('.nav-list__mobile').classList.toggle("active");
            document.querySelector(".burger").classList.toggle("active");
            document.querySelector("body").classList.toggle("lock");
            const burgerSpan = document.querySelectorAll(".burger-span");
            burgerSpan.forEach((val) => {
                val.classList.toggle("active");
            });
        })
    })
  // burger.addEventListener("click", () => {
  //   document.querySelector(".header").classList.toggle("active");
  //   document.querySelector('.header__info-phone').classList.toggle("active");
  //   document.querySelector('.menu-mobile').classList.toggle("active");
  //   document.querySelector('.nav-list__mobile').classList.toggle("active");
  //   document.querySelector(".burger").classList.toggle("active");
  //   document.querySelector("body").classList.toggle("lock");
  //   // document.querySelector(".main").classList.toggle("active");
  //   const burgerSpan = document.querySelectorAll(".burger-span");
  //   burgerSpan.forEach((val) => {
  //     val.classList.toggle("active");
  //   });
  // });
  linkMenus.forEach((val) => {
      val.addEventListener("click", () => {
          document.querySelector("body").classList.remove("lock");
          document.querySelector(".burger").classList.remove("active");
          document.querySelector(".header").classList.remove("active");
          document.querySelector('.menu-mobile').classList.remove("active");
          document.querySelector('.header__info-phone').classList.remove("active");
          document.querySelector('.nav-list__mobile').classList.remove("active");
          document.querySelector('.fixedMenu__logo').classList.remove("active")
          document.querySelector('.fixedMenu__phone').classList.remove("active")
          const burgerSpan = document.querySelectorAll(".burger-span");
          burgerSpan.forEach((val) => {
              val.classList.remove("active");
          });
          menuMobile.forEach((val) => {
              val.classList.remove("active")
          })
      })
  })
})();
