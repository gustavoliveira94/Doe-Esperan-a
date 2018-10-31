var menu = document.querySelector(".menu");
window.onscroll = function () { fixed() };

function fixed() {
    if (menu.classList.contains("menu") && document.documentElement.scrollTop > 150) {
        menu.classList.add("fixed");
    } else {
        menu.classList.remove("fixed");
    }
}

$(function() {
    $('.menu a#scroll').click(function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 200
        }, 600);
        return false;
    });
});