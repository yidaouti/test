const messages = ["New customers 10% off with WELCOME", "Free shipping on orders over $50", "Join our loyalty program for rewards!"];
let index = 0;

function nextSlide() {
    index = (index + 1) % messages.length;
    document.getElementById("promo-text").textContent = messages[index];
}

function prevSlide() {
    index = (index - 1 + messages.length) % messages.length;
    document.getElementById("promo-text").textContent = messages[index];
}

document.addEventListener("DOMContentLoaded", function () {
    const menuLinks = document.querySelectorAll(".dropdown a");

    menuLinks.forEach((link) => {
        link.addEventListener("mouseenter", function () {
            const menuName = link.getAttribute("data-name");
            const mega_menus = document.querySelectorAll(`.mega-menu`);
            mega_menus.forEach((element) => {
                element.classList.add("hidden");
                if (element.dataset.name == menuName) {
                    element.classList.remove("hidden");
                    element.addEventListener("mouseleave", function () {
                        this.classList.add("hidden");
                    });
                }
            });
        });
    });
});

let hamburger = document.querySelector(".header__hamburger");
let hamburger_close_btn = document.querySelector(".mobile-menu .close-btn");
let links_mobile_menu = document.querySelectorAll("header .mobile-menu > ul > li");
let mobile_menu = document.querySelector(".mobile-menu");
let show_mobile_menu = () => {
    mobile_menu.classList.add("show");
    document.body.classList.add('no-scroll')
}
let hide_mobile_menu = () => {
    mobile_menu.classList.remove("show");
    document.body.classList.remove('no-scroll')
}
hamburger.addEventListener("click", function () {
    show_mobile_menu()
});
hamburger_close_btn.addEventListener("click", function () {
    hide_mobile_menu()

});

links_mobile_menu.forEach((link) => {
    let dropdown_menu = link.querySelector("ul");
    if (dropdown_menu) {
        link.addEventListener("click", function () {
            link.querySelector("a").classList.toggle("active");
        });
    }
});

let header = document.querySelector(".home header.header");
header.addEventListener("mouseenter", () => {
    header.classList.remove("transparent");
    header.addEventListener("mouseleave", () => {
        if (!isElementSticky(header)) {
            header.classList.add("transparent");
        }
    });
});
document.addEventListener("scroll", () => {
    if (isElementSticky(header)) {
        header.classList.remove("transparent");
    } else {
        header.classList.add("transparent");
    }
});

function isElementSticky(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= 0 && rect.bottom >= 0; // If top of the element is at or above 0, it's stuck
}

let touchStartX = 0;
let toucheEndX = 0;

function handleToucheStart(event) {
    touchStartX = event.changedTouches[0].screenX;
}
function handleToucheEnd(event) {
    toucheEndX = event.changedTouches[0].screenX;

    if (touchStartX - toucheEndX > 50) {
        hide_mobile_menu()
    }
    
    if (toucheEndX - touchStartX > 100) {
        show_mobile_menu()
    }
}
document.addEventListener("touchstart", handleToucheStart);
document.addEventListener("touchend", handleToucheEnd);


/* chakcha js */

document.addEventListener("DOMContentLoaded", function () {
    const firstSubMenu = document.querySelector(".sub-menu");
    if (firstSubMenu) {
        firstSubMenu.classList.add("first-dropdown");
    }
});
