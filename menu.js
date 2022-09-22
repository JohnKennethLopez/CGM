const primnav = document.querySelector(".nav");
const menu = document.querySelector(".menu");
menu.addEventListener("click", () => {
    const visibility = primnav.getAttribute("data-visible");
    if (visibility === "false") {
        primnav.setAttribute("data-visible", true);
    } else if (visibility === "true") {
        primnav.setAttribute("data-visible", false);
    }
});