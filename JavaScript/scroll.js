window.addEventListener("scroll", function(){
    var navsc = this.document.querySelector(".nav");
    navsc.classList.toggle("sticky", window.scrollY > 0);
})