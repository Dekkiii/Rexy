const nav = document.querySelector(".header");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if(lastScrollY < window.scrollY) {
        nav.classList.add("head--hidden");
        console.log("+");
    } else {
        nav.classList.remove("head--hidden");
        console.log("-");
    }

    lastScrollY = window.scrollY;
});