var nav = document.querySelector("nav");

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 500) {
        nav.classList.add("bg-warning", "shadow");
    } else {
        nav.classList.remove("bg-warning", "shadow");
    }
});
var nav = document.querySelector("nav");

navbar = document.querySelector('.navbar').querySelectorAll('a');
console.log(navbar);

navbar.forEach(element => {
    element.addEventListener('click',
    )
})