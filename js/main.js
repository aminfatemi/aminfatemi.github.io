function onReady() {
    var e = document.querySelector(".main-navigation");
    document.querySelector(".js-extend-main-navigation").addEventListener("click", function(n) {
        n.preventDefault(), e.classList.toggle("extended")
    }, !1)
}
document.addEventListener("DOMContentLoaded", onReady);
