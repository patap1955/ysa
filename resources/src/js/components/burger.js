// (function () {
//   const burger = document.querySelector(".burger");
//   burger.addEventListener("click", function () {
//     // document.getElementById("header").classList.toggle("header-burger");
//     document.querySelector(".nav").classList.toggle("active");
//     document.querySelector(".burger").classList.toggle("active");
//     document.querySelector("body").classList.toggle("lock");
//     // document.querySelector('.nav__phone').classList.toggle('active');
//     document.querySelector(".main").classList.toggle("active");
//   });
// })();
(function() {
  const burger = document.querySelector(".burger");
  const linkMenus = document.querySelectorAll(".nav-link")
  burger.addEventListener("click", () => {
    document.querySelector(".header").classList.toggle("active");
    document.querySelector('.header__info-phone').classList.toggle("active");
    document.querySelector('.menu-mobile').classList.toggle("active");
    document.querySelector('.nav-list__mobile').classList.toggle("active");
    document.querySelector(".burger").classList.toggle("active");
    document.querySelector("body").classList.toggle("lock");
    // document.querySelector(".main").classList.toggle("active");
    const burgerSpan = document.querySelectorAll(".burger-span");
    burgerSpan.forEach((val) => {
      val.classList.toggle("active");
    });
  });
  linkMenus.forEach((val) => {
      val.addEventListener("click", () => {
          document.querySelector("body").classList.remove("lock");
          document.querySelector(".burger").classList.remove("active");
          document.querySelector(".header").classList.remove("active");
          document.querySelector('.menu-mobile').classList.remove("active");
          document.querySelector('.header__info-phone').classList.remove("active");
          document.querySelector('.nav-list__mobile').classList.remove("active");
          const burgerSpan = document.querySelectorAll(".burger-span");
          burgerSpan.forEach((val) => {
              val.classList.remove("active");
          });
      })
  })
})();
