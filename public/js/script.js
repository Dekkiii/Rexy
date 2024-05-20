
/*======= sticky navbar =======*/

/*======= sticky navbar =======*/
// var swiper = new Swiper ( ".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     loop: true, 
//     grabCursor: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-next",
//     },
// });

//     window.addEventListener('scroll', function() {
//     // current scroll position
//     const currentScrollPos = window.pageYOffset;

//     if (prevScrollPos > currentScrollPos) {
//         // user has scrolled up
//         document.querySelector('.navbar').classList.add('show');
//     } else {
//         // user has scrolled down
//         document.querySelector('.navbar').classList.remove('show');
//     }

//     // update previous scroll position
//     prevScrollPos = currentScrollPos;
//     });
//         ;

// const toggleIcon = document.querySelector('.toggle-icon');

// toggleIcon.addEventListener('click' , () => {
//     toggleIcon.classList.toggle('bx-sun');
//     document.body.classList.toggle('dark-mode');
// });

const nav = document.querySelector(".header");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if(lastScrollY < window.scrollY) {
        nav.classList.add("head--hidden");
        // console.log("+");
    } else {
        nav.classList.remove("head--hidden");
        // console.log("-");
    }

    lastScrollY = window.scrollY;
});